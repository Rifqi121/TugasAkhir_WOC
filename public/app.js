const body = document.querySelector('.body');
const navlink = document.querySelector('.nav-link');
const link = document.querySelectorAll('.nav-link');

body.addEventListener("click", () => {
  navlink.classList.toggle("open");
});
