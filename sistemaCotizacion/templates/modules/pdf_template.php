<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cotización</title>

  <style type="text/css">
    * {
      font-family: Verdana, Arial, sans-serif;
    }
    table{
      font-size: x-small;
    }
    tfoot tr td{
      font-weight: bold;
      font-size: x-small;
    }
    .gray {
      background-color: lightgray;
    }

    .success {
      color: green;
    }
  </style>
</head>
<body>
  <!-- Cabecera -->
  <table width="100%">
    <tr>
      <td align="top"><img src="<?php echo URL;?>/assets/img/logo.png" alt=""></td>

      <!--<td align="top"><div style="background-image: url('assets/img/logo.jpeg');" width="150"></div></td> -->

      <!-- <td align="top">
        <picture>
          <source srcset="assets/img/logo.jpeg" width="150" height="150" type="image/jpeg">
          <img src="assets/img/logo.jpeg" alt="Logo" width="150" height="150">
        </picture>
        
      </td> -->
      <td align="right">
        <h3><?php echo APP_NAME; ?></h3>
        <pre>
          Guastatoya, El Progreso, Guatemala
          A un costado de la Ferretería Aldana
          Juan Jose Hernández Paíz
          Encargado
          40041977
          02001
        </pre>
      </td>
    </tr>
  </table>

  <!-- Información de la empresa -->
  <table width="100%">
    <tr>
      <td><strong>De:</strong> Juan Jose Hernández Paíz - GuastaGlass, Guastatoya, El Progreso, Guatemala.</td>
      <td><strong>Para:</strong> <?php echo sprintf('%s - %s (%s)', $d->name, $d->company, $d->email); ?></td>
    </tr>
  </table>

  <br/>

  <!-- Resumen de la cotización -->
  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>No.</th>
        <th>Descripción</th>
        <th>Precio unitario</th>
        <th>Cantidad</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($d->items as $c): ?>
        <tr>
          <th scope="row"><?php echo $i; ?></th>
          <td> <center><strong><?php echo $c->concept; ?></strong></center>
              <?php echo 'TIPO DE PRODUCTO: ' . $c->type; ?> <br> 
              <?php echo 'MEDIDAS: ' . $c->largo . 'x' . $c->ancho . 'mts.' ?> <br>
              <?php echo 'COLOR DE VIDRIO O DUELA: ' . $c->colorVidrio; ?> <br>
              <?php echo 'COLOR DE PVC: ' . $c->colorPvc; ?> <br>
          </td>
          <td align="right">Q<?php echo number_format($c->price, 2); ?></td>
          <td align="center"><?php echo $c->quantity; ?></td>
          <td align="right">Q<?php echo number_format($c->total, 2); ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3"></td>
        <td align="right">Subtotal Q</td>
        <td align="right"><?php echo number_format($d->subtotal, 2); ?></td>
      </tr>
      <tr>
        <td colspan="3"></td>
        <td align="right">Impuestos Q</td>
        <td align="right"><?php echo number_format($d->taxes, 2); ?></td>
      </tr>
      <tr>
        <td colspan="3"></td>
        <td align="right">Envío Q</td>
        <td align="right"><?php echo number_format($d->shipping, 2); ?></td>
      </tr>
      <tr>
        <td colspan="3"></td>
        <td align="right">Total Q</td>
        <td align="right" class="gray"><h3 style="margin: 0px 0px;"><?php echo number_format($d->total, 2); ?></h3></td>
      </tr>
      <tr>
        <td colspan="5" align="right"><?php echo sprintf('Impuestos del %s%% incluido (IVA).', TAXES_RATE); ?></td>
      </tr>
    </tfoot>
  </table>
</body>
</html>