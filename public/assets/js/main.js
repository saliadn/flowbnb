const memberIcon = document.querySelector('.member-icon');
const menu = document.querySelector('.menu');
const menuClose = document.querySelector('.close');

memberIcon.onclick = function() {
   // menu.style.display = 'flex';
   menu.classList.add('opened');
   this.classList.add('opened');
}

menuClose.onclick = function() {
   // menu.style.display = 'none';
   menu.classList.remove('opened');
   memberIcon.classList.remove('opened');
}


// memberIcon.addEventListener('click', function() {
//    menu.style.display = 'flex';
// })

// modal login et signup
const modalBackground = document.querySelector('.connexion-background');
const modal = document.querySelector('.modal');