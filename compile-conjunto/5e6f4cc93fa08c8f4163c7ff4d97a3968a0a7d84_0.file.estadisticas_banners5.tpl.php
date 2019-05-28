<?php
/* Smarty version 3.1.32, created on 2019-04-04 22:07:18
  from 'C:\xampp\tpl-conjunto\estadisticas_banners5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ca663f6e1bc32_79173298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e6f4cc93fa08c8f4163c7ff4d97a3968a0a7d84' => 
    array (
      0 => 'C:\\xampp\\tpl-conjunto\\estadisticas_banners5.tpl',
      1 => 1547003660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca663f6e1bc32_79173298 (Smarty_Internal_Template $_smarty_tpl) {
?><div><h3>ESTADÍSTICAS DE BANNERS CONJUSEGURO.COM</h3></div>

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

<?php echo '<script'; ?>
 src="vendor/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/imprimir_pfd.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var a_labels = [];
var a_data = [];
var maximo = 0;
<?php $_smarty_tpl->_assignInScope('maximo', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_banners']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
	a_labels.push("<?php echo $_smarty_tpl->tpl_vars['fila']->value['descripcion'];?>
");
	a_data.push(<?php echo $_smarty_tpl->tpl_vars['fila']->value['impresiones'];?>
);
	<?php if ($_smarty_tpl->tpl_vars['fila']->value['impresiones'] > $_smarty_tpl->tpl_vars['maximo']->value) {?>
		<?php $_smarty_tpl->_assignInScope('maximo', $_smarty_tpl->tpl_vars['fila']->value['impresiones']);?>
	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
maximo = <?php echo $_smarty_tpl->tpl_vars['maximo']->value;?>
;
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
<?php $_smarty_tpl->_assignInScope('maximo', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla_banners']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
	a_labels.push("<?php echo $_smarty_tpl->tpl_vars['fila']->value['descripcion'];?>
");
	a_data.push(<?php echo $_smarty_tpl->tpl_vars['fila']->value['accesos'];?>
);
	<?php if ($_smarty_tpl->tpl_vars['fila']->value['accesos'] > $_smarty_tpl->tpl_vars['maximo']->value) {?>
		<?php $_smarty_tpl->_assignInScope('maximo', $_smarty_tpl->tpl_vars['fila']->value['accesos']);?>
	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
maximo = <?php echo $_smarty_tpl->tpl_vars['maximo']->value;?>
;
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



<?php echo '</script'; ?>
><?php }
}
