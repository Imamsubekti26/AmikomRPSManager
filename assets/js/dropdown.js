function dropdownSearch({searchInput, dropdown, codeGet, sizee, callback}){

  return {
    cari: function() {
      dropdown.css(sizee);
      const searchText = searchInput.val();
      if(!searchText){
        dropdown.css({display:"none"})
        return;
      }
      this.getData(searchText)
    },
    getData: function(searchText) {
      fetch(`./routes/matkul.php?x=${codeGet}&search=${searchText}`)
      .then(response => response.json())
      .then(data => {
        this.tampilkanDropdown(data);
      })
      .catch(error => {
        console.error("Terjadi kesalahan:", error);
      });
    },
    tampilkanDropdown: function(data){
      dropdown.html("");
      if (data.length <= 0) {
        dropdown.css({display:"none"});
        return;
      }
      data.forEach(callback);
      dropdown.css({display:"block"});
    }
  }
}

function cariProdi(){
  const searchInput = $("[name=nama_prodi]");
  const dropdown = $("#dropdown-nama-prodi");
  const codeGet = 61;
  
  const inputRect = searchInput[0].getBoundingClientRect();
  const sizee = { left: '16px', top: "262px", width: inputRect.width + "px"};

  function callback(item){
    const listItem = document.createElement("a");
    listItem.className = "list-group-item list-group-item-action";
    listItem.textContent = item.nama_prodi;
    listItem.addEventListener("click", function () {
      searchInput.val(item.nama_prodi);
      dropdown.css({display:"none"});
    });
    dropdown.append(listItem);
  }

  return dropdownSearch({searchInput, dropdown, codeGet, sizee, callback})
}

function cariMatkul(){
  const searchInput = $("[name=nama_matkul]");
  const dropdown = $("#dropdown-nama-matkul");
  const inputKodeMatkul = $("[name=id_matkul]");
  const codeGet = 62;
  const inputRect = searchInput[0].getBoundingClientRect();
  const sizee = { left: '16px', top: "348px", width: inputRect.width + "px"};

  function callback(item){
    const listItem = document.createElement("a");

    listItem.className = "list-group-item list-group-item-action";
    listItem.textContent = item.nama_matkul;
    listItem.addEventListener("click", function () {
      searchInput.val(item.nama_matkul);
      inputKodeMatkul.val(item.id_matkul);
      dropdown.css({display:"none"});
    });
    dropdown.append(listItem);
  }

  return dropdownSearch({searchInput, dropdown, codeGet, sizee, callback})
}

cariProdi();
cariMatkul();