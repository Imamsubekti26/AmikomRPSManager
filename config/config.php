<?php

// data yang dibutuhkan untuk koneksi ke db
const DB_SERVER = "localhost";
const DB_USER = "root";
const DB_PASS = "";
const DB_NAME = "amikom_rps_manager";

// bikin koneksi ke database
$db = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($db -> connect_errno) {
  die('gagal koneksi:'.$db -> connect_error);
}

// memastikan method yang dipakai
function method_must($method){
  $method_in_lower = strtolower($method);
  $method_in_upper = strtoupper($method);
  if(!($_SERVER['REQUEST_METHOD'] !== $method_in_lower || $_SERVER['REQUEST_METHOD'] !== $method_in_upper)){
    header("HTTP/1.0 403 Forbidden");
    die("http method ".$_SERVER['REQUEST_METHOD']." is not allowed for this route");
  }
}