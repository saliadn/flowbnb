<?php

// require '../config/autoloader.php'; // a voir

$controller = !empty($_GET['controller']) ? $_GET['controller'] : 'home';
$controllerName = ucfirst($controller) . 'Controller';

if(file_exists('../src/controller/' . $controllerName . '.php'))
{
  require '../src/controller/' . $controllerName . '.php';
  
  $inst = new $controllerName();

  $action = !empty($_GET['action']) ? $_GET['action'] : 'index';

  if(method_exists($controllerName, $action))
  {
    $inst->$action();
  }
  else
  {
    require '../src/controller/ErrorController.php';
    $inst = new ErrorController();
    $inst->error404();
  }
}
else
{
  require '../src/controller/ErrorController.php';
  $inst = new ErrorController();
  $inst->error404();
}