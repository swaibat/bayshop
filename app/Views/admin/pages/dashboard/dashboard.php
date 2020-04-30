<link href='<?= base_url('/assets/plugins/jvectormap/jquery-jvectormap-2.0.5.css') ?>'>
<link rel="stylesheet" href="http://jvectormap.com/css/jquery-jvectormap-2.0.3.css" type="text/css" media="screen" />
<script src="http://jvectormap.com/js/jquery-1.8.2.min.js"></script>
<script src="http://jvectormap.com/js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="http://jvectormap.com/js/jquery-jvectormap-world-mill-en.js"></script>
<div id="wrapper">
  <div class="content-area">
    <div class="container-fluid">
      <div class="main row">
        <div class="d-flex flex-wrap w-100 bg-white rounded border mt-2 shadow-xs p-3">
          <!-- Orders -->
          <?= stat_card([
            'name'      => "Orders",
            "data"      => $total_users,
            "last_7"    => 49,
            "footer1"  => '546 Complete',
            "footer2"  => '20  Pending',
            'icon'      => "data:image/svg+xml,%3Csvg aria-hidden='true' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512'%3E%3Cg%3E%3Cpath fill='%23a5a8a9' d='M336 64h-80a64 64 0 0 1 64 64H64a64 64 0 0 1 64-64H48a48 48 0 0 0-48 48v352a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V112a48 48 0 0 0-48-48zM96 424a24 24 0 1 1 24-24 23.94 23.94 0 0 1-24 24zm0-96a24 24 0 1 1 24-24 23.94 23.94 0 0 1-24 24zm0-96a24 24 0 1 1 24-24 23.94 23.94 0 0 1-24 24zm224 176a8 8 0 0 1-8 8H168a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h144a8 8 0 0 1 8 8zm0-96a8 8 0 0 1-8 8H168a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h144a8 8 0 0 1 8 8zm0-96a8 8 0 0 1-8 8H168a8 8 0 0 1-8-8v-16a8 8 0 0 1 8-8h144a8 8 0 0 1 8 8z'%3E%3C/path%3E%3Cpath d='M96 376a24 24 0 1 0 24 24 23.94 23.94 0 0 0-24-24zm0-96a24 24 0 1 0 24 24 23.94 23.94 0 0 0-24-24zm0-96a24 24 0 1 0 24 24 23.94 23.94 0 0 0-24-24zM256 64a64 64 0 0 0-128 0 64 64 0 0 0-64 64h256a64 64 0 0 0-64-64zm-64 24a24 24 0 1 1 24-24 23.94 23.94 0 0 1-24 24z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E%0A",
          ]) ?>
          <!-- users -->
          <?= stat_card([
            'name'      => "Users",
            "data"      => $total_users,
            "last_7"    => 12,
            "footer1"  => '546 Online',
            "footer2"  => '20  Offline',
            'icon'     => "data:image/svg+xml,%3Csvg aria-hidden='true' focusable='false' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512'%3E%3Cg %3E%3Cpath d='M96 224a64 64 0 1 0-64-64 64.06 64.06 0 0 0 64 64zm480 32h-64a63.81 63.81 0 0 0-45.1 18.6A146.27 146.27 0 0 1 542 384h66a32 32 0 0 0 32-32v-32a64.06 64.06 0 0 0-64-64zm-512 0a64.06 64.06 0 0 0-64 64v32a32 32 0 0 0 32 32h65.9a146.64 146.64 0 0 1 75.2-109.4A63.81 63.81 0 0 0 128 256zm480-32a64 64 0 1 0-64-64 64.06 64.06 0 0 0 64 64z'%3E%3C/path%3E%3Cpath fill='%23a5a8a9' d='M396.8 288h-8.3a157.53 157.53 0 0 1-68.5 16c-24.6 0-47.6-6-68.5-16h-8.3A115.23 115.23 0 0 0 128 403.2V432a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48v-28.8A115.23 115.23 0 0 0 396.8 288zM320 256a112 112 0 1 0-112-112 111.94 111.94 0 0 0 112 112z' %3E%3C/path%3E%3C/g%3E%3C/svg%3E%0A",
          ]) ?>

          <!-- Products -->
          <?= stat_card([
            'name'      => "Products",
            "data"      => $total_products,
            "last_7"    => 64,
            "footer1"  => '534 Active',
            "footer2"  => '20 Pending',
            'icon'     => "data:image/svg+xml,%3Csvg aria-hidden='true' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'%3E%3Cg%3E%3Cpath fill='%23a5a8a9' d='M552 64H159.21l52.36 256h293.15a24 24 0 0 0 23.4-18.68l47.27-208a24 24 0 0 0-18.08-28.72A23.69 23.69 0 0 0 552 64zM444.42 196.48l-67.83 72a12.27 12.27 0 0 1-17.18 0l-67.83-72c-7.65-7.55-2.23-20.48 8.59-20.48h43.54v-52a12.07 12.07 0 0 1 12.14-12h24.29a12.07 12.07 0 0 1 12.15 12v52h43.54c10.82 0 16.24 12.93 8.59 20.48z' class='secondary'%3E%3C/path%3E%3Cpath d='M504.42 405.6l5.52-24.28a24 24 0 0 0-23.4-29.32H218.12L150 19.19A24 24 0 0 0 126.53 0H24A24 24 0 0 0 0 24v16a24 24 0 0 0 24 24h69.88l70.25 343.43a56 56 0 1 0 67.05 8.57h209.64a56 56 0 1 0 63.6-10.4zm-145-137.12a12.27 12.27 0 0 0 17.18 0l67.83-72c7.65-7.55 2.23-20.48-8.59-20.48h-43.55v-52a12.07 12.07 0 0 0-12.15-12h-24.29a12.07 12.07 0 0 0-12.14 12v52h-43.54c-10.82 0-16.24 12.93-8.59 20.48z' class='primary'%3E%3C/path%3E%3C/g%3E%3C/svg%3E%0A",
          ]) ?>

          <!-- Messages -->
          <?= stat_card([
            'name'      => "Messages",
            "data"      => $total_products,
            "last_7"    => 343,
            "footer1"  => '534 sent',
            "footer2"  => '20 received',
            'icon'     => "data:image/svg+xml,%3Csvg aria-hidden='true' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' %3E%3Cg%3E%3Cpath fill='%23a5a8a9' d='M64,257.6,227.9,376a47.72,47.72,0,0,0,56.2,0L448,257.6V96a32,32,0,0,0-32-32H96A32,32,0,0,0,64,96ZM160,160a16,16,0,0,1,16-16H336a16,16,0,0,1,16,16v16a16,16,0,0,1-16,16H176a16,16,0,0,1-16-16Zm0,80a16,16,0,0,1,16-16H336a16,16,0,0,1,16,16v16a16,16,0,0,1-16,16H176a16,16,0,0,1-16-16Z' class='secondary'%3E%3C/path%3E%3Cpath d='M352,160a16,16,0,0,0-16-16H176a16,16,0,0,0-16,16v16a16,16,0,0,0,16,16H336a16,16,0,0,0,16-16Zm-16,64H176a16,16,0,0,0-16,16v16a16,16,0,0,0,16,16H336a16,16,0,0,0,16-16V240A16,16,0,0,0,336,224ZM329.4,41.4C312.6,29.2,279.2-.3,256,0c-23.2-.3-56.6,29.2-73.4,41.4L152,64H360ZM64,129c-23.9,17.7-42.7,31.6-45.6,34A48,48,0,0,0,0,200.7v10.7l64,46.2Zm429.6,34c-2.9-2.3-21.7-16.3-45.6-33.9V257.6l64-46.2V200.7A48,48,0,0,0,493.6,163ZM256,417.1a80,80,0,0,1-46.9-15.2L0,250.9V464a48,48,0,0,0,48,48H464a48,48,0,0,0,48-48V250.9l-209.1,151A80,80,0,0,1,256,417.1Z' class='primary'%3E%3C/path%3E%3C/g%3E%3C/svg%3E%0A",
          ]) ?>
        </div>

        <!-- main stats Chart -->
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

        <!-- real time chats -->
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

        <!-- online users table -->
        <div class="col-md-12 mt-4 bg-white p-3 shadow-xs rounded">
          <h6>Online Users</h6>
          <table id="table"></table>
        </div>

        <!-- map and radial area -->
        <div class="d-flex w-100 flex-wrap mt-4">
          <div class="col-md-8 bg-white rounded border">
            <div class='world' id="world-map" style="width: 100%; height: 350px"></div>
          </div>
          <div class="col-md-4 bg-white">
            <div id="radialBarBottom"></div>
          </div>
        </div>
      </div>
      <!-- end of starts -->
    </div>
  </div>
