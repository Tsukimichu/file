const loginForm = document.getElementById("loginForm");
const registerForm = document.getElementById("registerForm");
const forpassForm = document.getElementById("forgotPasswordForm");
const registerLink = document.getElementById("registerLink");
const forpassLink = document.getElementById("forpassLink");


registerLink.addEventListener("click", function(event) {
    event.preventDefault();
    loginForm.style.display = "none";
    registerForm.style.display = "block"; 
    forpassForm.style.display = "none"; 
});

forpassLink.addEventListener("click", function(event) {
    event.preventDefault();
    loginForm.style.display = "none"; 
    registerForm.style.display = "none"; 
    forpassForm.style.display = "block"; 
    document.getElementById("email").style.display = "block"; 
    document.getElementById("message").innerText = ""; 
});

// Handling submission of the forgot password form
forpassForm.addEventListener("submit", function(event) {
    event.preventDefault();
    var email = document.getElementById("email").value;
    document.getElementById("message").innerText = "Password reset link sent to " + email;
    loginForm.style.display = "block";
    forpassForm.style.display = "none";
});