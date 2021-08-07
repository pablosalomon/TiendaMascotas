<center>
    <form class="form-horizontal" action="{{url('clientes/'. $cliente->idCliente)}}" method="POST">
        @method('PUT')
        @csrf
        <fieldset>

        <!-- Form Name -->
        <center><legend>Editar Cliente {{$cliente->nombreCliente}} {{$cliente->apellidoCliente}}</legend></center>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Nombre:</label>
          <div class="col-md-4">
          <input value="{{$cliente->nombreCliente}}" name="nombre" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Apellido</label>
            <div class="col-md-4">
            <input value="{{$cliente->apellidoCliente}}" name="apellido" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Dirección:</label>
          <div class="col-md-4">
          <input value="{{$cliente->direccionCliente}}" name="direccion" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Teléfono:</label>
            <div class="col-md-4">
            <input value="{{$cliente->telefonoCliente}}" name="telefono" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>


        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Guardar</button>
          </div>
        </div>

        </fieldset>
        </form>
    </center>
