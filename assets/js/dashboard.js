const data = [
  {
    id: 1,
    prodi: "D3 Teknik Informatika",
    matkul: "Pemrograman Web",
    semester: 2,
    tahun: 2023,
  },
  {
    id: 2,
    prodi: "D3 Teknik Informatika",
    matkul: "Logika Informatika",
    semester: 1,
    tahun: 2022,
  },
];
$("#decoration-topbar").render(
  "https://imamsubekti26.github.io/AmikomRPSManager/assets/components/decoration-topbar.htm"
);
$("#list-of-matkul").render(
  "https://imamsubekti26.github.io/AmikomRPSManager/assets/components/matkul-loop-card.htm",
  data
);
