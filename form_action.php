<?php
$cookie_name = "user";
$cookie_value = "Kate";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
