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



let filterBy = [];
displayStaff(null)
$(".filter-list li").on("click", function() {
  $("#response").html("");
  let item = $(this);
  if(item.hasClass("active") == true) {
    item.removeClass("active");
    let index = filterBy.indexOf(item.data("type"));
    filterBy.splice(index, 1);
  } else {
    item.addClass("active");
    filterBy.push(item.data("type"));
  }
  displayStaff(filterBy);
});

function displayStaff(filterBy) {
  $.ajax({
    url: "../wp-admin/admin-ajax.php",
    type: "POST",
    data : {
      action : 'filter',
      categoryIDs : filterBy,
    },
    success: function(response){
      $("#response").html(response);
      $(".person").on("click", function() {
        let person = $(this);
        modalInnerName.html(person.data("name"));
        modalInnerBio.html(person.data("bio"));
        modalImg.css("background-image", "url(' "+ person.data('img') +" ')");
        modalBio.toggleClass("open");
      });
    }
  });
  return false;
}
