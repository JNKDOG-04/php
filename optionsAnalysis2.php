<?php 
	//echo json_encode($_POST);
	echo "<p>Analizando las opciones...</p>";
	if(isset($_POST["nombre"])){
		analizarOpciones2();
	}else{
		echo "<p>No hay datos en el formulario, está página sólo funciona a través del formulario!</p>";
	}
	echo "<p><a href='index.php'>Ir al formulario</a></p>";
	
	function analizarOpciones2(){
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$edad=$_POST["edad"];
		$email=$_POST["correo"];
		$producto=$_POST["producto"];
		$color=$_POST["color"];
		echo "<p>Tu nombre es: $nombre y tu apellido es: $apellido";
		$dominio=extraerElDominio($email);
		echo "<p>Tu dominio es: " . $dominio;
		
		if($edad <= 18 && $color=="azul" && $producto=="1"){
			echo "<p>Este es el unico que puedes comprar por tu edad!";	
		}elseif($edad >18 && $color=="azul" && $producto=="1"){
			echo "<p>Este producto solo es para ti!</p>";
		}elseif($color =="negro" && $producto == "2"){
			echo "<p>Ganaste un premio!</p>";
		}elseif($edad >= 18){
			echo "<p>Puedes comprar lo que sea!</p>";
		}else{
			echo "<p>Por favor llena el formulario para poder comprar nuestros productos</p>";
		}
	}
	
	function extraerElDominio($email){
		if(strpos($email,"@") != false){
			$ext=explode("@",$email);  //aaa@bbb.com
			return $ext[1];
		}else{
			return "No hay dominio";
		}
	}
?>