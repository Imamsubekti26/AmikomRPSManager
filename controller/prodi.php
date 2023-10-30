<?php

/**
 * 
 */
class Prodi
{
  public static function getAll($search){
    global $db;

    $q = "SELECT * FROM `prodi` WHERE `nama_prodi` LIKE '%$search%'";
    return $db -> query($q) -> fetch_all(MYSQLI_ASSOC);
  }

  public static function store($namaProdi){
    global $db;

    $q = "INSERT INTO `prodi`(`id_prodi`, `nama_prodi`) VALUES (NULL,'$namaProdi')";
    $db -> query($q);

    return ($db->affected_rows > 0);
  }

  public static function searchOrAdd($namaProdi){
    $ada = self::getAll($namaProdi);
    if(count($ada) <= 0){
      self::store($namaProdi);
      $ada = self::searchOrAdd($namaProdi);
    }
    return $ada[0]["id_prodi"];
  }
}