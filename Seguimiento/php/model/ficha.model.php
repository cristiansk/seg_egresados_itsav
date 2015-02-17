<?php 
require_once "../database/db_handler.php";
class Ficha extends Database {
	public function __construct(){}

	public function generarClave(){
		try {
			$sql = "SELECT generarPassword() as clave";
			$consulta = $this->ejecutarConsulta($sql);
			$consulta->execute();
			$registro = $consulta->fetch();	
			return $registro['clave'];
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}

	public function insertaRegistro($arrayPersonal, $arrayEstudios, $arrayLaboral){
		try {
			$sentencia1 = "insert into infoPersonal(clave, appPaterno, appMaterno, nombre, sexo, calleNum, colonia, ciudad, estado, 
								codPostal, telCasa, telCel, telRec, email, dir_facebook)  
								values('$arrayPersonal[0]', '$arrayPersonal[1]', '$arrayPersonal[2]',
								'$arrayPersonal[3]','$arrayPersonal[4]','$arrayPersonal[5]','$arrayPersonal[6]',
								'$arrayPersonal[7]','$arrayPersonal[8]','$arrayPersonal[9]', '$arrayPersonal[10]', 
								'$arrayPersonal[11]','$arrayPersonal[12]','$arrayPersonal[13]', '$arrayPersonal[14]')";
			#$this->ejecutarQuery($sentencia1, $sentencia2, $sentencia3);
			
			$sentencia2 = "insert into infoEscolar(ncontrol, carrera, modalidad, campus, fechaEgreso, titulado, clave_info) 
								values('$arrayEstudios[0]', '$arrayEstudios[1]', '$arrayEstudios[2]', '$arrayEstudios[3]', 
								'$arrayEstudios[4]', '$arrayEstudios[5]', '$arrayEstudios[6]')";
			#$this->ejecutarQuery($sentencia2);
			$sentencia3 = "insert into infoLaboral(id, nombreEmpresa, direccionEmpresa, telEmpresa, giroEmpresa, tamanEmpresa,
								tipoEmpresa, puestoActual, clave_info) 
								values('$arrayLaboral[0]', '$arrayLaboral[1]', '$arrayLaboral[2]', '$arrayLaboral[3]', 
								'$arrayLaboral[4]', '$arrayLaboral[5]', '$arrayLaboral[6]', '$arrayLaboral[7]', 
								'$arrayLaboral[8]')";
			#$this->ejecutarQuery($sentencia3);
			$this->ejecutarQuery($sentencia1, $sentencia2, $sentencia3);
			return true;
		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
			return false;
		}
	}
}

$fi = new Ficha();
$clave = $fi->generarClave();
$infoPersonal = array();
echo $clave;
array_push($infoPersonal, $clave);
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");
array_push($infoPersonal, "1");

$infoEscolar = array();
array_push($infoEscolar, "1");
array_push($infoEscolar, "1");
array_push($infoEscolar, "1");
array_push($infoEscolar, "1");
array_push($infoEscolar, "1");
array_push($infoEscolar, "1");
array_push($infoEscolar, $clave);

$infoLaboral = array();
array_push($infoLaboral, "1");
array_push($infoLaboral, "1");
array_push($infoLaboral, "1");
array_push($infoLaboral, "1");
array_push($infoLaboral, "1");
array_push($infoLaboral, "1");
array_push($infoLaboral, "1");
array_push($infoLaboral, "1");
array_push($infoLaboral, $clave);

if($fi->insertaRegistro($infoPersonal, $infoEscolar, $infoLaboral)){
	echo "Datos registrados correctamente";
}else {
	echo "No se pudieron registrar algunos datos";
}
?>
