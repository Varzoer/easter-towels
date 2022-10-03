const dropdownBtn = document.querySelector("drop-btn");
const dropdownServices = document.querySelector("services");
const dropdowns = document.querySelectorAll("dropdown-content");

dropdownBtn.addEventListener("click", () => {
  dropdownServices.classList.toggle("show");

  for (let i = 0; i < dropdowns.length; i++) {
    const openDropdown = dropdowns[i];
    if (openDropdown.classList.contains("show")) {
      openDropdown.classList.remove("show");
    }
  }
});
