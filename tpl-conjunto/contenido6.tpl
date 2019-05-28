{if $opcion != ""}
	{* Cargar un módulo/opción de la aplicación *}
	{if $modulo != ""}
		{include file="$modulo$VERSION.tpl"}
	{else}
		<img src="imagenes/perro_bravo.jpg" width="80%">
	{/if}
{else}
	 	<!-- 	<img src="imagenes/fondo.jpg" width="80%"> -->
		<div class="container">
		<h2>Ver Perfil del Creador Sitio Web.</h2>
		<p>Los programadores del mañana son los magos del futuro. Gabe Newell</p>

		<!-- Button to Open the Modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
		Abrir Perfil
		</button>

		<!-- The Modal -->
		<div class="modal fade" id="myModal">
		<div class="modal-dialog">
		  <div class="modal-content">
		  
		    <!-- Modal Header -->
		    <div class="modal-header">
		      <h4 class="modal-title">{$AUTOR}</h4>
		          <br>
		          <div class="card" style="width:400px">
		            <img class="card-img-top" src="../fotos/foto.jpg" alt="Card image">
		          </div>
		      <button type="button" class="close" data-dismiss="modal">&times;</button>
		    </div>
		    
		    <!-- Modal body -->
		    <div class="modal-body">
		       <div class="card-body">
		          <p class="card-text">Hola Amigos, Soy {$AUTOR}Desarrollador Junior especializado en el lenguaje de Programacion PHP (Hypertext Pre-Processor), para ser sincero les comento que me encanta la Programacion, ya que bien pueden verlo les demuestro todo mi talento con lo aprendido y desarrollado en los utimos meses, hago mencion especial al al SENA y a el Insituto <a href="https://www.intecap.edu.co" >INTECAP</a> se los recomiendo es muy bueno para hacer capacitaciones en Desarrollo Software. 
		          <br> 
		          Quiero Expresarles mis mas sinceros agradecimientos por haber ingresado y leido este comentario, 
		          <strong> de ante mano que todo lo que quiera le sea consedido si es con disciplina y esfuerzo que lucho por ello. <strong>
		          <br>
		          By. Jamz Garcia
		          <br>
		          <strong>Feliz Dia.</strong>
		          <br>
		          <small> Publicacado el 03 de Febrero de 2019.</small></p>
		        </div>
		    </div>
		    
		    <!-- Modal footer -->
		    <div class="modal-footer">
		      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		    </div>
		    
		  </div>
		</div>
		</div>

		</div>
		<br>

		<div class="container">
			<h2>Instituto Tecnico de Capacitacion INTECAP</h2>
			<p>#SmartyPHP</p>
			<div class="card img-fluid" style="width:300px height: 600px">
			<img class="card-img-top" src="fotos/WEBAVANZADO.png" alt="Card image" style="width:100%">
				<div class="card-img-top">
				  <h4 class="card-title">#WEB_AVANZADO</h4>
				  <p class="card-text" style="color: red;">Foto con los Compañeros del Curso WEB PHP 2018 - 2019</p>
				</div>
				<div>
				<p> otro div en el inicio </p>
					
				</div>
			</div>
		</div>

		<br>
{/if}

