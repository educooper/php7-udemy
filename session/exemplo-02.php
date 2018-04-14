<?php
require_once("config.php");
session_unset($_SESSION['nome']);
echo $_SESSION['nome'];
echo "<br/>";
session_destroy;
?>
