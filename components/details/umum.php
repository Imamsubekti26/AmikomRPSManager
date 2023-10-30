<div class="mt-4" id="form-gambaran-umum">
  <strong>Gambaran Umum </strong>
  <i
    class="bi bi-question-circle px-2 cursor-pointer"
    data-bs-toggle="tooltip"
    data-bs-title="Lorem, ipsum dolor."
  ></i>
  <div class="row mt-3">
    <div class="col-1">
      <div class="d-flex flex-column gap-2" data-section="btn-edit">
        <button class="btn btn-outline-secondary" <?= $isDisableButton ?> onclick="TextareaAction().Edit('#form-gambaran-umum')">edit</button>
      </div>
      <div class="d-flex flex-column gap-2 d-none" data-section="btn-save">
        <button class="btn btn-outline-success" onclick="TextareaAction().Save('#form-gambaran-umum')">simpan</button>
        <button class="btn btn-outline-danger" onclick="TextareaAction().Cancel('#form-gambaran-umum')">batal</button>
      </div>
    </div>
    <div class="col-11">
      <textarea class="form-control" rows="6" data-section="form" readonly><?= $basicData['gambaran_umum']?></textarea>
    </div>
  </div>
</div>

<div class="mt-4" id="form-capaian-pembelajaran">
  <strong>Capaian Pembelajaran</strong>
  <i
    class="bi bi-question-circle px-2 cursor-pointer"
    data-bs-toggle="tooltip"
    data-bs-title="Lorem, ipsum dolor."
  ></i>
  <div class="row mt-3">
    <div class="col-1">
      <div class="d-flex flex-column gap-2" data-section="btn-edit">
        <button class="btn btn-outline-secondary" <?= $isDisableButton ?> onclick="TextareaAction().Edit('#form-capaian-pembelajaran')">edit</button>
      </div>
      <div class="d-flex flex-column gap-2 d-none" data-section="btn-save">
        <button class="btn btn-outline-success" onclick="TextareaAction().Save('#form-capaian-pembelajaran')">simpan</button>
        <button class="btn btn-outline-danger" onclick="TextareaAction().Cancel('#form-capaian-pembelajaran')">batal</button>
      </div>
    </div>
    <div class="col-11">
      <textarea class="form-control" rows="6" data-section="form" readonly><?= $basicData['capaian_pembelajaran']?></textarea>
    </div>
  </div>
</div>

<div class="mt-4" id="form-prasyarat">
  <strong>Prasyarat dan Pengetahuan Awal</strong>
  <i
    class="bi bi-question-circle px-2 cursor-pointer"
    data-bs-toggle="tooltip"
    data-bs-title="Lorem, ipsum dolor."
  ></i>
  <div class="row mt-3">
    <div class="col-1">
      <div class="d-flex flex-column gap-2" data-section="btn-edit">
        <button class="btn btn-outline-secondary" <?= $isDisableButton ?> onclick="TextareaAction().Edit('#form-prasyarat')">Edit</button>
      </div>
      <div class="d-flex flex-column gap-2 d-none" data-section="btn-save">
        <button class="btn btn-outline-success" onclick="TextareaAction().Save('#form-prasyarat')">simpan</button>
        <button class="btn btn-outline-danger" onclick="TextareaAction().Cancel('#form-prasyarat')">batal</button>
      </div>
    </div>
    <div class="col-11">
      <textarea class="form-control" rows="6" data-section="form" readonly><?= $basicData['prasyarat']?></textarea>
    </div>
  </div>
</div>