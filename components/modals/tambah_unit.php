<div
  class="modal fade"
  id="modal-add-unit-pembelajaran"
  tabindex="-1"
  aria-labelledby="modal-add-unit-pembelajaran"
>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header mx-5">
        <h1 class="modal-title h6 fw-bold my-1" id="title-modal-unit" >
          Tambah Data Unit Pembelajaran
        </h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body mx-5">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p><strong>Judul / Inti</strong></p>
              <input class="form-control" type="hidden" name="id_unit" />
              <input class="form-control" type="text" name="judul" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p class="mt-1"><strong>Kemampuan Akhir yang Diharapkan</strong></p>
              <textarea class="form-control" rows="4" data-section="form" name="kemampuan"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p class="mt-1"> <strong>Indikator</strong> </p>
              <textarea class="form-control" rows="4" data-section="form" name="indikator" ></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p class="mt-1"> <strong>Bahan Kajian</strong> </p>
              <textarea class="form-control" rows="4" data-section="form" name="bahan_kajian"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <p class="mt-1"> <strong>Metode Pembelajaran</strong> </p>
              <textarea class="form-control" rows="4" data-section="form" name="metode_pem" ></textarea>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="mb-3">
              <p class="mt-1"> <strong>Metode Penilaian</strong> </p>
              <textarea class="form-control" rows="4" data-section="form" name="metode_pen" ></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p class="mt-1"> <strong>Waktu</strong> </p>
              <textarea class="form-control" rows="4" data-section="form" name="lama_waktu" ></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="mb-3">
              <p class="mt-1"><strong>Bahan Ajar</strong></p>
                <div class="overflow-y-auto alert-wrapper">
                  <div class="alert alert-light custom-alert cursor-pointer" index="0">
                    <div>
                      <input type="checkbox"> Lorem
                    </div>
                  </div>
                  <div class="alert alert-light custom-alert cursor-pointer" index="0">
                    <div>
                      <input type="checkbox"> Lorem
                    </div>
                  </div>
                  <div class="alert alert-light custom-alert cursor-pointer" index="0">
                    <div>
                      <input type="checkbox"> Lorem
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer mx-5">
        <button type="submit" class="btn btn-primary" onclick="UnitPem().AddOrUpdate()">
          Tambah Data
        </button>
      </div>
    </div>
  </div>
</div>