$txt=document.getElementsByName("nombre");
		$txt[0].value="Escriba su nombre";
		
		function enviarA($adonde){
			alert("vamos para "+$adonde);
			
			$formulario=document.getElementById("formulario");
			$formulario.setAttribute('action', $adonde);
			$formulario.submit();
		}