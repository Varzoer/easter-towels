const hamburger = document.getElementById('hamburger');
const navDiv = document.getElementById("nav-div");

hamburger.addEventListener('click', () => {
    navDiv.classList.toggle('show')
});