</div>
<?= script_tag('assets/admin/js/map.js'); ?>
<?= script_tag('assets/admin/js/watch.js'); ?>
<?= script_tag('assets/plugins/apexCharts/apexchats.js'); ?>
<?= script_tag('assets/admin/js/main.chart.js'); ?>
<script src="<?= base_url('assets/admin/js/dashboard.js') ?>"></script>

<script>
  socket.on('online', function(users) {
    $("#online-users").text(users.length);
    $("#ofline-users").text(JSON.parse($("#users").text()) - users.length);
    $("#table").empty();
    $(`<tbody>
                ${users.map(user =>(`<tr>
                <td data-label="Account">
                  <img height="25" width="35" class="rounded" src="http://localhost:8888/assets/shared/images/user.svg" alt="user">
                  <img height="25" width="35" class="rounded border" src="https://restcountries.eu/data/uga.svg" alt="" srcset="">
                  <span class="ml-2">${user.username}</span>
                </td>
                <td data-label="Amount" class="text-center" style="font-size: large;">
                  <ion-icon data-toggle="tooltip" data-placement="top" title="Tooltip on top" name="logo-${user.browser.split(' ')[0].toLocaleLowerCase()}"></ion-icon>
                  <ion-icon data-toggle="tooltip" data-placement="top" title="Tooltip on top" name="logo-${user.os.match('Mac')?'apple':''}"></ion-icon>
                </td>
                <td>
                  <ion-icon name="document-text"></ion-icon> <a href="${user.pageLink}">${user.pageTitle}</a>
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
                ${
                    setInterval(function() {
                      date_future = new Date(user.time);
                      date_now = new Date();

                      seconds = (Math.floor(((date_now) - date_future) / 1000));
                      minutes = Math.floor(seconds / 60);
                      hours = Math.floor(minutes / 60);
                      days = Math.floor(hours / 24);

                      hours = hours - (days * 24);
                      minutes = minutes - (days * 24 * 60) - (hours * 60);
                      seconds = seconds - (days * 24 * 60 * 60) - (hours * 60 * 60) - (minutes * 60);
                      seconds = seconds.toString().length === 2 ? seconds : '0'+seconds;
                      minutes = minutes.toString().length === 2 ? minutes : '0'+minutes;
                      $(`#time-${user.id}`).text(`${hours} : ${minutes} : ${seconds}`);
                    }, 1000)
                  }
                `))}
        </tbody>`).appendTo($("#table"));
  })


  // socket.on('test', function(data) {
  //   chart7.updateSeries([{
  //     data: data.map((e) => e.users)
  //   }])
  //   chart7.updateOptions({
  //     labels: data.map((e) => e.timeLabel),
  //   })
  // })
</script>
