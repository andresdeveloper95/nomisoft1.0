<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Clase 2') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Estas líneas son de los data table -->
    <link rel="stylesheet" type="text/css" href="    https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

</head>
<body>
    <div id="app">

        <!--Aqui barra de navegación -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: ##e3342f;">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Porteros <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Turnos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Horarios <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                </li>
                </ul>
            </div>
        </nav>

        <main class="py-4">
           
        <!-- Aqui todo nuestro codigo, includes y otros -->
        @yield('content')
        @yield('content1')
        @include('crearPortero')
        @include('eliminarPortero')
        @include('actualizarPortero')
        @include('crearTurno')
        @include('eliminarTurno')
        @include('actualizarTurno')
        

        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" defer></script>

</body>

    <div class="card text-center">
        <div class="card-header"></div>

        <div class="card-body">
            <h5 class="card-title">Universidad del Valle</h5>
            <p class="card-text">La mejor para los mejores</p>
            <a href="#" class="btn btn-primary">Nomisoft Derechos Reservados AyJ S.A</a>
        </div>
    </div>
</html>

<!-- Método para mostrar los porteros -->

<script>
    $(function(){
        $('#tablePorteros').DataTable(
        {
            "serverSide":true,
            "ajax":"{{ url('api/porteros')}}",
            "columns":[
                {data:'id'},
                {data:'cedula'},
                {data:'nombres'},
                {data:'apellidos'},
                {data:'direccion'},
                {data:'telefono'},
                {data:'correo'},
                {data:'btn'},
            ],
            "pageLength":8,
            language:{
                "search": "Buscar:",
            },
        });
    });
</script>

<!-- Método para crear los porteros -->

<script>
     $('#registro').click(function(){
        var ced=$('#_documento').val();
        var nom=$('#_nombres').val();
        var ape=$('#_apellidos').val();
        var dir=$('#_direccion').val();
        var tel=$('#_telefono').val();
        var cor=$('#_correo').val();
        

        var route="porteros";
        var token=$('#token').val();

        $.ajax({
            url:route,
            headers:{'X-CSRF-TOKEN': token},
            type:'POST',
            dataType:'json',
            data:{
                cedula:ced,
                nombres:nom,
                apellidos:ape,
                direccion:dir,
                telefono:tel,
                correo:cor,
            },
        });
        $('#tablePorteros').DataTable().ajax.reload();
    });
</script>

<!-- Método para el modal eliminar -->

<script>
    $(function(){
        var table=$('#tablePorteros').DataTable();

        table.on('click','.delete',function(){
            $tr=$(this).closest('tr');
            if($($tr).hasClass('child')){
                $tr=$tr.prev('.parent');
            }
            var data=table.row($tr).data();
            $('#idEliminar').val(data.id);
            $('#deletePortero1').modal('show');     
        });    
    });
</script>

<!-- Método para eliminar los porteros -->

<script>
    $("#elimina").click(function(){
        var idEliminar=$("#idEliminar").val();
        var token=$("#token").val();
        var route="/porteros/eliminar/"+idEliminar;
        $.ajax({
            url:route,
            headers:{'X-CSRF-TOKEN': token},
            type:'DELETE',
            dataType:'json',
            data:{
                id:idEliminar,	
            }
        });
        $('#tablePorteros').DataTable().ajax.reload();
    });
</script>

<!-- Método para mostrar el modal que actualiza -->

<script>
    $(function(){
        var table=$('#tablePorteros').DataTable();

        table.on('click','.edit',function(){
            $tr=$(this).closest('tr');
            if($($tr).hasClass('child')){
                $tr=$tr.prev('.parent');
            }
            var data=table.row($tr).data();
            $('#idActualizar').val(data.id);
            $('#nombres1').val(data.nombres);
            $('#apellidos1').val(data.apellidos);
            $('#direccion1').val(data.direccion);
            $('#telefono1').val(data.telefono);
            $('#correo1').val(data.correo);

            $('#updatePortero').modal('show');  

        });    
    });
</script>


<!-- Método para actualizar porteros-->

