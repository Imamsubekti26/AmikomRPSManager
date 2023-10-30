-- phpMyAdmin SQL Dump

-- version 5.2.0

-- https://www.phpmyadmin.net/

--

-- Host: 127.0.0.1

-- Generation Time: Oct 30, 2023 at 05:08 AM

-- Server version: 10.4.27-MariaDB

-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Database: `amikom_rps_manager`

--

-- --------------------------------------------------------

--

-- Table structure for table `bahan_ajar`

--

CREATE TABLE
    `bahan_ajar` (
        `id_ref` int(11) NOT NULL,
        `id_unit` int(11) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `dosen`

--

CREATE TABLE
    `dosen` (
        `nik` int(16) NOT NULL,
        `name` varchar(100) NOT NULL,
        `pass` varchar(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `jadwal`

--

CREATE TABLE
    `jadwal` (
        `id_jadwal` int(11) NOT NULL,
        `id_matkul` int(11) NOT NULL,
        `id_prodi` int(11) NOT NULL,
        `dosen` int(16) NOT NULL,
        `semester` int(2) NOT NULL,
        `sks_teori` int(2) NOT NULL,
        `sks_praktek` int(2) NOT NULL,
        `tahun` year(4) NOT NULL,
        `status` int(1) NOT NULL,
        `gambaran_umum` text NOT NULL,
        `capaian_pembelajaran` text NOT NULL,
        `prasyarat` text DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `matkul`

--

CREATE TABLE
    `matkul` (
        `id_matkul` int(11) NOT NULL,
        `nama_matkul` varchar(50) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `persentase_penilaian`

--

CREATE TABLE
    `persentase_penilaian` (
        `id_nilai` int(11) NOT NULL,
        `id_jadwal` int(11) NOT NULL,
        `deskripsi` varchar(255) NOT NULL,
        `persentase` int(3) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `prodi`

--

CREATE TABLE
    `prodi` (
        `id_prodi` int(11) NOT NULL,
        `nama_prodi` varchar(50) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `referensi_pembelajaran`

--

CREATE TABLE
    `referensi_pembelajaran` (
        `id_ref` int(11) NOT NULL,
        `id_jadwal` int(11) NOT NULL,
        `deskripsi` varchar(150) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `rencana_pembelajaran`

--

CREATE TABLE
    `rencana_pembelajaran` (
        `id_rencana` int(11) NOT NULL,
        `id_jadwal` int(11) NOT NULL,
        `pertemuan_ke` int(2) NOT NULL,
        `kemampuan` text NOT NULL,
        `indikator` text NOT NULL,
        `topik_subtopik` text NOT NULL,
        `strategi` text NOT NULL,
        `lama_waktu` varchar(100) NOT NULL,
        `penilaian` text NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `tugas`

--

CREATE TABLE
    `tugas` (
        `id_tugas` int(11) NOT NULL,
        `id_jadwal` int(11) NOT NULL,
        `judul` text NOT NULL,
        `tugas` text NOT NULL,
        `kemampuan` text NOT NULL,
        `kriteria_pen` text NOT NULL,
        `indikator_pen` text NOT NULL,
        `lama_waktu` varchar(100) NOT NULL,
        `bobot_nilai` text NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--

-- Table structure for table `unit_pembelajaran`

--

CREATE TABLE
    `unit_pembelajaran` (
        `id_unit` int(11) NOT NULL,
        `id_jadwal` int(11) NOT NULL,
        `judul` varchar(100) NOT NULL,
        `kemampuan` text NOT NULL,
        `indikator` text NOT NULL,
        `bahan_kajian` text NOT NULL,
        `metode_pem` text NOT NULL,
        `metode_pen` text NOT NULL,
        `lama_waktu` varchar(255) NOT NULL,
        `bahan_ajar` text NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--

-- Indexes for dumped tables

--

--

-- Indexes for table `bahan_ajar`

--

ALTER TABLE `bahan_ajar`
ADD
    KEY `FK_referensi_pembelajaran_TO_bahan_ajar` (`id_ref`),
ADD
    KEY `FK_unit_pembelajaran_TO_bahan_ajar` (`id_unit`);

--

-- Indexes for table `dosen`

--

ALTER TABLE `dosen`
ADD PRIMARY KEY (`nik`),
ADD UNIQUE KEY `UQ_nik` (`nik`);

--

-- Indexes for table `jadwal`

--

ALTER TABLE `jadwal`
ADD PRIMARY KEY (`id_jadwal`),
ADD
    KEY `FK_dosen_TO_Jadwal` (`dosen`),
ADD
    KEY `FK_prodi_TO_Jadwal` (`id_prodi`),
ADD
    KEY `FK_Matkul_TO_Jadwal` (`id_matkul`);

--

-- Indexes for table `matkul`

--

ALTER TABLE `matkul` ADD PRIMARY KEY (`id_matkul`);

--

-- Indexes for table `persentase_penilaian`

--

ALTER TABLE
    `persentase_penilaian`
ADD PRIMARY KEY (`id_nilai`),
ADD
    KEY `FK_Jadwal_TO_persentase_penilaian` (`id_jadwal`);

--

-- Indexes for table `prodi`

--

ALTER TABLE `prodi` ADD PRIMARY KEY (`id_prodi`);

--

-- Indexes for table `referensi_pembelajaran`

--

ALTER TABLE
    `referensi_pembelajaran`
ADD PRIMARY KEY (`id_ref`),
ADD
    KEY `FK_Jadwal_TO_referensi_pembelajaran` (`id_jadwal`);

--

-- Indexes for table `rencana_pembelajaran`

--

ALTER TABLE
    `rencana_pembelajaran`
ADD
    PRIMARY KEY (`id_rencana`),
ADD
    KEY `FK_Jadwal_TO_rencana_pembelajaran` (`id_jadwal`);

--

-- Indexes for table `tugas`

--

ALTER TABLE `tugas`
ADD PRIMARY KEY (`id_tugas`),
ADD
    KEY `FK_Jadwal_TO_tugas` (`id_jadwal`);

--

-- Indexes for table `unit_pembelajaran`

--

ALTER TABLE
    `unit_pembelajaran`
ADD PRIMARY KEY (`id_unit`),
ADD
    KEY `FK_Jadwal_TO_unit_pembelajaran` (`id_jadwal`);

--

-- AUTO_INCREMENT for dumped tables

--

--

-- AUTO_INCREMENT for table `jadwal`

--

ALTER TABLE
    `jadwal` MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 11;

--

-- AUTO_INCREMENT for table `matkul`

--

ALTER TABLE
    `matkul` MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;

--

-- AUTO_INCREMENT for table `persentase_penilaian`

--

ALTER TABLE
    `persentase_penilaian` MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 8;

--

-- AUTO_INCREMENT for table `prodi`

--

ALTER TABLE
    `prodi` MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;

--

-- AUTO_INCREMENT for table `referensi_pembelajaran`

--

ALTER TABLE
    `referensi_pembelajaran` MODIFY `id_ref` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 18;

--

-- AUTO_INCREMENT for table `rencana_pembelajaran`

--

ALTER TABLE
    `rencana_pembelajaran` MODIFY `id_rencana` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 7;

--

-- AUTO_INCREMENT for table `tugas`

--

ALTER TABLE
    `tugas` MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;

--

-- AUTO_INCREMENT for table `unit_pembelajaran`

--

ALTER TABLE
    `unit_pembelajaran` MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 9;

--

-- Constraints for dumped tables

--

--

-- Constraints for table `bahan_ajar`

--

ALTER TABLE `bahan_ajar`
ADD
    CONSTRAINT `FK_referensi_pembelajaran_TO_bahan_ajar` FOREIGN KEY (`id_ref`) REFERENCES `referensi_pembelajaran` (`id_ref`),
ADD
    CONSTRAINT `FK_unit_pembelajaran_TO_bahan_ajar` FOREIGN KEY (`id_unit`) REFERENCES `unit_pembelajaran` (`id_unit`);

--

-- Constraints for table `jadwal`

--

ALTER TABLE `jadwal`
ADD
    CONSTRAINT `FK_Matkul_TO_Jadwal` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`),
ADD
    CONSTRAINT `FK_dosen_TO_Jadwal` FOREIGN KEY (`dosen`) REFERENCES `dosen` (`nik`),
ADD
    CONSTRAINT `FK_prodi_TO_Jadwal` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id_prodi`);

--

-- Constraints for table `persentase_penilaian`

--

ALTER TABLE
    `persentase_penilaian`
ADD
    CONSTRAINT `FK_Jadwal_TO_persentase_penilaian` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);

--

-- Constraints for table `referensi_pembelajaran`

--

ALTER TABLE
    `referensi_pembelajaran`
ADD
    CONSTRAINT `FK_Jadwal_TO_referensi_pembelajaran` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);

--

-- Constraints for table `rencana_pembelajaran`

--

ALTER TABLE
    `rencana_pembelajaran`
ADD
    CONSTRAINT `FK_Jadwal_TO_rencana_pembelajaran` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);

--

-- Constraints for table `tugas`

--

ALTER TABLE `tugas`
ADD
    CONSTRAINT `FK_Jadwal_TO_tugas` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);

--

-- Constraints for table `unit_pembelajaran`

--

ALTER TABLE
    `unit_pembelajaran`
ADD
    CONSTRAINT `FK_Jadwal_TO_unit_pembelajaran` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;