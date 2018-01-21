<?php
  class Article{
    public function fetch_all(){
      global $pdo;

      $query = $pdo->prepare("Select * FROM cms_articles");
      $query->execute();

      return $query->fetchAll();
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
