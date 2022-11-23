<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Mostrar Coches</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <form method="POST" action="{{url('/recibiralumno')}}">
        @csrf
        <input type="text" name="nombre"/>
        <input type="text" name="apellido"/>
        <input type="number" name="edad"/>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>

</body>
</html>
