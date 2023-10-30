<?php

/**
 * 
 */
class Tugas
{

  /** */
  public static function getAll($id_jadwal) {
    global $db;

    $q = "SELECT * FROM `tugas` WHERE `id_jadwal` = '$id_jadwal'";
    return $db -> query($q) -> fetch_all(MYSQLI_ASSOC);
  }

  /** */
  public static function getOne($id_tugas) {
    global $db;

    $q = "SELECT * FROM `tugas` WHERE `id_tugas` = '$id_tugas'";
    return $db -> query($q) -> fetch_assoc();
  }
  
  /** */
  public static function store($id_jadwal) {
    global $db;
    $dt = json_decode(file_get_contents("php://input"));

    $q = "INSERT INTO `tugas`(`id_tugas`, `id_jadwal`, `judul`, `tugas`, `kemampuan`, `kriteria_pen`, `indikator_pen`, `lama_waktu`, `bobot_nilai`) VALUES (NULL,'$id_jadwal','$dt->judul','$dt->tugas','$dt->kemampuan','$dt->kriteria_pen','$dt->indikator_pen','$dt->lama_waktu','$dt->bobot_nilai')";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

  /** */
  public static function update($id_tugas) {
    global $db;
    $dt = json_decode(file_get_contents("php://input"));

    $q = "UPDATE `tugas` SET `id_jadwal`='$dt->id_jadwal',`judul`='$dt->judul',`tugas`='$dt->tugas',`kemampuan`='$dt->kemampuan',`kriteria_pen`='$dt->kriteria_pen',`indikator_pen`='$dt->indikator_pen',`lama_waktu`='$dt->lama_waktu',`bobot_nilai`='$dt->bobot_nilai' WHERE `tugas`.`id_tugas` = $id_tugas";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

  /** */
  public static function delete($id_tugas) {
    global $db;

    $q = "DELETE FROM `tugas` WHERE `id_tugas` = '$id_tugas'";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

}