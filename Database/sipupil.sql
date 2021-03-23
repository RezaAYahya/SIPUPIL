-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 08:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipupil`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `ID_Class` int(11) NOT NULL,
  `Classname` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIDN` varchar(128) NOT NULL,
  `Nama` varchar(128) NOT NULL,
  `Bidang` varchar(128) NOT NULL,
  `ID_Class` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `ID_Forum` int(11) NOT NULL,
  `Nama_Forum` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum_mahasiswa`
--

CREATE TABLE `forum_mahasiswa` (
  `ID_ForumMahasiswa` int(11) NOT NULL,
  `NIDN` varchar(128) NOT NULL,
  `ID_Forum` int(11) NOT NULL,
  `ID_Komen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `ID_Jadwal` varchar(128) NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwalmatkul`
--

CREATE TABLE `jadwalmatkul` (
  `ID_InputJadwal` varchar(128) NOT NULL,
  `NStaff` varchar(128) NOT NULL,
  `ID_Matkul` varchar(128) NOT NULL,
  `ID_Jadwal` varchar(128) NOT NULL,
  `NIDN` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `ID_Komen` int(11) NOT NULL,
  `NIM` varchar(128) NOT NULL,
  `isi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(128) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `username` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `ID_Class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `ID_Matkul` varchar(128) NOT NULL,
  `Mata_Kuliah` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE `mengajar` (
  `ID_mengajar` int(11) NOT NULL,
  `ID_Class` int(11) NOT NULL,
  `NIDN` varchar(128) NOT NULL,
  `NIM` varchar(128) NOT NULL,
  `ID_Matkul` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penginputanmatkul`
--

CREATE TABLE `penginputanmatkul` (
  `ID_InputJadwal` varchar(128) NOT NULL,
  `NStaff` varchar(128) NOT NULL,
  `ID_Matkul` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `ID_Registrasi` varchar(128) NOT NULL,
  `NIM` varchar(128) NOT NULL,
  `ID_Matkul` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `status` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`status`, `keterangan`) VALUES
('1', 'Mahasiswa'),
('2', 'Alumni'),
('3', 'Dosen'),
('4', 'Dosen Wali'),
('5', 'Sekretaris Prodi');

-- --------------------------------------------------------

--
-- Table structure for table `sekretaris_prodi`
--

CREATE TABLE `sekretaris_prodi` (
  `NStaff` varchar(128) NOT NULL,
  `Nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `ID_tugas` varchar(128) NOT NULL,
  `nama_tugas` varchar(128) NOT NULL,
  `NIDN` varchar(128) NOT NULL,
  `NIM` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`ID_Class`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIDN`),
  ADD KEY `FK_Class` (`ID_Class`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`ID_Forum`);

