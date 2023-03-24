var slider = tns({
    container: ".comments-slider",
    items:2,
    slideBy: "page",
    autoplay: true,
    mouseDrag: true,
    controls:false,
    responsive: {
      "350": {
        "items": 1,
        "controls": true,
      },
      "500": {
        "items": 2
      }
    }
  });
  