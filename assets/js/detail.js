const searchParams = new URLSearchParams(window.location.search);

let oldValue = {
  formgambaranumum: "",
  formcapaianpembelajaran: "",
  formprasyarat: "",
}

UnitPem().GetAll();
Tugas().GetAll();
Rencana().GetAll();
Referensi().GetAll();
Nilai().GetAll();

// activate bootstrap tooltips
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

// mengubah tab yang ditampilkan
function changeTab(tabKeBarapa) {
  const menu = $("#menubar > nav").children();
  const namaTab = [
    "#form-group-umum",
    "#form-group-unit-pembelajaran",
    "#form-group-tugas-penilaian",
    "#form-group-rencana-pembelajaran"
  ]
  
  menu[0].classList.remove("active", "fw-bold");
  menu[1].classList.remove("active", "fw-bold");
  menu[2].classList.remove("active", "fw-bold");
  menu[3].classList.remove("active", "fw-bold");
  menu[tabKeBarapa].classList.add("active", "fw-bold");

  $("#form-group-umum").addClass("d-none");
  $("#form-group-unit-pembelajaran").addClass("d-none");
  $("#form-group-tugas-penilaian").addClass("d-none");
  $("#form-group-rencana-pembelajaran").addClass("d-none");
  $(namaTab[tabKeBarapa]).removeClass("d-none");

}

// mengubah status (draf, aktif. arsip)
function changeStatusData(status) {
  const id = searchParams.get("id");
  if (confirm("apakah kamu yakin?")) {
    window.location.href = `./routes/matkul.php?x=${status}&id=${id}`;
  }
  // 31:hapus; 32:aktifkan; 33:arsipkan; 34:revisi; 35:salin
}

// tampilkan print page
function showPrintPage (id) {
  window.open(`./print.php${id}`, "_blank");
}

// manipulasi form (baca form, bersihkan form, isi form)
function dataForm(idForm) {
  return {
    GetData: function() {
      var inputValues = {};
      $(`${idForm} [name]`).each(function() {
        var name = $(this).attr("name");
        var value = $(this).val();
        inputValues[name] = value;
      });
      return inputValues;
    },
    Clear: function() {
      $(`${idForm} [name]`).each(function() {
        $(this).val('');
      });
      $(`${idForm} h1 span`).html("Tambah");
      $(`${idForm} button[type=submit]`).html("Tambah Data");
    },
    Fill: function(data) {
      $(`${idForm} [name]`).each(function() {
        var name = $(this).attr("name");
        $(this).val(data[name]);
      })
      $(`${idForm} h1 span`).html("Edit");
      $(`${idForm} button[type=submit]`).html("Edit Data");
    }
  }
}

// CRUD untuk input jenis textarea
function TextareaAction() {
  return {
    codeX: {
      formgambaranumum: 41,
      formcapaianpembelajaran: 42,
      formprasyarat: 43,
    },

    selectForm: function(id) {
      return {
        btn_edit: $(`${id} [data-section=btn-edit]`)[0],
        btn_save: $(`${id} [data-section=btn-save]`)[0],
        form: $(`${id} [data-section=form]`)[0],
      };
    },

    fetching: function(id, components){
      const id_rps = searchParams.get("id");
      fetch(`./routes/matkul.php?x=${this.codeX[id]}&id=${id_rps}`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ value: components.form.value }),
      })
        .then((r) => r.json())
        .then((r) => {
          components.btn_save.childNodes[1].innerHTML = "simpan";
          components.btn_edit.classList.remove("d-none");
          components.btn_save.classList.add("d-none");
          components.form.readOnly = true;
          if (!r.success) {
            alert("data gagal diupdate");
          }
        });
    },

    Edit: function(id) {
      const components = this.selectForm(id);
      const idWithoutRegex = id.replace(/[^a-z0-9]/gi);
      if (!components.btn_edit.childNodes[1].disabled) {
        components.btn_edit.classList.add("d-none");
        components.btn_save.classList.remove("d-none");
        components.form.readOnly = false;
        oldValue[idWithoutRegex] = components.form.value;
      }
    },

    Cancel: function(id) {
      const components = this.selectForm(id);
      const idWithoutRegex = id.replace(/[^a-z0-9]/gi);
      components.btn_edit.classList.remove("d-none");
      components.btn_save.classList.add("d-none");
      components.form.readOnly = true;
      components.form.value = oldValue[idWithoutRegex];
    },

    Save: function(id) {
      const components = this.selectForm(id);
      const idWithoutRegex = id.replace(/[^a-z0-9]/gi, "");

      components.btn_save.childNodes[1].innerHTML = `<div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div>`;

      if (oldValue[idWithoutRegex] !== components.form.value) {
        this.fetching(idWithoutRegex, components);
      }
    }
  }
}

