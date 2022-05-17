<?php session_start(); ?>
<?php if(isset($_SESSION['connected']) && $_SESSION['connected']) : ?>
   <span class="connected green"><i class="fa-solid fa-circle-dot"></i> Connecté</span>
<?php else : ?>
   <span class="disconnected red"><i class="fa-solid fa-circle-dot"></i> Déconnecté</span>
<?php endif ?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/style/main.css">
   <link rel="shortcut icon" href="assets/favicon16.ico" type="image/x-icon">
   <title><?= $tabTitle ?></title>
</head>
<body>
   <main>
      <header class="navigation-header">
         <a href="/"><img src="assets/imgs/logo_black.png" alt="Flowbnb Logotype"></a>
         <ul>
            <li><a href="#" class="nav-links">Hébergements</a></li>
            <?php if(!empty($_SESSION['user_group']) && $_SESSION['user_group'] === 'admin') : ?>
               <li><a href="#" class="nav-links">Dashboard</a></li>
            <?php endif ?>
            <li><a href="#" class="nav-links">Expériences</a></li>
         </ul>
         <section>
            <a href="#" class="host">Devenez hôte</a>
            <div class="member-icon">
               <?php if(empty($_SESSION['connected'])) : ?>
                  <img src="assets/imgs/default_user.jpg" alt="Default User Icon">
               <?php else : ?>
                  <img src="<?= $_SESSION['picture'] ?>" alt="Photo de profil">
               <?php endif ?>
            </div>
            <div class="menu">
               <span class="close">&times;</span>
               <ul>
                  <?php if(empty($_SESSION['connected'])) : ?>
                     <li><a href="#" onclick="signupModal('open')">S'inscrire</a></li>
                     <li><a href="#" onclick="loginModal('open')">Se connecter</a></li>
                  <?php else: ?>
                     <li><a href="#">Mon compte</a></li>
                     <li><a href="?controller=user&action=disconnect">Se déconnecter</a></li>
                     <li><a href="#" onclick="disconnectModal('open')">Se déconnecter (modal)</a></li>
                  <?php endif ?>
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
               <span class="close" onclick="loginModal('close')">&times;</span>
               <h4>Connexion</h4>
            </header>
            <hr>
            <form action="?controller=user&action=login" method="post">
               <h3>Bienvenue sur Flowbnb, connectez-vous à votre compte.</h3>
               <br>
               <div class="identifiants">
                  <input type="email" placeholder="Email" name="email" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" autocomplete="off" required>
                  <input type="password" placeholder="Mot de passe" name="password" autocomplete="off" required>
                  <span class="valid">Entrez votre mot de passe</span>
                  <span class="invalid">Saisissez votre email</span>
               </div>
               <div class="identifiants">
                  <input type="submit" value="Se connecter" name="submit">
               </div>
            </form>
            <span class="modal-or">ou</span>
            <a href="#" class="btn" onclick="signupModal('open'); loginModal('close')">S'inscrire</a>
         </div>
      </div>

      <!-- Signup Modal -->
      <div class="inscription-background">
         <div class="modal">
            <header>
               <span class="close" onclick="signupModal('close')">&times;</span>
               <h4>Inscription</h4>
            </header>
            <hr>
            <form action="?controller=user&action=signup" method="post">
               <h3>Bienvenue sur Flowbnb, inscrivez-vous dès maintenant pour de nouvelles expériences.</h3>
               <br>
               <div class="identifiants">
                  <input type="text" placeholder="Nom" class="ucfirst" name="nom" required autocomplete="off">
                  <input type="text" placeholder="Prénom" class="ucfirst" name="prenom" required autocomplete="off">
               </div>
               <div class="identifiants">
                  <input type="email" placeholder="Email" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" name="email" required autocomplete="off">
                  <input type="email" placeholder="Confirme ton adresse email" name="confirm_email" autocomplete="off">
               </div>
               <div class="identifiants">
                  <input type="tel" placeholder="Numéro de mobile" name="phone" required autocomplete="off">
               </div>
               <div class="identifiants">
                  <input type="password" placeholder="Mot de passe" name="password" required>
                  <input type="password" placeholder="Confirme ton mot de passe" name="confirm_password" required>
               </div>
               <div class="identifiants">
                  <span id="signupBtn">
                     <input type="submit" value="Créer mon compte" name="submit" disabled>
                  </span>
               </div>
            </form>
            <span class="modal-or">ou</span>
            <a href="#" class="btn" onclick="loginModal('open'); signupModal('close')">J'ai déjà un compte</a>
         </div>
      </div>
   
      <?php if(!empty($_SESSION['connected']) && $_SESSION['connected']) require '../template/modals/disconnect.html.php'; ?>
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