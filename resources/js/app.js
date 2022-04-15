require("./bootstrap");

Echo.private("chat").listen("MessageChat", (e) => {
    this.messages.push({
        message: e.message.message,
        user: e.user,
    });
});
