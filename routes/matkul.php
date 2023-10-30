<?php

session_start();

include '../config/config.php';
include '../controller/jadwal.php';
include '../controller/prodi.php';
include '../controller/matkul.php';

switch ($_GET['x']) {
  case '1': // get all data from db
    method_must('get');
    $data = Jadwal::getAll($_GET['filter']);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    $db -> close();
    break;
  
  case '2': // store data to db
    $id_matkul = Matkul::searchOrAdd($_POST['nama_matkul']);
    $id_prodi = Prodi::searchOrAdd($_POST['nama_prodi']);
    $data = $_POST;
    $data['id_matkul'] = $id_matkul;
    $data['id_prodi'] = $id_prodi;

    Jadwal::store($data);
    $db -> close();
    break;
  
  case '31': // delete RPS from db
    method_must('get');
    Jadwal::delete($_GET['id']);
    break;
  
  case '32': // activate RPS (just change status data on db)
    method_must('get');
    Jadwal::changeStatus($_GET['id'], 1);
    break;
  
  case '33': // archive RPS (just change status data on db)
    method_must('get');
    Jadwal::changeStatus($_GET['id'], 2);
    break;
  
  case '34': // revision RPS (just change status data on db)
    method_must('get');
    Jadwal::changeStatus($_GET['id'], 0);
    break;
  
  case '35': // copy RPS (insert data to db)
    // storeData();
    break;
    
  case '41': // update gambaran umum
    method_must('post');
    $data_post = json_decode(file_get_contents("php://input"));
    $status = Jadwal::changeText($_GET['id'], 'gambaran_umum', $data_post->value);
    header('Content-Type: application/json; charset=utf-8');
    $db -> close();
    echo json_encode(['success' => $status]);
    break;
  
  case '42': // update capaian pembelajaran
    method_must('post');
    $data_post = json_decode(file_get_contents("php://input"));
    $status = Jadwal::changeText($_GET['id'], 'capaian_pembelajaran', $data_post->value);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $status]);
    $db -> close();
    break;
  
  case '43': // update prasyarat
    method_must('post');
    $data_post = json_decode(file_get_contents("php://input"));
    $status = Jadwal::changeText($_GET['id'], 'prasyarat', $data_post->value);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $status]);
    $db -> close();
    break;
  
  case '5': // update basic information
    method_must('post');
    Jadwal::changeBasic($_GET['id']);
    break;
  
  case '61': // mencari nama prodi
    method_must('get');
    $data = Prodi::getAll($_GET['search']);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    $db -> close();
    break;
  
  case '62': // mencari nama prodi
    method_must('get');
    $data = Matkul::getAll($_GET['search']);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    $db -> close();
    break;
    
  default:
    header("location: ../dashboard.php");
    break;
}

// $db -> close();
