<?php
session_start();
header("location:index.php?Empty = Saliste de la applicación.");
session_unset();

session_destroy();
?>