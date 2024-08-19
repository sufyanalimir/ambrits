(function ($) {
  "use strict";
  /* --------------------------------------------------------
			 LightCase jQuery Active
		--------------------------------------------------------- */
  $("a[data-rel^=lightcase]").lightcase({
    transition:
      "elastic" /* none, fade, fadeInline, elastic, scrollTop, scrollRight, scrollBottom, scrollLeft, scrollHorizontal and scrollVertical */,
    swipe: true,
    maxWidth: 1170,
    maxHeight: 600,
  });

  /*START ANIMATION JS*/
  AOS.init();
  /*END ANIMATION JS*/
})(jQuery);

$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 20,
  nav: true,
  dots: false,
  autoplay: true,
  autoplayTimeout: 0,
  autoplaySpeed: 3000,
  slideTransition: "linear",
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 4,
    },
  },
});

// $("#header-carousel").owlCarousel({
//   slideTransition: 'linear',
//   nav: false,
//   item: 1,
// });

// $(document).ready(function () {
//   var silder = $(".owl-carousel");
//   silder.owlCarousel({
//       autoPlay: false,
//       items: 1,
//       center: false,
//       nav: true,
//       margin: 40,
//       dots: false,
//       loop: true,
//       navText: ["<i class='bi bi-arrow-left' aria-hidden='true'></i>", "<i class='bi bi-arrow-right' aria-hidden='true'></i>"],
//       responsive: {
//           0: {
//               items: 1,
//           },
//           575: { items: 1 },
//           768: { items: 2 },
//           991: { items: 3 },
//           1200: { items: 4 }
//       }
//   });
// });

function sendMail() {
  $("#contact-form").parsley().validate();

  if ($("#contact-form").parsley().isValid()) {
    $(".btn-submit").attr("disabled", "disabled");
    $(".btn-submit").html('Sending..<i class="bi bi-arrow-clockwise"></i>');

    var name = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    var message = $("#message").val();

    $.ajax({
      url: "sendmail.php",
      method: "POST",
      contentType: "application/json",
      data: JSON.stringify({
        name: name,
        email: email,
        mobile: mobile,
        message: message,
      }),
      success: function (result) {
        var output = JSON.parse(result);
        if (output.HasError) {
          $("#mailalert").html(
            '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong><i class="bi bi-exclamation-triangle"></i></strong> Something went wrong<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div></div>'
          );
        } else {
          $("#mailalert").html(
            '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong><i class="bi bi-hand-thumbs-up"></i></strong> ' +
              output.Message +
              '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div></div>'
          );

          $("#contact-form")[0].reset();
        }

        $(".btn-submit").removeAttr("disabled");
        $(".btn-submit").html("Submit");
      },
    });
  }
}
function bookSlot() {
  $("#slot-booking-form").parsley().validate();

  if ($("#slot-booking-form").parsley().isValid()) {
    $(".btn-book").attr("disabled", "disabled");
    $(".btn-book").html('Sending..<i class="bi bi-arrow-clockwise"></i>');

    var name = $("#name").val();
    var email = $("#email").val();
    var mobile = $("#mobile").val();
    var exam = $("#exam").val();
    var message = $("#message").val();

    $.ajax({
      url: "sendbooking.php",
      method: "POST",
      contentType: "application/json",
      data: JSON.stringify({
        name: name,
        email: email,
        mobile: mobile,
        exam: exam,
        message: message,
      }),
      success: function (result) {
        var output = JSON.parse(result);
        if (output.HasError) {
          $("#mailalert").html(
            '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong><i class="bi bi-exclamation-triangle"></i></strong> Something went wrong<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div></div>'
          );
        } else {
          $("#mailalert").html(
            '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong><i class="bi bi-hand-thumbs-up"></i></strong> ' +
              output.Message +
              '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div></div>'
          );

          $("#slot-booking-form")[0].reset();
        }

        $(".btn-book").removeAttr("disabled");
        $(".btn-book").html("Submit");
      },
    });
  }
}
