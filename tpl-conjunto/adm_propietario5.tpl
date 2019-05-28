<div><h3>ADMINISTRACIÓN DE PROPIETARIOS</h3></div>
{if $crud !=""} 	{* Nivel 2 *}


	<div><h4>{$subtitulo}</h4></div>
	<!-- HTML -->
	<form action="{$PROGRAMA}" enctype="multipart/form-data" method="post">
	  <div class="form-group">
	    <label for="id_propietario">ID</label>
	    <input type="text" class="form-control" id="id_propietario" name="id_propietario" value="{$fila.id_propietario}"{$at1}>
	  </div>
	  <div class="form-group">
	    <label for="nombre_propietario">Nombre Propietario:</label>
	    <input type="text" class="form-control" id="nombre_propietario" name="nombre_propietario" value="{$fila.nombre_propietario}"{$at2}>
	  </div>

	  <div class="form-group">
	    <label for="identificacion">Identificacion:</label>
	    <input type="text" class="form-control" id="identificacion" name="identificacion" value="{$fila.identificacion}"{$at2}>
	  </div>

	  <div class="form-group">
	    <label for="celular">Celular</label>
	    <input type="text" class="form-control" id="celular" name="celular" value="{$fila.celular}"{$at2}>
	  </div>

	  <div class="form-group">
	    <label for="email">Email</label>
	    <input type="text" class="form-control" id="email" name="email" value="{$fila.email}"{$at2}>
	  </div>	  

	  <div class="form-group">
	    <label for="fecha_nacimiento">Fecha_Nacimiento</label>
	    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{$fila.fecha_nacimiento}"{$at2}>
	  </div>

	  <div class="form-group">
	    <label for="foto">Foto:</label>
	    <div>Archivo: {$fila.foto}</div>
	    <div><img src="{$fila.foto}" alt="foto"></div>
	    <input type="file" class="form-control" id="foto" name="foto"{$at2}>
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
        <th>Nombre Propietario</th>
        <th>Identificacion</th>
        <th>celular</th>
        <th>Email</th>
        <th>Fecha Nacimiento</th>
        <th>Foto Propieatario</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>
	{foreach $tabla_propietarios as $fila}
		<tr>
			<td><a href="{$PROGRAMA}?opcion={$opcion}&crud=u&idu={$fila.id_propietario}" class="btn btn-primary" style="font-size:12px; color: white;" title="Editar"><i class="fa fa-edit"></i></a></td>
			<td>{$fila.id_propietario}</td>
			<td>{$fila.identificacion}</td>
			<td>{$fila.nombre_propietario}</td>
			<td>{$fila.celular}</td>
			<td>{$fila.email}</td>			
			<td>{$fila.fecha_nacimiento}</td>
			<td>{$fila.foto}</td>
			<td><a href="{$PROGRAMA}?opcion={$opcion}&crud=d&idu={$fila.id_propietario}" class="btn btn-danger" style="font-size:12px; color: white;" title="Eliminar"><i class="fa fa-trash-o"></i></a></td>
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