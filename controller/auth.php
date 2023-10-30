<?php

/**
 * 
 */
class Auth
{

  /** */
  public static function Login(){
    global $db;

    // mendapatkan data yg dibutuhkan
    $nik = $_POST['nik'];
    $pass = md5($_POST['pass']);

    // mendapatkan data dari database
    $q = "SELECT `nik`, `name` FROM `dosen` WHERE `nik` = '$nik' AND `pass` = '$pass' LIMIT 1";
    $r = $db->query($q)->fetch_assoc();

    // cek apa datanya ada atau tidak
    if(empty($r)) {
      $_SESSION['msg'] = "user atau password salah";
      $_SESSION['old']['nik'] = $nik;
      header("location: ../login.php");
      return;
    }

    // bikin session lalu redirect
    $_SESSION['user'] = [
      'nik' => $r['nik'],
      'name' => $r['name'],
    ];
    header("location: ../dashboard.php");
    exit;
  }

  /** */
  public static function Logout(){
    // hancurkan semua session lalu redirect
    $_SESSION['user'];
    session_destroy();
    header("location: ../login.php");
    return;
  }

  /** */
  public static function Register(){
    global $db;
  
    // mendapatkan data yg dibutuhkan
    $nik = $_POST['nik'];
    $name = $_POST['name'];
    $pass = md5($_POST['pass'][0]);
    
    // cek apa sandi dan konfirmasinya sudah sama
    if($_POST['pass'][0] != $_POST['pass'][1]){
      $_SESSION['msg'] = "pastikan kedua password sudah sama";
      header("location: ../register.php");
      return;
    }

    // masukkan data ke db
    $q = "INSERT INTO `dosen`(`nik`, `name`, `pass`) VALUES ('$nik','$name', '$pass')";
    $db -> query($q);

    // cek apakah data berhasil masuk db atau tidak
    if($db -> affected_rows <= 0) {
      $_SESSION['msg'] = "gagal registrasi";
      $_SESSION['old'] = [
        'nik' => "$nik",
        'name' => "$name",
      ];
      header("location: ../register.php");
      return;
    }

    // set flash msg lalu redirect
    $_SESSION['msg'] = "berhasil registrasi! silahkan login";
    header("location: ../login.php");
    return;
  }
}