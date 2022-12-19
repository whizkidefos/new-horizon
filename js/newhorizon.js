//Navigation
const burger = document.querySelector('.burger');
const menu = document.querySelector('.right-nav');

let menuOpen = false;
burger.addEventListener("click", () => {
    if (!menuOpen) {
        burger.classList.add("open");
        menuOpen = true;
        menu.classList.add('active');
    } else {
        burger.classList.remove("open");
        menuOpen = false;
        menu.classList.remove('active');
    }
});

// Banner Slide
const banner = new Swiper('.banner', {
    speed: 900,
    spaceBetween: 100,
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    autoplay: {
        delay: 2000,
    },
});

// Reviews Slide
const review = new Swiper('.review', {
    speed: 3000,
    spaceBetween: 100,
    autoplay: {
        delay: 6000,
    },
});

// Toggle Password View
var checkBox = document.querySelector('[name="view_password[]"]');
var passwordInput = document.querySelectorAll('input[type=password]');

checkBox.addEventListener("click", function() {
    console.log('Call togglePasswordView Function');
    passwordInput.forEach((actualPassword) => {
        const type = actualPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    actualPassword.setAttribute('type', type);
    });
});

$(document).ready(function () {
  $("#dbsCheckForm").submit(function (event) {
    var formData = {
      applicantForename: $("#applicantForename").val(),
      applicantSurname: $("#applicantSurname").val(),
      
      applicantEmailAddress: $("#applicantEmailAddress").val(),

      organisationId: $("#organisationId").val(),
      agency: $("#agency").val(),
      positionId: $("#positionId").val(),
      internalReference: $("#internalReference").val(),
    };

    $.ajax({
      type: "POST",
      url: "https://clientapi.test.disclosureservices.com/Application/InitiateApplication",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);
    });

    event.preventDefault();
  });
});
