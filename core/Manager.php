<?php 

class Manager {
   protected PDO $db;

   public function __construct() {
      try {
         $this->db = new PDO('mysql:host=localhost;dbname=flowbnb', 'root', 'root', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
      } catch (PDOException $e) {
         die('Erreur : ' . $e->getMessage());
      }
   }
}