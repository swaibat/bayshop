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

// socket.on('test', function(data) {
//   chart7.updateSeries([{
//     data: data.map((e) => e.users)
//   }])
//   chart7.updateOptions({
//     labels: data.map((e) => e.timeLabel),
//   })
// })

/**
 * Displaying visitors by country
 * @param {log} obj - pass in user logs data to display visitors by country
 * @return {chart,map} renders the map and chart to display users
 */

function getVisitorsByLocation(data) {
  $("#world-map").vectorMap({
    map: "world_mill_en",
    backgroundColor: "#a5a7a9",
    series: {
      regions: [
        {
          values: data,
          scale: ["#e3e3e3", "#0f0f0f"],
          normalizeFunction: "polynomial",
        },
      ],
    },
    onRegionTipShow: function (e, el, code) {
      el.html(el.html() + " (Visitors - " + data[code] + ")");
    },
  });

  var options = {
    series: [
      {
        data: Object.values(data),
      },
    ],
    chart: {
      width: "100%",
      type: "bar",
      height: 400,
    },
    plotOptions: {
      bar: {
        horizontal: true,
      },
    },
    dataLabels: {
      enabled: false,
    },
    xaxis: {
      categories: Object.keys(data),
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
}

/**
 * using Radial chat to Display users devices
 * @param {object} obj - consumes object of user logs
 * @return {chart} returns and renders Chart on the dashboard
 */

function getDevicesOfUsers(data) {
  var optionsCircle4 = {
    chart: {
      type: "radialBar",
      height: 350,
      width: 380,
    },
    plotOptions: {
      radialBar: {
        size: undefined,
        inverseOrder: true,
        hollow: {
          margin: 5,
          size: "48%",
          background: "transparent",
        },
        track: {
          show: false,
        },
        startAngle: -180,
        endAngle: 180,
      },
    },
    stroke: {
      lineCap: "round",
    },
    series: Object.values(data),
    colors: ["#C0C0C0", "#696969", "#0f0f0f"],
    labels: Object.keys(data),
    legend: {
      show: true,
      floating: true,
      position: "right",
      offsetX: 70,
      offsetY: 240,
    },
  };

  var chartCircle4 = new ApexCharts(
    document.querySelector("#radialBarBottom"),
    optionsCircle4
  );
  chartCircle4.render();
}
