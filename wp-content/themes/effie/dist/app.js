$(document).on("scroll", function() {
  $("body").addClass("scrolled");
});
$('.slider-container').slick({
  infinite: false,
  slidesToShow: 1,
  slidesToScroll: 1
});
$(".slider-container button").text("");
$('.service-slider').slick({
  infinite: false,
  slidesToShow: 1,
  slidesToScroll: 1
});
$(".service-slider button").text("");
$("button.slick-next").html("<i class='fa fa-arrow-right'></i>");
$("button.slick-prev").html("<i class='fa fa-arrow-left'></i>");

$modal = $(".modal");
$(".btn__book").on("click", function() {
  $modal.toggleClass("open");
});
console.log("hello");