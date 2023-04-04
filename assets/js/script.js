
var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
     autoplay: {
    delay: 2000,
  },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3.5,
        },
    },
  });

  // js code form add more button


// if($("currentCount > fieldList").length) < 3 {
//         var id = document.getElementById("id").value;


$(function() {
  $("#addMore").click(function(e) {
    e.preventDefault();
    $("#fieldList").append("<li>&nbsp;</li>");
    $("#fieldList").append("<li><div class='form-group'><input type='text'class='form-control' name='name[]' placeholder='Name' /></div></li>");
    $("#fieldList").append("<li><div class='form-group'><input type='text' class='form-control' name='phone[]' placeholder='Contact Number' /></div></li>");
    
  });
});
  // id = id - 1 + 2;
  //         document.getElementById("id").value = id;
  //       }


