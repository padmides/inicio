<!DOCTYPE html>
<html lang="en">
<?php include("header.php"); ?>
<body>
<?php include("menu.php"); ?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"></div>
    <h1>Planes de pago</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <?php
      include("conexion.php");
      $sql = mysqli_query($con, "SELECT * FROM `clientes` WHERE id='1'");
      $re = mysqli_fetch_array($sql);
      $meses3   = 0;
      $meses6   = 0;
      $meses12  = 0;
      $texto3meses = "";
      $texto6meses = "";
      $texto12meses = "";
      if($re['3mes'] != 0){
        $meses3 = $re['3mes']/100;
        $resultado = $re['monto']*3;
        $texto3meses = '<s>$'.$resultado.'</s> ';
      }
      if($re['6mes'] != 0){
        $meses6 = $re['6mes']/100;
        $resultado = $re['monto']*6;
        $texto6meses = '<s>$'.$resultado.'</s> ';
      }
      if($re['12mes'] != 0){
        $meses12 = $re['12mes']/100;
        $resultado = $re['monto']*12;
        $texto12meses = '<s>$'.$resultado.'</s> ';
      }

      $plan3meses = $re['monto']*3-(($re['monto']*12)*$meses3);
      $plan6meses = $re['monto']*6-(($re['monto']*12)*$meses6);
      $plan12meses = $re['monto']*12-(($re['monto']*12)*$meses12);


      ?>
      <div class="span3">
        <div class="widget-box">
          <div class="widget-title">
            <h5>1 Mes <?php echo "$".$re['monto']; ?> </h5>
          </div>
          <div class="widget-content">
            Vence el dia <?php echo date("d/m/Y", strtotime($re['fecha_vencimiento'])); ?> </div>
        </div>
        <div style="text-align: center;">
          <button class="btn-primary" style="">Seleccionar</button>
        </div>
      </div>
      <div class="span3">
        <div class="widget-box">
          <div class="widget-title">
            <h5>3 Meses <?php echo $texto3meses."$".$plan3meses; ?></h5>
          </div>
          <div class="widget-content">
            Vence el dia <?php echo date("d/m/Y", strtotime($re['fecha_vencimiento']."+ 3 month")); ?> </div>
        </div>
        <div style="text-align: center;">
          <button class="btn-primary" style="">Seleccionar</button>
        </div>
      </div>
      <div class="span3">
        <div class="widget-box">
          <div class="widget-title">
            <h5>6 Meses <?php echo $texto6meses."$".$plan6meses; ?></h5>
          </div>
          <div class="widget-content">
          Vence el dia <?php echo date("d/m/Y", strtotime($re['fecha_vencimiento']."+ 6 month")); ?> </div>
        </div>
        <div style="text-align: center;">
          <button class="btn-primary" style="">Seleccionar</button>
        </div>
      </div>
      <div class="span3">
        <div class="widget-box">
          <div class="widget-title">
            <h5>12 Meses <?php echo $texto12meses."$".$plan12meses; ?></code></h5>
          </div>
          <div class="widget-content">
            Vence el dia <?php echo date("d/m/Y", strtotime($re['fecha_vencimiento']."+ 12 month")); ?> </div>
        </div>
        <div style="text-align: center;">
          <button class="btn-primary" style="">Seleccionar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/matrix.js"></script>
</body>
</html>
