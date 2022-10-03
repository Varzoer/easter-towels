const dropdownBtn = document.querySelector(".dropbtn");
const dropdownContent = document.querySelector(".dropdown-content");
const dropdownItems = document.querySelectorAll(".dropdown-item");

dropdownBtn.addEventListener("click", function () {
  dropdownContent.classList.toggle("show");
  dropdownItems.classList.toggle("show");
});

dropdownItems.forEach(function (n) {
  n.addEventListener("click", function () {
    dropdownContent.classList.remove("show");
    dropdownItems.classList.remove("show");
  });
});
