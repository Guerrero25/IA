$(document).ready(function () {
  $(".close").click(function() {
    $(".notificacion").hide();
  });

  $("#cerrarMatriculas").click(function() {
    $.post("/IA/Admin/cerrar_matriculas",function(data) {
      $(".notificacion").show();
      $(".cuerpo").html(data['msg']);
    });
  });

  $("#abrirMatriculas").click(function() {
    $.post("/IA/Admin/abrir_matriculas",function (data) {
      $(".notificacion").show();
      $(".cuerpo").html(data['msg']);
    });
  });
  
});
