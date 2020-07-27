@extends('layouts.layout')

@section('content')

<!-- MDBootstrap Datatables  -->

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <center>
                        <h1><b>Porteros registrados</h1>
                    </center>                         
                    </div>
                    <div class="card-body">
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearPortero">
                                 Crear Portero</button>

            
                        <table id="tablePorteros" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Cédula</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Correo</th>
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