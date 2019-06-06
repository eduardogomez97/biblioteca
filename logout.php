<?php
@session_start();
session_destroy();
$url = "inicio";
     header("Location: $url");
     die();
?>