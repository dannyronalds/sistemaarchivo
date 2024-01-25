/* Llamando a la función getData() */
getData();

/* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
document.getElementById("campo").addEventListener(
  "keyup",
  function () {
    getData();
  },
  false
);
document.getElementById("num_registros").addEventListener(
  "change",
  function () {
    getData();
  },
  false
);

/* Peticion AJAX */
function getData(voz) {
  let input = document.getElementById("campo").value;
  if (voz != null) {
    input = voz;
  }
  let num_registros = document.getElementById("num_registros").value;
  let content = document.getElementById("content");
  let pagina = document.getElementById("pagina").value;
  let orderCol = document.getElementById("orderCol").value;
  let orderType = document.getElementById("orderType").value;

  if (pagina == null) {
    pagina = 1;
  }

  let url = "http://localhost/archivo/model/listadonotarios.model.php";
  let formaData = new FormData();
  formaData.append("campo", input);
  formaData.append("registros", num_registros);
  formaData.append("pagina", pagina);
  formaData.append("orderCol", orderCol);
  formaData.append("orderType", orderType);

  fetch(url, {
    method: "POST",
    body: formaData,
  })
    .then((response) => response.json())
    .then((data) => {
      content.innerHTML = data.data;
      document.getElementById("lbl-total").innerHTML =
        "Mostrando " +
        data.totalFiltro +
        " de " +
        data.totalRegistros +
        " registros";
      document.getElementById("nav-paginacion").innerHTML = data.paginacion;
    })
    .catch((err) => console.log(err));
}

function nextPage(pagina) {
  document.getElementById("pagina").value = pagina;
  getData();
}

let columns = document.getElementsByClassName("sort");
let tamanio = columns.length;
for (let i = 0; i < tamanio; i++) {
  columns[i].addEventListener("click", ordenar);
}

function ordenar(e) {
  let elemento = e.target;

  document.getElementById("orderCol").value = elemento.cellIndex;

  if (elemento.classList.contains("asc")) {
    document.getElementById("orderType").value = "asc";
    elemento.classList.remove("asc");
    elemento.classList.add("desc");
  } else {
    document.getElementById("orderType").value = "desc";
    elemento.classList.remove("desc");
    elemento.classList.add("asc");
  }

  getData();
}
$("#voz").click(function () {
  console.log("voz activo");
  let rec;
  if (!("webkitSpeechRecognition" in window)) {
    alert("disculpas, no puedes usar la API");
  } else {
    rec = new webkitSpeechRecognition();
    rec.lang = "es-PE";
    rec.continuous = true;
    rec.interim = true;
    rec.addEventListener("result", iniciar);
  }
  function iniciar(event) {
    for (let i = event.resultIndex; i < event.results.length; i++) {
      let campoBuscar = event.results[i][0].transcript;
      document.getElementById("campo").innerHTML =
        event.results[i][0].transcript;
      getData(campoBuscar);
      console.log(event.results[i][0].transcript);
      campoBuscar = "";
    }
  }
  rec.start();
  setTimeout(() => {
    rec.stop();
  }, 10000);
});
