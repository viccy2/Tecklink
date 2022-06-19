
function myFunction(x) {
  if (x.matches) { // If media query matches
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      slidesPerGroup: 1,
      loop: true,
      loopFillGroupWithBlank: true
    });
  } else {
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true
    });
  }
}

var x = window.matchMedia("(max-width: 700px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes





const tab_switcher = document.querySelectorAll('[data-switcher]');

for (let i = 0; i < tab_switcher.length; i++) {
  const tab_switchers = tab_switcher[i];
  const page_id = tab_switchers.dataset.tab;
  tab_switchers.addEventListener('click', () => {
    document.querySelector('.data-indicator .data-list.active').classList.remove('active')
    tab_switchers.parentNode.classList.add('active');

    switchPgae(page_id);
  });
}

function switchPgae (page_id) {
  const current_page = document.querySelector('.data-main-page .data-page.active');
  current_page.classList.remove('active');
  const next_page = document.querySelector(`.data-main-page .data-page[data-page="${page_id}"]`);
  next_page.classList.add('active');
}