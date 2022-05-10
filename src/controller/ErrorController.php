<?php

require '../core/View.php';

class ErrorController {
   public function error404() {
      $view = new View('error404/index.html.php', ['tabTitle' => 'Flowbnb — Page inexistante']);
      $view->render();
   }
}