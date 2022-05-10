<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/style/main.css">
   <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
   <title><?= $tabTitle ?></title>
</head>
<body>
   <main>
      <header class="navigation-header">
         <a href="/"><img src="assets/imgs/logo_black.png" alt="Flowbnb Logotype"></a>
         <ul>
            <li><a href="#" class="nav-links">Hébergements</a></li>
            <li><a href="#" class="nav-links">Expériences</a></li>
         </ul>
         <section>
            <a href="#" class="host">Devenez hôte</a>
            <div class="member-icon">
               <img src="assets/imgs/default_user.jpg" alt="Default User Icon">
            </div>
            <div class="menu">
               <span class="close">&times;</span>
               <ul>
                  <li><a href="#" id="signup">S'inscrire</a></li>
                  <li><a href="#" id="login">Se connecter</a></li>
                  <!-- <li><a href="?controller=member&action=signup">S'inscrire</a></li> -->
                  <!-- <li><a href="?controller=member&action=login">Se connecter</a></li> -->
                  <hr>
                  <li><a href="#">Héberger des voyageur</a></li>
                  <li><a href="#">Créer une expérience</a></li>
                  <li><a href="#">Aide</a></li>
               </ul>
            </div>
         </section>
      </header>
      <?= $content ?>

      <!-- Connexion Modal -->
      <div class="connexion-background">
         <div class="modal">
            <header>
               <span class="close">&times;</span>
               <h4>Connexion</h4>
            </header>
            <hr>
            <form action="" method="post">
               <h3>Bienvenue sur Flowbnb, connectez-vous à votre compte.</h3>
               <br>
               <div class="identifiants">
                  <input type="email" placeholder="Email" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" required>
                  <input type="password" placeholder="Mot de passe" required>
                  <span class="valid">Entrez votre mot de passe</span>
                  <span class="invalid">Saisissez votre email</span>
               </div>
               <div class="identifiants">
                  <input type="submit" value="Se connecter">
               </div>
            </form>
            <span class="modal-or">ou</span>
            <a href="?controller=member&action=signup" class="btn">S'inscrire</a>
         </div>
      </div>
      <!-- Signup Modal -->
      <div class="inscription-background">
         <div class="modal">
            <header>
               <span class="close">&times;</span>
               <h4>Inscription</h4>
            </header>
            <hr>
            <form action="" method="post">
               <h3>Bienvenue sur Flowbnb, inscrivez-vous dès maintenant pour de nouvelles expériences.</h3>
               <br>
               <div class="identifiants">
                  <input type="text" placeholder="Nom" class="ucfirst" name="nom" required>
                  <input type="text" placeholder="Prénom" class="ucfirst" name="prenom" required>
               </div>
               <div class="identifiants">
                  <input type="email" placeholder="Email" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" name="email" required>
                  <input type="email" placeholder="Confirme ton adresse email" name="confirm_email">
               </div>
               <div class="identifiants">
                  <input type="tel" placeholder="Numéro de mobile" name="phone" required>
               </div>
               <div class="identifiants">
                  <input type="password" placeholder="Mot de passe" name="password" required>
                  <input type="password" placeholder="Confirme ton mot de passe" name="confirm_password" required>
               </div>
               <div class="identifiants">
                  <input type="submit" value="Créer mon compte" class="bg-secondary disabled" name="submit" id="signupBtn">
               </div>
            </form>
            <span class="modal-or">ou</span>
            <a href="?controller=member&action=login" class="btn">J'ai déjà un compte</a>
         </div>
      </div>
   </main>

      <!-- Tippy -->
   <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
   <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
   
      <!-- Own script -->
   <script src="assets/js/main.js"></script>
   
      <!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/d1a8ed5b5c.js" crossorigin="anonymous"></script>
</body>
</html>