<div class="mt-4" id="form-persentase-penilaian">
  <strong>Detail Persentase Penilaian</strong>
  <i
    class="bi bi-question-circle px-2 cursor-pointer"
    data-bs-toggle="tooltip"
    data-bs-title="Lorem, ipsum dolor."
  ></i>
  <div class="row my-3 align-items-end" id="form-input-nilai">
    <div class="col-9">
      <label>Jenis Penilaian :</label>
      <input class="form-control" type="text" name="deskripsi" />
    </div>
    <div class="col-2">
      <label>Persentase :</label>
      <input class="form-control" type="number" name="persentase" />
    </div>
    <div class="col-1">
      <button 
        class="btn btn-secondary form-control" 
        <?= $isDisableButton ?> 
        onclick="Nilai().Add()"
      >
        Tambah
      </button>
    </div>
  </div>
  <div class="overflow-y-auto alert-wrapper" id="load-nilai-here"></div>
</div>

<div class="mt-4">
  <div class="d-flex justify-content-between align-items-center">
    <div class="">
      <strong>Tugas/Aktifitas Penilaian</strong>
      <i
        class="bi bi-question-circle px-2 cursor-pointer"
        data-bs-toggle="tooltip"
        data-bs-title="Lorem, ipsum dolor."
      ></i>
    </div>
    <div class="d-flex gap-2">
      <button class="btn btn-outline-secondary" onclick="showPrintPage(`#tugas-aktifitas-penilaian`)">
        Lihat dalam Tabel
      </button>
      <button 
        class="btn btn-primary" 
        data-bs-toggle="modal" 
        data-bs-target="#modal-add-tugas-penilaian" 
        <?= $isDisableButton ?>
        onclick="dataForm('#modal-add-tugas-penilaian').Clear()"
      >
        Tambah Data
      </button>
    </div>
  </div>
  <?php include_once "./components/modals/tambah_tugas.php" ?>
  <div id="form-tugas-penilaian"></div>
</div>