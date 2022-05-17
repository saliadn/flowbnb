   <?php

require '../core/View.php';
require '../src/manager/UsersManager.php';

class UserController extends Manager {
   public function login() {
      if(!empty($_POST['submit'])) {
         if(!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userManager = new UsersManager();
            $user = $userManager->getByEmail($email);
            if($user) {
               if(password_verify($password, $user['password'])) {
                  session_start();
                  $_SESSION['connected'] = true;
                  $_SESSION['nom'] = $user['nom'];
                  $_SESSION['prenom'] = $user['prenom'];
                  $_SESSION['email'] = $user['email'];
                  $_SESSION['phone'] = $user['phone'];
                  $_SESSION['picture'] = $user['picture'];
                  $_SESSION['user_group'] = $user['user_group'];
                  header('Location: /?controller=home');
                  exit();
               }
            } else {
               header('Location: ?controller=user&action=loginError');
            }
         }
      }
   }
   public function loginError() {
      $view = new View('user/loginError.html.php', ['tabTitle' => 'Flowbnb — Connexion echouée']);
      $view->render();
   }

   public function signup() {
      $view = new View('user/signup.html.php', [
         'tabTitle' => 'Flowbnb — Inscrivez-vous'
      ]);
      $view->render();

      if(!empty($_POST['submit'])) {
         $nom = strtoupper($_POST['nom']);
         $prenom = ucfirst($_POST['prenom']);
         $email = $_POST['confirm_email'];
         $phone = $_POST['phone'];
         $password = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);

         $userManager = new UsersManager();
         $userExist = $userManager->checkIfUserExists($email);
         if($userExist > 0) {
            echo 'Cette adresse email est déjà utilisé.';
         } else {
            $newUser = $userManager->insert([
               'nom' => $nom,
               'prenom' => $prenom,
               'email' => $email,
               'phone' => $phone,
               'password' => $password
            ]);
         }
      }
   }

   public function disconnect() {
      session_start();
      $_SESSION[''] = NULL;
      session_destroy();
      header('Location: /');
   }
}