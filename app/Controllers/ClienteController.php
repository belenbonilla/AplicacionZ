<?php 

require_once('Models/ClienteModel.php');

class ClienteController
{
	
	function __construct()
	{
		
	}

	function index(){
		$cliente= new ClienteModel();
		$datos = $cliente->listar();
		require_once('Views/Cliente/index.php');
	}


}
?>
