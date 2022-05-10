const links = document.querySelectorAll('a');
links.forEach(element => {
   element.setAttribute('draggable', false);
});
const imgs = document.querySelectorAll('img');
imgs.forEach(element => {
   element.setAttribute('draggable', false)
});

const memberIcon = document.querySelector('.member-icon');
const menu = document.querySelector('.menu');
const menuCloseBtn = document.querySelector('.close');

memberIcon.onclick = function() {
   menu.classList.add('opened');
   this.classList.add('opened');
}
menuCloseBtn.onclick = function() {
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


// control signup email
const email = document.querySelector('.inscription-background input[name=email]');
const confirm_email = document.querySelector('.inscription-background input[name=confirm_email]');
// control signup password 
const password = document.querySelector('.inscription-background input[name=password]');
const confirm_password = document.querySelector('.inscription-background input[name=confirm_password]');

const signupSubmitBtn = document.querySelector('.inscription-background input[type=submit]');

confirm_email.addEventListener('keyup', function() {
   if(email.value != '' && confirm_email.value != '' && email.value === confirm_email.value) {
      console.log('email OK');
      confirm_password.addEventListener('keyup', function() {
         if(password.value != '' && confirm_password.value != '' && password.value === confirm_password.value) {
            console.log('mot de passe OK');
            signupSubmitBtn.classList.remove('disabled');
         } else {
            console.log('mot de passe KO');
            signupSubmitBtn.classList.add('disabled');
         }
      });
   } else {
      console.log('email KO');
   }
})

confirm_password.addEventListener('keyup', function() {
   if(password.value === confirm_password.value) {
      signupSubmitBtn.removeAttribute('disabled');
   } else {
      signupSubmitBtn.setAttribute('disabled', '');
   }
})

tippy('#signupBtn', {
   content: 'Valide le formulaire d\'abord !',
   placement: 'top',
   arrow: false,
});

tippy('[data-tippy-content]');