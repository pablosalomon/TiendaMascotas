<center>
    <form class="form-horizontal" action="{{url('clientes')}}" method="POST">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <center><legend>Nuevo Cliente</legend></center>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Nombre:</label>
          <div class="col-md-4">
          <input id="textinput" name="nombre" type="text" placeholder="" class="form-control input-md">
            {{$errors->first("nombre")}}
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Apellido</label>
            <div class="col-md-4">
            <input id="textinput" name="apellido" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Dirección:</label>
          <div class="col-md-4">
          <input id="textinput" name="direccion" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Teléfono:</label>
            <div class="col-md-4">
            <input id="textinput" name="telefono" type="text" placeholder="" class="form-control input-md">

            </div>
          </div>

          <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Estado</label>
            <div class="col-md-4">
            <select id="estado" name="selectbasic" class="form-control">
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
            </div>
        </div>



          <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Usuario:</label>
            <div class="col-md-4">
            <input id="textinput" name="usuario" type="text" placeholder="" class="form-control input-md">

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
