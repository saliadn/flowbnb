<div class="container">
   <h1>Connectez-vous à votre compte Flowbnb.</h1>
   <p class="error"><i class="fa-solid fa-circle-exclamation"></i> Email ou mot de passe non reconnu, vos identifiants sont incorrects. Veuillez réessayer de vous connecter ou <a href="#" onclick="signupModal('open')">créez-vous un compte.</a></p>
</div>
   <div class="container">
      <form action="?controller=user&action=login" method="post">
         <div class="input-group">
            <input type="email" placeholder="Email" name="email" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" autocomplete="off" required>
            <input type="password" placeholder="Mot de passe" name="password" autocomplete="off" required>
         </div>
         <div class="input-group">
            <input type="submit" value="Se connecter" name="submit">
         </div>
      </form>
      <div class="input-group">
         <span class="modal-or">ou</span>
         <a href="?controller=user&action=signupPage" class="btn">S'inscrire</a>
      </div>
   </div>
</div>