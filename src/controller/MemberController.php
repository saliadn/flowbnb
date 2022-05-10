<?php

require '../core/View.php';

class MemberController extends Manager {
   public function login() {
      $view = new View('member/login.html.php', [
         'tabTitle' => 'Flowbnb — Connectez-vous'
      ]);
      $view->render();
   }
   public function signup() {
      $view = new View('member/signup.html.php', [
         'tabTitle' => 'Flowbnb — Inscrivez-vous'
      ]);
      $view->render();
   }

}