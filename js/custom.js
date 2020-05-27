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
    jQuery(".form-section").load(
      "../wp-content/themes/focusite/form/form-" + thisID + ".php"
    );
    jQuery(".form-section").addClass("loaded");
  });

  jQuery(".close-btn").click(function () {
    jQuery(".darkness, .light-box").removeClass("on");
  });

  jQuery(".scroll-down").click(function () {
    jQuery([document.documentElement, document.body]).animate(
      {
        scrollTop: jQuery(".scroll-to").offset().top - 100,
      },
      750
    );
  });

  //for desktop only
  if (window.innerWidth > 770) {
    jQuery(".menu-item-has-children").mouseover(function () {
      jQuery(".darkness").addClass("on");
      jQuery(this).find(".sub-menu").toggleClass("on");
    });

    jQuery(".menu-item-has-children").mouseout(function () {
      jQuery(".darkness").removeClass("on");
      jQuery(this).find(".sub-menu").removeClass("on");
    });
  }

  if (window.innerWidth < 770) {
    jQuery(".hamburger__box").click(function () {
      jQuery("nav").toggleClass("opened");
    });

    //sub-menu toggler
    jQuery(".menu-item-has-children").append(
      "<button class='mobile-submenu-toggler'>toggle menu</button>"
    );

    jQuery(".mobile-submenu-toggler").click(function () {
      jQuery(this).toggleClass("on");
      jQuery(this).siblings(".sub-menu").toggleClass("on");
    });

    jQuery(".sub-menu").append(
      "<li class='actions'><button class='sub-menu-back-btn'>back</button><button class='sub-menu-close-btn'>close<span></span><span></span></button></li>"
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
