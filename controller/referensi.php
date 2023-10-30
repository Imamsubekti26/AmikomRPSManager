<?php

/**
 * 
 */
class Referensi
{

  /** */
  public static function getAll($id_jadwal) {
    global $db;

    $q = "SELECT * FROM `referensi_pembelajaran` WHERE `id_jadwal` = '$id_jadwal' ORDER BY `id_ref` DESC";
    return $db -> query($q) -> fetch_all(MYSQLI_ASSOC);
  }
  
  /** */
  public static function store($id_jadwal) {
    global $db;
    $dt = json_decode(file_get_contents("php://input"));

    $q = "INSERT INTO `referensi_pembelajaran`(`id_ref`, `id_jadwal`, `deskripsi`) VALUES (NULL,'$id_jadwal','$dt->deskripsi')";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

  /** */
  public static function delete($id_ref) {
    global $db;

    $q = "DELETE FROM `referensi_pembelajaran` WHERE `id_ref` = '$id_ref'";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

}