--
-- Indexes for table `forum_mahasiswa`
--
ALTER TABLE `forum_mahasiswa`
  ADD PRIMARY KEY (`ID_ForumMahasiswa`),
  ADD KEY `FK_isiforum` (`ID_Komen`),
  ADD KEY `FK_DOSENFORUM` (`NIDN`),
  ADD KEY `FK_NAMAFORUM` (`ID_Forum`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID_Jadwal`);

--
-- Indexes for table `jadwalmatkul`
--
ALTER TABLE `jadwalmatkul`
  ADD PRIMARY KEY (`ID_InputJadwal`),
  ADD KEY `FK_jadwal` (`ID_Jadwal`),
  ADD KEY `FK_Matkul1` (`ID_Matkul`),
  ADD KEY `FK_sekpro` (`NStaff`),
  ADD KEY `FK_Dosen2` (`NIDN`);

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`ID_Komen`),
  ADD KEY `FK_komenmaha` (`NIM`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `FK_Class2` (`ID_Class`),
  ADD KEY `FK_Status2` (`status`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`ID_Matkul`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`ID_mengajar`),
  ADD KEY `FK_Class5` (`ID_Class`),
  ADD KEY `FK_NIDN` (`NIDN`),
  ADD KEY `FK_NIM` (`NIM`),
  ADD KEY `FK_Matkul` (`ID_Matkul`);

--
-- Indexes for table `penginputanmatkul`
--
ALTER TABLE `penginputanmatkul`
  ADD PRIMARY KEY (`ID_InputJadwal`),
  ADD KEY `FK_Staffpenginput` (`NStaff`),
  ADD KEY `FK_Matkul6` (`ID_Matkul`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`ID_Registrasi`),
  ADD KEY `FK_Matkul4` (`ID_Matkul`),
  ADD KEY `FK_Mahasiswa3` (`NIM`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`status`);

--
-- Indexes for table `sekretaris_prodi`
--
ALTER TABLE `sekretaris_prodi`
  ADD PRIMARY KEY (`NStaff`),
  ADD KEY `FK_Status4` (`status`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`ID_tugas`),
  ADD KEY `FK_Dosenpemberi` (`NIDN`),
  ADD KEY `FK_Mahasiswatugas` (`NIM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `ID_Class` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_mahasiswa`
--
ALTER TABLE `forum_mahasiswa`
  MODIFY `ID_ForumMahasiswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mengajar`
--
ALTER TABLE `mengajar`
  MODIFY `ID_mengajar` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `FK_Class` FOREIGN KEY (`ID_Class`) REFERENCES `class` (`ID_Class`),
  ADD CONSTRAINT `FK_Status` FOREIGN KEY (`status`) REFERENCES `role` (`status`),
  ADD CONSTRAINT `FK_Status3` FOREIGN KEY (`status`) REFERENCES `role` (`status`);

--
-- Constraints for table `forum_mahasiswa`
--
ALTER TABLE `forum_mahasiswa`
  ADD CONSTRAINT `FK_DOSENFORUM` FOREIGN KEY (`NIDN`) REFERENCES `dosen` (`NIDN`),
  ADD CONSTRAINT `FK_NAMAFORUM` FOREIGN KEY (`ID_Forum`) REFERENCES `forum` (`ID_Forum`),
  ADD CONSTRAINT `FK_isiforum` FOREIGN KEY (`ID_Komen`) REFERENCES `komen` (`ID_Komen`);

--
-- Constraints for table `jadwalmatkul`
--
ALTER TABLE `jadwalmatkul`
  ADD CONSTRAINT `FK_Dosen2` FOREIGN KEY (`NIDN`) REFERENCES `dosen` (`NIDN`),
  ADD CONSTRAINT `FK_Matkul1` FOREIGN KEY (`ID_Matkul`) REFERENCES `matakuliah` (`ID_Matkul`),
  ADD CONSTRAINT `FK_jadwal` FOREIGN KEY (`ID_Jadwal`) REFERENCES `jadwal` (`ID_Jadwal`),
  ADD CONSTRAINT `FK_sekpro` FOREIGN KEY (`NStaff`) REFERENCES `sekretaris_prodi` (`NStaff`);

--
-- Constraints for table `komen`
--
ALTER TABLE `komen`
  ADD CONSTRAINT `FK_komenmaha` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `FK_Class2` FOREIGN KEY (`ID_Class`) REFERENCES `class` (`ID_Class`),
  ADD CONSTRAINT `FK_Status2` FOREIGN KEY (`status`) REFERENCES `role` (`status`);

--
-- Constraints for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD CONSTRAINT `FK_Class5` FOREIGN KEY (`ID_Class`) REFERENCES `class` (`ID_Class`),
  ADD CONSTRAINT `FK_Matkul` FOREIGN KEY (`ID_Matkul`) REFERENCES `matakuliah` (`ID_Matkul`),
  ADD CONSTRAINT `FK_NIDN` FOREIGN KEY (`NIDN`) REFERENCES `dosen` (`NIDN`),
  ADD CONSTRAINT `FK_NIM` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`);

--
-- Constraints for table `penginputanmatkul`
--
ALTER TABLE `penginputanmatkul`
  ADD CONSTRAINT `FK_Matkul6` FOREIGN KEY (`ID_Matkul`) REFERENCES `matakuliah` (`ID_Matkul`),
  ADD CONSTRAINT `FK_Staffpenginput` FOREIGN KEY (`NStaff`) REFERENCES `sekretaris_prodi` (`NStaff`);

--
-- Constraints for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD CONSTRAINT `FK_Mahasiswa3` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`),
  ADD CONSTRAINT `FK_Matkul4` FOREIGN KEY (`ID_Matkul`) REFERENCES `matakuliah` (`ID_Matkul`);

--
-- Constraints for table `sekretaris_prodi`
--
ALTER TABLE `sekretaris_prodi`
  ADD CONSTRAINT `FK_Status4` FOREIGN KEY (`status`) REFERENCES `role` (`status`);

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `FK_Dosenpemberi` FOREIGN KEY (`NIDN`) REFERENCES `dosen` (`NIDN`),
  ADD CONSTRAINT `FK_Mahasiswatugas` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
