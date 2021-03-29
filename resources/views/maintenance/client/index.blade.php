@extends('template.index')
@section('contenido')
    @include('maintenance.client.create')
    <h2 class="row justify-content-center text-primary text-center ">LISTADO DE CLIENTES</h2>

    <button class="btn btn-primary mb-2 col-md-3" onclick="crearCliente()"><i class="fas fa-plus-circle"></i> NUEVO
        CLIENTE
    </button>

    <div class="table-responsive">
        <table class="table  table-hover w-100" id="clients">
            <thead class="bg-primary">
            <tr>
                <th>Item</th>
                <th>Nombres</th>
                <th>Tipo Doc.</th>
                <th>Num Doc.</th>
                <th>Sexo</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>


@endsection
@section('script')
    <script src="{{asset('app/js/client.js')}}"></script>

@endsection
