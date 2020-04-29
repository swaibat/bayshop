<link href='<?= base_url('/assets/plugins/jvectormap/jquery-jvectormap-2.0.5.css') ?>'>
<link rel="stylesheet" href="http://jvectormap.com/css/jquery-jvectormap-2.0.3.css" type="text/css" media="screen" />
<script src="http://jvectormap.com/js/jquery-1.8.2.min.js"></script>
<script src="http://jvectormap.com/js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="http://jvectormap.com/js/jquery-jvectormap-world-mill-en.js"></script>
<style>
  #chart-bar {
    position: relative;
    margin-top: -38px;
  }

  table {
    border: 1px solid #ccc;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    width: 100%;
    table-layout: fixed;
    color: #4a4a4a;
  }

  table caption {
    font-size: 1.5em;
    margin: .5em 0 .75em;
  }

  table tr {
    border: 1px solid #ddd;
    padding: .35em;
  }

  table th,
  table td {
    padding: .625em;
    /* text-align: center; */
  }

  table th {
    font-size: .85em;
    letter-spacing: .1em;
    text-transform: uppercase;
  }

  @media screen and (max-width: 600px) {
    table {
      border: 0;
    }

    table caption {
      font-size: 1.3em;
    }

    table thead {
      border: none;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }

    table tr {
      border-bottom: 3px solid #ddd;
      display: block;
      margin-bottom: .625em;
    }

    table td {
      border-bottom: 1px solid #ddd;
      display: block;
      font-size: .8em;
      text-align: right;
    }

    table td::before {
      /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
      content: attr(data-label);
      float: left;
      font-weight: bold;
      text-transform: uppercase;
    }

    table td:last-child {
      border-bottom: 0;
    }
  }
