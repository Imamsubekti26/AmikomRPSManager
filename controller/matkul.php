<?php

/**
 * 
 */
class Matkul
{
  public static function getAll($search){
    global $db;

    $q = "SELECT * FROM `matkul` WHERE `nama_matkul` LIKE '%$search%'";
    return $db -> query($q) -> fetch_all(MYSQLI_ASSOC);
  }

  public static function store($namaMatkul){
    global $db;

    $q = "INSERT INTO `matkul`(`id_matkul`, `nama_matkul`) VALUES (NULL,'$namaMatkul')";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

  public static function searchOrAdd($namaMatkul){
    $ada = self::getAll($namaMatkul);
    if(count($ada) <= 0){
      self::store($namaMatkul);
      $ada = self::searchOrAdd($namaMatkul);
    }
    return $ada[0]["id_matkul"];
  }
}