<script>
    $('#registroUpdate').click(function(){
        var idactualizar=$('#idActualizar').val();
        var nom=$('#nombres1').val();
        var ape=$('#apellidos1').val();
        var dir=$('#direccion1').val();
        var tel=$('#telefono1').val();
        var cor=$('#correo1').val();
        
        //console.log("este es:"+idactualizar);
        var route="/porteros/actualizar/"+idactualizar;

        var token=$('#token1').val();

        $.ajax({
            url:route,
            headers:{'X-CSRF-TOKEN': token},
            type:'PATCH',
            dataType:'json',
            data:{
                nombres:nom,
                apellidos:ape,
                direccion:dir,
                telefono:tel,
                correo:cor,
            },
        });
        $('#tablePorteros').DataTable().ajax.reload();
    });
</script>

<!-- Método para mostrar los turnos -->

<script>
    $(function(){
        $('#tableTurnos').DataTable(
        {
            "serverSide":true,
            "ajax":"{{ url('api/turnos')}}",
            "columns":[
                {data:'id'},
                {data:'codigo'},
                {data:'horaInicio'},
                {data:'horaFin'},
                {data:'btn'},
            ],
            "pageLength":8,
            language:{
                "search": "Buscar:",
            },
        });
    });
</script>

<!-- Método para crear los turnos -->

<script>
     $('#registroTurno').click(function(){
        var cod=$('#_codigo').val();
        var ini=$('#_horaInicio').val();
        var fin=$('#_horaFin').val();

        var route="turnos";
        var token=$('#token').val();

        $.ajax({
            url:route,
            headers:{'X-CSRF-TOKEN': token},
            type:'POST',
            dataType:'json',
            data:{
                codigo:cod,
                horaInicio:ini,
                horaFin:fin,
            },
        });
        $('#tableTurnos').DataTable().ajax.reload();
    });
</script>

<!-- Método para el modal eliminar -->

<script>
    $(function(){
        $("#deleteTurno").appendTo("body");
        var table=$('#tableTurnos').DataTable();

        table.on('click','.delete',function(){
            $tr=$(this).closest('tr');
            if($($tr).hasClass('child')){
                $tr=$tr.prev('.parent');
            }
            var data=table.row($tr).data();
            $('#idEliminarTurno').val(data.id);
            $('#deleteTurno').modal('show');     
        });    
    });
</script>

<!-- Método para eliminar los turnos -->

<script>
    $("#eliminaTurno-btn").click(function(){
        var idEliminar=$("#idEliminarTurno").val();
        var token=$("#token").val();
        var route="/turnos/eliminar/"+idEliminar;
        $.ajax({
            url:route,
            headers:{'X-CSRF-TOKEN': token},
            type:'DELETE',
            dataType:'json',
            data:{
                id:idEliminar,	
            }
        });
        $('#tableTurnos').DataTable().ajax.reload();
    });
</script>

<!-- Método para mostrar el modal que actualiza -->

<script>
    $(function(){
        //$("#uptadeTurno1").appendTo("body");
        var table=$('#tableTurnos').DataTable();
        

        table.on('click','.edit',function(){
            $tr=$(this).closest('tr');
            if($($tr).hasClass('child')){
                $tr=$tr.prev('.parent');
            }
            var data=table.row($tr).data();
            $('#idActualizarTurno').val(data.id);
            $('#inicio1').val(data.horaInicio);
            $('#fin1').val(data.horaFin);

            $('#updateTurno1').modal('show');  

        });    
    });
</script>

<!-- Método para actualizar porteros-->

<script>
    $('#registroUpdateTurno').click(function(){
        var idactualizar=$('#idActualizarTurno').val();
        var inicio=$('#inicio1').val();
        var fin=$('#fin1').val();
        
        var route="/turnos/actualizar/"+idactualizar;

        var token=$('#token3').val();

        $.ajax({
            url:route,
            headers:{'X-CSRF-TOKEN': token},
            type:'PATCH',
            dataType:'json',
            data:{
                horaInicio:inicio,
                horaFin:fin, 
            },
        });
        $('#tableTurnos').DataTable().ajax.reload();
    });
</script>








