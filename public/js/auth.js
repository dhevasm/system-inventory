const password = document.getElementById("togglePassword");
if(password){
    password.addEventListener("click", function () {
        let passwordInput = document.getElementById("password");
        let icon = this;

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");
        } else {
            passwordInput.type = "password";
            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");
        }
    });
}

const passwordConfirm = document.getElementById("togglePasswordConfirm");
if(passwordConfirm){
    passwordConfirm.addEventListener("click", function () {
        let passwordInput = document.getElementById("password-confirm");
        let icon = this;

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");
        } else {
            passwordInput.type = "password";
            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");
        }
    });
}
