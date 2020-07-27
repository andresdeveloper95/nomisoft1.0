<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->

    <link rel="stylesheet" type="text/css" href="    https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Turnos registrados</div>
                    <div class="card-body">

                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearTurno">
                    Crear Turno</button>

                    <table id="tableTurnos" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Código</th>
                                <th>Hora de inicio</th>
                                <th>Hora de fin</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach($turnos as $turno)
                                <tr>
                                    <td>{{ $turno->id }}</td>
                                    <td>{{ $turno->codigo }}</td>
                                    <td>{{ $turno->horaInicio }}</td>
                                    <td>{{ $turno->horaFin }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
     
</body>
</html>

<script>
$(document).ready(function() {
    $('#tableTurnos').DataTable();
} );
</script>




