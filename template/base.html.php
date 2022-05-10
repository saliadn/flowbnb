<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/style/main.css">
   <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
   <title><?= $tabTitle ?></title>
</head>
<main>
   <body>
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
                  <input type="submit" value="Se connecter">
                  <span class="valid">Entrez votre mot de passe</span>
                  <span class="invalid">Saisissez votre email</span>
               </div>
            </form>
            <span class="modal-or">ou</span>
            <a href="?controller=member&action=signup" class="btn">S'inscrire</a>
         </div>
      </div>
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
                  <input type="email" placeholder="Email" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" required>
                  <input type="password" placeholder="Mot de passe" required>
                  <input type="submit" value="Se connecter">
                  <span class="valid">Entrez votre mot de passe</span>
                  <span class="invalid">Saisissez votre email</span>
               </div>
            </form>
         </div>
      </div>
   </body>
   <script src="https://kit.fontawesome.com/d1a8ed5b5c.js" crossorigin="anonymous"></script>
   <script src="assets/js/main.js"></script>
</main>
</html>