<?php
/*
Sistema: Nazep
Nombre archivo: cuerpo.php
Funci�n archivo: archivo que genera el cuerpo del tema para el manejo de errores
Fecha creaci�n: junio 2007
Fecha �ltima Modificaci�n: Marzo 2011
Versi�n: 0.2
Autor: Claudio Morales Godinez
Correo electr�nico: claudio@nazep.com.mx
*/
?>
<div id="div_cuerpo_central_error" class="clas_cuerpo_central_error" >
<?php
	if($variable_error=="404")
		{
			$direccion = $_SERVER['REQUEST_URI']; ?>
			echo '<strong>Lo sentimos</strong><br /><br />
			La siguiente direcci&oacute;n no se encuentra en el portal <br /><br /><strong> <?php echo $url_sitio.$direccion; ?> </strong><br /><br />
			dedido a que posiblemente no exista la informaci&oacute;n o haya cambiado de nombre o no este disponible.<br /><br />
			Le sugerimos que utilice el buscador del portal o se diriga al formulario de contacto
			para imformar acerca de esta informaci�n faltante<br /><br />
		<?php }
	if($variable_error=="500")
		{?>
			e<strong>Lo sentimos</strong><br /><br />
			El servidor ha sufrido de un error interno por lo que sugerimos intentar entrar mas tarde.
		<?php }
	if($variable_error=="401")
		{?>
			<strong>Lo sentimos</strong><br /><br />
			La direcci�n a la que desea acceder es de acceso restringido.
		<?php } ?>
</div>