// CRUD untuk input jenis modal
function AccordionAction({primaryKey, namaForm, namaModal, namaComponent, urlApi}) {
  return {
    GetAll: function() {
      $(namaForm).html('');
      const id = searchParams.get('id');
      fetch(`./routes/${urlApi}.php?x=2&id=${id}`)
      .then(r => r.json())
      .then(r => {
        $(namaForm).render(`../../components/accordions/${namaComponent}`, r, true);
      });
    },

    GetOne: function(id) {
      fetch(`./routes/${urlApi}.php?x=4&id=${id}`)
      .then(r => r.json())
      .then(r => {
        dataForm(namaModal).Fill(r);
        $(namaModal).modal('show');
      });
    },

    Delete: function(id_unit){
      if(!confirm("apakah kamu yakin untuk menghapus data ini?")) return;
      fetch(`./routes/${urlApi}.php?x=3&id=${id_unit}`, {method:'DELETE'})
      .then(r => r.json())
      .then(r => { if(r.success) this.GetAll() });
    },

    Add: function() {
      const data = dataForm(namaModal).GetData();
      const id_rps = searchParams.get("id");

      fetch(`./routes/${urlApi}.php?x=1&id=${id_rps}`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
      })
        .then(r => r.json() )
        .then(r => {
          if (!r.success){
            alert('data gagal ditambahkan');
            return;
          }
          this.GetAll();
          $(namaModal).modal('hide');
          dataForm(namaModal).Clear();
        })
    },
    
    Update: function() {
      const data = dataForm(namaModal).GetData();
      const id_jadwal = searchParams.get("id");

      fetch(`./routes/${urlApi}.php?x=5&id=${data[primaryKey]}`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({id_jadwal, ...data})
      })
        .then(r => r.json() )
        .then(r => {
          if (!r.success){
            alert('data gagal diubah');
            return;
          }
          this.GetAll();
          $(namaModal).modal('hide');
          dataForm(namaModal).Clear();
        })
    },
    
    AddOrUpdate: function() {
      const data = dataForm(namaModal).GetData();
      if(data[primaryKey] === ''){
        this.Add();
      } else {
        this.Update();
      }
    }
  }
}

// CRUD untuk input jenis list
function ListAction({urlApi, namaForm, namaModal, callback}){
  return {
    GetAll: function(){
      $(namaForm).html('');
      const id = searchParams.get('id');
      fetch(`./routes/${urlApi}.php?x=2&id=${id}`)
      .then(r => r.json())
      .then(r => {
        let text = callback(r)
        $(namaForm).html(text);
      });
    },
    Add: function(){
      const data = dataForm(namaModal).GetData();
      const inputan = $(`[name=${urlApi}]`);
      const id_rps = searchParams.get("id");

      if (inputan.val() === '') return;
      
      fetch(`./routes/${urlApi}.php?x=1&id=${id_rps}`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
      })
        .then(r => r.json() )
        .then(r => {
          if (!r.success){
            alert('data gagal ditambahkan');
            return;
          }
          this.GetAll();
          dataForm(namaModal).Clear();
        })
    },
    Delete: function(id){
      if(!confirm("apakah kamu yakin untuk menghapus data ini?")) return;
        fetch(`./routes/${urlApi}.php?x=3&id=${id}`, {method:'DELETE'})
        .then(r => r.json())
        .then(r => { if(r.success) this.GetAll() });
    },
  };
}

function UnitPem(){
  const primaryKey = "id_unit"
  const namaForm = "#form-unit-pembelajaran";
  const namaModal = "#modal-add-unit-pembelajaran";
  const namaComponent = "unit-pembelajaran.php";
  const urlApi = "unitPem";

  return AccordionAction({primaryKey, namaForm, namaModal, namaComponent, urlApi});
}

function Tugas(){
  const primaryKey = "id_tugas"
  const namaForm = "#form-tugas-penilaian";
  const namaModal = "#modal-add-tugas-penilaian";
  const namaComponent = "tugas-penilaian.php";
  const urlApi = "tugas";

  return AccordionAction({primaryKey, namaForm, namaModal, namaComponent, urlApi});
}

function Rencana(){
  const primaryKey = "id_rencana"
  const namaForm = "#form-rencana-pembelajaran";
  const namaModal = "#modal-add-rencana-pembelajaran";
  const namaComponent = "rencana-pembelajaran.php";
  const urlApi = "rencana";

  return AccordionAction({primaryKey, namaForm, namaModal, namaComponent, urlApi});
}

function Referensi(){
  const urlApi = "referensi";
  const namaForm = "#load-ref-here";
  const namaModal = "#form-input-referensi"
  const callback = (r) => {
    let text = ``;
    for (let i = 0; i < r.length; i++) {
      const components = `
      <div class="alert alert-light custom-alert" index="0">
        ${r[i].deskripsi}
        <button type="button" class="btn-close" aria-label="Close alert" onclick="Referensi().Delete(${r[i].id_ref})"></button>
      </div>`;
      text += components;
    }
    return text;
  }
  return ListAction({urlApi, namaForm, namaModal, callback});
}

function Nilai(){
  const urlApi = "nilai";
  const namaForm = "#load-nilai-here";
  const namaModal = "#form-input-nilai"
  const callback = (r) => {
    let text = ``;
    for (let i = 0; i < r.length; i++) {
      const components = `
      <div class="alert alert-light custom-alert" index="0">
        ${r[i].persentase}% : ${r[i].deskripsi}
        <button type="button" class="btn-close" aria-label="Close alert" onclick="Nilai().Delete(${r[i].id_nilai})"></button>
      </div>`;
      text += components;
    }
    return text;
  }
  return ListAction({urlApi, namaForm, namaModal, callback});
}
