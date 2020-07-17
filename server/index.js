const http = require("http");
const express = require("express");
const socketio = require("socket.io");
const cors = require("cors");
const _ = require("lodash");
const userAgent = require("user-agent-parse");
// const { user } = require("./users");

// userAgent.parse('Mozilla/5.0 (Windows; U; Windows NT 5.1; en) AppleWebKit/526.9 (KHTML, like Gecko) Version/4.0dp1 Safari/526.8');

const router = require("./router");

const app = express();
const server = http.createServer(app);
const io = socketio(server);

app.use(cors());
app.use(router);

let connection = [];
const users = []

const hour = new Date().getHours();
io.on("connection", (socket) => {
  console.log('hshshsd');
  connection = [];
  connection.push({ live: true });
  socket.on("online", (data) => {
    console.log(socket.handshake.headers.referer);
    /**;
     * Online users and activity
     */
    if (data){
      // console.log(data);
      data.socketId = socket.id;
      data.referer = socket.handshake.headers.referer
      let userExists = users.find((user) => user.id === data.id);
      // console.log('user', get);
      if(!userExists){
        users.push({
          ...data,
          ...userAgent.parse(socket.handshake.headers["user-agent"]),
          referer: socket.handshake.headers.referer,
          time: new Date(),
        })
      }else{
        userExists = data
        userExists.on = true;
      };
      console.log(users);
      io.emit("online", users);
    }
  });
  // check message sending
  socket.on("new message", (data) => {
    const user = users && users.find((user) => user.id == data.response.receiver_id);
    console.log(data,user);
    user &&
      socket.broadcast
        .to(user.socketId)
        .emit("new message", data.response.message);
  });

  // Last 48 hours statistics

  socket.on("disconnect", () => {
    connection.push({ live: false });
    /**
     * remove user after 3sec inactivity
     */
    setTimeout(() => {
      if (connection.length > 1) {
        const index = users.find((user) => {
          if(user.socketId === socket.id){
            user.on = false;
          }
          return user;
        });
        users.indexOf(index !== -1) && users.splice(index, 1);
        io.emit("online", users);
      }
    }, 3000);
  });
});

server.listen(process.env.PORT || 1000, () =>
  console.log(`Server has started.`)
);
