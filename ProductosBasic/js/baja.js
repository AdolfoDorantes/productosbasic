let usuario = localStorage.getItem('nombres_productos');
    document.getElementById("usuario_text").innerHTML= usuario;
    function completar(valor){
      console.log(valor);
      var parametros = {
        "nombre" : valor
      };
      $.ajax({
        data:  parametros,
        url:   'php/ajax_nombre.php',
        type:  'post',
        beforeSend: function () {
          $("#nombre_p").html("Procesando, espere por favor...");
          },
          success:  function (response) {
            $("#nombre_p").val(response);
          }
      });
      $.ajax({
        data:  parametros,
        url:   'php/ajax_apellido_p.php',
        type:  'post',
        beforeSend: function () {
          $("#apellido_p").html("Procesando, espere por favor...");
          },
          success:  function (response) {
            $("#apellido_p").val(response);
          }
      });
      $.ajax({
        data:  parametros,
        url:   'php/ajax_apellido_m.php',
        type:  'post',
        beforeSend: function () {
          $("#apellido_m").html("Procesando, espere por favor...");
          },
          success:  function (response) {
            $("#apellido_m").val(response);
          }
      });
      $.ajax({
        data:  parametros,
        url:   'php/ajax_telefono.php',
        type:  'post',
        beforeSend: function () {
          $("#telefono").html("Procesando, espere por favor...");
          },
          success:  function (response) {
            $("#telefono").val(response);
          }
      });
      $.ajax({
        data:  parametros,
        url:   'php/ajax_direccion.php',
        type:  'post',
        beforeSend: function () {
          $("#direccion").val("Procesando, espere por favor...");
          },
          success:  function (response) {
            $("#direccion").val(response);
          }
      });
      $.ajax({
        data:  parametros,
        url:   'php/ajax_facebook.php',
        type:  'post',
        beforeSend: function () {
          $("#facebook").val("Procesando, espere por favor...");
          },
          success:  function (response) {
            $("#facebook").val(response);
          }
      });
      $.ajax({
        data:  parametros,
        url:   'php/ajax_twitter.php',
        type:  'post',
        beforeSend: function () {
          $("#twitter").val("Procesando, espere por favor...");
          },
          success:  function (response) {
            $("#twitter").val(response);
          }
      });
      $.ajax({
        data:  parametros,
        url:   'php/ajax_instagram.php',
        type:  'post',
        beforeSend: function () {
          $("#instagram").val("Procesando, espere por favor...");
          },
          success:  function (response) {
            $("#instagram").val(response);
          }
      });
      $.ajax({
        data:  parametros,
        url:   'php/ajax_id.php',
        type:  'post',
        beforeSend: function () {
          $("#id_user").val("Procesando, espere por favor...");
          },
          success:  function (response) {
            $("#id_user").val(response);
          }
      });
    }