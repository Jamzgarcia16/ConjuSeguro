<div><h3>ADMINISTRACIÓN DE APARTAMENTOS</h3></div>
{if $crud !=""} 	{* Nivel 2 *}
<!-- 
	<script type="text/javascript" src="js/rollups/hmac-sha3.js"></script>
	<script type="text/javascript" src="js/components/sha3.js"></script>
	<script type="text/javascript">
		function validar() {
			// DOM: Document Objects Model
			// $("#clave1").val( CryptoJS.SHA3( $("#clave1").val() ) ); // JQuery

			// JavaScript
			if (document.forms[0].nombre.value == "") {
				alert("Se requiere el nombre");
				document.forms[0].nombre.focus();
				return false;
			}
			if (document.forms[0].cuenta.value == "") {
				alert("Se requiere la cuenta");
				document.forms[0].cuenta.focus();
				return false;
			}

			if (document.forms[0].clave1.value == document.forms[0].clave2.value) {
				if (document.forms[0].clave1.value != "") {
					document.forms[0].clave1.value = CryptoJS.SHA3( document.forms[0].clave1.value );
					document.forms[0].clave2.value = document.forms[0].clave1.value;
				}
			} else {
				alert("Error en confirmación de la contraseña");
				document.forms[0].clave1.value = "";
				document.forms[0].clave2.value = "";
				document.forms[0].clave1.focus();
				return false;
			}
		}
	</script>

-->

	<div><h4>{$subtitulo}</h4></div>
	<!-- HTML -->
	<form action="{$PROGRAMA}" enctype="multipart/form-data" method="post">
	  <div class="form-group">
	    <label for="id_apartamento">ID</label>
	    <input type="text" class="form-control" id="id_apartamento" name="id_apartamento" value="{$fila.id_apartamento}"{$at1}>
	  </div>
	  <div class="form-group">
	    <label for="nombre_apartamento">Nombre_Apartamento:</label>
	    <input type="text" class="form-control" id="nombre_apartamento" name="nombre_apartamento" value="{$fila.nombre_apartamento}"{$at2}>
	  </div>

	  <div class="form-group">
	    <label for="descripcion">Descripcion:</label>
	    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{$fila.descripcion}"{$at3}>
	  </div>

	  <div class="form-group">
	    <label for="valor_adm">Valor Administracion:</label>
	    <input type="text" class="form-control" id="valor_adm" name="valor_adm" value="{$fila.valor_adm}"{$at3}>
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
        <th>Nombre_Apartamento</th>
        <th>Descripcion</th>
        <th>Valor_Adm</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>
	{foreach $tabla_apartamentos as $fila}
		<tr>
			<td><a href="{$PROGRAMA}?opcion={$opcion}&crud=u&idu={$fila.id_apartamento}" class="btn btn-primary" style="font-size:12px; color: white;" title="Editar"><i class="fa fa-edit"></i></a></td>
			<td>{$fila.id_apartamento}</td>
			<td>{$fila.nombre_apartamento}</td>
			<td>{$fila.descripcion}</td>
			<td>{$fila.valor_adm}</td>
			<td><a href="{$PROGRAMA}?opcion={$opcion}&crud=d&idu={$fila.id_apartamento}" class="btn btn-danger" style="font-size:12px; color: white;" title="Eliminar"><i class="fa fa-trash-o"></i></a></td>
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