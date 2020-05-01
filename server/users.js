let users = [];

const user = {
  getUserById(data) {
    return users.find((user) => user.id === data.id);
  },

  getUserBySocketId(socket) {
    return users.find((user) => user.socketId === socket.id);
  },

  add(data, socket, userAgent) {
    users.push({
      ...data,
      ...userAgent.parse(socket.handshake.headers["user-agent"]),
      referer: socket.handshake.headers.referer,
      time: new Date(),
    });
  },
};

module.exports = { user, users };
