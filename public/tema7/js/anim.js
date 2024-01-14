$(document).ready(function () {
  let currentindex = 0;

  $(".btn-open").click(function () {
    $(".container-cover").animate(
      {
        top: "-100%",
      },
      "slow",
      function () {
        $("html").css("overflow", "auto");
      }
    );
  });
  function inframechecker(elm, i) {
    var element = elm;
    elm.attr("  ");
    // Calculate the element's position
    var elementTop = element.offset().top;
    var windowHeight = $(window).height();
    var scrollTop = $(window).scrollTop();

    // Check if the element is in the viewport
    if (elementTop - scrollTop < windowHeight - 100) {
      currentindex += 1;

      if (element.attr("delay") != undefined) {
        element.css(
          "animation-delay",
          parseFloat(element.attr("delay") * 0.3) + "s"
        );
      }
      if (element.attr("anim") != undefined) {
        element.addClass(element.attr("anim"));
      } else {
        element.addClass("fades");
      }
    } else {
      currentindex = 0;
      // Remove the class if the element is not in the viewport
    }
  }

  $(".animated").each(function (i) {
    inframechecker($(this), i);
  });

  $(".animated").on("animationend", function (e) {
    $(e.target).css("opacity", 1);
  });
  $(window).on("scroll", function () {
    // Get the element you want to animate
    $(".animated").each(function (i) {
      inframechecker($(this), i);
    });
  });
  $(window).on("resize", function () {
    $(".animated").each(function (i) {
      inframechecker($(this), i);
    });
  });
});
