<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cexpe')</title>
    <!-- Include Bootstrap for styling, as implied by the table-based navigation in the document -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .activo {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        .activo a{
            color: red;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        {{dump(request()->routeIs('inicio'))}}
        <table class="table table-border">
            <thead>
                <tr>
                    <th scope="col" class="{{ setActivo('inicio') }}"><a href="{{ url('/') }}">Inicio</a></th>
                    <th scope="col" class="{{ setActivo('programas') }}"><a href="{{ url('programas') }}">Programas</a></th>
                    <th scope="col" class="{{ setActivo('talleres') }}"><a href="{{ url('talleres') }}">Talleres</a></th>
                    <th scope="col" class="{{ setActivo('asesoramiento') }}"><a href="{{ url('asesoramiento') }}">Asesoramiento</a></th>
                    <th scope="col" class="{{ setActivo('contacto') }}"><a href="{{ url('contacto') }}">Contacto</a></th>
                </tr>
            </thead>
        </table>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>