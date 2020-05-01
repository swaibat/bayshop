const http = require("http");
const express = require("express");
const socketio = require("socket.io");
const cors = require("cors");
const _ = require("lodash");
var cron = require("node-cron");
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
  connection = [];
  connection.push({ live: true });
  socket.on("online", (data) => {
    /**
     * Online users and activity
     */
    data.socketId = socket.id;
    const get = user.getUserById(data);
    get ? (get.socketId = data.socketId) : user.add(data, socket, userAgent);
    io.emit("online", users);

    last_48_users.pop();
    last_48_users.push({
      timeLabel: `${hour - 1}:00-${hour}:00`,
      users: users.length,
    });
    io.emit("test", last_48_users);
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

  cron.schedule(
    "00 00 */1 * * * *",
    () => {
      last_48_users.push({
        timeLabel: `${hour - 1}:00-${hour}:00`,
        users: users.length,
      });
      last_48_users.splice(0, 1);
      io.emit("test", last_48_users);
      console.log(last_48_users);
    },
    {
      scheduled: true,
    }
  );

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
