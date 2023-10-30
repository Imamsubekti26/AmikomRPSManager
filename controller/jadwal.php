<?php

/**
 * 
 */
class Jadwal
{
  
  /** */
  public static function getAll($filter){
    global $db;

    $dosen = $_SESSION['user']['nik'];
    $search = empty($_GET['search']) ? '' : "AND `matkul`.`nama_matkul` LIKE '%".$_GET['search']."%'";

    $q = "SELECT `jadwal`.`id_jadwal` AS 'id', `jadwal`.`semester`, `jadwal`.`tahun`, `matkul`.`nama_matkul`, `prodi`.`nama_prodi` FROM `jadwal` JOIN `matkul` USING(`id_matkul`) JOIN `prodi` USING(`id_prodi`) WHERE `jadwal`.`dosen` = '$dosen' AND `status` = $filter $search";
    return $db -> query($q) -> fetch_all(MYSQLI_ASSOC);
  }

  /** */
  public static function getDetail($id){
    global $db;

    $q = "SELECT `prodi`.`nama_prodi`, `jadwal`.`dosen`, `dosen`.`name`, `jadwal`.`status`, `jadwal`.`tahun`, `jadwal`.`semester`, `jadwal`.`sks_teori`, `jadwal`.`sks_praktek`, `jadwal`.`gambaran_umum`, `jadwal`.`capaian_pembelajaran`, `jadwal`.`prasyarat`, `matkul`.`nama_matkul` FROM `jadwal` JOIN `dosen` ON `dosen`.`nik` = `jadwal`.`dosen` JOIN `matkul` USING(id_matkul) JOIN `prodi`USING(`id_prodi`) WHERE `id_jadwal` = '$id'";
    return $db -> query($q) -> fetch_assoc();
  }

  public static function store($data){
    global $db;
    $id_matkul = $data['id_matkul'];
    $id_prodi = $data['id_prodi'];
    $semester = $data['semester'];
    $sks_teori = $data['sks_teori'];
    $sks_praktek = $data['sks_praktek'];
    $tahun = $data['tahun'];
    $id_dosen = $_SESSION['user']['nik'];

    $q = "INSERT INTO `jadwal`(`id_jadwal`, `id_matkul`, `id_prodi`, `dosen`, `semester`, `sks_teori`, `sks_praktek`, `tahun`, `status`, `gambaran_umum`, `capaian_pembelajaran`, `prasyarat`) VALUES (NULL,'$id_matkul','$id_prodi','$id_dosen','$semester','$sks_teori','$sks_praktek','$tahun','0','','','')";
    $db -> query($q);
    
    $_SESSION['msg'] = ($db->affected_rows > 0) ? "berhasil mengedit data" : "gagal mengedit data";
    header("location: ../dashboard.php");
  }

  /** */
  public static function changeBasic($id) {
    global $db;

    $semester = $_POST['semester'];
    $tahun = $_POST['tahun'];
    $sks_teori = $_POST['sks_teori'];
    $sks_praktek = $_POST['sks_praktek'];

    $q = "UPDATE `jadwal` SET `semester` = '$semester', `sks_teori` = '$sks_teori', `sks_praktek` = '$sks_praktek', `tahun` = '$tahun' WHERE `jadwal`.`id_jadwal` = '$id'";
    $db -> query($q);

    $_SESSION['msg'] = ($db->affected_rows > 0) ? "berhasil mengedit data" : "gagal mengedit data";
    header("location: ../detail.php?id=$id");
  }

  /** */
  public static function changeStatus($id, $status) {
    global $db;

    $q = "UPDATE `jadwal` SET `status` = '$status' WHERE `jadwal`.`id_jadwal` = '$id'";
    $db -> query($q);

    $_SESSION['msg'] = ($db->affected_rows > 0) ? "status berhasil diubah" : "status gagal diubah!";
    header("location: ../detail.php?id=$id");
  }

  /** */
  public static function changeText($id, $section, $data){
    global $db;

    $q = "UPDATE `jadwal` SET `$section` = '$data' WHERE `jadwal`.`id_jadwal` = '$id'";
    $db -> query($q);
    return ($db->affected_rows > 0);
  }

  /** */
  public static function delete($id){
    global $db;

    $q = "DELETE FROM `jadwal` WHERE `jadwal`.`id_jadwal` = '$id'";
    $db -> query($q);

    $_SESSION['msg'] = ($db->affected_rows > 0) ? "berhasil menghapus data" : "gagal menghapus data";
    header("location: ../dashboard.php");
  }

}