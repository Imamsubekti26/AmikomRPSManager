<?php
session_start();

if (!isset($_SESSION["user"])) header("location:./login.php");
const SITE_TITLE = "Amikom RPS Manager";

require_once "./config/config.php";
require_once "./controller/jadwal.php";

$basicData = Jadwal::getDetail($_GET['id']);
$isDisableButton = ($basicData['status'] == 0)? '':'disabled';
$db -> close();

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once "./components/header.php" ?>
<body>
  <?php include_once "./components/decoration-topbar.htm" ?>
  <main class="container mt-4">
    <nav class="d-flex justify-content-between align-items-center mb-3">
      <a href="./dashboard.php">
        <button class="btn btn-secondary">Kembali</button>
      </a>
      <div class="d-flex gap-3 align-items-center">
        <?php if($basicData['status'] == 0):?>
          <button class="btn btn-outline-danger" onclick="changeStatusData(31)">Hapus RPS</button>
          <button class="btn btn-primary" onclick="changeStatusData(32)">Aktifkan RPS</button>
        <?php elseif($basicData['status'] == 1):?>
          <button class="btn btn-outline-warning" onclick="changeStatusData(34)">Revisi RPS</button>
          <button class="btn btn-outline-danger" onclick="changeStatusData(33)">Arsipkan</button>
          <button class="btn btn-primary" onclick="changeStatusData(35)">Salin RPS</button>
          <?php elseif($basicData['status'] == 2):?>
            <button class="btn btn-primary" onclick="changeStatusData(35)">Salin RPS</button>
        <?php endif;?>
      </div>
    </nav>

    <section id="card-info" class="card">
      <div class="p-3 px-5 d-flex justify-content-between align-items-center">
        <div>
          <p class="mb-2"><?= $basicData['nama_prodi']?></p>
          <h4><strong><?= $basicData['nama_matkul']?></strong></h4>
          <p class="mb-2">Oleh: <?= $basicData['name']?> (NIK : <?= $basicData['dosen']?>)</p>
        </div>
        <div class="row">
          <div class="col">
            <p class="mb-1">Semester</p>
            <p class="mb-1">Tahun</p>
            <p class="mb-1">Jml SKS</p>
          </div>
          <div class="col">
            <p class="mb-1">:</p>
            <p class="mb-1">:</p>
            <p class="mb-1">:</p>
          </div>
          <div class="col">
            <p class="mb-1"><?= $basicData['semester']?></p>
            <p class="mb-1"><?= $basicData['tahun']?></p>
            <p class="mb-1"><?= $basicData['sks_teori']?>T<?= $basicData['sks_praktek']?>P</p>
          </div>
        </div>
      </div>
      <button class="btn-setting" data-bs-toggle="modal" data-bs-target="#modal-change-basic-info">
        <i class="bi bi-gear"></i>
      </button>
      <?php include_once "./components/modals/edit_basic_data.php" ?>
    </section>

    <section id="menubar" class="mt-5">
      <nav class="nav nav-tabs flex-column flex-sm-row">
        <div class="flex-sm-fill text-sm-center nav-link text-black cursor-pointer active fw-bold" onclick="changeTab(0)">
          Umum
        </div>
        <div class="flex-sm-fill text-sm-center nav-link text-black cursor-pointer" onclick="changeTab(1)">
          Unit Pembelajaran
        </div>
        <div class="flex-sm-fill text-sm-center nav-link text-black cursor-pointer" onclick="changeTab(2)">
          Tugas dan Penilaian
        </div>
        <div class="flex-sm-fill text-sm-center nav-link text-black cursor-pointer" onclick="changeTab(3)">
          Rencana Pembelajaran
        </div>
      </nav>
    </section>

    <section id="form-group-umum" class="mb-5">
      <?php include_once "./components/details/umum.php" ?>
    </section>

    <section id="form-group-unit-pembelajaran" class="mb-5 d-none">
      <?php include_once "./components/details/unit.php" ?>
    </section>

    <section id="form-group-tugas-penilaian" class="mb-5 d-none">
      <?php include_once "./components/details/tugas.php" ?>
    </section>

    <section id="form-group-rencana-pembelajaran" class="mb-5 d-none">
      <?php include_once "./components/details/rencana.php" ?>
    </section>

  </main>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
  ></script>
  <script
    src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
    crossorigin="anonymous"
  ></script>
  <script src="./assets/js/jquery-render.js"></script>
  <script src="./assets/js/detail.js"></script>
</body>
</html>

<?php
unset($_SESSION['msg']);
?>