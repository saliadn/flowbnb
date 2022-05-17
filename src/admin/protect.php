<?php

if (empty($_SESSION) || !$_SESSION['connected'] || $_SESSION['user_group'] != 'admin') {
   header('Location: /');
}