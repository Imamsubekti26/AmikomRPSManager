<div class="mt-4 accordion">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button
        type="button"
        aria-expanded="false"
        class="accordion-button collapsed"
        data-bs-toggle="collapse"
        data-bs-target="#form-rencana-pembelajaran-::id_rencana"
      >
        pertemuan ke-::pertemuan_ke
      </button>
    </h2>
    <div
      class="accordion-collapse collapse"
      id="form-rencana-pembelajaran-::id_rencana"
    >
      <div class="accordion-body">
        <div class="my-3">
          <button class="btn btn-sm btn-warning me-2" onclick="Rencana().GetOne('::id_rencana')">Edit</button
          ><button class="btn btn-sm btn-outline-danger mx-2" onclick="Rencana().Delete('::id_rencana')">Hapus</button>
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
          <div class="col-6">
            <strong>Topik &amp; Sub-topik</strong>
            <p>::topik_subtopik</p>
          </div>
          <div class="col-6">
            <strong>Aktivitas / Strategi Pembelajaran</strong>
            <p>::strategi</p>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <strong>Waktu</strong>
            <p>::lama_waktu</p>
          </div>
          <div class="col-6">
            <strong>Penilaian</strong>
            <p>::penilaian</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
