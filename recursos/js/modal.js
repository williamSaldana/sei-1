window.onload = function () {
  $("#showModal").click(function () {
    console.log("modal1");
    $(".modal").addClass("is-active");
  });

  $(".delete").click(function () {
    $(".modal").removeClass("is-active");
  });
};

function poblarTabla() {
  var codigo = $('#codigoUCC').val();

  if (codigo != '') {

    var QueryString = "funcion=getEstudiantes&codigo=" + codigo;

    $.ajax({
      async: false,
      url: "modulos/gestion_ue/llenarTabla.php",
      data: QueryString,

      success: function (resp) {

        if (resp == 'false') {


          $("#tableEstudiantes").css('display', 'none');
          alert("no datos en la consulta");

        } else {

          var listado = JSON.parse(resp);

          $("#tableEstudiantes").css('display', 'block');

          var j = 0;
          var i = 0;

          for (i; i < listado.length; i++) {

            $("#tdCodigo").html(listado[i][j]);

            for (j; j <= listado.length; j++) {

              $("#tdNombre").html(listado[i][j]);

            }

          }

        }


      }

    });

  } else {
    alert('por favor digite el codigo');
  }



}

