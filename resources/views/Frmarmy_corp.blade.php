<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de cuerpo del ejercito</title>
</head>
<body>
    <form action="{{route('cejercito.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <label>
                Ingrese la denominacion del cuerpo del ejercito:
                <br>
                <input type="text" name="denominacion">
            </label>
            <br><br>
            <button type="submit">Enviar Formulario:</button>
            </form>
</body>
</html>
