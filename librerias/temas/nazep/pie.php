<?php
/*
Sistema: Nazep
Nombre archivo: pie.php
Funci�n archivo: archivo que genera el pie del portal
Fecha creaci�n: junio 2007
Fecha �ltima Modificaci�n: Marzo 2011
Versi�n: 0.2
Autor: Claudio Morales Godinez
Correo electr�nico: claudio@nazep.com.mx
*/
?>
<table width="777" border="0" cellspacing="0" cellpadding="0" align="center" class="imagen_fondo_pie">
	<tr><td align="center" class= "pie_sitio" ><br/><?php echo $pie_sitio; ?><br/>&nbsp;</td></tr>
</table>
<table width="777" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr><td align="center" >
    		<?php
			$this->visitas_simple($sec);
			$this->ver_visitas_sec($sec);
			?>
	</td></tr>
</table>
<table width="777" border="0" cellspacing="0" cellpadding="0" align="center" >
	<tr><td align="center" class="pie_creditos">Administrado en <a href="http://www.nazep.com.mx" class="pie_creditos" >Nazep</a></td></tr>
</table>