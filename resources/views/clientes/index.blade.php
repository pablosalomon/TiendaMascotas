<center><h1>Lista de clientes</h1></center>
@if (session('mensaje_exito'))
    <div>{{session('mensaje_exito')}}</div>
@endif
<table>
    <thead>
        <tr>
            <th>Nombres</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Estado</th>
            <th>Detalles</th>
            <th>Actualizar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente -> nombreCliente}}
                </td>
                <td>
                    {{$cliente -> apellidoCliente}}
                </td>
                <td>
                    {{$cliente -> direccionCliente}}
                </td>
                <td>
                    {{$cliente -> telefonoCliente}}
                </td>
                <td>
                    {{$cliente -> estadoCliente}}
                </td>
                <td>
                    <a href="{{url('clientes/'.$cliente->idCliente)}}">Ver detalles...</a>
                </td>

                <td>
                    <a href="{{url('clientes/'.$cliente->idCliente. "/edit")}}">Actualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{url ('clientes/create')}}">Nuevo Cliente</a>
