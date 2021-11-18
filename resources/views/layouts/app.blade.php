<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/
3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div>
        <main>
            <table>
                <tr>
                    <td style="padding:2px "><a href="{{ route('clinica.agregar') }}">
                            AGREGAR HISTORIAL CLINICO </a></td>
                    <td style="padding:2px"><a href="{{ route('clinica.listar') }}">
                            VER LISTA DE HISTORIAL CLINICO </a></td>
                </tr>
            </table>
            @yield('content')
        </main>
    </div>
</body>

</html>
