<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amikom RPS Manager</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./assets/css/custom.css" />
  </head>
  <body>
    <div id="decoration-topbar"></div>
    <main class="container mt-4">
      <nav class="d-flex justify-content-between align-items-center mb-3">
        <a href="./dashboard.html"
          ><button class="btn btn-secondary">Kembali</button></a
        >
        <div class="d-flex gap-3 align-items-center">
          <button class="btn btn-outline-danger">Hapus RPS</button>
          <button class="btn btn-primary">Aktifkan RPS</button>
        </div>
      </nav>
      <section id="card-info" class="card">
        <div class="p-3 px-5 d-flex justify-content-between align-items-center">
          <div>
            <p class="mb-2">D3 Teknik Informatika</p>
            <h4><strong>Pemrograman Web</strong></h4>
            <p class="mb-2">Oleh: Imam Subekti (NIK : 123456)</p>
          </div>
          <div class="row">
            <div class="col">
              <p class="mb-1">Semester</p>
              <p class="mb-1">Tahun</p>
              <p class="mb-1">Jml SKS</p>
            </div>
            <div class="col">
              <p class="mb-1">:</p>
              <p class="mb-1">:</p>
              <p class="mb-1">:</p>
            </div>
            <div class="col">
              <p class="mb-1">2</p>
              <p class="mb-1">2022</p>
              <p class="mb-1">2T2P</p>
            </div>
          </div>
        </div>
        <button class="btn-setting" data-bs-toggle="modal" data-bs-target="#modal-change-basic-info">
          <i class="bi bi-gear"></i>
        </button>
        <div class="modal fade" id="modal-change-basic-info" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Edit Informasi Dasar</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="" class="form">
                  <div class="row mb-3">
                    <div class="col-4"><label>Semester</label></div>
                    <div class="col-8"><input type="number" class="form-control" value="2"></div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-4"><label>Tahun</label></div>
                    <div class="col-8"><input type="number" class="form-control" value="2023"></div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-4"><label>Jumlah SKS</label></div>
                    <div class="col-4"><input type="number" class="form-control" value="2"></div>
                    <div class="col-4"><input type="number" class="form-control" value="2"></div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="menubar" class="mt-5">
        <nav class="nav nav-tabs flex-column flex-sm-row">
          <div
            class="flex-sm-fill text-sm-center nav-link text-black cursor-pointer active fw-bold"
          >
            Umum
          </div>
          <div
            class="flex-sm-fill text-sm-center nav-link text-black cursor-pointer"
          >
            Unit Pembelajaran
          </div>
          <div
            class="flex-sm-fill text-sm-center nav-link text-black cursor-pointer"
          >
            Tugas dan Penilaian
          </div>
          <div
            class="flex-sm-fill text-sm-center nav-link text-black cursor-pointer"
          >
            Rencana Pembelajaran
          </div>
        </nav>
      </section>

      <section id="form-group-umum" class="mb-5">
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
                <button class="btn btn-outline-secondary">edit</button>
              </div>
              <div
                class="d-flex flex-column gap-2 d-none"
                data-section="btn-save"
              >
                <button class="btn btn-outline-success">simpan</button>
                <button class="btn btn-outline-danger">batal</button>
              </div>
            </div>
            <div class="col-11">
              <textarea
                class="form-control"
                rows="6"
                data-section="form"
                readonly
              >
