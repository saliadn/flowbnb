<?php

require '../core/Manager.php';

class AmenitiesManager {
   const TABLE = 'amenities';

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

   public function insert(array $data) {
      $sql = 'INSERT INTO ' . self::TABLE . ' (label) VALUES (:label)';
      $req = $this->db->prepare($sql);
      $req->execute($data);
      return $this->db->lastInsertId();
   }

   public function update(array $data) {
      $sql = 'UPDATE ' . self::TABLE . ' SET label = :label WHERE id = :id';
      $req = $this->db->prepare($sql);
      $req->execute($data);
      return $req->rowCount();
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