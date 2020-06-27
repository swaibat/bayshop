const http = require("http");
const express = require("express");
const socketio = require("socket.io");
const cors = require("cors");
const _ = require("lodash");
const userAgent = require("user-agent-parse");
const { user, users } = require("./users");

// userAgent.parse('Mozilla/5.0 (Windows; U; Windows NT 5.1; en) AppleWebKit/526.9 (KHTML, like Gecko) Version/4.0dp1 Safari/526.8');

const router = require("./router");

const app = express();
const server = http.createServer(app);
const io = socketio(server);

app.use(cors());
app.use(router);

let connection = [];
let last_48_users = [];
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
      data.socketId = socket.id;
      data.referer = socket.handshake.headers.referer
      const get = user.getUserById(data);
      get ? (get.socketId = data.socketId) : user.add(data, socket, userAgent);
      console.log(users);
      io.emit("online", users);
    }else{
      
    }
  });
  // check message sending
  socket.on("new message", (data) => {
    const user =
      users && users.find((user) => user.id == data.response.receiver_id);
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
        const index = user.getUserBySocketId(socket);
        users.indexOf(index !== -1) && users.splice(index, 1);
        io.emit("online", users);
      }
    }, 3000);
  });
});

server.listen(process.env.PORT || 1000, () =>
  console.log(`Server has started.`)
);
