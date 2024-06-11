<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salamanca360_admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estiloForm.css') }}">
    <link rel="icon" type="image/png" href='{{asset("imagenes/favicon.png")}}'/>
</head>
<body>
<div class="container">
    <div class="tarjeta fondo-tarjeta">
        <img class="logo" src="{{ asset('Imagenes/logo.png') }}" alt="Logotipo de Salamanca360 con una rana verde y ojos grandes. La lengua forma la 's' del nombre. Colorido y llamativo">
        <h2><strong>Ingresa los datos de las actividades:<strong></h2>
        
        <form action='{{ url("updateActividades/$actividad->id") }}' enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value="{{ $actividad->nombre }}" required>
            </div>
            <div class="mb-3">
                <input type="text" id="ubicacion" name="ubicacion" class="form-control" placeholder="Ubicación" value="{{ $actividad->ubicacion }}" required>
            </div>
            <div class="mb-3">
                <textarea id="ubicacion_enlace" name="ubicacion_enlace" rows="4" cols="50" class="form-control" placeholder="Ubicación enlace" required>{{ $actividad->ubicacion_enlace }}</textarea>
            </div>
            <div class="mb-3">
                <input type="text" id="enlace" name="enlace" class="form-control" placeholder="Enlace" value="{{ $actividad->enlace }}" required>
            </div>
            <div class="mb-3">
                <textarea id="descripcionMin" name="descripcionMin" rows="4" cols="50"  class="form-control" placeholder="Descripción Mínima" required>{{ $actividad->decripcionMin }}</textarea>
            </div>
            <div class="mb-4">
                <textarea id="descripcionMax" name="descripcionMax" rows="4" cols="50"  class="form-control" maxlength="2000" placeholder="Descripción Máxima" required>{{ $actividad->decripcionMax }}</textarea>
            </div>
            
            <div class="mb-3">
                <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono" value="{{ $actividad->telefono }}" required>
            </div>
            <div class="mb-3">
                <input type="text" id="precio" name="precio" class="form-control" placeholder="Precio" value="{{ $actividad->precio }}" required>
            </div>

            <div class="mb-3">
                <input type="file" id="imagen" name="imagen" class="form-control-file">
            </div>

            <div class="text-center">
                <input type="submit" class="btn-custom" value="Enviar">
            </div>

       
        </form>
    </div>
</div>
</body>
</html>
