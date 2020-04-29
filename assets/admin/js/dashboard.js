window.Apex = {
  chart: {
    foreColor: "#0f0f0f",
    toolbar: {
      show: false,
    },
  },
  stroke: {
    width: 3,
  },
  dataLabels: {
    enabled: false,
  },
  tooltip: {
    theme: "light",
  },
  grid: {
    borderColor: "#0f0f0f",
    xaxis: {
      lines: {
        show: true,
      },
    },
  },
};


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
  series: [71, 63, 77],
  colors: ["#C0C0C0", "#696969", "#0f0f0f"],
  labels: ["Phone", "Tablet", "Computer"],
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


// sparkline chats

var options5 = {
  series: [
    {
      data: [
        25,
        66,
        41,
        89,
        63,
        25,
        44,
        12,
        36,
        9,
        54,
        25,
        66,
        41,
        89,
        63,
        25,
        44,
        12,
        36,
        9,
        54,
        25,
        66,
        41,
        89,
        63,
        25,
        44,
        12,
        36,
        9,
        54,
        25,
        66,
        41,
        89,
        63,
        25,
        44,
        12,
        36,
        9,
        54,
      ],
    },
  ],
  chart: {
    type: "bar",
    height: 35,
    sparkline: {
      enabled: true,
    },
    animations: {
      enabled: false,
      easing: "easeinout",
      speed: 80,
      animateGradually: {
        enabled: true,
        delay: 10,
      },
      dynamicAnimation: {
        enabled: true,
        speed: 30,
      },
    },
  },
  plotOptions: {
    bar: {
      columnWidth: "80%",
    },
  },
  xaxis: {
    crosshairs: {
      width: 1,
    },
  },
  tooltip: {
    fixed: {
      enabled: false,
    },
    x: {
      show: false,
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return "";
        },
      },
    },
    marker: {
      show: false,
    },
  },
};

var chart5 = new ApexCharts(document.querySelector("#chart-5"), options5);
chart5.render();

