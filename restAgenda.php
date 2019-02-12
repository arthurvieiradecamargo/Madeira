<?php
/*
    PROJETO TESTE - AGENDA TELEFÔNICA
    EMPRESA REQUERENTE: MadeiraMadeira
    DEV. ARTHUR VIEIRA DE CAMARGO
    E-MAIL: ARTHUR.VIEIRADECAMARGO@GMAIL.COM
    TELEFONE: (41) 99712-7777
    DATA ENTREGA DO PROJETO: 12/02/2019
*/
	require_once 'controller/restAgenda.php';

	$agenda = new restAgenda();
	if(isset($_GET['acao']) and $_GET['acao'] == 'listar'){
		$agenda->listar();
	}
	else if(isset($_GET['acao']) and $_GET['acao'] == 'excluir'){
		header('Content-Type', 'application/json;charset=utf-8');
		$request_method = $_SERVER["REQUEST_METHOD"];
		if($request_method == 'DELETE'){
			echo json_encode($agenda->excluir($_GET['id']));
		}else{
			echo json_encode(false);
		}
	}
	else if(isset($_GET['acao']) and $_GET['acao'] == 'insert'){
		header('Content-Type', 'application/json;charset=utf-8');
		$request_method = $_SERVER["REQUEST_METHOD"];
		if($request_method == 'POST'){			
			echo json_encode($agenda->insert($_POST));
		}else{
			echo json_encode(false);
		}
	}
	else if(isset($_GET['acao']) and $_GET['acao'] == 'detalhes'){
		$agenda->detalhes($_GET);
	}
	else if(isset($_GET['acao']) and $_GET['acao'] == 'editar'){
		$agenda->editar($_GET);
	}
	else if(isset($_GET['acao']) and $_GET['acao'] == 'update'){
		$agenda->update($_POST);
	}
	else{
		return false;
	}