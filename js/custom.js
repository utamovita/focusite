jQuery(document).ready(function () {
  function sticky() {
    var scrollPosition = jQuery(window).scrollTop();
    if (scrollPosition > 0) {
      jQuery("nav").addClass("sticky");
    } else jQuery("nav").removeClass("sticky");
  }

  sticky();

  jQuery(window).on("scroll", function () {
    sticky();
  });

  jQuery(".choosePricing .btn").click(function () {
    jQuery(".choosePricing .btn").removeClass("active");
    jQuery(this).addClass("active");
    var thisID = jQuery(this).attr("id");
    jQuery("#section2").load(
      "../wp-content/themes/focusite/form-" + thisID + ".php"
    );
    jQuery("#section2").addClass("loaded");
  });

  jQuery(".close-btn").click(function () {
    jQuery(".darkness, .light-box").removeClass("on");
  });

  jQuery(".scroll-down").click(function () {
    jQuery([document.documentElement, document.body]).animate(
      {
        scrollTop: jQuery(".section2").offset().top - 100,
      },
      1000
    );
  });

  //for desktop only
  if (jQuery(window).width() > 770) {
    jQuery(".menu-item-has-children").mouseover(function () {
      jQuery(".darkness").addClass("on");
      jQuery(this).find(".sub-menu").toggleClass("on");
    });

    jQuery(".menu-item-has-children").mouseout(function () {
      jQuery(".darkness").removeClass("on");
      jQuery(this).find(".sub-menu").removeClass("on");
    });
  }

  //for mobile only
  if (jQuery(window).width() < 770) {
    jQuery(".hamburger").click(function () {
      jQuery("nav").toggleClass("opened");
    });

    //sub-menu toggler
    jQuery(".menu-item-has-children").append(
      "<button class='mobile-submenu-toggler'></button>"
    );

    jQuery(".mobile-submenu-toggler").click(function () {
      jQuery(this).toggleClass("on");
      jQuery(this).siblings(".sub-menu").toggleClass("on");
    });

    jQuery(".sub-menu").append(
      "<li class='actions'><button class='sub-menu-back-btn'></button><button class='sub-menu-close-btn'><span></span><span></span></button></li>"
    );

    jQuery(".sub-menu-back-btn").click(function () {
      jQuery(".sub-menu").removeClass("on");
    });

    jQuery(".sub-menu-close-btn").click(function () {
      jQuery(".sub-menu").removeClass("on");
      jQuery("nav").removeClass("opened");
    });

    jQuery(".collapsible__question").click(function () {
      jQuery(this)
        .toggleClass("on")
        .find(".collapsible__question__answer")
        .slideToggle("slow");
    });
  }
});
