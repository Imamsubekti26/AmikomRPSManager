<div
  class="modal fade"
  id="modal-tambah-rps"
  tabindex="-1"
  aria-labelledby="modal-tambah-rps"
>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="mx-5 modal-header">
        <div class="modal-title h6 fw-bold my-1">Tambah Data RPS</div>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <form class="" method="POST" action="./routes/matkul.php?x=2">
        <div class="mx-5 modal-body">
          <section id="identitas_dosen">
            <p><strong>Identitas Dosen</strong></p>
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="mb-3">
                  <label class="form-label">NIK</label
                  ><input
                    disabled=""
                    class="form-control"
                    type="text"
                    value="<?= $_SESSION['user']['nik'] ?>"
                    name ="dosen"
                  />
                </div>
              </div>
              <div class="col-md-8 col-sm-12">
                <div class="mb-3">
                  <label class="form-label">Nama Dosen</label
                  ><input
                    disabled=""
                    class="form-control"
                    type="text"
                    value="<?= $_SESSION['user']['name'] ?>"
                  />
                </div>
              </div>
            </div>
          </section>
          <section id="data_perkuliahan" class="mt-2">
            <p><strong>Data Perkuliahan</strong></p>
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="mb-3">
                  <div class="form-group">
                    <label class="form-label">Program Studi</label>
                    <div class="input-group">
                      <input class="form-control" type="text" name="nama_prodi" onkeyup="cariProdi().cari()" autocomplete="off"/>
                    </div>
                    <div class="list-group" id="dropdown-nama-prodi" style="position: absolute;z-index:1000;" ></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="mb-3">
                  <label class="form-label">Semester</label
                  ><input class="form-control" type="number" name="semester" />
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="mb-3">
                  <label class="form-label">Tahun</label
                  ><input class="form-control" type="number" value="2023" name="tahun" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="mb-3">
                  <div class="form-group">
                    <label class="form-label">Nama Mata Kuliah</label>
                    <div class="input-group">
                      <input class="form-control" type="text" name="nama_matkul" onkeyup="cariMatkul().cari()" autocomplete="off"/>
                    </div>
                    <div class="list-group" id="dropdown-nama-matkul" style="position: absolute;z-index:999;" ></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="mb-3">
                  <label class="form-label">Bobot SKS(Teori)</label
                  ><input class="form-control" type="number" value="0" name="sks_teori" />
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="mb-3">
                  <label class="form-label">Bobot SKS(Praktek)</label
                  ><input class="form-control" type="number" value="0" name="sks_praktek" />
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="mx-5 justify-content-between modal-footer">
          <p>
            <i
              >Catatan : RPS yang anda buat akan masuk ke dalam menu draf</i
            >
          </p>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>