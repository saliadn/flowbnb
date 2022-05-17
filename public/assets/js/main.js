const links = document.querySelectorAll('a');
links.forEach(element => {
   element.setAttribute('draggable', false);
});
const imgs = document.querySelectorAll('img');
imgs.forEach(element => {
   element.setAttribute('draggable', false)
});

// - - - - - - user menu 
const memberIcon = document.querySelector('.member-icon');
const menu = document.querySelector('.menu');
const menuCloseBtn = document.querySelector('.close');
memberIcon.onclick = function() {
   userMenu('open');
}
menuCloseBtn.onclick = function() {
   userMenu('close');
}

// - - - - - - modal login et signup
const modalLogin = document.querySelector('.connexion-background');
const modalSignup = document.querySelector('.inscription-background');
const modalDisconnect = document.querySelector('.disconnect-background');


// Close modals when clicking outside
window.onclick = function(event) {
   if(event.target == modalLogin) {
      loginModal('close');
   }
   if(event.target == modalSignup) {
      signupModal('close');
   }
   if(event.target == modalDisconnect) {
      disconnectModal('close');
   }
}


// - - - - - - Emails et passwords Inputs 
const email = document.querySelector('.inscription-background input[name=email]');
const confirm_email = document.querySelector('.inscription-background input[name=confirm_email]');
const password = document.querySelector('.inscription-background input[name=password]');
const confirm_password = document.querySelector('.inscription-background input[name=confirm_password]');
const signupSubmitBtn = document.querySelector('.inscription-background input[type=submit]');


const tooltip = tippy(document.querySelector('#signupBtn'));
tooltip.setProps({
   'arrow': false,
   'placement': 'top',
})
tooltip.setContent("Vous devez d'abord remplir tous les champs. 🤣");

// - - - - - - CHECK EMAIL ET PASSWORD
confirm_email.addEventListener('keyup', function() {
   if(email.value != '' && confirm_email.value != '' && email.value === confirm_email.value) {
      console.log('email matchs');
      confirm_password.addEventListener('keyup', function() {
         if(password.value != '' && confirm_password.value != '' && password.value === confirm_password.value) {
            console.log('passwords matchs');
            signupSubmitBtn.removeAttribute('disabled');
            tooltip.setContent('Tout à l\'air d\'être bon, cliquez pour valider !')
         } else {
            console.log('passwords does not match');
            signupSubmitBtn.setAttribute('disabled', '');
         }
      });
   } else {
      console.log('email does not match');
      signupSubmitBtn.classList.add('disabled');
   }
})



// - - - - - - - - - - - - - - - - - - - - -
// - - - - - - - FUNCTIONS - - - - - - - - -
// - - - - - - - - - - - - - - - - - - - - -

function userMenu(toggle) {
   if(toggle === 'open') {
      menu.classList.add('opened');
      memberIcon.classList.add('opened');
   } else {
      menu.classList.remove('opened');
      memberIcon.classList.remove('opened');
   }
}
function signupModal(toggle) {
   if (toggle == 'open') {
      modalSignup.classList.add('opened');
      menu.classList.remove('opened');
      memberIcon.classList.remove('opened');
   } else {
      modalSignup.classList.remove('opened')
   }
}
function loginModal(toggle) {
   if(toggle === 'open') {
      modalLogin.classList.add('opened');
      menu.classList.remove('opened');
      memberIcon.classList.remove('opened');
   } else {
      modalLogin.classList.remove('opened');
   }
}
function disconnectModal(toggle) {
   if(toggle == 'open') {
      modalDisconnect.classList.add('opened');
      menu.classList.remove('opened');
      memberIcon.classList.remove('opened');
   } else {
      modalDisconnect.classList.remove('opened');
   }
}