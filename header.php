<?php
if(!isset($_COOKIE['id'])){
?>
<a href="signin.php">Sign in</a>
<?php }
else {?>
<a href="controlers/logout.php">Log out</a>
<?php }?>