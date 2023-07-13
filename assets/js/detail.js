$("#decoration-topbar").render("./assets/components/decoration-topbar.htm");
$("#form-unit-pembelajaran").render(
  "./assets/components/accordion-unit-pembelajaran.htm",
  [{ id: 1 }, { id: 2 }]
);
$("#form-tugas-penilaian").render(
  "./assets/components/accordion-tugas-penilaian.htm",
  [{ id: 1 }, { id: 2 }]
);
$("#form-rencana-pembelajaran").render(
  "./assets/components/accordion-rencana-pembelajaran.htm",
  [{ id: 1 }, { id: 2 }]
);

function selectForm(id) {
  return {
    btn_edit: $(`${id} [data-section=btn-edit]`)[0],
    btn_save: $(`${id} [data-section=btn-save]`)[0],
    form: $(`${id} [data-section=form]`)[0],
  };
}

function doEdit(id) {
  const components = selectForm(id);
  components.btn_edit.classList.add("d-none");
  components.btn_save.classList.remove("d-none");
  components.form.readOnly = false;
}

function doSave(id) {
  const components = selectForm(id);
  components.btn_edit.classList.remove("d-none");
  components.btn_save.classList.add("d-none");
  components.form.readOnly = true;
}

function doCancel(id) {
  const components = selectForm(id);
  components.btn_edit.classList.remove("d-none");
  components.btn_save.classList.add("d-none");
  components.form.readOnly = true;
}

function formInEditOrSave(idElement) {
  selectForm(idElement).btn_edit.addEventListener("click", () =>
    doEdit(idElement)
  );

  selectForm(idElement).btn_save.children[0].addEventListener("click", () =>
    doSave(idElement)
  );

  selectForm(idElement).btn_save.children[1].addEventListener("click", () =>
    doCancel(idElement)
  );
}

function changeTab(tabKeBarapa) {
  const menu = $("#menubar > nav").children();
  menu[0].classList.remove("active", "fw-bold");
  menu[1].classList.remove("active", "fw-bold");
  menu[2].classList.remove("active", "fw-bold");
  menu[3].classList.remove("active", "fw-bold");
  menu[tabKeBarapa].classList.add("active", "fw-bold");
  $("#form-group-umum").addClass("d-none");
  $("#form-group-unit-pembelajaran").addClass("d-none");
  $("#form-group-tugas-penilaian").addClass("d-none");
  $("#form-group-rencana-pembelajaran").addClass("d-none");
  switch (tabKeBarapa) {
    case 0:
      $("#form-group-umum").removeClass("d-none");
      break;
    case 1:
      $("#form-group-unit-pembelajaran").removeClass("d-none");
      break;
    case 2:
      $("#form-group-tugas-penilaian").removeClass("d-none");
      break;
    case 3:
      $("#form-group-rencana-pembelajaran").removeClass("d-none");
      break;

    default:
      break;
  }
}

function rediretTo(value) {
  document.location.href = value;
}

formInEditOrSave("#form-gambaran-umum");
formInEditOrSave("#form-capaian-pembelajaran");
formInEditOrSave("#form-prasyarat");

$("#menubar > nav")
  .children()[0]
  .addEventListener("click", () => changeTab(0));
$("#menubar > nav")
  .children()[1]
  .addEventListener("click", () => changeTab(1));
$("#menubar > nav")
  .children()[2]
  .addEventListener("click", () => changeTab(2));
$("#menubar > nav")
  .children()[3]
  .addEventListener("click", () => changeTab(3));

const tooltipTriggerList = document.querySelectorAll(
  '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);
