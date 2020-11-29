<?php

// connection for databasse
$conn = mysqli_connect('localhost', 'root', '', 'aviano-db');


// check connection + error page redirect
if(!$conn){
  header("Location: error.php");
  exit;
}

?>