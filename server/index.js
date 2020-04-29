const http = require("http");
const express = require("express");
const socketio = require("socket.io");
const cors = require("cors");
const _ = require("lodash");
var cron = require("node-cron");

const router = require("./router");

const app = express();
const server = http.createServer(app);
const io = socketio(server);

app.use(cors());
app.use(router);

let users = [];
let visits = [];
let last_48_users = [
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
  { timeLabel: "14:00-15:00", users: 0 },
];
const hour = new Date().getHours();
io.on("connection", (socket) => {
  // check online users
  socket.on("online", (data, callback) => {
    data.socketId = socket.id;
    visits.push(data);
    const user = users && users.find((user) => user.id === data.id);
    user ? (user.socketId = data.socketId) : users.push(data);
    io.emit("online", users);
    // update the last hour data only by replacing data

    last_48_users.pop();
    last_48_users.push({
      timeLabel: `${hour - 1}:00-${hour}:00`,
      users: users.length,
    });
    io.emit("test", last_48_users);
  });
  // check message sending
  socket.on("new message", (data, callback) => {
    const user =
      users && users.find((user) => user.id == data.response.receiver_id);
    user &&
      socket.broadcast
        .to(user.socketId)
        .emit("new message", data.response.message);
  });
  setInterval(tick, 1000 * 60 * 60);

  // Last 48 hours statistics

  function tick() {
    last_48_users.push({
      timeLabel: `${hour - 1}:00-${hour}:00`,
      users: users.length,
    });
    last_48_users.splice(0, 1);
    io.emit("test", last_48_users);
    console.log(last_48_users);
  }

  socket.on("disconnect", () => {
    users = users.filter((user) => user.socketId !== socket.id);
    io.emit("online", users);
    // io.emit("test", last_48_users);
  });
});

server.listen(process.env.PORT || 1000, () =>
  console.log(`Server has started.`)
);
