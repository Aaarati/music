const logins = document.getElementById("loginforms");
const menu = document.getElementById("menuopen");
const close = document.getElementById("closemenu");
const navitems = document.getElementById("nav-links");
const signup = document.getElementById("signinforms");
const course = document.getElementById("courseforms");

//js for login form
function loginopen() {
  logins.style.height = "100%";
}

function closelogin() {
  logins.style.height = "0";
}

//js for sign in form
function opensignin() {
  signup.style.height = "100%";
}

function closesignin() {
  signup.style.height = "0";
}

//js for course enrollment form
function opencourse() {
  course.style.height = "100%";
}

function closecourse() {
  course.style.height = "0";
}
//js for mobile menu
function menuopen() {
  close.style.display = "block";
  menu.style.display = "none";
  navitems.style.transform = "translateX(0)";
}

function closemenu() {
  menu.style.display = "block";
  close.style.display = "none";
  navitems.style.transform = "translateX(-100%)";
}
