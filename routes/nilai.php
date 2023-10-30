<?php

session_start();

include '../config/config.php';
include '../controller/nilai.php';

switch ($_GET['x']) {
  case '1':
    method_must('post');
    $status = Nilai::store($_GET['id']);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $status]);
    $db -> close();
    break;
    
  case '2':
    method_must('get');
    $data = Nilai::getAll($_GET['id']);
    echo json_encode($data);
    $db -> close();
    break;
    
  case '3':
    method_must('delete');
    $status = Nilai::delete($_GET['id']);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $status]);
    $db -> close();
    break;

  default:
    header("location: ../dashboard.php");
    break;
}
