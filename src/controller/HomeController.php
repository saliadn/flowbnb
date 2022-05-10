<?php

require '../core/View.php';

class HomeController {
   function index() {
      $view = new View('home/index.html.php', [
         'tabTitle' => 'Flowbnb : location de vacances, cabanes, maisons, ...'
      ]);
      $view->render();
   }
}

