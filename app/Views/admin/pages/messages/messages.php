<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css">
<style>
    .contact * {
        pointer-events: none;
    }
</style>
<div id="frame" class="shadow-xs">
    <div id="sidepanel">
        <div id="profile">
            <div class="wrap">
                <img id="profile-img" src="http://emilcarlsson.se/assets/mikeross.png" class="online" alt="" />
                <span class="d-flex flex-column ml-3">
                    <span class="ml-2">Mike Ross</span>
                    <small class="ml-2">Online</small>
                </span>

                <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
                <div id="status-options">
                    <ul>
                        <li id="status-online" class="active">
                            <span class="status-circle"></span>
                            <p>Online</p>
                        </li>
                        <li id="status-away">
                            <span class="status-circle"></span>
                            <p>Away</p>
                        </li>
                        <li id="status-offline">
                            <span class="status-circle"></span>
                            <p>Busy</p>
                        </li>
                        <li id="status-offline">
                            <span class="status-circle"></span>
                            <p>Offline</p>
                        </li>
                    </ul>
                </div>
                <div id="expanded">
                    <label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
                    <input name="twitter" type="text" value="mikeross" />
                    <label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
                    <input name="twitter" type="text" value="ross81" />
                    <label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
                    <input name="twitter" type="text" value="mike.ross" />
                </div>
            </div>
        </div>
        <div id="search" class="bg-light">
            <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
            <input type="text" placeholder="Search contacts..." />
        </div>
        <div id="contacts">
            <ul class="pl-0 ">
                <?php foreach ($users as $user) { ?>
                    <li class="contact" id="<?= $user['id'] ?>">
                        <div class="wrap">
                            <span class="contact-status online"></span>
                            <img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                            <div class="meta">
                                <p class="name"><?= $user['username'] ?></p>
                                <p class="preview"><?= $user['message'] ?></p>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div id="bottom-bar" class="shadow-sm-top">
            <button id="addcontact">
                <i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>
                <span>Add contact</span>
            </button>
            <button id="settings">
                <i class="fa fa-cog fa-fw" aria-hidden="true"></i>
                <span>Settings</span>
            </button>
        </div>
    </div>
    <div class="content">
        <div class="contact-profile">
            <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
            <p>Harvey Specter</p>
            <div class="social-media">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
        </div>
        <div class="messages d-flex justify-content-between">
            <div class="d-flex flex-column text-center w-100">
                <span class="my-auto">
                    <h3>No Chat</h3>
                    <p>Start a new conversation</p>
                </span>
            </div>
        </div>
        <div class="message-input">
            <form id="chat-form" action="<?= base_url('admin/messages/create') ?>" method="post" class="wrap">
                <input class="text-secondary" name="message" type="text" placeholder="Write your message..." />
                <i class="fa fa-paperclip attachment" aria-hidden="true"></i>
                <button type="submit" class="submit">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>
</div>
<script>
    socket.on('new message', function(msg) {
        $(
            '<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' +
            msg +
            "</p></li>"
        ).appendTo($(".messages ul"));
    });
    $(".messages").animate({
        scrollTop: $(document).height()
    }, "fast");

    $("#profile-img").click(function() {
        $("#status-options").toggleClass("active");
    });

    $(".expand-button").click(function() {
        $("#profile").toggleClass("expanded");
        $("#contacts").toggleClass("expanded");
    });

    $("#status-options ul li").click(function() {
        $("#profile-img").removeClass();
        $("#status-online").removeClass("active");
        $("#status-away").removeClass("active");
        $("#status-offline").removeClass("active");
        $("#status-offline").removeClass("active");
        $(this).addClass("active");

        if ($("#status-online").hasClass("active")) {
            $("#profile-img").addClass("online");
        } else if ($("#status-away").hasClass("active")) {
            $("#profile-img").addClass("away");
        } else if ($("#status-offline").hasClass("active")) {
            $("#profile-img").addClass("offline");
        } else if ($("#status-offline").hasClass("active")) {
            $("#profile-img").addClass("offline");
        } else {
            $("#profile-img").removeClass();
        }

        $("#status-options").removeClass("active");
    });

    // get user chat
    const sessionUser = <?= $_SESSION['user'] ?>;
    let activeChat;
    $('#contacts .contact').click(evt => {
        activeChat = evt.target.id;
        $.ajax({
            type: "GET",
            url: `messages/user/${evt.target.id}`,
        }).done(function(response) {
            $(".messages").empty();
            $(`
                <ul class="chat-content">
                ${response && response.messages.map(e =>{
                        return (`<li class=${sessionUser.id === (e.sender_id || e.receiver_id) ? "replies" : "sent"}>
                            <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                            <p>
                                ${e.message}
                            </p>
                        </li>`
                        )})
                }
                </ul>
                
        `).appendTo($(".messages"));
        }).fail(function(err) {
            Toastify({
                text: 'Error operation failed',
                duration: 3000,
                gravity: "top",
                position: 'right',
                backgroundColor: '#FFA500',
                stopOnFocus: true,
            }).showToast();
        });
    })

    // chat form
    $("#chat-form").submit(function(event) {
        event.preventDefault();
        const data = new FormData($('#chat-form')[0]);
        data.append('sender_id', sessionUser.id)
        data.append('receiver_id', activeChat)
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: $(this).attr("action"),
            data: data,
            processData: false,
            contentType: false,
            cache: false,
        }).done(function(response) {
            socket.emit('new message', {
                response
            });
        }).fail(function(err) {
            Toastify({
                text: 'Error operation failed',
                duration: 3000,
                backgroundColor: '#FFA500',
                stopOnFocus: true,
            }).showToast();
        });
        newMessage();

    });

    $(window).on("keydown", function(e) {
        if (e.which == 13) {
            newMessage();
            return false;
        }
    });
    // CREATE A NEW MESSAGE
    var docHeight = $(document).height();

    function newMessage() {
        message = $(".message-input input").val();
        if ($.trim(message) == "") {
            return false;
        }
        $(
            '<li class="replies"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' +
            message +
            "</p></li>"
        ).appendTo($(".messages ul"));
        $(".message-input input").val(null);
        $(".contact.active .preview").html("<span>You: </span>" + message);
        $(".messages").animate({
            scrollTop: docHeight + 93
        }, "fast");
    }
</script>
