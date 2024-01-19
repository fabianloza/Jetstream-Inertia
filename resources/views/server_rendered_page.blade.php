<!-- resources/views/server_rendered_page.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina renderizada desde el servidor</title>
    <style>
        body {
            background: linear-gradient(to right, #191919, #262626); /* Gradiente oscuro y claro */
            color: #eee; /* Texto más claro */
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
        }   

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        h5 {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 20px;
            font-weight: normal; /* Texto menos negrita */
        }

        a {
            text-decoration: none;
            color: #eee;
            background: #009933; /* Botón background color */
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            margin: 0 10px;
            transition: background 0.3s ease;
        }

        a:hover {
            background: #006622; /* Botón background color on hover */
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <h5>{{ $message }}</h5>
    <br>
    <a href="{{ url('/dashboard') }}">Página Principal</a>
    <a href="{{ url('/saludo') }}">Página de Prueba</a>
</body>
</html>
