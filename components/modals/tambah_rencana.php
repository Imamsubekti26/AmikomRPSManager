<div
  class="modal fade"
  id="modal-add-rencana-pembelajaran"
  tabindex="-1"
  aria-labelledby="modal-add-rencana-pembelajaran"
>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header mx-5">
        <h1 class="modal-title h6 fw-bold my-1" id="title-modal-rencana">
          <span>Tambah</span> Data Rencana Pembelajaran
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body mx-5">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p><strong>Pertemuan Ke</strong></p>
              <input class="form-control" type="hidden" name="id_rencana">
              <input class="form-control" type="text" name="pertemuan_ke">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p class="mt-1">
                <strong>Kemampuan Akhir yang Diharapkan</strong>
              </p>
              <textarea class="form-control" rows="4" data-section="form" name="kemampuan"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p class="mt-1">
                <strong>Indikator</strong>
              </p>
              <textarea class="form-control" rows="4" data-section="form" name="indikator"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <p class="mt-1">
                <strong>Topik & Sub-topik</strong>
              </p>
              <textarea class="form-control" rows="4" data-section="form" name="topik_subtopik"></textarea>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <p class="mt-1">
                <strong>Aktifitas / Strategi Pembelajaran</strong>
              </p>
              <textarea class="form-control" rows="4" data-section="form" name="strategi"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p class="mt-1">
                <strong>Waktu</strong>
              </p>
              <textarea class="form-control" rows="4" data-section="form" name="lama_waktu"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p><strong>Penilaian</strong></p>
              <textarea class="form-control" rows="4" data-section="form" name="penilaian"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer mx-5">
        <button type="submit" class="btn btn-primary" onclick="Rencana().AddOrUpdate()">
          Tambah Data
        </button>
      </div>
    </div>
  </div>
</div>