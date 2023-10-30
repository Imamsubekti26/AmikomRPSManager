<?php

/**
 * 
 */
class UnitPem
{

  /** */
  public static function getAll($id_jadwal) {
    global $db;

    $q = "SELECT * FROM `unit_pembelajaran` WHERE `id_jadwal` = '$id_jadwal'";
    return $db -> query($q) -> fetch_all(MYSQLI_ASSOC);
  }

  /** */
  public static function getOne($id_unit) {
    global $db;

    $q = "SELECT * FROM `unit_pembelajaran` WHERE `id_unit` = '$id_unit'";
    return $db -> query($q) -> fetch_assoc();
  }
  
  /** */
  public static function store($id_jadwal) {
    global $db;
    $dt = json_decode(file_get_contents("php://input"));

    $q = "INSERT INTO `unit_pembelajaran` (`id_unit`, `id_jadwal`, `judul`, `kemampuan`, `indikator`, `bahan_kajian`, `metode_pem`, `metode_pen`, `lama_waktu`, `bahan_ajar`) VALUES (NULL, '$id_jadwal', '$dt->judul', '$dt->kemampuan', '$dt->indikator', '$dt->bahan_kajian', '$dt->metode_pem', '$dt->metode_pen', '$dt->lama_waktu', '1')";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

  /** */
  public static function update($id_unit) {
    global $db;
    $dt = json_decode(file_get_contents("php://input"));

    $q = "UPDATE `unit_pembelajaran` SET `id_jadwal` = '$dt->id_jadwal', `judul` = '$dt->judul', `kemampuan` = '$dt->kemampuan ', `indikator` = '$dt->indikator ', `bahan_kajian` = '$dt->bahan_kajian', `metode_pem` = '$dt->metode_pem', `metode_pen` = '$dt->metode_pen ', `lama_waktu` = '$dt->lama_waktu', `bahan_ajar` = '1' WHERE `unit_pembelajaran`.`id_unit` = $id_unit";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

  /** */
  public static function delete($id_unit) {
    global $db;

    $q = "DELETE FROM `unit_pembelajaran` WHERE `id_unit` = '$id_unit'";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

}