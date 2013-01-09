<?php
/*
Sistema: Nazep
Nombre archivo: len_es.php
Funci�n archivo: Textos para el administrador del sitio en espa�ol
Fecha creaci�n: junio 2007
Fecha �ltima Modificaci�n: Diciembre 2009
Versi�n: 0.2
Autor: Claudio Morales Godinez
Correo electr�nico: claudio@nazep.com.mx
*/
//************************************** Inicio de Cadenas de uso en general
define('NAZEP_NOHAVEFILEMODULE','No existe el archivo del modulo solicitado');
define('NAZEP_NOEXISTCLASS','No existe la clase solicitada');
define('NAZEP_NOEXISTMETHOD','No existe el metodo solicitado');
define('NAZEP_NOCALLMETHOD','No se puede ejecutar el metodo solicitado');


define('error_query', 'Ha ocurrido un problema al ejecutar la sentencia sql');
define('txt_perdio_contra', '&iquest;Perdio la contrase&ntilde;a?');
define('txt_bloqueo_user', 'Desbloquear Usuario');
define('correcto_query', 'Se ha ejecutado correctamente la sentencia sql');
define('img_regresar', 'Imagen que indica un regreso');
define('tit_enl_reg_mod','Regresar a las opciones de modificaciones ');
define('tit_enl_reg_cam','Regresar a las opciones de cambios ');
define('regresar_opc_mod', 'Regresar a las opciones de modificaci&oacute;n de la secci&oacute;n');
define('regresar_opc_cam', 'Regresar a las opciones de control de cambios de la secci&oacute;n');
define('opcion_denegado','No tiene autorizaci&oacute;n para esta opci&oacute;n del sistema');
define('si','SI');
define('no','NO');
define('leer_mas','Leer Mas');
define('arriba','Arriba');
define('abajo','Abajo');
define('derecha','Derecha');
define('izquierda','Izquierda');
define('centro','Centro');
define('activo','Activo');
define('activar','Activar');
define('oculto','Oculto');
define('cancelado','Cancelado');
define('cancelar','Cancelar');
define('mot_cambio','Motivo del cambio a realizar');
define('situacion','Situaci&oacute;n');
define('guardar_puliblicar','Guardar y publicar');
define('guardar_pub_otro','Guardar, publicar y crear otro');
define('guardar_cambio','Guardar el cambio');
define('guardar_cam_pub','Guardar y publicar el cambio');
define('guardar_cam_otro','Guardar y crear otro');
define('guardar','Guardar');
define('buscar','Buscar');
define('reg_res_bus', 'Regresar a los resultados de la b&uacute;squeda');
define('a', 'a');
define('a_las', 'a las');
define('hrs', 'Horas');
define('de', 'de');
define('de_la_seccion', 'de la secci&oacute;n: ');
define('a_la_seccion', 'a la secci&oacute;n: ');
define('autor', 'Autor');
define('fec_elabo', 'Fecha de elaboraci&oacute;n');
define('ver', 'Ver');
define('configurar', 'Configurar');
define('avi_no_mod_mod', 'El m&oacute;dulo no cuenta con opciones de control de cambios');
define('avi_no_mod_cam', 'El m&oacute;dulo no cuenta con opciones de Modificacion');
define('nombre', 'Nombre');
define('ape_pat', 'Apellido paterno');
define('ape_mat', 'Apellido materno');
define('nom_completo', 'Nombre Completo');
define('correo_ele', 'Correo electr&oacute;nico');
define('sitio_web', 'Sitio web');
define('telefono', 'Tel&eacute;fono');
define('fax', 'Fax');
define('direccion', 'Direcci&oacute;n');
define('pais', 'Pa&iacute;s');
define('fecha', 'Fecha');
define('hora', 'Hora');
define('mensaje', 'Mensaje');
define('pag_not', 'P&aacute;ginas de noticias');
define('modificar','Modificar');
define('tit_solo_numeros', 'Solo admite valores num&eacute;ricos');
define('user_actua', 'Usuario que realiz&oacute; la &uacute;ltima actualizaci&oacute;n');
define('fecha_actua', 'Fecha y hora de la &uacute;ltima actualizaci&oacute;n');
define('ip_actua', 'Direcci&oacute;n ip de la &uacute;ltima actualizaci&oacute;n');
define('fecha_ini_vig', 'Fecha de inicio de vigencia');
define('fecha_fin_vig', 'Fecha de fin de vigencia');
define('fecha_ini_bus', 'Fecha inicial a buscar');
define('fecha_fin_bus', 'Fecha final a buscar');
define('seleccione', 'Seleccione ...');
define('jv_campo_motivo', 'El campo del motivo no puede quedar vac\u00EDo');
define('persona_cambio', 'Persona que propone el cambio');
define('correo_cambio', 'Correo electr&oacute;nico de quien propone el cambio');
define('motivo_cambio', 'Motivo del cambio');
define('nivel_01','Administrador');
define('nivel_02','Editor');
define('nivel_03','Capturista');
define('comparar_fecha_veri','La fecha de inicio no puede ser mayor a la de termino');
define('verificar_fecha_ini','La fecha de inicio no es correcta');
define('verificar_fecha_fin','La fecha de termino no es correcta');
define('regresar', 'Regresar');
define('mes_01','Enero');
define('mes_02','Febrero');
define('mes_03','Marzo');
define('mes_04','Abril');
define('mes_05','Mayo');
define('mes_06','Junio');
define('mes_07','Julio');
define('mes_08','Agosto');
define('mes_09','Septiembre');
define('mes_10','Octubre');
define('mes_11','Noviembre');
define('mes_12','Diciembre');
define('dia_01','Lunes');
define('dia_02','Martes');
define('dia_03','Mi&eacute;rcoles');
define('dia_04','Jueves');
define('dia_05','Viernes');
define('dia_06','S&aacute;bado');
define('dia_07','Domingo');
define('dia','D&iacute;a');
define('mes','Mes');
define('ano','A&ntilde;o');
//************************************** Fin de Cadenas de uso en general
//************************************** Inicio de Cadenas del sistema de administraci�n
//***** Inicio de cadenas de control de acceso
define('titulo_acceso_admon','Control de acceso al Nazep');
define('titulo_camb_contra','Recuperar Contrase&ntilde;a');
define('titulo_camb_bloqueo','Desbloquar un Usuario');
define('error_acceso_admon','�Error al ingresar los datos! ');
define('inten_error_acceso_admon',', No. de Intentos fallidos: ');
define('inten_error_acceso_admon2',' Con <strong>5</strong> intentos erroneos, se bloquea la cuenta');
define('inten_error_acceso_admon3','El usuario: <strong>');
define('inten_error_acceso_admon4','</strong>, ha sido bloqueado ');
define('txt_enviar_user','Validar datos');
//***** Fin de cadenas de control de acceso
//***** Inicio de cadenas de Cabeza html, cabeza y men�
define('titulo_admon','Administraci&oacute;n de NAZEP');
define('titulo_btn_incio','Inicio');
define('titulo_btn_secciones','Secciones del portal');
define('titulo_btn_configuracion','Configuraci&oacute;n de Nazep');
define('titulo_btn_config_user','Configuraci&oacute;n del usuario');
define('titulo_btn_vista_final','Mostrar la vista final del portal');
define('titulo_btn_salir','Salir de Nazep');
//***** Fin de cadenas de Cabeza html, cabeza y menu
//***** Inicio de cadenas de manejo de errores
define('erro_erro_db','Error al ingresar datos a la base de datos');
define('erro_tipo_error','Tipo de error');
define('erro_num_sent','N&uacute;mero de sentencia');
define('erro_detalle','Detalle');
define('erro_reg_ini','Regresar al inicio del Administrador');
define('erro_sec_err','Secci&oacute;n del error');
define('erro_mod_err','M&oacute;dulo del error');
define('erro_pro_err','Proceso del error');
define('erro_tip_err','Tipo del error');
define('erro_num_sen','N&uacute;mero de sentencia');
define('erro_det_err','Detalle del error');
define('erro_regres_1','Regresar al Opciones de ');
define('erro_regres_2',' de la secci&oacute;n');
//***** Fin de cadenas de manejo de errores
//***** Inicio de cadenas de Noticias del administrador
define('not_adm_reg_lis','Regresar al listado de noticias');
define('not_adm_tit_lis','Noticias del Administrador de Contenidos Web Nazep');
//***** Fin de cadenas de Noticias del administrador
//***** Inicio de cadenas de Opci�n de Secciones
define('sepr_titulo_orden','Orden');
define('sepr_titulo_situacion','Situaci&oacute;n');
define('sepr_titulo_listar','Listar');
define('sepr_titulo_modificar','Modificar');
define('sepr_titulo_cambios','Cambios');
define('sepr_titulo_estadisticas','Estad&iacute;sticas');
define('crear_nueva','Crear nueva');
define('sepr_titulo_opcion','Listado de la secci&oacute;n');
define('sepr_tabla_sec','Secci&oacute;n');
define('sepr_tabla_subsec','Subsecci&oacute;n');
define('sepr_tl_inicio','Inicio');
define('sepr_enlace_realizar_cambios','Realizar Cambios');
define('sepr_enlace_control_cambios','Control de Cambios');
define('sepr_enlace_estadisticas','Estad&iacute;sticas');
define('sepr_enlace_listar_sub','Listar Subsecciones');
define('sepr_enlace_crear_nueva','Crear nueva');
define('sepr_enlace_regresar_secc','Regresar al listado de secciones anterior');
//***** Fin de cadenas de Opci�n de Secciones
//***** Inicio de cadenas Modificar usuario
define('mous_titulo_sec','Cambiar los datos del usuario');
define('mous_alert_pas_dif','Los campos de la Contrase\u00D1as son diferentes');
define('mous_alert_nom_vac','El campo Nombre Completo no puede quedar vac\u00EDo');
define('mous_alert_cor_vac','El campo Correo Electr\u00F3nico no puede quedar vac\u00EDo');
define('mous_alert_cor_inc','Ingresar una direcci\u00F3n de Correo Electr\u00F3nico v\u00E1lida');
define('mous_alert_dir_vac','El campo Direcci\u00F3n no puede quedar vac\u00EDo');
define('mous_txt_nic_use','Usuario');
define('mous_txt_nue_pas','Nueva Contrase&ntilde;a');
define('mous_txt_rep_pas','Repetir nueva Contrase&ntilde;a');
define('mous_txt_nom_use','Nombre completo');
define('mous_txt_cor_use','Correo electr&oacute;nico');
define('mous_txt_dir_use','Direcci&oacute;n');
define('mous_btn_guardar','Guardar cambios a los datos');
//***** Fin de cadenas Modificar usuario
//************************************** Inicio de Cadenas del sistema de administraci�n
define('img_inicio','Imagen de Bienvenida');
define('nombre_usuario','Usuario');
define('nivel_usuario','Nivel');
define('txt_nick_user','Nombre de usuario');
define('txt_pasword_user','Contrase&ntilde;a');
define('orden_sec','Orden de la secci&oacute;n');
define('orden_mod','Orden del m&oacute;dulo');
define('persistencia_mod','&iquest;Estar&aacute; en todas las subsecciones de esta secci&oacute;n?');
define('pos_mod','Posici&oacute;n del m&oacute;dulo');
define('orden_sec_veri','El campo de Orden no puede quedar vac\u00EDo');
define('mod_sec_veri','El campo del M\u00F3dulo no puede quedar vac\u00EDo');
define('mod_sec','M&oacute;dulo de la secci&oacute;n');
define('usar_desc_sec','&iquest;Desea usar la descripci&oacute;n en esta secci&oacute;n?');
define('desc_sec','Descripci&oacute;n de la secci&oacute;n');
define('desc_sec_veri','El campo de Descripci\u00F3n no puede quedar vac\u00EDo');
define('lbl_usar_keywords','&iquest;Desea usar los keywords en esta secci&oacute;n?');
define('lbl_keywords','Keywords de la secci&oacute;n (usar comas "," como separador)');
define('lbl_keywords_veir','El campo de Keywords no puede quedar vac\u00EDo');
define('fec_ini_sec','Fecha que inicia el per&iacute;odo de vigencia de la secci&oacute;n');
define('fec_fin_sec','Fecha que termina el per&iacute;odo de vigencia de la secci&oacute;n');
define('fec_ini_mod','Fecha que inicia el per&iacute;odo de vigencia del m&oacute;dulo');
define('fec_fin_mod','Fecha que termina el per&iacute;odo de vigencia del m&oacute;dulo');
define('fec_ini_mod_sec','Fecha que inicia el per&iacute;odo de vigencia del m&oacute;dulo de la secci&oacute;n');
define('fec_fin_mod_sec','Fecha que termina el per&iacute;odo de vigencia del m&oacute;dulo de la secci&oacute;n');
define('caduca_mod_sec_nueva','&iquest;Desea usar la vigencia para el m&oacute;dulo?');
define('situacion_sec','Situaci&oacute;n de la secci&oacute;n');
define('situacion_mod','Situaci&oacute;n del m&oacute;dulo');
define('protecion_sec','&iquest;Restringir el acceso a la secci&oacute;n solo a usuarios registrados?');
define('mod_sec_nueva','Asignar el M&oacute;dulo a la Secci&oacute;n');
define('caduca_sec_nueva','&iquest;Desea usar la vigencia para la secci&oacute;n?');
define('guardar_mod_sec','Guardar los cambios de la secci&oacute;n');
define('guardar_mod_cam_sec','Guardar los cambios del m&oacute;dulo');
define('guardar_mod_nue_sec','Guardar nuevo m&oacute;dulo');
define('guardar_mod_nue_sec2','Guardar nuevo m&oacute;dulo y regresar');
define('regresar_nue_sec','Regresar a listado de secciones');
define('guardar_nue_sec','Guardar la nueva secci&oacute;n');
define('guardar_nue_sec2','Guardar la nueva secci&oacute;n y regresar');
define('guardar_mod_sec_est','Guardar la modificaci&oacute;n a la estructura');
define('guardar_mod_sec_est2','Guardar la modificaci&oacute;n a la estructura y regresar');
define('titulo_nueva_sec','Nueva Secci&oacute;n para');
define('titulo_mod_sec','Modificar la secci&oacute;n');
define('list_mod_mod_sec','Listado de M&oacute;dulos de la Secci&oacute;n');
define('nom_mod_mod_sec','Nombre del m&oacute;dulo');
define('opc_mod_mod_sec','Opciones del m&oacute;dulo');
define('mod_cent_mod_sec','M&oacute;dulos de tipo Central');
define('mod_sec_mod_sec','M&oacute;dulos de tipo Secundario');
define('conf_avan_mod_sec','Configuraci&oacute;n Avanzada de la Secci&oacute;n');
define('btn_mod_est_mod_sec','Modificar la estructura de la secci&oacute;n');
define('btn_agre1_mod_mod_sec','Agregar un m&oacute;dulo central a la secci&oacute;n');
define('btn_agre2_mod_mod_sec','Agregar un m&oacute;dulo secundario a la secci&oacute;n');
define('btn_mod_modu_mod_sec','Modificar el m&oacute;dulo');
define('titulo_mod_modu_mod_sec','Modificar el m&oacute;dulo de la secci&oacute;n');
define('titulo_mod_est_sec','Modificaci&oacute;n de la estructura de la Secci&oacute;n');
define('error_cargar_mod','Esta intentando entrar de forma incorrecta a una secci&oacute;n, le sugerimos navegar mediante los botones del sistema');
define('nombre_seccion','Nombre de la secci&oacute;n ');
define('clave_seccion','Secci&oacute;n a la que pertenece');
define('txt_usr_cre_sec','Usuario creador');
define('txt_fec_cre_sec','Fecha de creaci&oacute;n');
define('txt_ip_cre_sec','IP de creaci&oacute;n');
define('txt_usc_act_sec','Usuario de &uacute;ltima actualizaci&oacute;n');
define('txt_fec_act_sec','Fecha de &uacute;ltima actualizaci&oacute;n');
define('txt_ip_act_sec','IP de &uacute;ltima actualizaci&oacute;n');
define('txt_sec_raiz','Secci&oacute;n Ra&iacute;z del portal');
define('titulo_cambio_sec','Cambios a la secci&oacute;n');
define('titulo_agre_mod','Agregar un m&oacute;dulo a ');
define('reg_mod_secc','Regresar a las opciones de modificaci&oacute;n de la secci&oacute;n');
define('alert_nuevo_mod','Deber\u00E1 dar click en el bot\u00F3n de aceptar para guardar el nuevo m\u00F3dulo');
define('titulo_seccion','Texto para el t&iacute;tulo de la secci&oacute;n');
define('verificar_titulo_seccion','El campo del t\u00EDtulo de la secci\u00F3n no puede quedar vac\u00EDo');
define('verificar_nombre_seccion','El campo de nombre no puede quedar vac\u00EDo');
define('imagen_seccion','Ubicaci&oacute;n de la imagen para la secci&oacute;n');
define('verificar_imagen_seccion','El campo de imagen para la secci\u00F3n no puede quedar vac\u00EDo');
define('flash_seccion','Ubicaci&oacute;n del flash para la secci&oacute;n');
define('verificar_flash_seccion','El campo de flash para la secci\u00F3n no puede quedar vac\u00EDo');
define('img_ayuda','Imagen para informar acerca del campo a llenar');
define('elemento_seccion','Elemento a usar para enlazar a la secci&oacute;n');
define('tipo_contenido_seccion','Formato de contenido de la secci&oacute;n');
define('ancho_medios','Ancho');
define('alto_medios','Alto');
define('ancho_alto_medios','Ancho y Alto de la imagen o flash');
define('elem_texto','T&iacute;tulo');
define('elem_imagen','Imagen');
define('elem_flash','Flash');
define('mot_nueva_sec','Se genero la nueva secci&oacute;n');
define('mot_nueva_sec_mod','Se genero el nuevo m\u00F3dulo para la secci\u00F3n');
define('mot_nueva_sec_det','Se genero el nuevo detalle para la secci\u00F3n');
define('modulo_nombre','M&oacute;dulo a ingresar');
define('txt_recomendacion','Recomendaci&oacute;n');
define('txt_rec_de','Recomendaciones de');
define('txt_rec_ip','IP de envio');
define('txt_rec_enl','Enlace');
define('txt_rec_nom_env','Nombre envia');
define('txt_rec_cor_env','Correo envia');
define('txt_rec_nom_rec','Nombre recibe');
define('txt_rec_cor_rec','Correo recibe');
define('txt_rec_com_env','Comentario enviado');
define('txt_rec_reg_lis','Regresar al listado de recomendaciones');
define('txt_rec_per','Recomendaciones del per&iacute;odo');
define('txt_rec_ver_det','Ver detalle');
define('txt_rec_reg_bus','Regresar al buscador de recomendaciones');
define('txt_rec_buscar','Buscar recomendaciones');
define('txt_vis_de','Visitas de');
define('txt_vis_per','Visitas del per&iacute;odo');
define('txt_vis_cant','Cantidad de visitas');
define('txt_vis_reg_bus','Regresar al buscador de visitas');
define('txt_vis_buscar_excel','Buscar visitas en un excel');
define('txt_vis_buscar','Buscar visitas');
define('txt_regresar_estadisticas','Regresar a las opciones de las estad&iacute;sticas');
define('txt_regresar_listado','Regresar al listado de secciones');
define('txt_verificar_recome','Verificar las recomendaciones a la secci&oacute;n');
define('txt_verificar_visita','Verificar las visitas a la secci&oacute;n');
?>
