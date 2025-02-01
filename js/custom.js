
  (function ($) {
  
  "use strict";

    // PRE LOADER
    $(window).load(function(){
      $('.preloader').delay(500).slideUp('slow'); // set duration in brackets    
    });

    // NAVBAR
    $(".navbar").headroom();

    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });

    $('.slick-slideshow').slick({
      autoplay: true,
      infinite: true,
      arrows: false,
      fade: true,
      dots: true,
    });

    $('.slick-testimonial').slick({
      arrows: false,
      dots: true,
    });
    
  })(window.jQuery);

//   function checkAcknowledgment() {
//     const checkbox = document.getElementById('acknowledgeCheckbox');
//     const button = document.getElementById('proceedButton');
//     // Enable the button only if the checkbox is checked
//     button.disabled = !checkbox.checked;
// }

  // function redirectToPage() {
  //   // This function will be called when the button is clicked
  //   window.location.href = "sign-in.html"; // Change "nextpage.html" to your desired page
// }
// document.getElementById("signin-form").addEventListener("submit", function(event) {
//   var email = document.getElementById("email").value;
//   var password = document.getElementById("password").value;

//   // Check if both email and password fields are filled
//   if (!email || !password) {
//     event.preventDefault(); // Prevent form submission
//     alert("Please fill in both the email and password fields.");
//   }
// });

function validateForm() {
  // Get the values of the email and password fields
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // Check if both fields are filled
  if (!email || !password) {
    alert('Please fill in both email and password fields.');
    return false; // Prevent the link from redirecting
  } else {
    // If both fields are filled, redirect the user
    window.location.href = 'sign-in.html'; // Change to the page you want to redirect to
    return false; // Prevent default action since we're redirecting programmatically
  }
}
function validateForm1() {
  // Get the values of the email and password fields
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // Check if both fields are filled
  if (!email || !password) {
    alert('Please fill in both email and password fields.');
    return false; // Prevent the link from redirecting
  } else {
    // If both fields are filled, redirect the user
    window.location.href = 'admindash.html'; // Change to the page you want to redirect to
    return false; // Prevent default action since we're redirecting programmatically
  }
}


