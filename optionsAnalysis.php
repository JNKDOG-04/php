<?php 
	//echo json_encode($_POST);
	echo "<p>Analizando las opciones...</p>";
	if(isset($_POST["nombre"]){
		analizarOpciones();
	}else{
		echo "<p>Solo puede usar esta pagina a traves del formulario!</p>";
	}
	echo "<p><a href='index.php'>Ir al formulario</a></p>";
	
	function analizarOpciones(){
		$nombre=$_POST["nombre"];
		$apellido=$_POST["apellido"];
		$edad=$_POST["edad"];
		$email=$_POST["correo"];
		$producto=$_POST["producto"];
		$color=$_POST["color"];
		
		echo "<p>Tu nombre es: $nombre y tu apellido es: $apellido";
		$dominio=extraerElDominio($email);
		echo "<p>Tu dominio es: " . $dominio;
		

		if($edad <= 18 && $color=="azul" && $producto =="1"){
			echo "<p>Este es el unico que puedes comprar por tu edad!";	
		}else{
			if($edad >18 && $color=="azul" && $producto =="1"){
				echo "<p>Este producto solo es para ti!</p>";
			}else{
				if($color =="negro" && $producto == "2"){
					echo "<p>Ganaste un premio!</p>";
				}else{
					if($edad >= 18){
						echo "<p>Puedes comprar lo que sea!</p>";
					}else{
						echo "<p>No puedes comprar porque eres menor de edad!</p>";
					}
				}
			}
		}
	}
	function extraerElDominio($email){
		$ext=explode("@",$email);  //aaa@bbb.com
		return $ext[0];
	}
?>