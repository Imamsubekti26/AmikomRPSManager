<div class="mt-4" id="form-referensi-pembelajaran">
  <strong>Referensi Pembelajaran</strong>
  <i
    class="bi bi-question-circle px-2 cursor-pointer"
    data-bs-toggle="tooltip"
    data-bs-title="Lorem, ipsum dolor."
  ></i>
  <div class="row my-3 align-items-end">
    <div class="col-11" id="form-input-referensi">
      <label>Sumber referensi :</label
      ><input class="form-control" type="text" name="deskripsi" />
    </div>
    <div class="col-1">
      <button 
        class="btn btn-secondary form-control" 
        <?= $isDisableButton ?> 
        onclick="Referensi().Add()"
      >
        Tambah
      </button>
    </div>
  </div>
  <div class="overflow-y-auto alert-wrapper" id="load-ref-here"></div>
</div>
<div class="mt-4">
  <div class="d-flex justify-content-between align-items-center">
    <div class="">
      <strong>Unit-unit Pembelajaran Spesifik</strong>
      <i
        class="bi bi-question-circle px-2 cursor-pointer"
        data-bs-toggle="tooltip"
        data-bs-title="Lorem, ipsum dolor."
      ></i>
    </div>
    <div class="d-flex gap-2">
      <button class="btn btn-outline-secondary" onclick="showPrintPage(`#unit-pembelajaran-awal`)">
        Lihat dalam Tabel
      </button>
      <button
        class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#modal-add-unit-pembelajaran"
        <?= $isDisableButton ?> 
        onclick="dataForm('#modal-add-unit-pembelajaran').Clear()"
      >
        Tambah Data
      </button>
    </div>
  </div>
  <?php include_once "./components/modals/tambah_unit.php" ?>
  <div id="form-unit-pembelajaran"></div>
</div>