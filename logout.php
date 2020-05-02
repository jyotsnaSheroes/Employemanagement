<?php
session_start();
unset($_SESSION["type"]);
unset($_SESSION["name"]);
session_destroy($_SESSION['name']);
header("Location:index.php");
?>