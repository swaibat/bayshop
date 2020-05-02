let users = [];

const user = {
  getUserById(data) {
    return users.find((user) => {
      if(user.id === data.id){
        user.socketId = data.socketId;
        user.on = true;
      }
      return user
    });
  },

  getUserBySocketId(socket) {
    return users.find((user) => {
      if(user.socketId === socket.id){
        user.on = false;
      }
      return user;
    });
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
