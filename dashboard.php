<?php
session_start();
const SITE_TITLE = "Amikom RPS Manager";
?>

<!DOCTYPE html>
<html lang="en">
  <?php include_once "./components/header.php" ?>
  <body>
    <?php include_once "./components/decoration-topbar.htm" ?>
    <main class="container mt-4">
      <section id="profile-card" class="card">
        <div class="p-3 px-5 d-flex justify-content-between align-items-center">
          <div>
            <p class="mb-2">Selamat datang,</p>
            <h4><strong><?= $_SESSION['user']['name'] ?></strong></h4>
            <p class="mb-2">NIK: <?= $_SESSION['user']['nik'] ?></p>
          </div>
          <div class="card-info-right d-grid gap-2">
            <a class="btn btn-primary" href="javascript:alert('fitur masih dalam tahap pengembangan')">Edit Profile</a
            ><a class="btn btn-outline-danger" href="./routes/auth.php?x=0">Log Out</a>
          </div>
        </div>
      </section>

      <section id="dashboard-menu" class="row align-items-center mb-4 mt-5">
        <div class="col-3">
          <ul class="nav nav-underline">
            <li class="nav-item">
              <div class="nav-link cursor-pointer active" id="filter-draf">Draf</div>
            </li>
            <li class="nav-item">
              <div class="nav-link cursor-pointer" id="filter-aktif">Aktif</div>
            </li>
            <li class="nav-item">
              <div class="nav-link cursor-pointer" id="filter-arsip">Arsip</div>
            </li>
          </ul>
        </div>
        <div class="col-6">
          <input
            type="search"
            class="form-control text-center"
            placeholder="Cari prodi, matkul, atau tahun..."
            value=""
            id="form-search"
          />
        </div>
        <div class="col-3">
          <button
            class="btn btn-primary float-end"
            data-bs-toggle="modal"
            data-bs-target="#modal-tambah-rps"
          >
            Tambah RPS
          </button>
        </div>
      </section>

      <hr />

      <section id="list-of-matkul" class="row row-gap-4 mt-4"></section>
    </main>

    <?php include_once "./components/modals/tambah_rps.php" ?>

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
    <script src="./assets/js/dashboard.js"></script>
    <script src="./assets/js/dropdown.js"></script>
  </body>
</html>
<?php
unset($_SESSION['msg']);
?>