const http = require("http");
const express = require("express");
const socketio = require("socket.io");
const cors = require("cors");
const _ = require("lodash");

const router = require("./router");

const app = express();
const server = http.createServer(app);
const io = socketio(server);

app.use(cors());
app.use(router);

const users = [];

io.on("connect", (socket) => {
  socket.on("online", (data, callback) => {
    data.socketId = socket.id;
    const user = users && users.find((user) => user.id === data.id);
    user ? user.socketId = data.socketId : users.push(data);
    console.log(users)
  });
  socket.on("new message", (data, callback) => {
    const user = users && users.find((user) => user.id == data.response.receiver_id);
    user && socket.broadcast.to(user.socketId).emit( 'new message', data.response.message);
  });
});

server.listen(process.env.PORT || 1000, () =>
  console.log(`Server has started.`)
);
