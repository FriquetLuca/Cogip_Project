<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if (isset($_SESSION['mail']) || isset($_SESSION['id'])) {
    session_destroy();
}
header('Location: ./');
die();