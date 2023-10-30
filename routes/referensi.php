<?php

session_start();

include '../config/config.php';
include '../controller/referensi.php';

switch ($_GET['x']) {
  case '1':
    method_must('post');
    $status = Referensi::store($_GET['id']);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $status]);
    $db -> close();
    break;
    
  case '2':
    method_must('get');
    $data = Referensi::getAll($_GET['id']);
    echo json_encode($data);
    $db -> close();
    break;
    
  case '3':
    method_must('delete');
    $status = Referensi::delete($_GET['id']);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $status]);
    $db -> close();
    break;

  default:
    header("location: ../dashboard.php");
    break;
}
