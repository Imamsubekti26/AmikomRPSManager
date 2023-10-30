<div class="mt-4 accordion">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button
        class="accordion-button collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#form-unit-pem-::id_unit"
      >
        ::judul
      </button>
    </h2>
    <div class="accordion-collapse collapse" id="form-unit-pem-::id_unit">
      <div class="accordion-body">
        <div class="my-3">
          <button class="btn btn-sm btn-warning me-2" onclick="UnitPem().GetOne('::id_unit')">Edit</button
          ><button class="btn btn-sm btn-outline-danger mx-2" onclick="UnitPem().Delete('::id_unit')">Hapus</button>
        </div>
        <div class="">
          <strong>Kemampuan Akhir yang diharapkan</strong>
          <p>::kemampuan</p>
        </div>
        <div class="">
          <strong>Indikator</strong>
          <p>::indikator</p>
        </div>
        <div class="row">
          <div class="col-4">
            <strong>Bahan Kajian</strong>
            <p>::bahan_kajian</p>
          </div>
          <div class="col-4">
            <strong>Metode Pembelajaran</strong>
            <p>::metode_pem</p>
          </div>
          <div class="col-4">
            <strong>Metode Penilaian</strong>
            <p>::metode_pen</p>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <strong>Waktu</strong>
            <p>::lama_waktu</p>
          </div>
          <div class="col-4">
            <strong>Bahan Ajar</strong>
            <p>amet sit dolor</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
