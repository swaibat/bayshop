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

var spark1 = {
  chart: {
    id: "spark1",
    group: "sparks",
    type: "line",
    height: 80,
    sparkline: {
      enabled: true,
    },
  },
  series: [
    {
      data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21],
    },
  ],
  stroke: {
    curve: "smooth",
  },
  markers: {
    size: 0,
  },
  grid: {
    padding: {
      top: 20,
      bottom: 10,
      left: 110,
    },
  },
  colors: ["#0f0f0f"],
  tooltip: {
    x: {
      show: false,
    },
    y: {
      title: {
        formatter: function formatter(val) {
          return "";
        },
      },
    },
  },
};

var spark2 = {
  chart: {
    id: "spark2",
    group: "sparks",
    type: "line",
    height: 80,
    sparkline: {
      enabled: true,
    },
  },
  series: [
    {
      data: [12, 14, 2, 47, 32, 44, 14, 55, 41, 69],
    },
  ],
  stroke: {
    curve: "smooth",
  },
  grid: {
    padding: {
      top: 20,
      bottom: 10,
      left: 110,
    },
  },
  markers: {
    size: 0,
  },
  colors: ["#feb019"],
  tooltip: {
    x: {
      show: false,
    },
    y: {
      title: {
        formatter: function formatter(val) {
          return "";
        },
      },
    },
  },
};

var spark3 = {
  chart: {
    id: "spark3",
    group: "sparks",
    type: "line",
    height: 80,
    sparkline: {
      enabled: true,
    },
  },
  series: [
    {
      data: [47, 45, 74, 32, 56, 31, 44, 33, 45, 19],
    },
  ],
  stroke: {
    curve: "smooth",
  },
  markers: {
    size: 0,
  },
  grid: {
    padding: {
      top: 20,
      bottom: 10,
      left: 110,
    },
  },
  colors: ["#01ac01"],
  xaxis: {
    crosshairs: {
      width: 1,
    },
  },
  tooltip: {
    x: {
      show: false,
    },
    y: {
      title: {
        formatter: function formatter(val) {
          return "";
        },
      },
    },
  },
};

var spark4 = {
  chart: {
    id: "spark4",
    group: "sparks",
    type: "line",
    height: 80,
    sparkline: {
      enabled: true,
    },
  },
  series: [
    {
      data: [15, 75, 47, 65, 14, 32, 19, 54, 44, 61],
    },
  ],
  stroke: {
    curve: "smooth",
  },
  markers: {
    size: 0,
  },
  grid: {
    padding: {
      top: 20,
      bottom: 10,
      left: 110,
    },
  },
  colors: ["#e9e9e9"],
  xaxis: {
    crosshairs: {
      width: 1,
    },
  },
  tooltip: {
    x: {
      show: false,
    },
    y: {
      title: {
        formatter: function formatter(val) {
          return "";
        },
      },
    },
  },
};

new ApexCharts(document.querySelector("#spark1"), spark1).render();
new ApexCharts(document.querySelector("#spark2"), spark2).render();
new ApexCharts(document.querySelector("#spark3"), spark3).render();
new ApexCharts(document.querySelector("#spark4"), spark4).render();

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

var optionsArea = {
  chart: {
    height: 380,
    type: "area",
    stacked: false,
  },
  // title: {
  //   text: "Statistics",
  //   align: "left",
  //   offsetY: 25,
  //   offsetX: 20,
  // },
  grid: {
    show: true,
    padding: {
      bottom: 0,
    },
    borderColor: "#e3e3e3",
    xaxis: {
      lines: {
        show: false,
      },
    },
  },
  stroke: {
    curve: "smooth",
  },
  series: [
    {
      name: "Music",
      data: [
        11,
        15,
        26,
        20,
        33,
        27,
        15,
        26,
        20,
        33,
        27,
        15,
        26,
        20,
        33,
        27,
        15,
        26,
        20,
        33,
        27,
        15,
        26,
        20,
        33,
        27,
        26,
        20,
        33,
        27,
      ],
    },
    {
      name: "Files",
      data: [
        20,
        39,
        52,
        11,
        29,
        43,
        ,
        39,
        52,
        11,
        29,
        43,
        39,
        52,
        11,
        29,
        43,
        39,
        52,
        11,
        29,
        43,
        39,
        52,
        11,
        29,
        43,
        39,
        52,
        11,
        29,
      ],
    },
  ],
  xaxis: {
    categories: [
      "2011 Q1",
      "2011 Q2",
      "2011 Q3",
      "2011 Q4",
      "2012 Q1",
      "2012 Q2",
      "2011 Q2",
      "2011 Q3",
      "2011 Q4",
      "2012 Q1",
      "2012 Q2",
      "2011 Q2",
      "2011 Q3",
      "2011 Q4",
      "2012 Q1",
      "2012 Q2",
      "2011 Q2",
      "2011 Q3",
      "2011 Q4",
      "2012 Q1",
      "2012 Q2",
      "2011 Q2",
      "2011 Q3",
      "2011 Q4",
      "2012 Q1",
      "2012 Q2",
      "2011 Q2",
      "2011 Q3",
      "2011 Q4",
      "2012 Q1",
    ],
  },
  tooltip: {
    followCursor: true,
  },
  fill: {
    opacity: 1,
  },
  colors: ["#0f0f0f", "#CED4DC"],
  legend: {
    show: false,
    floating: true,
    position: "right",
    offsetY: -20,
  },
};

var chartArea = new ApexCharts(
  document.querySelector("#areachart"),
  optionsArea
);

chartArea.render();

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
// get online users in the past
const getOlineUsers = (data) => {
  var options6 = {
    series: [
      {
        data: data.map((e) => e.users),
      },
    ],
    labels: data.map((e) => e.timeLabel),
    animations: {
      enabled: false,
    },
    chart: {
      type: "bar",
      height: 35,
      sparkline: {
        enabled: true,
      },
      animations: {
        enabled: true,
        easing: "easeinout",
        speed: 80,
        animateGradually: {
          enabled: true,
          delay: 10,
        },
        dynamicAnimation: {
          enabled: true,
          speed: 350,
        },
      },
    },
    plotOptions: {
      bar: {
        columnWidth: "70%",
        startingShape: "rounded",
      },
    },
    xaxis: {
      crosshairs: {
        width: 1,
      },
    },
    tooltip: {
      custom: function ({ series, seriesIndex, dataPointIndex, w }) {
        return `<div class="mt-n2 p-2">
          <small>${w.globals.labels[dataPointIndex]}</small>
          <h5 class="text-success mb-0">${series[seriesIndex][dataPointIndex]}</h5>`;
      },
    },
  };
  document.getElementById("chart-6").innerHTML = "";
  var chart6 = new ApexCharts(document.querySelector("#chart-6"), options6);
  return chart6.render();
};

var options7 = {
  series: [
    {
      data: [
        12,
        14,
        2,
        47,
        42,
        15,
        47,
        75,
        65,
        19,
        14,
        12,
        12,
        14,
        2,
        47,
        42,
        15,
        47,
        75,
        65,
        19,
        14,
        12,
        12,
        14,
        2,
        47,
        42,
        15,
        47,
        75,
        65,
        19,
        14,
        12,
        20,
        14,
        14,
        40,
      ],
    },
  ],
  chart: {
    type: "bar",
    height: 35,
    sparkline: {
      enabled: true,
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

var chart7 = new ApexCharts(document.querySelector("#chart-7"), options7);
chart7.render();
