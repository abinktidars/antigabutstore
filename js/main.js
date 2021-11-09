$(document).ready(function() {

  // Accordion
  $(".accordion > a").on("click", function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this)
        .siblings(".content")
        .slideUp(200);
      $(".accordion > a i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
    } else {
      $(".accordion > a i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
      $(this)
        .find("i")
        .removeClass("fa-plus")
        .addClass("fa-minus");
      $(".accordion > a").removeClass("active");
      $(this).addClass("active");
      $(".content").slideUp(200);
      $(this)
        .siblings(".content")
        .slideDown(200);
    }
  });
  
  // Hamburger Menu 
  $('#hamburger').click(function() {
    $(this).toggleClass('open');
    $(".navigation").toggleClass("show");
  });
  
  $('.navigation li').click(function() {
    $(".navigation").toggleClass("show");
    $("#hamburger").toggleClass('open');
  });

  // Carousel Slider
  $(".carousel-slider").slick({
    centerMode: true,
    slidesToShow: 1,
    dots: false,
    arrows: false,
    autoplay: false
  });

});
  