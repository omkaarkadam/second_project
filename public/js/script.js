// Login Form
    document.getElementById("showPassword").addEventListener("click", function () {
        const passwordInput = document.getElementById("loginPassword");
        const passwordIcon = document.getElementById("passwordIcon");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordIcon.classList.remove("fa-eye");
            passwordIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            passwordIcon.classList.remove("fa-eye-slash");
            passwordIcon.classList.add("fa-eye");
        }
    });
// Registration Form
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