<?php
  class Article{
    public function fetch_all(){
      $pdo = connect();

      $query = $pdo->prepare("SELECT * FROM cms_articles ORDER BY id desc");
      $query->execute();

      return $query->fetchAll();
    }

    public function fetch_data($article_id){
      $pdo = connect();

      $query = $pdo->prepare("SELECT * FROM cms_articles WHERE id = ?");
      $query->bindValue(1,$article_id, PDO::PARAM_STR);
      $query->execute();
      return $query->fetch();
    }
  }
 ?>
