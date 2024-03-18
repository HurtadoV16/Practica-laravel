<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de servicio</title>
</head>
<body>
    <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <label>
                Ingrese la fecha de realizacion:
                <br>
                <input type="text" name="fecha_realizacion">
            </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>
</body>
</html>
