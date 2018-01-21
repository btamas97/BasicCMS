<?php
  class Article{
    public function fetch_all(){
      global $pdo;

      $query = $pdo->prepare("Select * FROM cms_articles");
      $query->execute();

      return $query->fetchAll();
    }
  }
 ?>
