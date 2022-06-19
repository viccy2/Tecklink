// document
//   .querySelectorAll(".form-reg")
//   .forEach((item) =>
//     item.addEventListener("submit", (e) => e.target.preventDefault)
//   );

const btnUser = document.querySelector(".btn-user");
const btnCompany = document.querySelector(".btn-company");
const formContainer = document.querySelector(".form-container");
const regUser = document.querySelector(".reg-user");
const regCompany = document.querySelector(".reg-company");
const industry = document.querySelector("#industry");
const industryOther = document.querySelector(".industry-other");

industry.addEventListener("change", () => {
  if (industry.value === "other") industryOther.classList.remove("hidden");
  else industryOther.classList.add("hidden");
});

// window.onresize = () => location.reload();
// formContainer.style.height = regUser.offsetHeight + "px";

btnUser.addEventListener("click", () => {
  if (!regUser.classList.contains("is-active")) {
    btnUser.classList.add("btn-active");
    btnCompany.classList.remove("btn-active");
    regUser.classList.add("is-active");
    regCompany.classList.remove("is-active");
  }
});

btnCompany.addEventListener("click", () => {
  if (!regCompany.classList.contains("is-active")) {
    btnCompany.classList.add("btn-active");
    btnUser.classList.remove("btn-active");
    regCompany.classList.add("is-active");
    regUser.classList.remove("is-active");
  }
});
