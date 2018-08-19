<?php
require_once "connect.php";
//unset($_COOKIE['id']);
setcookie("a", "1", time()-1, '/');
var_dump($_COOKIE);
//header("location: ../index.php");
?>