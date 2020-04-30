$(function () {
  $("#world-map").vectorMap();
});
var visitorsData = {
  AF: 16,
  AL: 11,
  DZ: 158,
  PK: 158,
  UG: 2,
};
$("#world-map").vectorMap({
  map: "world_mill_en",
  series: {
    regions: [
      {
        values: visitorsData,
        scale: ["#e9887c", "#dd4b39"],
        normalizeFunction: "polynomial",
      },
    ],
  },
  onRegionTipShow: function (e, el, code) {
    el.html(el.html() + " (Visitors - " + visitorsData[code] + ")");
  },
});

$(function () {
  $("#map").vectorMap({
    map: "world_mill",
  });
});
