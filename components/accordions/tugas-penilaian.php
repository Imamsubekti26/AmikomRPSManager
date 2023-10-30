<div class="mt-4 accordion">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button
        type="button"
        aria-expanded="false"
        class="accordion-button collapsed"
        data-bs-toggle="collapse"
        data-bs-target="#form-tugas-penilaian-::id_tugas"
      >
        ::judul
      </button>
    </h2>
    <div class="accordion-collapse collapse" id="form-tugas-penilaian-::id_tugas">
      <div class="accordion-body">
        <div class="my-3">
          <button class="btn btn-sm btn-warning me-2" onclick="Tugas().GetOne('::id_tugas')">Edit</button
          ><button class="btn btn-sm btn-outline-danger mx-2" onclick="Tugas().Delete('::id_tugas')">Hapus</button>
        </div>
        <div class="">
          <strong>Tugas / Aktivitas</strong>
          <p>::tugas</p>
        </div>
        <div class="">
          <strong>Kemampuan Akhir yang Diharapkan atau Dievaluasi</strong>
          <p>::kemampuan</p>
        </div>
        <div class="row">
          <div class="col-6">
            <strong>Kriteria Penilaian</strong>
            <p>::kriteria_pen</p>
          </div>
          <div class="col-6">
            <strong>Indikator Penilaian</strong>
            <p>::indikator_pen</p>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <strong>Waktu</strong>
            <p>::lama_waktu</p>
          </div>
          <div class="col-6">
            <strong>Bobot Nilai</strong>
            <p>::bobot_nilai</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
