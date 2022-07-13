<?php
 class Js
 {
   public function __construct(){
     if (isset($_GET["url"])) {
       $url = $this->parseUrl();
       try {
          $action = Router::getAction($url);
          $method=$action["method"];
          echo '<script src="../app/actions/'.$method.'.js"></script>'; 
       } catch (Exception $e) {
        
       }
     }
   }
   public function parseUrl() {
     if (isset($_GET["url"])) {
      return $_GET["url"];
     }
   }
 }
?>
