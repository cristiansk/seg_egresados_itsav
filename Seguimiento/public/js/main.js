$(document).on("ready", function(){
//Seccion 1
var appPaterno;var appMaterno;var nombre;var calleNum;var colonia;var ciudad;var estado;var codPostal;var telCasa;var telMovil;var telRecados;var email;var facebook;var sexo;
$("#sexoH").change(function() {if ($(this).is(':checked')) {$("#sexoM").prop('checked', false);sexo = "Hombre";}});
$("#sexoM").change(function() {if ($(this).is(':checked')) {$("#sexoH").prop('checked', false);sexo = "Mujer";}});
$("#page2").click(function(event) {appPaterno = $("#appPaterno").val();appMaterno = $("#appMaterno").val();nombre = $("#nombre").val();calleNum = $("#calleNum").val();colonia = $("#colonia").val();ciudad = $("#ciudad").val();estado = $("#estado").val();codPostal = $("#codPostal").val();telCasa = $("#casa").val();telMovil = $("#movil").val();telRecados = $("#recado").val();email = $("#email").val();facebook = $("#facebook").val();if(appPaterno != "" && appMaterno != "" && nombre != "" && calleNum != "" && colonia != "" && ciudad != "" && estado != "" && codPostal != "" && email != "" && sexo != ""){$("#infoPersonal").hide();$("#datosEscolares").show();}else {alert("Debe de llenar todos los campos");}});

//Seccion 2
var prog_Educativo;var titulado;var mes_year_egreso;var numControl;var campus="";var modalidad = "";
$("#alvarado").change(function() {if ($(this).is(':checked')) {$("#lerdo").prop('checked', false);$("#tlalixcoyan").prop('checked', false);$("#medellin").prop('checked', false);campus = "Campus Alvarado";}});
$("#lerdo").change(function() {if ($(this).is(':checked')) {$("#alvarado").prop('checked', false);$("#tlalixcoyan").prop('checked', false);$("#medellin").prop('checked', false);campus = "Campus Lerdo";}});
$("#medellin").change(function() {if ($(this).is(':checked')) {$("#lerdo").prop('checked', false);$("#tlalixcoyan").prop('checked', false);$("#alvarado").prop('checked', false);campus = "Campus Medellin";}});
$("#tlalixcoyan").change(function() {if ($(this).is(':checked')) {$("#lerdo").prop('checked', false);$("#alvarado").prop('checked', false);$("#medellin").prop('checked', false);campus = "Campus Tlalixcoyan";}});
$("#page3").on("click", function(){modalidad = $("#modalidad").val();prog_Educativo = $("#programaEducativo").val();titulado = $("#titulado").val();mes_year_egreso = $("#fechaEgreso").val();numControl = $("#numControl").val();if(modalidad != "" && prog_Educativo != "" && titulado != "" && mes_year_egreso != "" && numControl != "" && campus != ""){$("#datosEscolares").hide();$("#seccion3").show();}else {alert("Para continuar, llene todos los campos requeridos");}});

//Seccion 3
//$("#page3").on("click", function(){prog_Educativo = $("#programaEducativo").val();titulado = $("#titulado").val();mes_year_egreso = $("#fechaEgreso").val();numControl = $("#numControl").val();if(prog_Educativo != "" && titulado != "" && mes_year_egreso != "" && numControl != ""){$("#datosEscolares").hide();$("#seccion3").show();}else {alert("Para continuar, llene todos los campos requeridos");}});
var calidad="";var estudio="";var experiencia="";
$("#mb1").change(function(event) {if($(this).is(':checked')){calidad="Muy Buena";$("#b1").prop('checked', false);$("#r1").prop('checked', false);$("#m1").prop('checked', false);}});
$("#b1").change(function(event) {if($(this).is(':checked')){calidad="Buena";$("#mb1").prop('checked', false);$("#r1").prop('checked', false);$("#m1").prop('checked', false);}});
$("#r1").change(function(event) {if($(this).is(':checked')){calidad="Regular";$("#b1").prop('checked', false);$("#mb1").prop('checked', false);$("#m1").prop('checked', false);}});
$("#m1").change(function(event) {if($(this).is(':checked')){calidad="Mala";$("#b1").prop('checked', false);$("#r1").prop('checked', false);$("#mb1").prop('checked', false);}});

$("#mb2").change(function(event) {if($(this).is(':checked')){estudio="Muy Bueno";$("#b2").prop('checked', false);$("#r2").prop('checked', false);$("#m2").prop('checked', false);}});
$("#b2").change(function(event) {if($(this).is(':checked')){estudio="Bueno";$("#mb2").prop('checked', false);$("#r2").prop('checked', false);$("#m2").prop('checked', false);}});
$("#r2").change(function(event) {if($(this).is(':checked')){estudio="Regular";$("#b2").prop('checked', false);$("#mb2").prop('checked', false);$("#m2").prop('checked', false);}});
$("#m2").change(function(event) {if($(this).is(':checked')){estudio="Malo";$("#b2").prop('checked', false);$("#r2").prop('checked', false);$("#mb2").prop('checked', false);}});

$("#mb3").change(function(event) {if($(this).is(':checked')){experiencia="Muy Buena";$("#b3").prop('checked', false);$("#r3").prop('checked', false);$("#m3").prop('checked', false);}});
$("#b3").change(function(event) {if($(this).is(':checked')){experiencia="Buena";$("#mb3").prop('checked', false);$("#r3").prop('checked', false);$("#m3").prop('checked', false);}});
$("#r3").change(function(event) {if($(this).is(':checked')){experiencia="Regular";$("#b3").prop('checked', false);$("#mb3").prop('checked', false);$("#m3").prop('checked', false);}});
$("#m3").change(function(event) {	if($(this).is(':checked')){experiencia="Mala";$("#b3").prop('checked', false);$("#r3").prop('checked', false);$("#mb3").prop('checked', false);}});
$("#page4").on("click", function(){if(calidad != "" && estudio != "" && experiencia != ""){$("#seccion3").hide();$("#infoLaboral").show();}else {alert("Llene todos los campos");}});

//Seccion 4
var timeLaboral = "";var lab_actual= "";var sin_empleo;var motivos="";var medio="";var perfil="";var acividad_empresa="";var tam_empresa="";var nivel_puesto="";
var regimen="";var tipo_estudios="";var capacitacion="";
$("#trabajaba").change(function(event){if($(this).is(':checked')){timeLaboral = "Ya trabajaba";$("#estadia").prop('checked', false);$("#min_3").prop('checked', false);$("#min_6").prop('checked', false);$("#min_12").prop('checked', false);$("#min_12x").prop('checked', false);$("#no_trabaja").prop('checked', false);}});
$("#estadia").change(function(event){if($(this).is(':checked')){timeLaboral = "Durante la estadia";$("#trabajaba").prop('checked', false);$("#min_3").prop('checked', false);$("#min_6").prop('checked', false);$("#min_12").prop('checked', false);$("#min_12x").prop('checked', false);$("#no_trabaja").prop('checked', false);}});
$("#min_3").change(function(event){if($(this).is(':checked')){timeLaboral = "Hasta 3 meses";$("#estadia").prop('checked', false);$("#trabajaba").prop('checked', false);$("#min_6").prop('checked', false);$("#min_12").prop('checked', false);$("#min_12x").prop('checked', false);$("#no_trabaja").prop('checked', false);}});
$("#min_6").change(function(event){if($(this).is(':checked')){timeLaboral = "Hasta 6 meses";$("#estadia").prop('checked', false);$("#min_3").prop('checked', false);$("#trabajaba").prop('checked', false);$("#min_12").prop('checked', false);$("#min_12x").prop('checked', false);$("#no_trabaja").prop('checked', false);}});
$("#min_12").change(function(event){if($(this).is(':checked')){timeLaboral = "Hasta 1 año";$("#estadia").prop('checked', false);$("#min_3").prop('checked', false);$("#trabajaba").prop('checked', false);$("#min_6").prop('checked', false);$("#min_12x").prop('checked', false);$("#no_trabaja").prop('checked', false);}});
$("#min_12x").change(function(event){if($(this).is(':checked')){timeLaboral = "Mas de un año";$("#estadia").prop('checked', false);$("#min_3").prop('checked', false);$("#trabajaba").prop('checked', false);$("#min_6").prop('checked', false);$("#min_12").prop('checked', false);$("#no_trabaja").prop('checked', false);}});
$("#no_trabaja").change(function(event){if($(this).is(':checked')){timeLaboral = "No trabaja";$("#estadia").prop('checked', false);$("#min_3").prop('checked', false);$("#trabajaba").prop('checked', false);$("#min_5").prop('checked', false);$("#min_12x").prop('checked', false);$("#min_12").prop('checked', false);}});

$("#lab_work").change(function(event){mostrar();if($(this).is(':checked')){lab_actual = "Trabajando";$("#lab_not").prop('checked', false);$("#lab_est").prop('checked', false);$("#lab_des").prop('checked', false);$("#16").hide();$("#17").hide();}else {$("#16").show();$("#17").show();}});
$("#lab_not").change(function(event){mostrar();if($(this).is(':checked')){lab_actual = "Trabaja y estudia";$("#lab_work").prop('checked', false);$("#lab_est").prop('checked', false);$("#lab_des").prop('checked', false);$("#16").hide();$("#17").hide();}else {$("#16").show();$("#17").show();}});
function mostrar(){$("#16").show();$("#17").show();$("#18").show();$("#19").show();$("#20").show();$("#21").show();$("#22").show();$("#23").show();$("#24-25").show();}
$("#lab_est").change(function(event){mostrar();if($(this).is(':checked')){lab_actual = "Estudia";$("#lab_work").prop('checked', false);$("#lab_not").prop('checked', false);$("#lab_des").prop('checked', false);$("#16").hide();$("#17").hide();$("#18").hide();$("#19").hide();$("#20").hide();$("#21").hide();$("#22").hide();$("#23").hide();$("#24-25").hide();}else {mostrar();}});
$("#lab_des").change(function(event){mostrar();if($(this).is(':checked')){lab_actual = "Desempleado";$("#lab_work").prop('checked', false);$("#lab_not").prop('checked', false);$("#lab_est").prop('checked', false);}});
$("#1m").change(function(event){if($(this).is(':checked')){sin_empleo = "1 Mes";$("#3m").prop('checked', false);$("#6m").prop('checked', false);$("#12m").prop('checked', false);$("#not_yet").prop('checked', false);}});
$("#3m").change(function(event){if($(this).is(':checked')){sin_empleo = "1 Mes";$("#1m").prop('checked', false);$("#6m").prop('checked', false);$("#12m").prop('checked', false);$("#not_yet").prop('checked', false);}});
$("#6m").change(function(event){if($(this).is(':checked')){sin_empleo = "1 Mes";$("#3m").prop('checked', false);$("#1m").prop('checked', false);$("#12m").prop('checked', false);$("#not_yet").prop('checked', false);}});
$("#12m").change(function(event){if($(this).is(':checked')){sin_empleo = "1 Mes";$("#3m").prop('checked', false);$("#1m").prop('checked', false);$("#6m").prop('checked', false);$("#not_yet").prop('checked', false);}});
$("#not_yet").change(function(event){if($(this).is(':checked')){sin_empleo = "1 Mes";$("#3m").prop('checked', false);$("#1m").prop('checked', false);$("#12m").prop('checked', false);$("#1m").prop('checked', false);}});

$("#renuncia").change(function(event){
	if($(this).is(':checked')){
		motivos = "Renuncia";
		$("#hogar").prop('checked', false);
		$("#clausura").prop('checked', false);
		$("#despido").prop('checked', false);
		$("#no_planeado").prop('checked', false);
		$("#otros_motivos").prop('checked', false);
	}
});
$("#hogar").change(function(event){
	if($(this).is(':checked')){
		motivos = "Se dedica al hogar";
		$("#renuncia").prop('checked', false);
		$("#clausura").prop('checked', false);
		$("#despido").prop('checked', false);
		$("#no_planeado").prop('checked', false);
		$("#otros_motivos").prop('checked', false);
	}
});
$("#clausura").change(function(event){
	if($(this).is(':checked')){
		motivos = "Cerro la empresa";
		$("#hogar").prop('checked', false);
		$("#renuncia").prop('checked', false);
		$("#despido").prop('checked', false);
		$("#no_planeado").prop('checked', false);
		$("#otros_motivos").prop('checked', false);
	}
});
$("#despido").change(function(event){
	if($(this).is(':checked')){
		motivos = "Despido";
		$("#hogar").prop('checked', false);
		$("#clausura").prop('checked', false);
		$("#renuncia").prop('checked', false);
		$("#no_planeado").prop('checked', false);
		$("#otros_motivos").prop('checked', false);
	}
});
$("#no_planeado").change(function(event){
	if($(this).is(':checked')){
		motivos = "No esta en mis planes";
		$("#hogar").prop('checked', false);
		$("#clausura").prop('checked', false);
		$("#despido").prop('checked', false);
		$("#renuncia").prop('checked', false);
		$("#otros_motivos").prop('checked', false);
	}
});
$("#otros_motivos").change(function(event){
	if($(this).is(':checked')){
		motivos = $("#agregarOtrasOpciones").val();
		$("#hogar").prop('checked', false);
		$("#clausura").prop('checked', false);
		$("#despido").prop('checked', false);
		$("#no_planeado").prop('checked', false);
		$("#renuncia").prop('checked', false);
	}
});

$("#residencia").change(function(event){
	if($(this).is(':checked')){
		medio = "Residencia Profesional";
		$("#bolsa_itsav").prop('checked', false);
		$("#bolsa_municipal").prop('checked', false);
		$("#otros").prop('checked', false);	
	}
});
$("#bolsa_itsav").change(function(event){
	if($(this).is(':checked')){
		medio = "Bolsa de trabajo ITSAV";
		$("#residencia").prop('checked', false);
		$("#bolsa_municipal").prop('checked', false);
		$("#otros").prop('checked', false);	
	}
});
$("#bolsa_municipal").change(function(event){
	if($(this).is(':checked')){
		medio = "Bolsa de Trabajo Municipal";
		$("#bolsa_itsav").prop('checked', false);
		$("#residencia").prop('checked', false);
		$("#otros").prop('checked', false);	
	}
});

$("#otros").change(function(event){
	if($(this).is(':checked')){
		medio = $("#agregarOtros").val();
		$("#bolsa_itsav").prop('checked', false);
		$("#residencia").prop('checked', false);
		$("#bolsa_municipal").prop('checked', false);	
	}
});

$("#perfil_si").change(function(event) {
	if($(this).is(':checked')){
		perfil = "Perfil Relacionado a la carrera";
		$("#perfil_no").prop('checked', false);
		$("#perfil_parcial").prop('checked', false);
	}
});
$("#perfil_no").change(function(event) {
	if($(this).is(':checked')){
		perfil = "Perfil no Relacionado a la carrera";
		$("#perfil_si").prop('checked', false);
		$("#perfil_parcial").prop('checked', false);
	}
});
$("#perfil_parcial").change(function(event) {
	if($(this).is(':checked')){
		perfil = "Parcialmente Relacionado a la carrera";
		$("#perfil_si").prop('checked', false);
		$("#perfil_no").prop('checked', false);
	}
});

$("#agricultura").change(function(event) {
	if($(this).is(':checked')){
		actividad_empresa = "Agricultura";
		$("#mineria").prop('checked', false);
		$("#construccion").prop('checked', false);
		$("#transformacion").prop('checked', false);
		$("#tics").prop('checked', false);
		$("#comercio").prop('checked', false);
		$("#servicios").prop('checked', false);
		$("#salud").prop('checked', false);
		$("#educacion").prop('checked', false);
		$("#sec_publico").prop('checked', false);
	}
});
$("#mineria").change(function(event) {
	if($(this).is(':checked')){
		actividad_empresa = "Mineria";
		$("#agricultura").prop('checked', false);
		$("#construccion").prop('checked', false);
		$("#transformacion").prop('checked', false);
		$("#tics").prop('checked', false);
		$("#comercio").prop('checked', false);
		$("#servicios").prop('checked', false);
		$("#salud").prop('checked', false);
		$("#educacion").prop('checked', false);
		$("#sec_publico").prop('checked', false);
	}
});
$("#construccion").change(function(event) {
	if($(this).is(':checked')){
		actividad_empresa = "Construccion";
		$("#mineria").prop('checked', false);
		$("#agricultura").prop('checked', false);
		$("#transformacion").prop('checked', false);
		$("#tics").prop('checked', false);
		$("#comercio").prop('checked', false);
		$("#servicios").prop('checked', false);
		$("#salud").prop('checked', false);
		$("#educacion").prop('checked', false);
		$("#sec_publico").prop('checked', false);
	}
});
$("#transformacion").change(function(event) {
	if($(this).is(':checked')){
		actividad_empresa = "Transformacion";
		$("#mineria").prop('checked', false);
		$("#construccion").prop('checked', false);
		$("#agricultura").prop('checked', false);
		$("#tics").prop('checked', false);
		$("#comercio").prop('checked', false);
		$("#servicios").prop('checked', false);
		$("#salud").prop('checked', false);
		$("#educacion").prop('checked', false);
		$("#sec_publico").prop('checked', false);
	}
});

$("#tics").change(function(event) {
	if($(this).is(':checked')){
		actividad_empresa = "Tecnologias de Informacion y comunicacion";
		$("#mineria").prop('checked', false);
		$("#construccion").prop('checked', false);
		$("#transformacion").prop('checked', false);
		$("#agricultura").prop('checked', false);
		$("#comercio").prop('checked', false);
		$("#servicios").prop('checked', false);
		$("#salud").prop('checked', false);
		$("#educacion").prop('checked', false);
		$("#sec_publico").prop('checked', false);
	}
});

$("#comercio").change(function(event) {
	if($(this).is(':checked')){
		actividad_empresa = "Comercio";
		$("#mineria").prop('checked', false);
		$("#construccion").prop('checked', false);
		$("#transformacion").prop('checked', false);
		$("#tics").prop('checked', false);
		$("#agricultura").prop('checked', false);
		$("#servicios").prop('checked', false);
		$("#salud").prop('checked', false);
		$("#educacion").prop('checked', false);
		$("#sec_publico").prop('checked', false);
	}
});
$("#servicios").change(function(event) {
	if($(this).is(':checked')){
		actividad_empresa = "Servicios";
		$("#mineria").prop('checked', false);
		$("#construccion").prop('checked', false);
		$("#transformacion").prop('checked', false);
		$("#tics").prop('checked', false);
		$("#comercio").prop('checked', false);
		$("#agricultura").prop('checked', false);
		$("#salud").prop('checked', false);
		$("#educacion").prop('checked', false);
		$("#sec_publico").prop('checked', false);
	}
});
$("#salud").change(function(event) {
	if($(this).is(':checked')){
		actividad_empresa = "Salud";
		$("#mineria").prop('checked', false);
		$("#construccion").prop('checked', false);
		$("#transformacion").prop('checked', false);
		$("#tics").prop('checked', false);
		$("#comercio").prop('checked', false);
		$("#servicios").prop('checked', false);
		$("#agricultura").prop('checked', false);
		$("#educacion").prop('checked', false);
		$("#sec_publico").prop('checked', false);
	}
});
$("#educacion").change(function(event) {
	if($(this).is(':checked')){
		actividad_empresa = "Educacion";
		$("#mineria").prop('checked', false);
		$("#construccion").prop('checked', false);
		$("#transformacion").prop('checked', false);
		$("#tics").prop('checked', false);
		$("#comercio").prop('checked', false);
		$("#servicios").prop('checked', false);
		$("#salud").prop('checked', false);
		$("#agricultura").prop('checked', false);
		$("#sec_publico").prop('checked', false);
	}
});
$("#sec_publico").change(function(event) {
	if($(this).is(':checked')){
		actividad_empresa = "Sector publico";
		$("#mineria").prop('checked', false);
		$("#construccion").prop('checked', false);
		$("#transformacion").prop('checked', false);
		$("#tics").prop('checked', false);
		$("#comercio").prop('checked', false);
		$("#servicios").prop('checked', false);
		$("#salud").prop('checked', false);
		$("#educacion").prop('checked', false);
		$("#agricultura").prop('checked', false);
	}
});

$("#micro").change(function(event) {
	if($(this).is(':checked')){
		tam_empresa = "Micro";
		$("#peque").prop('checked', false);
		$("#med").prop('checked', false);
		$("#grand").prop('checked', false);
	}
});
$("#med").change(function(event) {
	if($(this).is(':checked')){
		tam_empresa = "Mediana";
		$("#peque").prop('checked', false);
		$("#micro").prop('checked', false);
		$("#grand").prop('checked', false);
	}
});
$("#peque").change(function(event) {
	if($(this).is(':checked')){
		tam_empresa = "Pequeña";
		$("#micro").prop('checked', false);
		$("#med").prop('checked', false);
		$("#grand").prop('checked', false);
	}
});
$("#grand").change(function(event) {
	if($(this).is(':checked')){
		tam_empresa = "Grande";
		$("#micro").prop('checked', false);
		$("#med").prop('checked', false);
		$("#peque").prop('checked', false);
	}
});

//Nivel Puesto
$("#operario").change(function(event) {
	if($(this).is(':checked')){
		nivel_puesto = "Operario";
		$("#tec_gen").prop('checked', false);
		$("#tec_esp").prop('checked', false);
		$("#admin").prop('checked', false);
		$("#superv").prop('checked', false);
		$("#geren").prop('checked', false);
		$("#dir").prop('checked', false);
		$("#aut").prop('checked', false);
		$("#no_prof").prop('checked', false);
	}
});

$("#tec_gen").change(function(event) {
	if($(this).is(':checked')){
		nivel_puesto = "Tecnico General";
		$("#operario").prop('checked', false);
		$("#tec_esp").prop('checked', false);
		$("#admin").prop('checked', false);
		$("#superv").prop('checked', false);
		$("#geren").prop('checked', false);
		$("#dir").prop('checked', false);
		$("#aut").prop('checked', false);
		$("#no_prof").prop('checked', false);
	}
});

$("#tec_esp").change(function(event) {
	if($(this).is(':checked')){
		nivel_puesto = "Tecnico Especializado";
		$("#operario").prop('checked', false);
		$("#tec_gen").prop('checked', false);
		$("#admin").prop('checked', false);
		$("#superv").prop('checked', false);
		$("#geren").prop('checked', false);
		$("#dir").prop('checked', false);
		$("#aut").prop('checked', false);
		$("#no_prof").prop('checked', false);
	}
});
$("#admin").change(function(event) {
	if($(this).is(':checked')){
		nivel_puesto = "Administrativo";
		$("#operario").prop('checked', false);
		$("#tec_esp").prop('checked', false);
		$("#tec_gen").prop('checked', false);
		$("#superv").prop('checked', false);
		$("#geren").prop('checked', false);
		$("#dir").prop('checked', false);
		$("#aut").prop('checked', false);
		$("#no_prof").prop('checked', false);
	}
});
$("#superv").change(function(event) {
	if($(this).is(':checked')){
		nivel_puesto = "Supervisor";
		$("#operario").prop('checked', false);
		$("#tec_esp").prop('checked', false);
		$("#tec_gen").prop('checked', false);
		$("#admin").prop('checked', false);
		$("#geren").prop('checked', false);
		$("#dir").prop('checked', false);
		$("#aut").prop('checked', false);
		$("#no_prof").prop('checked', false);
	}
});
$("#geren").change(function(event) {
	if($(this).is(':checked')){
		nivel_puesto = "Gerente";
		$("#operario").prop('checked', false);
		$("#tec_esp").prop('checked', false);
		$("#tec_gen").prop('checked', false);
		$("#superv").prop('checked', false);
		$("#admin").prop('checked', false);
		$("#dir").prop('checked', false);
		$("#aut").prop('checked', false);
		$("#no_prof").prop('checked', false);
	}
});
$("#dir").change(function(event) {
	if($(this).is(':checked')){
		nivel_puesto = "Director";
		$("#operario").prop('checked', false);
		$("#tec_esp").prop('checked', false);
		$("#tec_gen").prop('checked', false);
		$("#superv").prop('checked', false);
		$("#geren").prop('checked', false);
		$("#admin").prop('checked', false);
		$("#aut").prop('checked', false);
		$("#no_prof").prop('checked', false);
	}
});
$("#aut").change(function(event) {
	if($(this).is(':checked')){
		nivel_puesto = "Autoempleo (Propietario - Copropietario)";
		$("#operario").prop('checked', false);
		$("#tec_esp").prop('checked', false);
		$("#tec_gen").prop('checked', false);
		$("#superv").prop('checked', false);
		$("#geren").prop('checked', false);
		$("#dir").prop('checked', false);
		$("#admin").prop('checked', false);
		$("#no_prof").prop('checked', false);
	}
});
$("#no_prof").change(function(event) {
	if($(this).is(':checked')){
		nivel_puesto = "Actividades no profesionales";
		$("#operario").prop('checked', false);
		$("#tec_esp").prop('checked', false);
		$("#tec_gen").prop('checked', false);
		$("#superv").prop('checked', false);
		$("#geren").prop('checked', false);
		$("#dir").prop('checked', false);
		$("#aut").prop('checked', false);
		$("#admin").prop('checked', false);
	}
});
//

$("#reg_paraestatal").change(function(event) {
	if($(this).is(':checked')){
		regimen = "Paraestatal";
		$("#reg_pub").prop('checked', false);
		$("#reg_priv").prop('checked', false);
		$("#reg_negPropio").prop('checked', false);
	}
});
$("#reg_pub").change(function(event) {
	if($(this).is(':checked')){
		regimen = "Publico";
		$("#reg_paraestatal").prop('checked', false);
		$("#reg_priv").prop('checked', false);
		$("#reg_negPropio").prop('checked', false);
	}
});
$("#reg_priv").change(function(event) {
	if($(this).is(':checked')){
		regimen = "Privado";
		$("#reg_paraestatal").prop('checked', false);
		$("#reg_pub").prop('checked', false);
		$("#reg_negPropio").prop('checked', false);
	}
});

$("#reg_negPropio").change(function(event) {
	if($(this).is(':checked')){
		regimen = "Negocio Propio";
		$("#reg_paraestatal").prop('checked', false);
		$("#reg_pub").prop('checked', false);
		$("#reg_priv").prop('checked', false);
	}
});

$("#act_cap").change(function(event) {
	if($(this).is(':checked')){
		tipo_estudios = "Cursos de actualizacion y capacitacion";
		$("#ing_lic").prop('checked', false);
		$("#otro_tipo").prop('checked', false);
	}
});
$("#ing_lic").change(function(event) {
	if($(this).is(':checked')){
		tipo_estudios = "Ingenieria y/o Licenciatura";
		$("#act_cap").prop('checked', false);
		$("#otro_tipo").prop('checked', false);
	}
});
$("#otro_tipo").change(function(event) {
	if($(this).is(':checked')){
		tipo_estudios = $("#otro_tipo_estudios").val();
		$("#act_cap").prop('checked', false);
		$("#ing_lic").prop('checked', false);
	}
});


$("#capacitacion_si").change(function(event) {
	if($(this).is(':checked')){
		$("#cursos").show();
		$("#capacitacion_no").prop('checked', false);
	}else {
		$("#cursos").hide();
	}
});

$("#capacitacion_no").change(function(event) {
	if($(this).is(':checked')){
		$("#cursos").hide();
		$("#capacitacion_si").prop('checked', false);
	}
});

$("#page5").on("click", function(){
	alert("Ultima pagina");	
});
});