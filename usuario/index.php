<!DOCTYPE html>
<html lang="en">
<?php include_once("header.php"); ?>
<body>
<?php include_once("menu.php"); ?>
<div id="content">
  <div id="content-header">
    <h1>Administrador</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="widget-box widget-plain">
      <div class="center">
        <ul class="stat-boxes2" style="display: block;">
          <li>
            <div class="left peity_bar_neutral"><span><span style="display: none;">1,2,3,4,5,6,7</span>
              <canvas width="50" height="24"></canvas>
              </span>10%</div>
            <div class="right"> <strong>10</strong> Ingreso </div>
          </li>
          <li>
            <div class="left peity_bar_bad"><span><span style="display: none;">7,6,5,4,3,2,1</span>
              <canvas width="50" height="24"></canvas>
              </span>40%</div>
            <div class="right"> <strong>20</strong> Egreso</div>
          </li>
          <li>
            <div class="left peity_line_neutral"><span><span style="display: none;">1,10,1,10,1,10,1,10</span>
              <canvas width="50" height="24"></canvas>
              </span></div>
            <div class="right"> <strong>-20</strong> Total </div>
          </li>
          <li>
            <div class="left peity_line_good"><span><span style="display: none;">12,6,9,23,14,10,17</span>
              <canvas width="50" height="24"></canvas>
              </span>60%</div>
            <div class="right"> <strong>3/5</strong> Cuentas de hosting </div>
          </li>
          <!--<li>
            <div class="left peity_bar_good"><span>12,6,9,23,14,10,13</span>+30%</div>
            <div class="right"> <strong>2560</strong> Register</div>
          </li>-->
        </ul>
      </div>
    </div>
    <div id="container"></div>
  </div>
</div>
<?php include_once("footer.php"); ?>
</body>
</html>
<script>

      anychart.onDocumentReady(function () {
  // set chart theme
anychart.theme('darkBlue');
        // create line chart
        var chart = anychart.line();

        chart.yScale().minimum(0);

        // create line series
        var series = chart.line(getData());

        series.normal().stroke('#999999', 5, null, 'round', 'round');
        series.normal().risingStroke('#66BB6A', 5, null, 'round', 'round');
        series.normal().fallingStroke('#FF7043', 5, null, 'round', 'round');

        // set container id for the chart
        chart.container('container');

        // initiate chart drawing
        chart.draw();
      });

      // return data for chart
      function getData() {
        return [
          ['Jan 2010', 35],
          ['Feb 2010', 45],
          ['Mar 2010', 49],
          ['Apr 2010', 52],
          ['May 2010', 53],
          ['Jun 2010', 58],
          ['Jul 2010', 55],
          ['Aug 2010', 60],
          ['Sep 2010', 50],
          ['Oct 2010', 50],
          ['Nov 2010', 53],
          ['Dec 2010', 56],
          ['Jan 2011', 52],
          ['Feb 2011', 53],
          ['Mar 2011', 52],
          ['Apr 2011', 47],
          ['May 2011', 49],
          ['Jun 2011', 46],
          ['Jul 2011', 48],
          ['Aug 2011', 43],
          ['Sep 2011', 45],
          ['Oct 2011', 45],
          ['Nov 2011', 42],
          ['Dec 2011', 44],
          ['Jan 2012', 43],
          ['Feb 2012', 45],
          ['Mar 2012', 44],
          ['Apr 2012', 38],
          ['May 2012', 43],
          ['Jun 2012', 36],
          ['Jul 2012', 35],
          ['Aug 2012', 29],
          ['Sep 2012', 36],
          ['Oct 2012', 32],
          ['Nov 2012', 38],
          ['Dec 2012', 30]
        ];
      }
    
</script>