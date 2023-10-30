<div
  class="modal fade"
  id="modal-add-tugas-penilaian"
  tabindex="-1"
  aria-labelledby="modal-add-tugas-penilaian"
>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header mx-5">
        <h1 class="modal-title h6 fw-bold my-1" id="title-modal-tugas" >
          Tambah Data Tugas / Penilaian
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body mx-5">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p><strong>Judul / Inti</strong></p>
              <input class="form-control" type="hidden" name="id_tugas"/>
              <input class="form-control" type="text" name="judul"/>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p class="mt-1">
                <strong>Tugas atau Aktifitas</strong>
              </p>
              <textarea class="form-control" rows="4" data-section="form" name="tugas"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p class="mt-1">
                <strong>Kemampuan Akhir yang Diharapkan atau Dievaluasi</strong>
              </p>
              <textarea class="form-control" rows="4" data-section="form" name="kemampuan" ></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <p class="mt-1">
                <strong>Kriteria Penilaian</strong>
              </p>
              <textarea class="form-control" rows="4" data-section="form" name="kriteria_pen" ></textarea>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <p class="mt-1">
                <strong>Indikator Penilaian</strong>
              </p>
              <textarea class="form-control" rows="4" data-section="form" name="indikator_pen" ></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p class="mt-1">
                <strong>Waktu</strong>
              </p>
              <textarea class="form-control" rows="4" data-section="form" name="lama_waktu" ></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p><strong>Bobot Nilai</strong></p>
              <input class="form-control" type="text" name="bobot_nilai"/>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer mx-5">
        <button type="submit" class="btn btn-primary" onclick="Tugas().AddOrUpdate()">
          Tambah Data
        </button>
      </div>
    </div>
    </div>
  </div>
</div>