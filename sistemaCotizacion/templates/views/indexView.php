  <?php require_once INCLUDES.'head.php'; ?>
  <?php require_once INCLUDES.'navbar.php'; ?>

  <!-- content -->
  <div class="container-fluid py-5">
    <div class="row">
      <div class="col-12 wrapper_notifications">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 col-12">
        <div class="card mb-3">
          <div class="card-header bg-dark" style="color: white;">Información del cliente</div>
          <div class="card-body">
            <form action="">
              <div class="form-group row">
                <div class="col-4">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Cliente" required>
                </div>
                <div class="col-4">
                  <label for="empresa">Empresa</label>
                  <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Nombre de la Empresa" required>
                </div>
                <div class="col-4">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" required>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-dark" style="color: white;">Agregar Nuevo Producto</div>
          <div class="card-body">
            <form id="add_to_quote" method="POST">
              <div class="form-group row">

                <div class="col-3">
                  <label for="concepto">Nombre del Producto</label>
                  <input type="text" class="form-control" id="concepto" name="concepto" placeholder="Nombre del Producto" required>
                </div>


                <div class="col-3">
                  <label for="tipo">Tipo de producto</label>
                  <select name="tipo" id="tipo" class="form-control">
                    <option value="">-- Seleccione Tipo de Producto --</option>
                    <option value="producto">Producto</option>
                    <option value="servicio">Servicio</option>
                  </select>
                </div>

                
                <!-- ComboBox de Color de Vidrio -->

                <div class="col-3">
                  <label for="colorVidrio">Color de Vidrio o Duela</label>
                  <select name="colorVidrio" id="colorVidrio" class="form-control" required>
                    <option value="">-- Seleccione Color de Vidrio --</option>
                    <option value="transparente">Trasparente</option>
                    <option value="reflectivoAzul">Reflectivo Azul</option>
                    <option value="bronce">Bronce</option>
                    <option value="nevadoClaro">Nevado Claro</option>
                    <option value="nevadoOscuro">Nevado Oscuro</option>
                    <option value="supergris">Supergris</option>
                    <option value="supergrisReflectivo">Supergris Reflectivo</option>
                    <option value="duela">Duela</option>
                  </select>
                </div>

                <!-- ComboBox de Color de PVC -->

                <div class="col-3">
                  <label for="colorPvc">Color de PVC</label>
                  <select name="colorPvc" id="colorPvc" class="form-control" required>
                    <option value="">-- Seleccione Color PVC --</option>
                    <option value="blanco">Blanco</option>
                    <option value="nogalClaro">Nogal Claro</option>
                    <option value="nogalOscuro">Nogal Oscuro</option>
                    <option value="negro">Negro</option>
                  </select>
                </div>

                <!-- Medidas de Largo -->

                <div class="col-3">
                  <label for="largo">Medidas (mts)</label>
                  <input type="text" class="form-control" id="largo" name="largo" placeholder="Largo" required>
                </div>

                <!-- Medidas de Ancho -->

                <div class="col-3">
                  <label for="ancho">Medidas (mts)</label>
                  <input type="text" class="form-control" id="ancho" name="ancho" placeholder="Ancho" required>
                </div>

                <div class="col-3">
                  <label for="cantidad">Cantidad</label>
                  <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" max="99999" value="1" required>
                </div>
                <div class="col-3">
                  <label for="precio_unitario">Precio unitario</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Q</span>
                    </div>
                    <input type="text" class="form-control" id="precio_unitario" name="precio_unitario" placeholder="0.00" required>
                  </div>
                </div>
              </div>
              <br>
              <button class="btn btn-primary" type="submit">Agregar Producto</button>
              <button class="btn btn-danger" type="reset">Cancelar</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-12">
        <div class="wrapper_update_concept" style="display: none;">
          <div class="card mb-3">
            <div class="card-header">Editando Producto</div>
            <div class="card-body">
              <form id="save_concept" method="POST">
                <input type="hidden" class="form-control" id="id_concepto" name="id_concepto" required>
                <div class="form-group row">
                  <div class="col-3">
                    <label for="concepto">Producto</label>
                    <input type="text" class="form-control" id="concepto" name="concepto" placeholder="Nombre de Producto" required>
                  </div>
                  <div class="col-3">
                    <label for="tipo">Tipo de producto</label>
                    <select name="tipo" id="tipo" class="form-control">
                      <option value="producto">Producto</option>
                      <option value="servicio">Servicio</option>
                    </select>
                  </div>
                  <div class="col-3">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" max="99999" value="1" required>
                  </div>
                  <div class="col-3">
                    <label for="precio_unitario">Precio unitario</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Q</span>
                      </div>
                      <input type="text" class="form-control" id="precio_unitario" name="precio_unitario" placeholder="0.00" required>
                    </div>
                  </div>
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Guardar cambios</button>
                <button class="btn btn-danger" type="reset" id="cancel_edit">Cancelar</button>
              </form>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">Resumen de cotización <button class="btn btn-danger float-right restart_quote">Reiniciar Cotización</button></div>
          <div class="card-body wrapper_quote">
            
          </div>
          <div class="card-footer">
            <button class="btn btn-primary" id="generate_quote">Generar cotización</button>
            <a class="btn btn-primary" id="download_quote" style="display: none;" href="">Descargar PDF</a>
            <button class="btn btn-info" id="send_quote" style="display: none;">Enviar por correo</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ends content -->

  <?php require_once INCLUDES.'footer.php'; ?>