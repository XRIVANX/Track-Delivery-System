const loginbutton = document.getElementById("log-in-button");
const registerbutton = document.getElementById("register-button");
const backbutton = document.getElementById("back-button");
const backbutton2 = document.getElementById("back-button-2");
const loginform = document.getElementById("log-in-window");
const registerform = document.getElementById("register-window");
const accountsform = document.getElementById("accounts-window");

loginbutton.addEventListener("click", function () {
  loginform.style.display = "flex";
  registerform.style.display = "none";
  accountsform.style.display = "none";
});

registerbutton.addEventListener("click", function () {
  loginform.style.display = "none";
  registerform.style.display = "flex";
  accountsform.style.display = "none";
});

backbutton.addEventListener("click", function () {
  loginform.style.display = "none";
  registerform.style.display = "none";
  accountsform.style.display = "flex";
});

backbutton2.addEventListener("click", function () {
  loginform.style.display = "none";
  registerform.style.display = "none";
  accountsform.style.display = "flex";
});
