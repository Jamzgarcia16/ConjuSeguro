<div><h3>ADMINISTRACIÓN DE CLIENTES</h3></div>
{if $crud !=""} 	{* Nivel 2 *}

	<div><h4>{$subtitulo}</h4></div>
	<!-- HTML -->
	<form action="{$PROGRAMA}" enctype="multipart/form-data" method="post" onsubmit="return validar();">
	  <div class="form-group">
	    <label for="id_cliente">ID</label>
	    <input type="text" class="form-control" id="id_cliente" name="id_cliente" value="{$fila.id_cliente}"{$at1}>
	  </div>
	  <div class="form-group">
	    <label for="nombre_cliente">Nombre_Cliente:</label>
	    <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" value="{$fila.nombre_cliente}"{$at2}>
	  </div>

	  <div class="form-group">
	    <label for="cc">CC ó NIT:</label>
	    <input type="text" class="form-control" id="cc" name="cc" value="{$fila.cc}"{$at2}>
	  </div>

	  <div class="form-group">
	    <label for="email">Email:</label>
	    <input type="email" class="form-control" id="email" name="email" value=""{$at2}>
	  </div>

	  <div class="form-group">
	    <label for="direccion">}Direccion:</label>
	    <input type="text" class="form-control" id="direccion" name="direccion" value=""{$at2}>
	  </div>

	  <div class="form-group">
	    <label for="cod_cliente">}Codigo Cliente:</label>
	    <input type="text" class="form-control" id="cod_cliente" name="cod_cliente" value=""{$at2}>
	  </div>




	  <button type="submit" name="aceptar" class="btn btn-primary" value="{$boton}">{$boton}</button>
	  <button type="reset" class="btn btn-primary">Reestablecer</button>
	  <button type="submit" name="aceptar" class="btn btn-primary" value="Regresar">Regresar</button>
	  
	  <input type="hidden" name="opcion" value="{$opcion}">
	  <input type="hidden" name="operacion" value="{$crud}">
	</form>

{else} 	{* Nivel 1 *}<!-- Comentario -->
  {$mensaje}
  <table class="table table-hover">
    <thead>
      <tr style="text-align: center;">
      	<th>Editar</th>
        <th>ID</th>
        <th>Nombre_Cliente</th>	
        <th>Cedula ó NIT</th>
        <th>Email</th>
        <th>Direccion</th>
        <th>Codigo Cliente</th>
      	<th>Borrar</th>
      </tr>
    </thead>
    <tbody>
	{foreach $tabla_clientes as $fila}
		<tr style="text-align: center;">
			<td><a href="{$PROGRAMA}?opcion={$opcion}&crud=u&idu={$fila.id_cliente}" class="btn btn-primary" style="font-size:12px; color: white;" title="Editar"><i class="fa fa-edit"></i></a></td>
			<td>{$fila.id_cliente}</td>
			<td>{$fila.nombre_cliente}</td>
			<td>{$fila.cc}</td>
			<td>{$fila.email}</td>
			<td>{$fila.direccion}</td>
			<td>{$fila.cod_cliente}</td>
			<td><a href="{$PROGRAMA}?opcion={$opcion}&crud=d&idu={$fila.id_cliente}" class="btn btn-danger" style=" font-size:12px; color: white;" title="Eliminar"><i class="fa fa-trash-o"></i></a></td>
		</tr>
	{/foreach}
	<tr>
		<td colspan="7">
			<a href="{$PROGRAMA}?opcion={$opcion}&crud=c" class="btn btn-warning" style="font-size:12px;" title="Adicionar"><i class="fa fa-plus"></i> Adicionar</a>
		</td>
	</tr>
    </tbody>
  </table>
{/if}