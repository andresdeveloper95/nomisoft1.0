@extends('layouts.layout')

@section('content1')

<!-- MDBootstrap Datatables  -->

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <center>
                        <h1><b>Turnos</h1>
                    </center>                         
                    </div>
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
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



<!-- Esta tabla fue extraida de https://getbootstrap.com/docs/4.4/content/tables/ -->
<!-- Información de los data table aquí https://datatables.net/manual/styling/ -->