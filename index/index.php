<?php
/*
Sistema: Nazep
Nombre archivo: index.php
Funci�n archivo: Inicia el funcionamiento de nazep y permite terminar la sesion al salir
Fecha creaci�n: junio 2007
Fecha �ltima Modificaci�n: Marzo 2011
Versi�n: 0.2
Autor: Claudio Morales Godinez
Correo electr�nico: claudio@nazep.com.mx
*/
if(file_exists("../instalar/instalar.php"))
	{header("Location: ../instalar/instalar.php");}
else
	{
		header("Location: ../index.php");
	}
?>