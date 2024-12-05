$(document).ready(function() {
  /* contains all common scripts which needs to be called on page load */
  initjs();
  $('.printBtn').click(function(){
    $('head').append('<link rel="stylesheet" type="text/css" href="css/print.css">');
  });
});
var heroAspectRatioEnable = false;
var heroImageAspectRatioValue = '';

if ($('.jssor-home-wrapper').length) {
  heroImageAspectRatioValue = $('#homeCarousel .item').first().find('img').attr('data-aspectratio');
} else {
  heroImageAspectRatioValue = $('#homeCarousel .carousel-inner .item').first().find('img').attr('data-aspectratio');
}

if (heroImageAspectRatioValue !== "16-9" && !heroImageAspectRatioValue == "") {
  heroAspectRatioEnable = true;
} else {
  heroAspectRatioEnable = false;
}

var imageRevelAnim = "fadeIn";
var imageRevelAnimTimer = "slow";
if (imageRevelAnim === 'none') {
  imageRevelAnim = '';
  imageRevelAnimTimer = '';
}

// interval (change time) for hero image bootstrap carousel
var heroImageChangeTime = "5000";

$(window).on('load', function() {
  // calcWidth('#top-navbar-collapse');
  // calcWidth('#bottom-navbar-collapse');
  responsive_menu('#top-navbar-collapse');
  responsive_menu('#bottom-navbar-collapse');
  // showClosePromotions();
  onScrollHidePromo();
  homeCarouselImgHeight();
});

// Listen for orientation changes
window.addEventListener("orientationchange", function() {
    // Announce the new orientation number
    // alert(window.orientation);
    // calcWidth('#top-navbar-collapse');
    // calcWidth('#bottom-navbar-collapse');
    responsive_menu('#top-navbar-collapse');
    responsive_menu('#bottom-navbar-collapse');
    homeCarouselImgHeight();
    ourHotelMenuHeight();
  }, false);

window.addEventListener("resize", function() {
  // Announce the new orientation number
  // alert(window.orientation);
  // calcWidth('#top-navbar-collapse');
  // calcWidth('#bottom-navbar-collapse');
  responsive_menu('#top-navbar-collapse');
  responsive_menu('#bottom-navbar-collapse');
  homeCarouselImgHeight();
  ourHotelMenuHeight();
}, false);

// Datepicker JS
$('.datepicker').datepicker({
  format: 'dd-mm-yyyy',
  startDate: 'd',
  autoclose: true
});

// Mobile Menu Dropdown Working
$('#menu-bar').click(function(){
  $(".mobile-menu").slideToggle();
    $("#menu-bar i").toggleClass("fa-close fa-bars");

});
$('.mobile-menu ul li.menu-item-has-children').click(function(){
  $(".mobile-menu ul li.menu-item-has-children >ul").slideToggle();
});
// End
// Sub Menu Sliding
$(".mobile-menu li.menu-item-has-children").click(function(){
  var list_id = $(this).attr('id');
  // alert(list_id);
  $(".mobile-menu li#"+list_id+" ul").slideToggle();
  $(".mobile-menu li#"+list_id+" span i").toggleClass("fa-angle-up fa-angle-down");
});
// End
// Toggleable Tabs Script
$('.rr-tabs li').click(function(){
  var tab_id = $(this).attr('data-id');
  // Tabs Working
  $('.rr-tabs li').removeClass('active');
  $(this).addClass('active');
  // Tab Content Working
  $('.rr-tab-content .sec').removeClass('active');
  $('#'+tab_id).addClass('active');
});
// End Tabs
// Toggleable Tabs Script
$('.rr-tabs2 li').click(function(){
  var tab_id = $(this).attr('data-id');
  // Tabs Working
  $('.rr-tabs2 li').removeClass('active');
  $(this).addClass('active');
  // Tab Content Working
  $('.rr-tab-content2 .sec').removeClass('active');
  $('.rr-tab-content2 #'+tab_id).addClass('active');
});
// End Tabs