lorem </textarea
              >
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
                <button class="btn btn-outline-secondary">edit</button>
              </div>
              <div
                class="d-flex flex-column gap-2 d-none"
                data-section="btn-save"
              >
                <button class="btn btn-outline-success">simpan</button>
                <button class="btn btn-outline-danger">batal</button>
              </div>
            </div>
            <div class="col-11">
              <textarea
                class="form-control"
                rows="6"
                data-section="form"
                readonly
              >
 lorem </textarea
              >
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
                <button class="btn btn-outline-secondary">edit</button>
              </div>
              <div
                class="d-flex flex-column gap-2 d-none"
                data-section="btn-save"
              >
                <button class="btn btn-outline-success">simpan</button>
                <button class="btn btn-outline-danger">batal</button>
              </div>
            </div>
            <div class="col-11">
              <textarea
                class="form-control"
                rows="6"
                data-section="form"
                readonly
              >
 lorem </textarea
              >
            </div>
          </div>
        </div>
      </section>
      <section id="form-group-unit-pembelajaran" class="mb-5 d-none">
        <div class="mt-4" id="form-referensi-pembelajaran">
          <strong>Referensi Pembelajaran</strong>
          <i
            class="bi bi-question-circle px-2 cursor-pointer"
            data-bs-toggle="tooltip"
            data-bs-title="Lorem, ipsum dolor."
          ></i>
          <div class="row my-3 align-items-end">
            <div class="col-11">
              <label>Sumber referensi :</label
              ><input class="form-control" type="text" />
            </div>
            <div class="col-1">
              <button class="btn btn-secondary form-control">Tambah</button>
            </div>
          </div>
          <div class="overflow-y-auto alert-wrapper">
            <div class="alert alert-light custom-alert" index="0">
              lorem<button
                type="button"
                class="btn-close"
                aria-label="Close alert"
              ></button>
            </div>
            <div class="alert alert-light custom-alert" index="1">
              lorem10<button
                type="button"
                class="btn-close"
                aria-label="Close alert"
              ></button>
            </div>
            <div class="alert alert-light custom-alert" index="2">
              lorem20<button
                type="button"
                class="btn-close"
                aria-label="Close alert"
              ></button>
            </div>
          </div>
        </div>
        <div class="mt-4" id="form-unit-pembelajaran">
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
              <button class="btn btn-outline-secondary" onclick="rediretTo(`./print.html#unit-pembelajaran-awal`)">
                Lihat dalam Tabel
              </button>
              <button
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modal-add-unit-pembelajaran"
              >
                Tambah Data
              </button>
            </div>
          </div>
          <div
            class="modal fade"
            id="modal-add-unit-pembelajaran"
            tabindex="-1"
            aria-labelledby="modal-add-unit-pembelajaran"
          >
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header mx-5">
                  <h1
                    class="modal-title h6 fw-bold my-1"
                    id="exampleModalLabel"
                  >
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
                        <input class="form-control" type="text" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Kemampuan Akhir yang Diharapkan</strong>
                        </p>
                        <textarea
                          class="form-control"
                          rows="4"
                          data-section="form"
                        >
                        </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Indikator</strong>
                        </p>
                        <textarea
                          class="form-control"
                          rows="4"
                          data-section="form"
                        >
                        </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Bahan Kajian</strong>
                        </p>
                        <textarea
                          class="form-control"
                          rows="4"
                          data-section="form"
                        >
                        </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Metode Pembelajaran</strong>
                        </p>
                        <textarea
                          class="form-control"
                          rows="4"
                          data-section="form"
                        >
                        </textarea>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Metode Penilaian</strong>
                        </p>
                        <textarea
                          class="form-control"
                          rows="4"
                          data-section="form"
                        >
                        </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Waktu</strong>
                        </p>
                        <textarea
                          class="form-control"
                          rows="4"
                          data-section="form"
                        >
                        </textarea>
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
                  <button type="submit" class="btn btn-primary">
                    Tambah Data
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="form-group-tugas-penilaian" class="mb-5 d-none">
        <div class="mt-4" id="form-persentase-penilaian">
          <strong>Detail Persentase Penilaian</strong>
          <i
            class="bi bi-question-circle px-2 cursor-pointer"
            data-bs-toggle="tooltip"
            data-bs-title="Lorem, ipsum dolor."
          ></i>
          <div class="row my-3 align-items-end">
            <div class="col-9">
              <label>Jenis Penilaian :</label
              ><input class="form-control" type="text" />
            </div>
            <div class="col-2">
              <label>Persentase :</label
              ><input class="form-control" type="number" />
            </div>
            <div class="col-1">
              <button class="btn btn-secondary form-control">Tambah</button>
            </div>
          </div>
          <div class="overflow-y-auto alert-wrapper">
            <div class="alert alert-light custom-alert" index="0">
              20% : pembuatan makalah<button
                type="button"
                class="btn-close"
                aria-label="Close alert"
              ></button>
            </div>
            <div class="alert alert-light custom-alert" index="1">
              10% : absensi<button
                type="button"
                class="btn-close"
                aria-label="Close alert"
              ></button>
            </div>
          </div>
        </div>
        <div class="mt-4" id="form-tugas-penilaian">
          <div class="d-flex justify-content-between align-items-center">
            <div class="">
              <strong>Tugas/Aktifitas Penilaian</strong
              ><i
                class="bi bi-question-circle px-2 cursor-pointer"
                data-bs-toggle="tooltip"
                data-bs-title="Lorem, ipsum dolor."
              ></i>
            </div>
            <div class="d-flex gap-2">
              <button class="btn btn-outline-secondary" onclick="rediretTo(`./print.html#tugas-aktifitas-penilaian`)">
                Lihat dalam Tabel
              </button>
              <button
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modal-add-tugas-penilaian"
              >
                Tambah Data
              </button>
            </div>
          </div>
          <div
            class="modal fade"
            id="modal-add-tugas-penilaian"
            tabindex="-1"
            aria-labelledby="modal-add-tugas-penilaian"
          >
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header mx-5">
                  <h1
                    class="modal-title h6 fw-bold my-1"
                    id="exampleModalLabel"
                  >
                    Tambah Data Tugas / Penilaian
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
                        <input class="form-control" type="text" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Tugas atau Aktifitas</strong>
                        </p>
                        <textarea
                          class="form-control"
                          rows="4"
                          data-section="form"
                        >
                        </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Kemampuan Akhir yang Diharapkan atau Dievaluasi</strong>
                        </p>
                        <textarea
                          class="form-control"
                          rows="4"
                          data-section="form"
                        >
                        </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Kriteria Penilaian</strong>
                        </p>
                        <textarea
                          class="form-control"
                          rows="4"
                          data-section="form"
                        >
                        </textarea>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Indikator Penilaian</strong>
                        </p>
                        <textarea
                          class="form-control"
                          rows="4"
                          data-section="form"
                        >
                        </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Waktu</strong>
                        </p>
                        <textarea
                          class="form-control"
                          rows="4"
                          data-section="form"
                        >
                        </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p><strong>Bobot Nilai</strong></p>
                        <input class="form-control" type="text" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer mx-5">
                  <button type="submit" class="btn btn-primary">
                    Tambah Data
                  </button>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="form-group-rencana-pembelajaran" class="mb-5 d-none">
        <div class="mt-4" id="form-rencana-pembelajaran">
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
              <button class="btn btn-outline-secondary" onclick="rediretTo(`./print.html#rencana-pelaksanaan-pembelajaran`)">
                Lihat dalam Tabel
              </button>
              <button
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#modal-add-rencana-pembelajaran"
              >
                Tambah Data
              </button>
            </div>
          </div>
          <div
            class="modal fade"
            id="modal-add-rencana-pembelajaran"
            tabindex="-1"
            aria-labelledby="modal-add-rencana-pembelajaran"
          >
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header mx-5">
                  <h1 class="modal-title h6 fw-bold my-1" id="exampleModalLabel">
                    Tambah Data Rencana Pembelajaran
                  </h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mx-5">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p><strong>Pertemuan Ke</strong></p>
                        <input class="form-control" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Kemampuan Akhir yang Diharapkan</strong>
                        </p>
                        <textarea class="form-control" rows="4" data-section="form"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Indikator</strong>
                        </p>
                        <textarea class="form-control" rows="4" data-section="form"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Topik & Sub-topik</strong>
                        </p>
                        <textarea class="form-control" rows="4" data-section="form"></textarea>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Aktifitas / Strategi Pembelajaran</strong>
                        </p>
                        <textarea class="form-control" rows="4" data-section="form"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p class="mt-1">
                          <strong>Waktu</strong>
                        </p>
                        <textarea class="form-control" rows="4" data-section="form"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="mb-3">
                        <p><strong>Penilaian</strong></p>
                        <textarea class="form-control" rows="4" data-section="form"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer mx-5">
                  <button type="submit" class="btn btn-primary">
                    Tambah Data
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"
    ></script>
    <script src="./assets/js/jquery-render.js"></script>
    <script src="./assets/js/detail.js"></script>
  </body>
</html>
