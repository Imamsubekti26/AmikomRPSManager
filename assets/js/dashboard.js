// data untuk menampung value dari search dan filter
let searchForm = "";
let filter = 0;

// menyimpan panjang data yang diperoleh dari api
let oldDataLength = 0;

// untuk memilih filter mana yang mau dipakai
const toggleFilter = (x) => {
  $("#filter-draf").removeClass("active");
  $("#filter-aktif").removeClass("active");
  $("#filter-arsip").removeClass("active");
  $(x).addClass("active");
};

// untuk mendapatkan data dari db
const getData = async (filter, search) => {
  const x = fetch(`./routes/matkul.php?x=1&filter=${filter}&search=${search}`);
  const d = (await x).json();
  return await d;
};

// untuk meng-load data ke halaman
const renderDataToHTML = async (filter, search, isSwitchFilter = true) => {
  const data = await getData(filter, search);

  // jika panjang data masih sama spt sebelumnya dan filternya jg tidak berubah, jgn lakukan render ulang
  if (data.length !== oldDataLength || isSwitchFilter) {
    oldDataLength = data.length;
    $("#list-of-matkul").html("");
    $("#list-of-matkul").render(
      "../../components/matkul-loop-card.htm",
      data,
      true
    );
  }
};

// ketika salah satu menu filter on click
$("#filter-draf").on("click", async () => {
  toggleFilter("#filter-draf");
  filter = 0;
  renderDataToHTML(filter, searchForm);
});
$("#filter-aktif").on("click", async () => {
  toggleFilter("#filter-aktif");
  filter = 1;
  renderDataToHTML(filter, searchForm);
});
$("#filter-arsip").on("click", async () => {
  toggleFilter("#filter-arsip");
  filter = 2;
  renderDataToHTML(filter, searchForm);
});

// ketika searchbar on keyup
$("#form-search").on("keyup", async () => {
  searchForm = $("#form-search").val();
  renderDataToHTML(filter, searchForm, false);
});

// load komponen
renderDataToHTML(0, "");
