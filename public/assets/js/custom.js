// ---------HEDAER LINK ACTIVE-------------
$(".header_link li").on("click", function () {
  $(".header_link  li").removeClass("active");
  $(this).addClass("active");
});

// --------TOGGLE MENU-----
$(".menu_btn").on("click", function () {
  $(".mobile_menu").toggleClass("sidebra_active");
});
// --------STICKY HEDAER----------------
window.onscroll = function () {
  myFunction();
};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
// ===============================feaure slider======================================
$(".cutomers-slider").owlCarousel({
  loop: true,
  margin: 50,
  center: true,
  // autoplay: true,
  autoHeight: true,
  autoplayTimeout: 3000,
  nav: true,
  navText: [
    '<i class="fas fa-arrow-left"></i>',
    '<i class="fas fa-arrow-right"></i>',
  ],
  responsive: {
    0: {
      items: 1,
      center: false,
    },
    600: {
      items: 1,
      center: false,
    },
    992: {
      items: 2,
      center: false,
    },
    1400: {
      items: 3,
    },
  },
});
// -------------------------
document.addEventListener("mousemove", (e) => parallax(e));

const parallax = (e) => {
  document.querySelectorAll(".layer").forEach((layer) => {
    const speed = layer.getAttribute("data-speed");

    const x = (window.innerWidth - e.pageX * speed) / 100;
    const y = (window.innerHeight - e.pageY * speed) / 100;

    layer.style.transform = `translate(${x}px, ${y}px)`;
  });
};
// -----checkbox---
$(document).ready(function() {
            $('.vehical_equipment_box input').click(function() {
                $('input:not(:checked)').parent().removeClass("active");
                $('input:checked').parent().addClass("active");
            });
        });
// $( ".vehical_equipment_box" ).click(function() {
//   $( this ).toggleClass( "active" );
// });
// ---------FLEET SIZE-------------
$(document).ready(function() {
            $('.fleet_size_selection input').click(function() {
                $('input:not(:checked)').closest('div').parent().removeClass("active");
                $('input:checked').closest('div').parent().addClass("active");
            });
        });
// ========conditoion to check compulsory one checkbox=========
// $(document).ready(function () {
//     $('.checkBtn').click(function() {
//       var checked = $("input[type=checkbox]:checked").length;
      

//       if(!checked) {
//         // alert("helo")
//        $(".custom_modal").fadeIn("500");
//        $(".moda-bg").fadeIn("500");
//         return false;
//       }

//     });
// });
$(document).ready(function () {
  $(".ok_btn").on("click", function(){
    $(".custom_modal").fadeOut(500);
     $(".moda-bg").fadeOut(500);

  });
});
// $(document).ready(function () {
//     $('.checkBtn1').click(function() {
//       var checked = $("input[type=radio]:checked").length;
      

//       if(!checked) {
//         // alert("helo")
//        $(".custom_modal").fadeIn("500");
//        $(".moda-bg").fadeIn("500");
//         return false;
//       }

//     });
// });



window.addEventListener('load', function() {
  document.querySelector('body').classList.add("loaded")
});