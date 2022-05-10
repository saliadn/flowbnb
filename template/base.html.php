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
                  <li><a href="?controller=member&action=signup">S'inscrire</a></li>
                  <li><a href="?controller=member&action=login">Se connecter</a></li>
                  <hr>
                  <li><a href="#">Héberger des voyageur</a></li>
                  <li><a href="#">Créer une expérience</a></li>
                  <li><a href="#">Aide</a></li>
               </ul>
            </div>
         </section>
      </header>
      <?= $content ?>
   </body>
   <script src="assets/js/main.js"></script>
</main>
</html>