$(document).ready(function() {

  //a href
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
  
  // div set
  // $(".set").on("click", function() {
  //   if ($(this).hasClass("active")) {
  //     $(this).removeClass("active");
  //     $(this)
  //       .siblings(".content")
  //       .slideUp(200);
  //   } else {
  //     $(".set").removeClass("active");
  //     $(this).addClass("active");
  //     $(".content").slideUp(200);
  //     $(this)
  //       .siblings(".content")
  //       .slideDown(200);
  //   }
  // });

});
  