<div class="card p-3 shadow-xs">
    <div class="card-header d-flex justify-content-between align-items-center p-0">
        <div class="btn-group">
            <button class="btn bg-success mb-n4" style="width:1rem; height:1rem;"></button>
            <button class="btn">Active Visitors 1/1</button>
        </div>
        <span>
            <ion-icon name="chevron-down-outline"></ion-icon>
        </span>
    </div>
    <div class="row">
        <div class="col-sm-12">
        <table id="table" class="table"></table>
        </div>
    </div>
</div>

<div class="card p-3 shadow-xs">
    <div class="card-header d-flex justify-content-between align-items-center p-0">
        <div class="btn-group">
            <button class="btn bg-warning mb-n4" style="width:1rem; height:1rem;"></button>
            <button class="btn">Idle Visitors 1/1</button>
        </div>
        <span>
            <ion-icon name="chevron-down-outline"></ion-icon>
        </span>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table " style="width:100%">
                <tbody>
                    <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                    </tr>
                    <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                    </tr>
                    <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                    </tr>
                    <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                    </tr>
            </table>

        </div>
    </div>
</div>
<script>
console.log("hello world")
    socket.on("online", function (users) {
  // $("#online-users").text(users.length);
  // $("#ofline-users").text(JSON.parse($("#users").text()) - users.length);
  console.log(users);
  $("#table").empty();
  $(`<tbody>
              ${users.map(
                (user) => `<tr>
              <td data-label="Account">
                <img height="25" width="35" class="rounded" src="http://localhost:8888/assets/shared/images/user.svg" alt="user">
                <img height="25" width="35" class="rounded border" src="https://restcountries.eu/data/uga.svg" alt="" srcset="">
                <span class="ml-2">${user.username}</span>
              </td>
              <td data-label="Amount" class="text-center" style="font-size: large;">
                <ion-icon data-toggle="tooltip" data-placement="top" title="Tooltip on top" name="logo-${user.name
                  .split(" ")[0]
                  .toLocaleLowerCase()}"></ion-icon>
                <ion-icon data-toggle="tooltip" data-placement="top" title="Tooltip on top" name="logo-${
                  user.full.match("Mac") && "apple"
                }"></ion-icon>
                <ion-icon name="${
                  (user.device_type === "desktop" && "desktop-outline") ||
                  (user.device_type === "mobile" && "phone-portrait") ||
                  (user.device_type === "tablet" && "tablet-portrait")
                }"></ion-icon>
              </td>
              <td>
                <ion-icon name="document-text"></ion-icon> <a href="${
                  user.referer
                }">${user.pageTitle}</a>
              </td>
              <td class='time'>
                <h6 id="time-${user.id}"></h6>
              </td>
              <td class="text-right" id="time">
                2 <ion-icon name="stats-chart"></ion-icon>
                <span>
                  0 <ion-icon name="chatbox"></ion-icon>
                </span>
              </td>
              </tr>
              ${setInterval(function () {
                date_future = new Date(user.time);
                date_now = new Date();

                seconds = Math.floor((date_now - date_future) / 1000);
                minutes = Math.floor(seconds / 60);
                hours = Math.floor(minutes / 60);
                days = Math.floor(hours / 24);

                hours = hours - days * 24;
                minutes = minutes - days * 24 * 60 - hours * 60;
                seconds =
                  seconds -
                  days * 24 * 60 * 60 -
                  hours * 60 * 60 -
                  minutes * 60;
                seconds =
                  seconds.toString().length === 2 ? seconds : "0" + seconds;
                minutes =
                  minutes.toString().length === 2 ? minutes : "0" + minutes;
                $(`#time-${user.id}`).text(
                  `${hours} : ${minutes} : ${seconds}`
                );
              }, 1000)}
              `
              )}
      </tbody>`).appendTo($("#table"));
});

</script>