// main carousel

$(".inner_carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  autoplay: true,
  autoplayTimeout: 7000,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

// for menu icons
function myFunction(x) {
  x.classList.toggle("change");
}

// counter

$(document).ready(function () {
  $(".counter").each(function () {
    $(this)
      .prop("Counter", 0)
      .animate(
        {
          Counter: $(this).text(),
        },
        {
          duration: 4000,
          easing: "swing",
          step: function (now) {
            $(this).text(Math.ceil(now));
          },
        }
      );
  });
});

// for date
function getDateTime() {
  let days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];

  let months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  let currentDay = new Date();

  let day = days[currentDay.getDay()];
  let month = months[currentDay.getMonth()];
  let year = currentDay.getFullYear();
  let curr_date = currentDay.getDate();
  let hour = currentDay.getHours();
  let minute = currentDay.getMinutes();
  let second = currentDay.getSeconds();

  let showDate = `${day} ${curr_date}th ${month} ${year},  ${hour} : ${minute}: ${second}`;
  return showDate;
}
setInterval(function () {
  currentTime = getDateTime();
  document.getElementById("date_time").innerHTML = currentTime;
}, 1000);


// for placed  student
$(document).ready(function () {
  $(".placed_student").owlCarousel({
    mouseDrag: false,
    loop: true,
    margin: 2,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 3,
      },
    },
  });

  $(".owl-prev").click(function () {
    $active = $(".owl-item .item.show");
    $(".owl-item .item.show").removeClass("show");
    $(".owl-item .item").removeClass("next");
    $(".owl-item .item").removeClass("prev");
    $active.addClass("next");
    if ($active.is(".first")) {
      $(".owl-item .last").addClass("show");
      $(".first").addClass("next");
      $(".owl-item .last").parent().prev().children(".item").addClass("prev");
    } else {
      $active.parent().prev().children(".item").addClass("show");
      if ($active.parent().prev().children(".item").is(".first")) {
        $(".owl-item .last").addClass("prev");
      } else {
        $(".owl-item .show").parent().prev().children(".item").addClass("prev");
      }
    }
  });

  $(".owl-next").click(function () {
    $active = $(".owl-item .item.show");
    $(".owl-item .item.show").removeClass("show");
    $(".owl-item .item").removeClass("next");
    $(".owl-item .item").removeClass("prev");
    $active.addClass("prev");
    if ($active.is(".last")) {
      $(".owl-item .first").addClass("show");
      $(".owl-item .first").parent().next().children(".item").addClass("prev");
    } else {
      $active.parent().next().children(".item").addClass("show");
      if ($active.parent().next().children(".item").is(".last")) {
        $(".owl-item .first").addClass("next");
      } else {
        $(".owl-item .show").parent().next().children(".item").addClass("next");
      }
    }
  });
});

// End for placed  student

// for RTI  student
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.height === "200px") {
      panel.style.height = "0px";
    } else {
      panel.style.height = "200px";
    }
  });
}

// End for RTI  student