</style>
<div id="wrapper">
  <div class="content-area">
    <div class="container-fluid">
      <div class="main row">
        <div class="d-flex flex-wrap w-100 bg-white rounded border mt-2 shadow-xs p-3">
          <!-- Orders -->
          <div class="col-md-3 border-right">
            <div class="d-flex w-100 flex-column box2">
              <div class="d-flex justify-content-between">
                <span class="d-flex">
                  <img height="35" class="mr-3" src="http://127.0.0.1:5500/app/Views/admin/pages/dashboard/clip.svg">
                  <span class="d-flex mt-2">
                    <h3 id="online" class="mb-1 mr-2"><?= $total_users ?></h3>
                    <h6>Orders</h6>
                  </span>
                </span>
                <div class="mt-2">
                  <small class="">Last 7 days</small>
                  <small class="d-flex ml-3">
                    <span class="text-success">
                      <ion-icon name="arrow-up"></ion-icon>
                    </span>
                    44
                  </small>
                </div>
              </div>
              <div class="btn-group mt-2">
                <span>
                  <small class="mb-0 ml-1 text-success">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </small>
                  <small class="mb-0">534 Done</small>
                </span>
                <span class="ml-2 border-left">
                  <small class="mb-0 ml-1 text-warning">
                    <ion-icon name="hourglass"></ion-icon>
                  </small>
                  <small class="mb-0">20 Pending</small>
                </span>
              </div>
            </div>
          </div>
          <!-- users -->
          <div class="col-md-3 border-right">
            <div class="d-flex w-100 flex-column box2">
              <div class="d-flex justify-content-between">
                <span class="d-flex">
                  <img height="35" class="mr-3" src="http://127.0.0.1:5500/app/Views/admin/pages/dashboard/users.svg">
                  <span class="d-flex mt-2">
                    <h3 id="online" class="mb-1 mr-2"><?= $total_users ?></h3>
                    <h6>Users</h6>
                  </span>
                </span>
                <div class="mt-2">
                  <small class="">Last 7 days</small>
                  <small class="d-flex ml-3">
                    <span class="text-success">
                      <ion-icon name="arrow-up"></ion-icon>
                    </span>
                    44
                  </small>
                </div>
              </div>
              <div class="btn-group mt-2">
                <span>
                  <small class="mb-0 ml-1 text-success">
                    <ion-icon name="ellipse"></ion-icon>
                  </small>
                  <small class="mb-0">534 Online</small>
                </span>
                <span class="ml-2 border-left">
                  <small class="mb-0 ml-1 text-secondary">
                    <ion-icon name="ellipse"></ion-icon>
                  </small>
                  <small class="mb-0">20 Offline</small>
                </span>
              </div>
            </div>
          </div>
          <!-- Products -->
          <div class="col-md-3 border-right">
            <div class="d-flex w-100 flex-column box2">
              <div class="d-flex justify-content-between">
                <span class="d-flex">
                  <img height="35" class="mr-3" src="http://127.0.0.1:5500/app/Views/admin/pages/dashboard/orders.svg">
                  <span class="d-flex mt-2">
                    <h3 id="online" class="mb-1 mr-2"><?= $total_products ?></h3>
                    <h6>Producsts</h6>
                  </span>
                </span>
                <div class="mt-2">
                  <small class="">Last 7 days</small>
                  <small class="d-flex ml-3">
                    <span class="text-danger">
                      <ion-icon name="arrow-up"></ion-icon>
                    </span>
                    44
                  </small>
                </div>
              </div>
              <div class="btn-group mt-2">
                <span>
                  <small class="mb-0 ml-1 text-success">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </small>
                  <small class="mb-0">534 Active</small>
                </span>
                <span class="ml-2 border-left">
                  <small class="mb-0 ml-1 text-warning">
                    <ion-icon name="hourglass"></ion-icon>
                  </small>
                  <small class="mb-0">20 Pending</small>
                </span>
              </div>
            </div>
          </div>
          <!-- Messages -->
          <div class="col-md-3 border-right">
            <div class="d-flex w-100 flex-column box2">
              <div class="d-flex justify-content-between">
                <span class="d-flex">
                  <img height="35" class="mr-3" src="http://127.0.0.1:5500/app/Views/admin/pages/dashboard/messages.svg">
                  <span class="d-flex mt-2">
                    <h3 id="online" class="mb-1 mr-2"><?= $total_products ?></h3>
                    <h6>Messages</h6>
                  </span>
                </span>
                <div class="mt-2">
                  <small class="">Last 7 days</small>
                  <small class="d-flex ml-3">
                    <span class="text-danger">
                      <ion-icon name="arrow-up"></ion-icon>
                    </span>
                    44
                  </small>
                </div>
              </div>
              <div class="btn-group mt-2">
                <span>
                  <small class="mb-0 ml-1 text-success">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </small>
                  <small class="mb-0">534 Read</small>
                </span>
                <span class="ml-2 border-left">
                  <small class="mb-0 ml-1 text-warning">
                    <ion-icon name="hourglass"></ion-icon>
                  </small>
                  <small class="mb-0">20 Un Read</small>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 mt-4 bg-white shadow-xs rounded border">
          <div class="btn-group btn-group-sm mt-2 mb-n2 btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-primary active" style="background:#0f0f0f;">
              <input type="radio" name="options" id="option1" autocomplete="off" checked> Users
            </label>
            <label class="btn" style="background:#a5a8a9;">
              <input type="radio" name="options" id="option2" autocomplete="off"> Orders
            </label>
          </div>
          <div id="wrapper">
            <div id="chart-area">
            </div>
            <div id="chart-bar">
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4 pr-0">
          <div class="bg-white shadow-xs rounded border p-2">
            <h6>Realtime</h6>
            <p class="d-flex"><span class="dot"></span>Updating live</p>
            <hr>
            <div class="col-12">
              <h6>4039</h6>
              <p>views . Last 48 hours</p>
              <div id="chart-5"> </div>
            </div>
          </div>
        </div>

        <div class="col-md-12 mt-4 bg-white p-3 shadow-xs rounded">
          <h6>Online Users</h6>
          <table>
            <!-- <thead>
              <tr>
                <th scope="col">Country</th>
                <th scope="col">username</th>
                <th scope="col">info</th>
                <th scope="col">info</th>
              </tr>
            </thead> -->
            <tbody>
              <tr>
                <td data-label="Account">
                  <img height="25" width="35" class="rounded" src="http://localhost:8888/assets/shared/images/user.svg" alt="user">
                  <img height="25" width="35" class="rounded border" src="https://restcountries.eu/data/uga.svg" alt="" srcset="">
                  <span class="ml-2">Rumbiiha Swaibu</span>
                </td>
                <td data-label="Amount" class="text-center" style="font-size: large;">
                  <ion-icon name="logo-chrome"></ion-icon>
                  <ion-icon name="logo-android"></ion-icon>
                  <ion-icon name="phone-portrait"></ion-icon>
                </td>
                <td>
                  <ion-icon name="document-text"></ion-icon> dashboard
                </td>
                <td id="time">
                  <span class="hours"></span>:<span class="minutes"></span>:<span class="seconds"></span>
                </td>
                <td class="text-right" id="time">
                  2 <ion-icon name="stats-chart"></ion-icon>
                  <span>
                    0 <ion-icon name="chatbox"></ion-icon>
                  </span>
                </td>
              </tr>
              <tr>
                <td data-label="Account">
                  <img height="25" width="35" class="rounded" src="http://localhost:8888/assets/shared/images/user.svg" alt="user">
                  <img height="25" width="35" class="rounded border" src="https://restcountries.eu/data/usa.svg" alt="" srcset="">
                  <span class="ml-2">Rumbiiha Swaibu</span>
                </td>
                <td data-label="Amount" class="text-center" style="font-size: large;">
                  <ion-icon name="logo-firefox"></ion-icon>
                  <ion-icon name="logo-apple"></ion-icon>
                  <ion-icon name="desktop-outline"></ion-icon>
                </td>
                <td>
                  <ion-icon name="document-text"></ion-icon> dashboard
                </td>
                <td id="time">
                  <span class="hours"></span>:<span class="minutes"></span>:<span class="seconds"></span>
                </td>
                <td class="text-right" id="time">
                  2 <ion-icon name="stats-chart"></ion-icon>
                  <span>
                    0 <ion-icon name="chatbox"></ion-icon>
                  </span>
                </td>
              </tr>
              <tr>
                <td data-label="Account">
                  <img height="25" width="35" class="rounded" src="http://localhost:8888/assets/shared/images/user.svg" alt="user">
                  <img height="25" width="35" class="rounded border" src="https://restcountries.eu/data/rwa.svg" alt="" srcset="">
                  <span class="ml-2">Rumbiiha Swaibu</span>
                </td>
                <td data-label="Amount" class="text-center" style="font-size: large;">
                  <ion-icon name="logo-firefox"></ion-icon>
                  <ion-icon name="logo-windows"></ion-icon>
                  <ion-icon name="phone-portrait"></ion-icon>
                </td>
                <td>
                  <ion-icon name="document-text"></ion-icon> dashboard
                </td>
                <td id="time">
                  <span class="hours"></span>:<span class="minutes"></span>:<span class="seconds"></span>
                </td>
                <td class="text-right" id="time">
                  2 <ion-icon name="stats-chart"></ion-icon>
                  <span>
                    0 <ion-icon name="chatbox"></ion-icon>
                  </span>
                </td>
              </tr>
              <tr>
                <td data-label="Account">
                  <img height="25" width="35" class="rounded" src="http://localhost:8888/assets/shared/images/user.svg" alt="user">
                  <img height="25" width="35" class="rounded border" src="https://restcountries.eu/data/mex.svg" alt="" srcset="">
                  <span class="ml-2">Rumbiiha Swaibu</span>
                </td>
                <td data-label="Amount" class="text-center" style="font-size: large;">
                  <ion-icon name="logo-firefox"></ion-icon>
                  <ion-icon name="logo-apple"></ion-icon>
                  <ion-icon name="desktop-outline"></ion-icon>
                </td>
                <td>
                  <ion-icon name="document-text"></ion-icon> dashboard
                </td>
                <td id="time">
                  <span class="hours"></span>:<span class="minutes"></span>:<span class="seconds"></span>
                </td>
                <td class="text-right" id="time">
                  2 <ion-icon name="stats-chart"></ion-icon>
                  <span>
                    0 <ion-icon name="chatbox"></ion-icon>
                  </span>
                </td>
              </tr>
              <tr>
                <td data-label="Account">
                  <img height="25" width="35" class="rounded border" src="http://localhost:8888/assets/shared/images/user.svg" alt="user">
                  <img height="25" width="35" class="rounded border" src="https://restcountries.eu/data/rus.svg" alt="" srcset="">
                  <span class="ml-2">Rumbiiha Swaibu</span>
                </td>
                <td data-label="Amount" class="text-center" style="font-size: large;">
                  <ion-icon name="logo-firefox"></ion-icon>
                  <ion-icon name="logo-windows"></ion-icon>
                  <ion-icon name="desktop-outline"></ion-icon>
                </td>
                <td>
                  <ion-icon name="document-text"></ion-icon> dashboard
                </td>
                <td id="time">
                  <span class="hours"></span>:<span class="minutes"></span>:<span class="seconds"></span>
                </td>
                <td class="text-right" id="time">
                  2 <ion-icon name="stats-chart"></ion-icon>
                  <span>
                    0 <ion-icon name="chatbox"></ion-icon>
                  </span>
                </td>
              </tr>
              <tr>
                <td data-label="Account">
                  <img height="25" width="35" class="rounded" src="http://localhost:8888/assets/shared/images/user.svg" alt="user">
                  <img height="25" width="35" class="rounded border" src="https://restcountries.eu/data/ken.svg" alt="" srcset="">
                  <span class="ml-2">Rumbiiha Swaibu</span>
                </td>
                <td data-label="Amount" class="text-center" style="font-size: large;">
                  <ion-icon name="logo-firefox"></ion-icon>
                  <ion-icon name="logo-apple"></ion-icon>
                  <ion-icon name="desktop-outline"></ion-icon>
                </td>
                <td>
                  <ion-icon name="document-text"></ion-icon> dashboard
                </td>
                <td id="time">
                  <span class="hours"></span>:<span class="minutes"></span>:<span class="seconds"></span>
                </td>
                <td class="text-right" id="time">
                  2 <ion-icon name="stats-chart"></ion-icon>
                  <span>
                    0 <ion-icon name="chatbox"></ion-icon>
                  </span>
                </td>
                <script>
                  var sec = -1;

                  function pad(val) {
                    return val > 9 ? val : "0" + val;
                  }
                  setInterval(function() {
                    $(".seconds").html(pad(++sec % 60));
                    $(".minutes").html(pad(parseInt(sec / 60, 10) % 60));
                    $(".hours").html(pad(parseInt(sec / 3600, 10)));
                  }, 1000);
                </script>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="d-flex w-100 flex-wrap mt-4">
          <div class="col-md-8 bg-white rounded border">
            <div class='world' id="world-map" style="width: 100%; height: 350px"></div>
            <script>
              $(function() {
                $('#world-map').vectorMap();
              });
              var visitorsData = {
                "AF": 16,
                "AL": 11,
                "DZ": 158,
                "PK": 158,
              };
              $('#world-map').vectorMap({
                map: 'world_mill_en',
                series: {
                  regions: [{
                    values: visitorsData,
                    scale: ['#e9887c', '#dd4b39'],
                    normalizeFunction: 'polynomial'
                  }]
                },
                onRegionTipShow: function(e, el, code) {
                  el.html(el.html() + ' (Visitors - ' + visitorsData[code] + ')');
                }
              });
            </script>
          </div>
          <div class="col-md-4 bg-white">

            <div id="radialBarBottom"></div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>














