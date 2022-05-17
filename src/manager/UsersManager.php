<?php

require '../core/Manager.php';

class UsersManager extends Manager {
   const TABLE = 'users';

   public function getAll() {
      $sql = 'SELECT * FROM ' . self::TABLE;
      $req = $this->db->query($sql);
      return $req->fetchAll();
   }

   public function getById($id) {
      $sql = 'SELECT * FROM ' . self::TABLE . ' WHERE id = :id';
      $req = $this->db->prepare($sql);
      $req->execute(['id' => $id]);
      return $req->fetch();
   }

   public function checkIfUserExists($email) {
      $sql = 'SELECT count(*) FROM ' . self::TABLE . ' WHERE email = :email';
      $req = $this->db->prepare($sql);
      $req->execute(['email' => $email]);
      return $req->fetchColumn();
   }

   public function getByEmail($email) {
      $sql = 'SELECT * FROM ' . self::TABLE . ' WHERE email = :email';
      $req =  $this->db->prepare($sql);
      $req->execute(['email' => $email]);
      return $req->fetch();
   }

   public function insert(array $data) {
      $sql = 'INSERT INTO ' . self::TABLE . ' (nom, prenom, email, phone, password) VALUES (:nom, :prenom, :email, :phone, :password)';
      $req = $this->db->prepare($sql);
      $req->execute($data);
      return $this->db->lastInsertId();
   }

   public function update(array $data) {
      $sql = 'UPDATE ' . self::TABLE . ' SET nom = :nom, prenom = :prenom WHERE id = :id';
      $req = $this->db->prepare($sql);
      $req->execute($data);
      return $req->rowCount();
      // return $this->db->rowCount(); ne fonctionne pas
   }

   public function delete(int $id) {
      // $article = $this->getById($id);
      // $article['is_archived'] = 1;
      // return $this->update($article);
      $sql = 'DELETE FROM ' . self::TABLE . ' WHERE id = :id';
      $req = $this->db->prepare($sql);
      $req->execute(['id' => $id]);
   }
}