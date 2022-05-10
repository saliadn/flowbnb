const memberIcon = document.querySelector('.member-icon');
const menu = document.querySelector('.menu');
const menuCloseBtn = document.querySelector('.close');

memberIcon.onclick = function() {
   // menu.style.display = 'flex';
   menu.classList.add('opened');
   this.classList.add('opened');
}

menuCloseBtn.onclick = function() {
   // menu.style.display = 'none';
   menu.classList.remove('opened');
   memberIcon.classList.remove('opened');
}

// modal login et signup
const modalLogin = document.querySelector('.connexion-background');
const modalLoginCloseBtn = document.querySelector('.connexion-background .modal .close');

const modalSignup = document.querySelector('.inscription-background');
const modalSignupCloseBtn = document.querySelector('.inscription-background .modal .close');

const signupBtn = document.querySelector('#signup');
const loginBtn = document.querySelector('#login');


signupBtn.onclick = function() {
   modalSignup.classList.add('opened');
   menu.classList.remove('opened');
   memberIcon.classList.remove('opened');
}
loginBtn.onclick = function() {
   modalLogin.classList.add('opened');
   menu.classList.remove('opened');
   memberIcon.classList.remove('opened');
}

modalSignupCloseBtn.onclick = function() {
   modalSignup.classList.remove('opened')
}
modalLoginCloseBtn.onclick = function() {
   modalLogin.classList.remove('opened');
}
