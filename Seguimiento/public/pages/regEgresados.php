<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/png" href="../favicon.png" />
	<title>Ficha de Registro</title>
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div id="bar">
            <ul>
                <li>Menu 1</li>
                <li>Menu 2</li>
                <li>Menu 3</li>
                <li>Menu 4</li>
                <li>Menu 5</li>
            </ul>
            <div id="show">
                <img src="../favicon.png" alt="">
            </div>
        </div>
	<header></header>
	<nav></nav>
	<section>
		<form id="regEgresados">
			<h1>Ficha de seguimiento a egresados del ITSAV</h1>
			<div id="infoPersonal">
				<span>Datos Personales</span>
				<label class="personal" for="">Nombre: </label>
				<input class="personal" type="text" id="apPaterno" placeholder="Apellido Paterno" required>
				<input class="personal" type="text" id="apMaterno" placeholder="Apellido Materno" required>
				<input class="personal" type="text" id="nombre" placeholder="Nombtre" required>
				<label class="personal" for="">Sexo: </label>
				<input class="personal" type="checkbox" id="sexoH"><label class="personal" for="">Hombre</label>
				<input class="personal" type="checkbox" id="sexoM"><label class="personal" for="">Mujer</label>
				<br><label class="personal" for="">Domicilio: </label>
				<input class="personal" type="text" id="calleNum" placeholder="Calle y numero" required>
				<input class="personal" type="text" id="colonia" placeholder="Colonia" required><br>
				<label class="personal" for="">Ciudad: </label>
				<input class="personal" type="text" id="ciudad" placeholder="Ciudad" required>
				<input class="personal" type="text" id="estado" placeholder="Estado" required>
				<input class="personal" type="text" id="codPostal" placeholder="Codigo Postal" required>
				<label class="personal" for="">Telefono: </label>
				<input class="personal" type="text" id="casa" placeholder="Numero de casa" required>
				<input class="personal" type="text" id="movil" placeholder="Celular" required>
				<input class="personal" type="text" id="recado" placeholder="De recados" required>
				<label class="personal" for="">E-mail: </label>
				<input class="personal" type="email" id="email" placeholder="Ingresar e-mail" required>
				<br><label class="personal" for="">Facebook</label>
				<input class="personal" type="text" id="facebook" placeholder="Ingresar facebook" required>
				<br><input type="button" id="page2" value="Siguiente seccion" style="float:right; margin-bottom:10px;">
			</div>
			<br>
			<div id="datosEscolares">
				<span>Datos Escolares</span>
				<label class="escolar left" for="">Programa educativo: </label>
				<input class="escolar left" type="text" id="programaEducativo" placeholder="Programa educativo">
				<label class="escolar right" for="">Titulado: </label>
				<input class="escolar right" type="text" id="titulado" placeholder="Ingrese si es titulado">
				<label class="escolar left" width="140" for="">Mes y año de egreso: </label>
				<input class="escolar" type="text" id="fechaEgreso" placeholder="Fecha de Egreso"><br>
				<label class="escolar left" width="500" for="">Numero de Control: </label>
				<input class="escolar" type="text" id="numControl" placeholder="Ingresar numero de control"><br>
				<br>
				<label class="escolar" for="">Campus: </label>
				<label class="escolar right" for="">Alvarado</label><input class="escolar right margen" type="checkbox" id="alvarado">
				<label class="escolar right" for="">Tlalixcoyan</label><input class="escolar right margen" type="checkbox" id="tlalixcoyan">
				<label class="escolar right" for="">Ciudad de Lerdo</label><input class="escolar right margen" type="checkbox" id="lerdo">
				<label class="escolar right" for="">Medellin</label><input class="escolar right margen" type="checkbox" id="medellin">
				<br><br><input type="button" id="page3" value="Siguiente seccion" style="float:right; margin-bottom:10px;">
				<input type="button" id="back1" value="Seccion anterior" style="float:left; margin-bottom:10px;">
			</div>
			<br>
			<div id="seccion3">
				<span>Pertinencia y disponibilidad de medios y recursos para el aprendizaje</span>
				<label for="">Calidad de los docentes: </label>
				
				<div id="calidad">
					<label class="lineal" for="">Muy Buena</label><input class="lineal separador" type="checkbox" id="mb1">
					<label class="lineal" for="">Buena</label><input class="lineal separador" type="checkbox" id="b1">
					<label class="lineal" for="">Regular</label><input class="lineal separador" type="checkbox" id="r1">
					<label class="lineal" for="">Mala</label><input class="lineal separador" type="checkbox" id="m1">
				</div>

				<label for="">Plan de estudio: </label>
				<label class="lineal" for="">Muy Bueno</label><input class="lineal separador" type="checkbox" id="mb2">
				<label class="lineal" for="">Bueno</label><input class="lineal separador" type="checkbox" id="b2">
				<label class="lineal" for="">Regular</label><input class="lineal separador" type="checkbox" id="r2">
				<label class="lineal" for="">Malo</label><input class="lineal separador" type="checkbox" id="m2">

				<label for="">Experiencia obtenida a traves de la residencia profesional: </label>
				<label class="lineal" for="">Muy Buena</label><input class="lineal separador" type="checkbox" id="mb3">
				<label class="lineal" for="">Buena</label><input class="lineal separador" type="checkbox" id="b3">
				<label class="lineal" for="">Regular</label><input class="lineal separador" type="checkbox" id="r3">
				<label class="lineal" for="">Mala</label><input class="lineal separador" type="checkbox" id="m3">

				<br><br><input type="button" id="page4" value="Siguiente seccion" style="float:right; margin-bottom:10px;">
				<input type="button" id="back2" value="Seccion anterior" style="float:left; margin-bottom:10px;">
			</div>
			<div id="infoLaboral">
				<span>Incorporacion en el mercado del trabajo</span>
				<label for="">Al terminar tu carrera en el ITSAV, ¿Cuanto tiempo tardaste en encontrar tu primer empleo?</label>
				<input class="lineal" type="checkbox" id="trabajaba"><label class="lineal" for="">Ya trabajaba</label>
				<input class="lineal" type="checkbox" id="estadia"><label class="lineal" for="">Durante la estadia</label>
				<input class="lineal" type="checkbox" id="min_3"><label class="lineal" for="">Menos de 3 meses</label>
				<input class="lineal" type="checkbox" id="min_6"><label class="lineal" for="">Hasta 6 meses</label>
				<input class="lineal" type="checkbox" id="min_12"><label class="lineal" for="">Hasta 1 año</label>
				<input class="lineal" type="checkbox" id="min_12x"><label class="lineal" for="">Mas de 1 año</label>
				<input class="lineal" type="checkbox" id="no_trabaja"><label class="lineal" for="">No he comenzado a trabajar</label>
				
				<!--<label class="top" for="">¿Cual es tu salario mensual?</label>
				<input type="text" id="salario" placeholder="Salario Mensual">-->
				
				<div id="15">
					<label class="top" for="">Indica cual es  tu situacion actual.</label>
					<input class="lineal" type="checkbox" id="lab_work"><label class="lineal" for="">Trabajo</label>
					<input class="lineal" type="checkbox" id="lab_not"><label class="lineal" for="">Trabajo y estudio</label>
					<input class="lineal" type="checkbox" id="lab_est"><label class="lineal" for="">Estudio</label>
					<input class="lineal" type="checkbox" id="lab_des"><label class="lineal" for="">Desempleado</label>
				</div>

				<div id="16">
					<label class="top" for="">¿Cuanto tiempo tienes sin empleo?</label>
					<input class="lineal" type="checkbox" id="1m"><label class="lineal" for="">Menos de un mes</label>
					<input class="lineal" type="checkbox" id="3m"><label class="lineal" for="">De uno a 3 meses</label>
					<input class="lineal" type="checkbox" id="6m"><label class="lineal" for="">Hasta 6 meses</label>
					<input class="lineal" type="checkbox" id="12m"><label class="lineal" for="">Hasta 1 año</label>
					<br><input class="lineal" type="checkbox" id="not_yet"><label class="lineal" for="">No he comenzado a trabajar</label>
				</div>

				<div id="17">
					<label class="top" for="">¿Cual es el principal motivo por el que no trabaja?</label>
					<input class="lineal" type="checkbox" id="renuncia"><label class="lineal" for="">Renuncia voluntaria</label>
					<input class="lineal" type="checkbox" id="hogar"><label class="lineal" for="">Me dedido al hogar</label>
					<input class="lineal" type="checkbox" id="clausura"><label class="lineal" for="">Cerró la empresa</label>
					<input class="lineal" type="checkbox" id="despido"><label class="lineal" for="">Despido</label>
					<br><input class="lineal" type="checkbox" id="no_planeado"><label class="lineal" for="">No esta en mis planes</label>
					<input class="lineal" type="checkbox" id="otros_motivos"><label class="lineal" for="">Otros</label>
					<input type="text" id="agregarOtrasOpciones"  placeholder="Agregar otras opciones">
				</div>

				<div id="18">
					<label class="top" for="">¿Por qué medio te colocaste en tu empleo actual?</label>
					<input class="lineal" type="checkbox" id="residencia"><label class="lineal" for="">Residencia Profesional</label>
					<input class="lineal" type="checkbox" id="bolsa_itsav"><label class="lineal" for="">Bolsa de trabajo ITSAV</label>
					<input class="lineal" type="checkbox" id="bolsa_municipal"><label class="lineal" for="">Bolsa de trabajo municipal</label>
					<br><input class="lineal" type="checkbox" id="otros"><label class="lineal" for="">Otros</label>
					<input type="text" id="agregarOtros" placeholder="Agregar otras opciones">
				</div>

				<div id="19">
					<label class="top" for="">Datos de la empresa</label>
					<input class="lineal separador" type="text" id="nombreEmpresa" placeholder="Nombre de la empresa">
					<input class="lineal separador" type="text" id="calle_numero" placeholder="Calle y Numero">
					<input class="lineal separador" type="text" id="colonia_empresa" placeholder="Colonia">
					<input class="lineal separador" type="text" id="municipio_empresa" placeholder="Municipio">
					<input class="lineal separador" type="text" id="estado_empresa" placeholder="Estado">
					<input class="lineal separador" type="text" id="tel_empresa" placeholder="Telefono">
					<input class="lineal separador" type="text" id="jefeInmediato" placeholder="Jefe Inmediato">
					<input class="lineal separador" type="text" id="puesto_jefe" placeholder="Puesto del jefe inmediato">

					<label class="top" for="">Tu trabajo esta relacionado a tu perfil</label>
					<input class="lineal" type="checkbox" id="perfil_si"><label class="lineal" for="">Si</label>
					<input class="lineal" type="checkbox" id="perfil_no"><label class="lineal" for="">No</label>
					<input class="lineal" type="checkbox" id="perfil_parcial"><label class="lineal" for="">Parcial</label>
				</div>

				<div id="20">
					<label class="top" for="">Actividad principal de la empresa</label>
					<input class="lineal" type="checkbox" id="agricultura"><label class="lineal" for="">Agricultura</label>
					<input class="lineal" type="checkbox" id="mineria"><label class="lineal" for="">Industria extractiva (Mineria)</label>
					<input class="lineal" type="checkbox" id="construccion"><label class="lineal" for="">Industria de la construccion</label>
					<br><input class="lineal" type="checkbox" id="transformacion"><label class="lineal" for="">Industria de la transformacion</label>
					<input class="lineal" type="checkbox" id="tics"><label class="lineal" for="">Tecnologias de la informacion</label>
					<input class="lineal" type="checkbox" id="comercio"><label class="lineal" for="">Comercio</label>
					<input class="lineal" type="checkbox" id="servicios"><label class="lineal" for="">Servicios</label>
					<br><input class="lineal" type="checkbox" id="salud"><label class="lineal" for="">Salud</label>
					<input class="lineal" type="checkbox" id="educacion"><label class="lineal" for="">Educacion</label>
					<input class="lineal" type="checkbox" id="sec_publico"><label class="lineal" for="">Sector publico</label>
				</div>

				<div id="21">
					<label class="top" for="">Tamaño de la empresa</label>
					<input class="lineal" type="checkbox" id="micro"><label class="lineal" for="">Micro (de 1 a 20 empleados)</label>
					<input class="lineal" type="checkbox" id="peque"><label class="lineal" for="">Pequeña (de 21 a 50 empleados)</label>
					<br><input class="lineal" type="checkbox" id="med"><label class="lineal" for="">Mediana (de 51 a 100 empleados)</label>
					<input class="lineal" type="checkbox" id="grand"><label class="lineal" for="">Grande (mas de 100 empleados)</label>
				</div>

				<div id="22">
					<label class="top" for="">Nivel del puesto que desempeñas</label>
					<input class="lineal" type="checkbox" id="operario"><label class="lineal" for="">Operario</label>
					<input class="lineal" type="checkbox" id="tec_gen"><label class="lineal" for="">Tecnico General</label>
					<input class="lineal" type="checkbox" id="tec_esp"><label class="lineal" for="">Tecnico especializado</label>
					<input class="lineal" type="checkbox" id="admin"><label class="lineal" for="">Administrativo</label>
					<br><input class="lineal" type="checkbox" id="superv"><label class="lineal" for="">Supervisor (mando medio)</label>
					<input class="lineal" type="checkbox" id="geren"><label class="lineal" for="">Gerente (mando superior)</label>
					<input class="lineal" type="checkbox" id="dir"><label class="lineal" for="">Director (mando superior)</label>
					<br><input class="lineal" type="checkbox" id="aut"><label class="lineal" for="">Autoempleo (propietario o copropietario)</label>
					<input class="lineal" type="checkbox" id="no_prof"><label class="lineal" for="">Actividades no profesionales</label>
				</div>

				<div id="23">
					<label class="top" for="">Regimen juridico de la empresa</label>
					<input class="lineal" type="checkbox" id="reg_paraestatal">
					<label class="lineal" for="">Paraestatal (Empresano registrada por el gobierno, CFE, PEMEX, etc..)</label>
					<br><input class="lineal" type="checkbox" id="reg_pub"><label class="lineal" for="">Publica</label>
					<input class="lineal" type="checkbox" id="reg_priv"><label class="lineal" for="">Privada</label>
					<input class="lineal" type="checkbox" id="reg_negPropio"><label class="lineal" for="">Negocio propio</label>
				</div>

				<div id="24-25">
					<label class="top" for="">Nombre del puesto que desempeñas.</label>
					<input type="text" id="nombre_puesto" placeholder="Nombre del puesto">

					<label class="top" for="">Salario mensual percibido con prestaciones.</label>
					<input type="text" id="sal_mens" placeholder="Salario Mensual">
				</div>

				<label class="top" for="">Nombre de la institucion donde estudias actualmente.</label>
				<input type="text" id="nombre_institucion" placeholder="Nombre de la institucion">

				<label class="top" for="">En que ciudad esta ubicada la institucion.</label>
				<input type="text" id="ciudad_institucion" placeholder="Nombre de la ciudad">

				<label class="top" for="">Tipo de estudios que cursas.</label>
				<input class="lineal" type="checkbox" id="act_cap"><label class="lineal" for="">Cursos de actualizacion y/o capacitacion</label>
				<input class="lineal" type="checkbox" id="ing_lic"><label class="lineal" for="">Ingenieria y/o Licenciatura</label>
				<br><input class="lineal" type="checkbox" id="otro_tipo"><label class="lineal" for="">Otros: </label>
				<input class="lineal" type="text" id="otro_tipo_estudios" placeholder="Ingresa el tipo de estudios">

				<label class="top" for="">Nombre del estudio que cursas.</label>
				<input type="text" id="nombre_estudios" placeholder="Nombre de sus estudios">

				<label class="top" for="">¿Te gustatia tomar cursos de capacitacion o actualizacion?</label>
				<input class="lineal" type="checkbox" id="capacitacion_si"><label class="lineal" for="">Si (Pasar a la siguiente pregunta)</label>
				<input class="lineal" type="checkbox" id="capacitacion_no"><label class="lineal" for="">No</label>

				<div id="cursos" style="display: none;">
					<label class="top" for="">Escribe por lo menos 3 cursos o actualizaciones de tu interes.</label>
					<input type="text" id="curso1" placeholder="Curso 1">
					<input type="text" id="curso2" placeholder="Curso 2">
					<input type="text" id="curso3" placeholder="Curso 3">
				</div>

				<br><br><br><input type="button" id="page5" value="Finalizar" style="float:right; margin-bottom:10px;">
				<input type="button" id="back3" value="Seccion anterior" style="float:left; margin-bottom:10px;">
			</div>
		</form>
	</section>
	<footer></footer>
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/load_sections.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>