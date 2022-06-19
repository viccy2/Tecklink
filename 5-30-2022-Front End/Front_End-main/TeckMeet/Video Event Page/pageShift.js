const tab_switcher = document.querySelectorAll('[data-switcher]');

for (let i = 0; i < tab_switcher.length; i++) {
  const tab_switchers = tab_switcher[i];
  const page_id = tab_switchers.dataset.tab;
  tab_switchers.addEventListener('click', () => {
    document.querySelector('.eventToggler .data-list.switch').classList.remove('switch')
    tab_switchers.parentNode.classList.add('switch');

    switchPgae(page_id);
  });
}

function switchPgae (page_id) {
  const current_page = document.querySelector('.heroPage .data-page.switch');
  current_page.classList.remove('switch');
  const next_page = document.querySelector(`.heroPage .data-page[data-page="${page_id}"]`);
  next_page.classList.add('switch');
}