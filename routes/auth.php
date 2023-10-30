<?php

session_start();

include '../config/config.php';
include '../controller/auth.php';

switch ($_GET['x']) {
  case '0': // logout
    Auth::Logout();
    break;

  case '1': // login
    Auth::Login();
    $db -> close();
    break;

  case '2': // register
    Auth::Register();
    $db -> close();
    break;
  
  default:
    header("location: ../login.php");
    break;
}