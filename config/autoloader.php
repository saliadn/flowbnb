<?php

spl_autoload_register(function($className) {
   require '../src/controller/' . $className . '.php';
});