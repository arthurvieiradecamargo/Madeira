<?php
/*
    PROJETO TESTE - AGENDA TELEFÔNICA
    EMPRESA REQUERENTE: MadeiraMadeira
    DEV. ARTHUR VIEIRA DE CAMARGO
    E-MAIL: ARTHUR.VIEIRADECAMARGO@GMAIL.COM
    TELEFONE: (41) 99712-7777
    DATA ENTREGA DO PROJETO: 12/02/2019
*/
	require_once 'controller/agenda.php';
	$agenda = new Agenda();
	if(isset($_GET['acao']) and $_GET['acao'] == 'listar'){
		$agenda->listar($_GET);
	}
	else if(isset($_GET['acao']) and $_GET['acao'] == 'excluir'){
		$agenda->excluir($_GET['id']);
	}
	else if(isset($_GET['acao']) and $_GET['acao'] == 'novo'){
		$agenda->novo();
	}
	else if(isset($_GET['acao']) and $_GET['acao'] == 'insert'){
		$agenda->insert($_POST);
	}
	else if(isset($_GET['acao']) and $_GET['acao'] == 'editar'){
		$agenda->editar($_GET);
	}
	else if(isset($_GET['acao']) and $_GET['acao'] == 'update'){
		$agenda->update($_POST);
	}
	else{
		$agenda->index();
	}

?>