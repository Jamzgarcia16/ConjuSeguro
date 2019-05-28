<div><h3>ADMINISTRACIÓN DE BANNERS</h3></div>
{if $crud !=""} 	{* Nivel 2 *}

	<div><h4>{$subtitulo}</h4></div>
	<!-- HTML -->
	<form action="{$PROGRAMA}" enctype="multipart/form-data" method="post">
	  <div class="form-group">
	    <label for="id">ID</label>
	    <input type="text" class="form-control" id="id" name="id" value="{$fila.id}"{$at1}>
	  </div>
	  <div class="form-group">
	    <label for="descripcion">Descripcion:</label>
	    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{$fila.descripcion}"{$at2}>
	  </div>

	  <div class="form-group">
	    <label for="objeto">Objeto:</label>
	    <input type="text" class="form-control" id="objeto" name="objeto" value="{$fila.objeto}"{$at2}>
	  </div>

	  <div class="form-group">
	    <label for="impresiones">Impresiones:</label>
	    <input type="text" class="form-control" id="impresiones" name="impresiones" value="{$fila.impresiones}"{$at1}>
	  </div>

	  <div class="form-group">
	    <label for="accesos">Accesos:</label>
	    <input type="text" class="form-control" id="accesos" name="accesos" value="{$fila.accesos}"{$at1}>
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
      <tr>
      	<th>Editar</th>
        <th>ID</th>
        <th>Descripcion</th>
        <th>Objeto</th>
        <th>Impresiones</th>
        <th>Accesos</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>
	{foreach $tabla_banners as $fila}
		<tr>
			<td><a href="{$PROGRAMA}?opcion={$opcion}&crud=u&idu={$fila.id}" class="btn btn-primary" style="font-size:12px; color: white;" title="Editar"><i class="fa fa-edit"></i></a></td>
			<td>{$fila.id}</td>
			<td>{$fila.descripcion}</td>
			<td>{$fila.objeto}</td>
			<td>{$fila.impresiones}</td>
			<td>{$fila.accesos}</td>
			<td><a href="{$PROGRAMA}?opcion={$opcion}&crud=d&idu={$fila.id}" class="btn btn-danger" style="font-size:12px; color: white;" title="Eliminar"><i class="fa fa-trash-o"></i></a></td>
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