<script>
  var data = generateDayWiseTimeSeries(new Date("22 Apr 2017").getTime(), 115, {
    min: 30,
    max: 90
  });
  var options1 = {
    chart: {
      id: "chart2",
      type: "area",
      height: 230,
      foreColor: "#ccc",
      toolbar: {
        autoSelected: "pan",
        show: false
      }
    },
    colors: ["#0F0F0F"],
    stroke: {
      width: 3
    },
    grid: {
      borderColor: "#555",
      clipMarkers: false,
      yaxis: {
        lines: {
          show: false
        }
      }
    },
    dataLabels: {
      enabled: false
    },
    fill: {
      gradient: {
        enabled: true,
        opacityFrom: 0.55,
        opacityTo: 0
      }
    },
    markers: {
      size: 5,
      colors: ["#a5a8a9"],
      strokeColor: "#0F0F0F",
      strokeWidth: 3
    },
    series: [{
      data: data
    }],
    tooltip: {
      theme: "dark"
    },
    xaxis: {
      type: "datetime"
    },
    yaxis: {
      min: 0,
      tickAmount: 4
    }
  };

  var chart1 = new ApexCharts(document.querySelector("#chart-area"), options1);

  chart1.render();

  var options2 = {
    chart: {
      id: "chart1",
      height: 130,
      type: "bar",
      foreColor: "#ccc",
      brush: {
        target: "chart2",
        enabled: true
      },
      selection: {
        enabled: true,
        fill: {
          color: "#fff",
          opacity: 0.4
        },
        xaxis: {
          min: new Date("27 Jul 2017 10:00:00").getTime(),
          max: new Date("14 Aug 2017 10:00:00").getTime()
        }
      }
    },
    colors: ["#0F0F0F"],
    series: [{
      data: data
    }],
    stroke: {
      width: 2
    },
    grid: {
      borderColor: "#444"
    },
    markers: {
      size: 0
    },
    xaxis: {
      type: "datetime",
      tooltip: {
        enabled: false
      }
    },
    yaxis: {
      tickAmount: 2
    }
  };

  var chart2 = new ApexCharts(document.querySelector("#chart-bar"), options2);

  chart2.render();

  function generateDayWiseTimeSeries(baseval, count, yrange) {
    var i = 0;
    var series = [];
    while (i < count) {
      var x = baseval;
      var y =
        Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

      series.push([x, y]);
      baseval += 86400000;
      i++;
    }
    return series;
  }
</script>
<script src="<?= base_url('assets/admin/js/dashboard.js') ?>"></script>

<script>
  socket.on('online', function(users) {
    $("#onlinef").text(users.length);
  })

  socket.on('test', function(data) {
    chart7.updateSeries([{
      data: data.map((e) => e.users)
    }])
    chart7.updateOptions({
      labels: data.map((e) => e.timeLabel),
    })
  })

  $(function() {
    $('#map').vectorMap({
      map: 'world_mill'
    });
  });
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5a84b77bd7591465c707ad76/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->
