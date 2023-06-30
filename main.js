window.addEventListener('scroll', onScroll);

onScroll();

function onScroll() {
  showNavOnScroll();
  showBackToTopButtonOnScroll();
}

function showNavOnScroll() {
  // Adiciona a classe 'scroll' ao elemento de navegação quando o scrollY é maior que 550
  if (window.scrollY > 550) {
    navigation.classList.add('scroll');
  } else {
    navigation.classList.remove('scroll');
  }
}

function showBackToTopButtonOnScroll() {
  // Adiciona a classe 'show' ao botão 'backToTopButton' quando o scrollY é maior que 550
  if (window.scrollY > 550) {
    backToTopButton.classList.add('show');
  } else {
    backToTopButton.classList.remove('show');
  }
}

function openMenu() {
  // Adiciona a classe 'menu-expanded' ao body
  document.body.classList.add('menu-expanded');
}

function closeMenu() {
  // Remove a classe 'menu-expanded' do body
  document.body.classList.remove('menu-expanded');
}

// Executa a função onScroll no carregamento da página
window.addEventListener('load', onScroll);

ScrollReveal({
  origin: 'top',
  distance: '300px',
  duration: 1000
}).reveal(`
#home, 
#home img, 
#home .stats,
#services,
#services header,
#services .card,
#about,
#about header,
#about .content
`);