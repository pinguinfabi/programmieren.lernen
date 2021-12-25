const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;
    //Users
    if (username === "admin" && password === "admin") {
        window.open("../accounts/ahps9pm97n67dh64q57udrly3x93jcsevo0val4i","_self")
    } else if (username === "likl" && password === "likl") {
        window.open("../accounts/5snt6aekndmstpo6tqcrihkew6743dza95wofjut","_self")
    } else {
        loginErrorMsg.style.opacity = 1;
    }
})
