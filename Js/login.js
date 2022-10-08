const container = document.querySelector(".container"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFields = document.querySelectorAll(".contrasena"),
    signUp = document.querySelector(".signup-link"),
    login = document.querySelector(".login-link");




    //Contraseña oculta y cambio de icono del ojo
pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        pwFields.forEach(pwField => {
            if (pwField.type === "contrasena") {
                pwField.type = "text";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye-slash", "uil-eye");
                })
            } else {
                pwField.type = "contrasena";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye", "uil-eye-slash");
                })
            }
        })
    })
})


signUp.addEventListener("click", ( )=> {
    container.classList.add("active");
});
login.addEventListener("click", ( )=> {
    container.classList.remove("active");
})