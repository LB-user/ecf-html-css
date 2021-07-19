const toggleMenu = document.querySelector('.toggle-menu');
const menu = document.querySelector('.menu');

toggleMenu.addEventListener('click', function () {
  const open = JSON.parse(toggleMenu.getAttribute('aria-expanded'));
  toggleMenu.setAttribute('aria-expanded', !open);
  menu.hidden = !menu.hidden;

  if (!menu.hidden) {
    menu.querySelector('a').focus();
  }
});

function navLinks(link){
  switch(link){
    case accueil:
      
    case formation:

    case etudiants:

    case actualites:

    case contacter:

    case legal:

    case confidentialite:

    case identite:

    case actu:

    case modules:
  }
}

