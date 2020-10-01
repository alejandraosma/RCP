<?php
	
	if (isset($_GET['clase'])&& isset($_GET['funcion'])) 
	{
		$clase=$_GET['clase'];
		$funcion=$_GET['funcion'];
		llamar($clase,$funcion);
	}

	else
	{
		$clase='paginas';
		$funcion='principal';
		llamar($clase,$funcion);
	}

	function llamar($clase,$funcion)
	{
		require_once("Controlador/".$clase."_control.php");
		
		switch ($clase) 
		{
			case 'paginas':
				$control= new Home();
			break;

			case 'empleados':
				$control= new adm_empleados();
			break;

			case 'agendar':
				$control= new adm_agendar();
			break;

			case 'estudiantes':
				$control= new adm_estudiantes();
			break;
		}//fin switch

		/*llamar funcion*/
		$control->{$funcion}();
	}
?>