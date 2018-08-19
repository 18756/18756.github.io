<?php
require_once "controlers/no_cache.php";
require_once "header.php";

if(isset($_COOKIE['signin'])){?>

    <h3>Вы успешно вошли</h3>

<?php 
setcookie("signin", "1", time()-1, '/');
}
?>


<h1>Вопросы: </h1>