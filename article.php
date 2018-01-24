<?php
  class Article{
    public function fetch_all(){
      global $pdo;

      $query = $pdo->prepare("Select * FROM cms_articles");
      $query->execute();

      return $query->fetchAll();
    }

    public function fetch_data($article_id){
      global $pdo;

      $query = $pdo->prepare("SELECT * FROM cms_articles WHERE id = ?");
      $query->bindValue(1,$article_id, PDO::PARAM_STR);
      $query->execute();
    #  $result=$query->fetch();
    #  echo $result['text'];
      return $query->fetch();
    }
  }
 ?>
