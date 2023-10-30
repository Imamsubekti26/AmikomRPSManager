<?php

/**
 * 
 */
class Nilai
{

  /** */
  public static function getAll($id_jadwal) {
    global $db;

    $q = "SELECT * FROM `persentase_penilaian` WHERE `id_jadwal` = '$id_jadwal' ORDER BY `id_nilai` DESC";
    
    return $db -> query($q) -> fetch_all(MYSQLI_ASSOC);
  }
  
  /** */
  public static function store($id_jadwal) {
    global $db;
    $dt = json_decode(file_get_contents("php://input"));

    $q = "INSERT INTO `persentase_penilaian`(`id_nilai`, `id_jadwal`, `deskripsi`, `persentase`) VALUES (NULL,'$id_jadwal','$dt->deskripsi','$dt->persentase')";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

  /** */
  public static function delete($id_nilai) {
    global $db;

    $q = "DELETE FROM `persentase_penilaian` WHERE `id_nilai` = '$id_nilai'";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

}