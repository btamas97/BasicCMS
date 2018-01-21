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
      $query->bindValue(1,$article_id);
      $query->execute()

      return $query->fetch();
    }

    public function shorten($stringLong){
      if (strlen($string)>350)
      {
        $string = substr($stringLong),0,350);
        $string = substr($string,0,strpos($string, ' '))."...";
        return $string;
      }
    }
  }
 ?>
