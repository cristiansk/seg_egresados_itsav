<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ficha de Registro</title>
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/regEgresados.css">


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
				<label class="personal" for="">1.- Nombre: </label>
				<input class="personal" type="text" id="apPaterno" placeholder="Apellido Paterno">
				<input class="personal" type="text" id="apMaterno" placeholder="Apellido Materno">
				<input class="personal" type="text" id="nombre" placeholder="Nombtre">
				<label class="personal" for="">2.- Domicilio: </label>
				<input class="personal" type="text" id="calleNum" placeholder="Calle y numero">
				<input class="personal" type="text" id="apMaterno" placeholder="Colonia"><br>
				<label class="personal" for="">3.- Ciudad: </label>
				<input class="personal" type="text" id="ciudad" placeholder="Ciudad">
				<input class="personal" type="text" id="estado" placeholder="Estado">
				<input class="personal" type="text" id="codPostal" placeholder="Codigo Postal">
				<label class="personal" for="">4.- Telefono: </label>
				<input class="personal" type="text" id="casa" placeholder="Numero de casa">
				<input class="personal" type="text" id="movil" placeholder="Celular">
				<input class="personal" type="text" id="recado" placeholder="De recados">
				<label class="personal" for="">5.- E-mail: </label>
				<input class="personal" type="email" id="email" placeholder="Ingresar e-mail">
				<label class="personal" for="">6.- Facebook</label>
				<input class="personal" type="text" id="facebook" placeholder="Ingresar facebook">
				<br><input type="button" id="page2" value="Siguiente seccion" style="float:right; margin-bottom:10px;">
			</div>
			<br>
			<div id="datosEscolares">
				<span>Datos Escolares</span>
				<label class="escolar left" for="">7.- Programa educativo: </label>
				<input class="escolar left" type="text" id="programaEducativo" placeholder="Programa educativo">
				<label class="escolar right" for="">Titulado: </label>
				<input class="escolar right" type="text" id="titulado" placeholder="Ingrese si es titulado">
				<label class="escolar left" width="140" for="">8.- Mes y año de egreso: </label>
				<input class="escolar" type="text" id="fechaEgreso" placeholder="Fecha de Egreso"><br>
				<label class="escolar left" width="500" for="">9.- Numero de Control: </label>
				<input class="escolar" type="text" id="numControl" placeholder="Ingresar numero de control"><br>
				<br>
				<label class="escolar" for="">10.- Campus: </label>
				<label class="escolar right" for="">Alvarado</label><input class="escolar right margen" type="checkbox" id="alvarado">
				<label class="escolar right" for="">Tlalixcoyan</label><input class="escolar right margen" type="checkbox" id="tlalixcoyan">
				<label class="escolar right" for="">Ciudad de Lerdo</label><input class="escolar right margen" type="checkbox" id="lerdo">
				<label class="escolar right" for="">Medellin</label><input class="escolar right margen" type="checkbox" id="medellin">
				<br><br><input type="button" id="page3" value="Siguiente seccion" style="float:right; margin-bottom:10px;">
			</div>
			<br>
			<div id="seccion3">
				<span>Pertinencia y disponibilidad de medios y recursos para el aprendizaje</span>
				<label for="">11.- Calidad de los docentes: </label>
				<label class="lineal" for="">Muy Buena</label><input class="lineal separador" type="checkbox" id="mb1">
				<label class="lineal" for="">Buena</label><input class="lineal separador" type="checkbox" id="b1">
				<label class="lineal" for="">Regular</label><input class="lineal separador" type="checkbox" id="r1">
				<label class="lineal" for="">Mala</label><input class="lineal separador" type="checkbox" id="m1">

				<label for="">12.- Plan de estudio: </label>
				<label class="lineal" for="">Muy Bueno</label><input class="lineal separador" type="checkbox" id="mb2">
				<label class="lineal" for="">Bueno</label><input class="lineal separador" type="checkbox" id="b2">
				<label class="lineal" for="">Regular</label><input class="lineal separador" type="checkbox" id="r2">
				<label class="lineal" for="">Malo</label><input class="lineal separador" type="checkbox" id="m2">

				<label for="">13.- Experiencia obtenida a traves de la residencia profesional: </label>
				<label class="lineal" for="">Muy Buena</label><input class="lineal separador" type="checkbox" id="mb1">
				<label class="lineal" for="">Buena</label><input class="lineal separador" type="checkbox" id="b1">
				<label class="lineal" for="">Regular</label><input class="lineal separador" type="checkbox" id="r1">
				<label class="lineal" for="">Mala</label><input class="lineal separador" type="checkbox" id="m1">

				<br><br><input type="button" id="page4" value="Siguiente seccion" style="float:right; margin-bottom:10px;">
			</div>
			<div id="infoLaboral">
				<span>Incorporacion en el mercado del trabajo</span>
				<label for="">14.- Al terminar tu carrera en el ITSAV, ¿Cuanto tiempo tardaste en encontrar tu primer empleo?</label>
				<input class="lineal" type="checkbox" id="trabajaba"><label class="lineal" for="">Ya trabajaba</label>
				<input class="lineal" type="checkbox" id="estadia"><label class="lineal" for="">Durante la estadia</label>
				<input class="lineal" type="checkbox" id="min_3"><label class="lineal" for="">Menos de 3 meses</label>
				<input class="lineal" type="checkbox" id="min_6"><label class="lineal" for="">Hasta 6 meses</label>
				<input class="lineal" type="checkbox" id="min_12"><label class="lineal" for="">Hasta 1 año</label>
				<input class="lineal" type="checkbox" id="min_12+"><label class="lineal" for="">Mas de 1 año</label>
				<input class="lineal" type="checkbox" id="no_trabaja"><label class="lineal" for="">No he comenzado a trabajar</label>
				<label class="top" for="">¿Cual es tu salario mensual?</label>
				<input type="text" id="salario" placeholder="Salario Mensual">

				<label class="top" for="">15.- Indica cual es  tu situacion actual.</label>
				<input class="lineal" type="checkbox" id="working"><label class="lineal" for="">Trabajo</label>
				<input class="lineal" type="checkbox" id="working"><label class="lineal" for="">Trabajo y estudio</label>
				<input class="lineal" type="checkbox" id="working"><label class="lineal" for="">Estudio</label>
				<input class="lineal" type="checkbox" id="working"><label class="lineal" for="">Desempleado</label>

				<label class="top" for="">16.- ¿Cuanto tiempo tienes sin empleo?</label>
				<input class="lineal" type="checkbox" id="1m"><label class="lineal" for="">Menos de un mes</label>
				<input class="lineal" type="checkbox" id="3m"><label class="lineal" for="">De uno a 3 meses</label>
				<input class="lineal" type="checkbox" id="6m"><label class="lineal" for="">Hasta 6 meses</label>
				<input class="lineal" type="checkbox" id="12m"><label class="lineal" for="">Hasta 1 año</label>
				<input class="lineal" type="checkbox" id="not_yet"><label class="lineal" for="">No he comenzado a trabajar</label>

				<label class="top" for="">17.- ¿Cual es el principal motivo por el que no trabaja?</label>
				<input class="lineal" type="checkbox" id="renuncia"><label class="lineal" for="">Renuncia voluntaria</label>
				<input class="lineal" type="checkbox" id="hogar"><label class="lineal" for="">Me dedido al hogar</label>
				<input class="lineal" type="checkbox" id="clausura"><label class="lineal" for="">Cerró la empresa</label>
				<input class="lineal" type="checkbox" id="despido"><label class="lineal" for="">Despido</label>
				<input class="lineal" type="checkbox" id="no_planeado"><label class="lineal" for="">No esta en mis planes</label>
				<input class="lineal" type="checkbox" id="otros_motivos"><label class="lineal" for="">Otros</label>
				<input type="text" id="agregarOtrasOpciones"  placeholder="Agregar otras opciones">

				<label class="top" for="">18.- ¿Por qué medio te colocaste en tu empleo actual?</label>
				<input class="lineal" type="checkbox" id="residencia"><label class="lineal" for="">Residencia Profesional</label>
				<input class="lineal" type="checkbox" id="bolsa_itsav"><label class="lineal" for="">Bolsa de trabajo ITSAV</label>
				<input class="lineal" type="checkbox" id="bolsa_municipal"><label class="lineal" for="">Bolsa de trabajo municipal</label>
				<input class="lineal" type="checkbox" id="otros"><label class="lineal" for="">Otros</label>
				<input type="text" id="agregarOtros" placeholder="Agregar otras opciones">

				<label class="top" for="">19.- Datos de la empresa</label>
				<input class="lineal separador" type="text" id="nombreEmpresa" placeholder="Nombre de la empresa">
				<input class="lineal separador" type="text" id="calle_numero" placeholder="Calle y Numero">
				<input class="lineal separador" type="text" id="colonia_empresa" placeholder="Colonia">
				<input class="lineal separador" type="text" id="municipio_empresa" placeholder="Municipio">
				<input class="lineal separador" type="text" id="estado_empresa" placeholder="Estado">
				<input class="lineal separador" type="text" id="tel_empresa" placeholder="Telefono">
				<input class="lineal separador" type="text" id="jefeInmediato" placeholder="Jefe Inmediato">
				<input class="lineal separador" type="text" id="puesto_jefe" placeholder="Puesto del jefe inmediato">

				<label class="top" for="">Tu trabajo esta relacionado a tu perfil</label>
				<input class="lineal" type="checkbox" id="si"><label class="lineal" for="">Si</label>
				<input class="lineal" type="checkbox" id="no"><label class="lineal" for="">No</label>
				<input class="lineal" type="checkbox" id="parcial"><label class="lineal" for="">Parcial</label>

				<label class="top" for="">20.- Actividad principal de la empresa</label>
				<input class="lineal" type="checkbox" id="agricultura"><label class="lineal" for="">Agricultura</label>
				<input class="lineal" type="checkbox" id="mineria"><label class="lineal" for="">Industria extractiva (Mineria)</label>
				<input class="lineal" type="checkbox" id="construccion"><label class="lineal" for="">Industria de la construccion</label>
				<input class="lineal" type="checkbox" id="transformacion"><label class="lineal" for="">Industria de la transformacion</label>
				<input class="lineal" type="checkbox" id="tics"><label class="lineal" for="">Tecnologias de la informacion y comunicacion</label>
				<input class="lineal" type="checkbox" id="comercio"><label class="lineal" for="">Comercio</label>
				<input class="lineal" type="checkbox" id="servicios"><label class="lineal" for="">Servicios</label>
				<input class="lineal" type="checkbox" id="salud"><label class="lineal" for="">Salud</label>
				<input class="lineal" type="checkbox" id="educacion"><label class="lineal" for="">Educacion</label>
				<input class="lineal" type="checkbox" id="sec_publico"><label class="lineal" for="">Sector publico</label>

				<label class="top" for="">21.- Tamaño de la empresa</label>
				<input class="lineal" type="checkbox" id="micro"><label class="lineal" for="">Micro (de 1 a 20 empleados)</label>
				<input class="lineal" type="checkbox" id="peque"><label class="lineal" for="">Pequeña (de 21 a 50 empleados)</label>
				<input class="lineal" type="checkbox" id="med"><label class="lineal" for="">Mediana (de 51 a 100 empleados)</label>
				<input class="lineal" type="checkbox" id="grand"><label class="lineal" for="">Grande (mas de 100 empleados)</label>

				<label class="top" for="">22.- Nivel del puesto que desempeña</label>
				<input class="lineal" type="checkbox" id="operario"><label class="lineal" for="">Operario</label>
				<input class="lineal" type="checkbox" id="tec_gen"><label class="lineal" for="">Tecnico General</label>
				<input class="lineal" type="checkbox" id="tec_esp"><label class="lineal" for="">Tecnico especializado</label>
				<input class="lineal" type="checkbox" id="admin"><label class="lineal" for="">Administrativo</label>
				<input class="lineal" type="checkbox" id="superv"><label class="lineal" for="">Supervisor (mando medio)</label>
				<input class="lineal" type="checkbox" id="geren"><label class="lineal" for="">Gerente (mando superior)</label>
				<input class="lineal" type="checkbox" id="dir"><label class="lineal" for="">Director (mando superior)</label>
				<input class="lineal" type="checkbox" id="aut"><label class="lineal" for="">Autoempleo (propietario o copropietario)</label>
				<input class="lineal" type="checkbox" id="no_prof"><label class="lineal" for="">Actividades no profesionales (oficio o actividades ajenas a su profesión)</label>

				<label class="top" for="">23.- Regimen juridico de la empresa</label>
				<input class="lineal" type="checkbox" id="reg_pub"><label class="lineal" for="">Publica</label>
				<input class="lineal" type="checkbox" id="reg_priv"><label class="lineal" for="">Privada</label>
				<input class="lineal" type="checkbox" id="reg_negPropio"><label class="lineal" for="">Negocio propio</label>
				<input class="lineal" type="checkbox" id="reg_paraestatal"><label class="lineal" for="">Paraestatal (Empresa estatal no registrada por el gobierno, CFE, PEMEX, CONACULTA, CAPUFE)</label>

				<label class="top" for="">24.- Nombre del puesto que desenpeñas.</label>
				<input type="text" id="nombre_puesto" placeholder="Nombre del puesto">

				<label class="top" for="">25.- Salario mensual percibido con prestaciones.</label>
				<input type="text" id="sal_mens" placeholder="Salario Mensual">

				<label class="top" for="">26.- Nombre de la institucion donde estudias actualmente.</label>
				<input type="text" id="nombre_institucion" placeholder="Nombre de la institucion">

				<label class="top" for="">27.- En que ciudad esta ubicada la institucion.</label>
				<input type="text" id="ciudad_institucion" placeholder="Nombre de la ciudad">

				<label class="top" for="">28.- Tipo de estudios que cursas.</label>
				<input class="lineal" type="checkbox" id="act_cap"><label class="lineal" for="">Cursos de actualizacion y/o capacitacion</label>
				<input class="lineal" type="checkbox" id="ing_lic"><label class="lineal" for="">Ingenieria y/o Licenciatura</label>
				<input class="lineal" type="checkbox" id="otro_tipo"><label for="">Otros: </label>
				<input type="text" id="otro_tipo_estudios">

				<label class="top" for="">29.- Nombre del estudio que cursas.</label>
				<input type="text" id="nombre_estudios">

				<label class="top" for="">30.- ¿Te gustatia tomar cursos de capacitacion o actualizacion?</label>
				<input type="checkbox" id="capacitacion_si"><label for="">Si (Pasar a la siguiente pregunta)</label>
				<input type="checkbox" id="capacitacion_no"><label for="">No</label>

				<label class="top" for="">31.- Escribe por lo menos 3 cursos o actualizaciones de tu interes.</label>
				<input type="text" id="curso1" placeholder="Curso 1">
				<input type="text" id="curso2" placeholder="Curso 2">
				<input type="text" id="curso3" placeholder="Curso 3">

				<br><br><input type="button" id="page5" value="Finalizar" style="float:right; margin-bottom:10px;">
			</div>
		</form>
	</section>
	<footer></footer>
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/load_sections.js"></script>
</body>
</html>