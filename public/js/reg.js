document.getElementById("showRegPassword").addEventListener("click", function () {
        const regPasswordInput = document.getElementById("regPassword");
        const regPasswordIcon = document.getElementById("regPasswordIcon");
        if (regPasswordInput.type === "password") {
            regPasswordInput.type = "text";
            regPasswordIcon.classList.remove("fa-eye");
            regPasswordIcon.classList.add("fa-eye-slash");
        } else {
            regPasswordInput.type = "password";
            regPasswordIcon.classList.remove("fa-eye-slash");
            regPasswordIcon.classList.add("fa-eye");
        }
    });

  // Wait for the DOM to be ready
  document.addEventListener("DOMContentLoaded", function() {
    // Check if the success message exists
    var successMessage = document.getElementById('successMessage');
    
    // If the success message exists, set a timeout to hide it after 3 seconds
    if (successMessage) {
      setTimeout(function() {
        successMessage.style.display = 'none';
      }, 3000);
    }
  });


 
  // Wait for the DOM to be ready
  document.addEventListener("DOMContentLoaded", function() {
    // Check if the error message exists
    var errorMessage = document.getElementById('errorMessage');

    // If the error message exists, set a timeout to hide it after 3 seconds
    if (errorMessage) {
      setTimeout(function() {
        errorMessage.style.display = 'none';
      }, 3000);
    }
  });



