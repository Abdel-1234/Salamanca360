<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salamanca360_Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estiloAdmiPrincipal.css') }}">
    <link rel="icon" type="image/png" href='{{asset("imagenes/favicon.png")}}'/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
<div class="container contenecor1 mt-5">
                <a href='{{url("adminActividades")}}'>
                  <img class="logo" src="{{ asset('Imagenes/logo.png') }}" alt="Logotipo de Salamanca360 con una rana verde y ojos grandes. La lengua forma la 's' del nombre. Colorido y llamativo">
                </a>
        <h2>SELECCIONA UNA OPCIÓN</h2>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="tarjeta color1">
                    <div class="contenido-tarjeta">
                        <h5 class="titulo-tarjeta">ACTIVIDADES</h5>
                        <a href='{{url("formActividades")}}' target="_blank" class="btn-custom" >Añadir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="tarjeta color2">
                    <div class="contenido-tarjeta">
                        <h5 class="titulo-tarjeta">GASTRONÓMIA </h5>
                        <a href='{{url("formGastronomia")}}' target="_blank" class="btn-custom" >Añadir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="tarjeta color3">
                    <div class="contenido-tarjeta">
                        <h5 class="titulo-tarjeta">LUGARES</h5>
                        <a href='{{url("formLugaresinteres")}}' target="_blank" class="btn-custom" >Añadir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="tarjeta color4">
                    <div class="contenido-tarjeta">
                        <h5 class="titulo-tarjeta">OCIO</h5>
                        <a href='{{url("formOcio")}}' target="_blank" class="btn-custom" >Añadir</a>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
    <div id="div">
        </div>

    <script>
          function loadDocActividad() {
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("div").innerHTML = this.responseText;
                }
              };
              xhttp.open("GET", 'http://localhost/Salamanca360/public/formActividades', true);
              xhttp.send();
          }
          function loadDocGastronomia() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("div").innerHTML = this.responseText;
              }
            };
            xhttp.open("GET", 'http://localhost/Salamanca360/public/formGastronomia', true);
            xhttp.send();
          }
          function loadDocLugaresInteres() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("div").innerHTML = this.responseText;
              }
            };
            xhttp.open("GET", 'http://localhost/Salamanca360/public/formLugaresinteres', true);
            xhttp.send();
          }
          function loadDocOcio() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("div").innerHTML = this.responseText;
              }
            };
            xhttp.open("GET", 'http://localhost/Salamanca360/public/formOcio', true);
            xhttp.send();
         }
</script>

</body>
</html>
