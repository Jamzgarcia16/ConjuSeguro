<div><h3>ESTADÍSTICAS DE BANNERS CONJUSEGURO.COM</h3></div>

<div class="row">
	<div class="col-lg-8">
	  <div class="card mb-3">
	    <div class="card-header">
	      <i class="fas fa-chart-bar"></i>
	      Estadisticas de Impresiones</div>
	    <div class="card-body">
	      <canvas id="myBarChart" width="100%" height="50"></canvas>
	    </div>
	    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
	  </div>
	</div>
	<div class="col-lg-4">
	  <div class="card mb-3">
	    <div class="card-header">
	      <i class="fas fa-chart-pie"></i>
	      Estadistica de Accesos</div>
	    <div class="card-body">
	      <canvas id="myPieChart" width="100%" height="100"></canvas>
	    </div>
	    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
	  </div>
	</div>
</div>

          <!-- # Area Chart Example 
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Area Chart Example</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
		-->

<div class="row">
	<div class="col" style="text-align: center; padding: 5px;">
		<button class="btn btn-danger btn-lg" title="Imprimir" onclick="imprimir();"><i class="fa fa-file-pdf-o" style="font-size:36px;color:white"></i></button>
	</div>
</div>

<script src="vendor/chart.js/Chart.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="js/imprimir_pfd.js"></script>
<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var a_labels = [];
var a_data = [];
var maximo = 0;
{$maximo = 0}
{foreach $tabla_banners as $fila}
	a_labels.push("{$fila.descripcion}");
	a_data.push({$fila.impresiones});
	{if $fila.impresiones > $maximo}
		{$maximo = $fila.impresiones}
	{/if}
{/foreach}
maximo = {$maximo};
// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: a_labels,
    datasets: [{
      label: "Revenue",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: a_data,
      backgroundColor: ['#007bff','#dc3545','#ffc107','#28a745','#ff944d','#4d79ff','#00cc66','#ffff66','#ff3333'], 
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'impresiones'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: maximo,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var a_labels = [];
var a_data = [];
var maximo = 0;
{$maximo = 0}
{foreach $tabla_banners as $fila}
	a_labels.push("{$fila.descripcion}");
	a_data.push({$fila.accesos});
	{if $fila.accesos > $maximo}
		{$maximo = $fila.accesos}
	{/if}
{/foreach}
maximo = {$maximo};
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: a_labels,
    datasets: [{
      data: a_data,
      backgroundColor: ['#007bff','#dc3545','#ffc107','#28a745','#ff944d','#4d79ff','#00cc66','#ffff66','#ff3333'],
    }],
  },
});



</script>