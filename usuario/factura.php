<!DOCTYPE html>
<html lang="en">
<?php include_once("header.php"); ?>
<body>
<?php include_once("menu.php"); ?>
<div id="content">
  <div id="content-header">
    <h1>Factura</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span6">
                <table class="">
                  <tbody>
                    <tr>
                      <td><h4><?php echo datosFacturacion("nombre",$con); ?></h4></td>
                    </tr>
                    <tr>
                      <td>Teléfono: <?php echo datosFacturacion("telefono",$con); ?></td>
                    </tr>
                    <tr>
                      <td>E-mail: <?php echo datosFacturacion("email",$con); ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="span6">
                <table class="table table-bordered table-invoice">
                  <tbody>
                    <tr>
                    <tr>
                      <td class="width30">ID de factura:</td>
                      <td class="width70"><strong>DW-6546</strong></td>
                    </tr>
                    <tr>
                      <td>Fecha a pagar:</td>
                      <td><strong>23 de Junio de 2020</strong></td>
                    </tr>
                    <tr>
                      <td>Fecha de pagada:</td>
                      <td><strong>22 de Junio de 2020</strong></td>
                    </tr>
                  <td class="width30">Dirección del cliente:</td>
                    <td class="width70"><strong>Cliente Nombre de la empresa.</strong> <br>
                      calle <br>
                      codigo postal <br>
                      Telefono:  <br>
                      E-mail:  </td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class="row-fluid">
              <div class="span12">
                <table class="table table-bordered table-invoice-full">
                  <thead>
                    <tr>
                      <th class="head0">Plan</th>
                      <th class="head1">Descripcion</th>
                      <th class="head0 right">Precio</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Firefox</td>
                      <td>Ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</td>
                      <td class="right">$2.150,00</td>
                    </tr>
                  </tbody>
                </table>
                <div class="pull-right">
                  <h4><span>Monto total:</span> $2.150,00</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once("footer.php"); ?>
</body>
</html>
