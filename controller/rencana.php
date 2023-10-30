<?php

/**
 * 
 */
class Rencana
{

  /** */
  public static function getAll($id_jadwal) {
    global $db;

    $q = "SELECT * FROM `rencana_pembelajaran` WHERE `id_jadwal` = '$id_jadwal' ORDER BY `pertemuan_ke`";
    return $db -> query($q) -> fetch_all(MYSQLI_ASSOC);
  }

  /** */
  public static function getOne($id_rencana) {
    global $db;

    $q = "SELECT * FROM `rencana_pembelajaran` WHERE `id_rencana` = '$id_rencana'";
    return $db -> query($q) -> fetch_assoc();
  }
  
  /** */
  public static function store($id_jadwal) {
    global $db;
    $dt = json_decode(file_get_contents("php://input"));

    $q = "INSERT INTO `rencana_pembelajaran`(`id_rencana`, `id_jadwal`, `pertemuan_ke`, `kemampuan`, `indikator`, `topik_subtopik`, `strategi`, `lama_waktu`, `penilaian`) VALUES (NULL,'$id_jadwal','$dt->pertemuan_ke','$dt->kemampuan','$dt->indikator','$dt->topik_subtopik','$dt->strategi','$dt->lama_waktu','$dt->penilaian')";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

  /** */
  public static function update($id_rencana) {
    global $db;
    $dt = json_decode(file_get_contents("php://input"));

    $q = "UPDATE `rencana_pembelajaran` SET `id_jadwal`='$dt->id_jadwal',`pertemuan_ke`='$dt->pertemuan_ke',`kemampuan`='$dt->kemampuan',`indikator`='$dt->indikator',`topik_subtopik`='$dt->topik_subtopik',`strategi`='$dt->strategi',`lama_waktu`='$dt->lama_waktu',`penilaian`='$dt->penilaian' WHERE `rencana_pembelajaran`.`id_rencana` = $id_rencana";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

  /** */
  public static function delete($id_rencana) {
    global $db;

    $q = "DELETE FROM `rencana_pembelajaran` WHERE `id_rencana` = '$id_rencana'";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

}