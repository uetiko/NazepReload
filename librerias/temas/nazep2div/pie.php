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
<div id="pie_portal" class="pie_sitio" >
	<?php echo $pie_sitio; ?>
</div>
<div id="visitas" class="clas_visitas">
	<?php  $this->visitas_simple($sec);
	$this->ver_visitas_sec($sec); ?>
</div>
<div id="pie_creditos" class="clas_pie_creditos">
	Administrado en <a href="http://www.nazep.com.mx" title="Ir a nazep" class="pie_creditos" >Nazep</a>
</div>