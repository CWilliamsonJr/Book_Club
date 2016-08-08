<?php
  function Redirect($extra){
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');    
    header("Location: http://$host$uri/$extra");
  }
  function dump($var,$name = ''){
      $loc = $_SERVER['HTTP_HOST'];
      echo "var_dump for $name at $loc ";
      var_dump($var);
  }
 ?>
