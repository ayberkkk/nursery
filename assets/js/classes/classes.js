var slider = tns({
  container: ".my-slider",
  items:4,
  slideBy: "page",
  autoplay: false,
  mouseDrag: true,
  responsive: {
    "350": {
      "items": 1,
      "controls": true,
      "edgePadding": 30
    },
    "500": {
      "items": 4
    }
  }
});
