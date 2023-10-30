<div class="mt-4">
  <div class="d-flex justify-content-between align-items-center">
    <div class="">
      <strong>Rencana Pelaksanaan Pembelajaran</strong>
      <i
        class="bi bi-question-circle px-2 cursor-pointer"
        data-bs-toggle="tooltip"
        data-bs-title="Lorem, ipsum dolor."
      ></i>
    </div>
    <div class="d-flex gap-2">
      <button class="btn btn-outline-secondary" onclick="showPrintPage(`#rencana-pelaksanaan-pembelajaran`)">
        Lihat dalam Tabel
      </button>
      <button 
        class="btn btn-primary" 
        data-bs-toggle="modal" 
        data-bs-target="#modal-add-rencana-pembelajaran" 
        <?= $isDisableButton ?>
        onclick="dataForm('#modal-add-rencana-pembelajaran').Clear()"
      >
        Tambah Data
      </button>
    </div>
  </div>
  <?php include "./components/modals/tambah_rencana.php" ?>
  <div id="form-rencana-pembelajaran"></div>
</div>