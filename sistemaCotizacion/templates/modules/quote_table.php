<?php if (empty($d->items)): ?>
  <div class="text-center">
    <h3>La cotización está vacía</h3>
    <img src="<?php echo IMG.'empty.png'; ?>" alt="Sin contenido" class="img-fluid" style="width: 150px;">
  </div>
<?php else: ?>
  <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
      <thead>
        <tr>
          <th></th>
          <th>Producto</th>
          <th>Precio</th>
          <th class="text-center">Cantidad</th>
          <th class="text-right">Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($d->items as $item): ?>
          <tr>
            <td>
              <div class="btn-group">
                <button class="btn btn-sm btn-success edit_concept" data-id="<?php echo $item->id; ?>">Editar</button>
                <button class="btn btn-sm btn-danger delete_concept" data-id="<?php echo $item->id; ?>">Borrar</button>
              </div>
            </td>
            <td>

              <?php echo $item->concept; ?>

              <small class="text-muted d-block">
                <img src="<?php echo IMG.($item->type === 'producto' ? 'product.png' : 'service.png'); ?>" alt="<?php echo $item->concept; ?>" style="width: 15px;">
                <?php echo $item->type === 'producto' ? 'Producto' : 'Servicio'; ?>

              </small>

              <small class="text-muted d-block">

              <?php
                switch ($item->colorPvc) {
                    case 'blanco':
                        echo 'Blanco';
                        break;
                    case 'nogalClaro':
                        echo 'Nogal Claro';
                        break;
                    case 'nogalOscuro':
                        echo 'Nogal Oscuro';
                        break;
                    case 'negro':
                        echo 'Negro';
                        break;
                    default:
                        echo 'Valor Por Defecto';
                        break;
                }
              ?>

              </small>

              <small class="text-muted d-block">

              <?php

                    switch ($item->colorVidrio) {
                      case 'transparente':
                          echo 'Transparente';
                          break;
                      case 'reflectivoAzul':
                          echo 'Reflectivo Azul';
                          break;
                      case 'bronce':
                          echo 'Bronce';
                          break;
                      case 'nevadoClaro':
                          echo 'Nevado Claro';
                          break;
                      case 'nevadoOscuro':
                          echo 'Nevado Oscuro';
                          break;
                      case 'supergris':
                          echo 'Supergris';
                          break;
                      case 'supergrisReflectivo':
                          echo 'Supergris Reflectivo';
                          break;
                      case 'duela':
                          echo 'Duela';
                          break;
                      default:
                          echo 'No seleccionado';
                          break;
                    }
                   
              ?>

              </small>

              <small class="text-muted d-block">
              <?php echo $item->largo . 'x' . $item->ancho . 'mts.'; ?>
              </small>

            </td>
            <td><?php echo 'Q'.number_format($item->price, 2); ?></td>
            <td class="text-center"><?php echo $item->quantity; ?></td>
            <td class="text-right"><?php echo 'Q'.number_format($item->total, 2); ?></td>
          </tr>
        <?php endforeach; ?>
        <tr>
          <td class="text-right" colspan="4">Subtotal</td>
          <td class="text-right"><?php echo 'Q'.number_format($d->subtotal, 2); ?></td>
        </tr>
        <tr>
          <td class="text-right" colspan="4">Impuestos</td>
          <td class="text-right"><?php echo 'Q'.number_format($d->taxes, 2); ?></td>
        </tr>
         <!-- <tr>
          <td class="text-right" colspan="4">Envío</td>
          <td class="text-right"><?php echo 'Q'.number_format($d->shipping, 2); ?></td>
        </tr> -->
        <tr>
          <td class="text-right" colspan="5">
            <b>Total</b><h3 class="text-success"><b><?php echo 'Q'.number_format($d->total, 2); ?></b></h3>
            <small class="text-muted"><?php echo sprintf('Impuestos incluidos %s%% IVA', TAXES_RATE); ?></small>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
<?php endif; ?>