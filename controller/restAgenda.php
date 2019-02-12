<?php
/*
    PROJETO TESTE - AGENDA TELEFÔNICA
    EMPRESA REQUERENTE: MadeiraMadeira
    DEV. ARTHUR VIEIRA DE CAMARGO
    E-MAIL: ARTHUR.VIEIRADECAMARGO@GMAIL.COM
    TELEFONE: (41) 99712-7777
    DATA ENTREGA DO PROJETO: 12/02/2019
*/
require_once 'model/agendaModel.php';
require_once 'controller/conexao.php';

class restAgenda {
	public function listar(){
		$agenda 	= new AgendaModel();
		header('Content-Type', 'application/json;charset=utf-8');
		echo json_encode($agenda->getLista());
	}
	public function excluir($id){
		if (!is_numeric($id)) {
			return false;
		}
		$agenda 	= new AgendaModel();
		return $agenda->getExcluir($id);
	}
	public function insert($dados){
		$agenda 	= new AgendaModel();
		$verificador = true;
		if($dados['age_nome'] == ''){
			return false;
		}
		if(!filter_var($dados['age_email'], FILTER_VALIDATE_EMAIL)){
			return false;
		}
		if($verificador){
			header('Content-Type', 'application/json;charset=utf-8');
			if($agenda->getInsert($dados)){
				echo json_encode(true);
			}else{
				echo json_encode(false);
			}
		}
	}

	public function update($dados){
		$agenda 	= new AgendaModel();
		$verificador = true;
		if($dados['age_nome'] == ''){
			return false;
		}
		if(!filter_var($dados['age_email'], FILTER_VALIDATE_EMAIL)){
			return false;
		}
		if($verificador){
			header('Content-Type', 'application/json;charset=utf-8');
			if($agenda->getUpdate($dados)){
				echo json_encode(true);
			}else{
				echo json_encode(false);
			}
		}
	}

	public function detalhes($dados){
		if (!is_numeric($dados['id'])) {
			return false;
		}
		$agenda 	= new AgendaModel();
		header('Content-Type', 'application/json;charset=utf-8');
		echo json_encode($agenda->getDetalhes($dados['id']));
	}

	public function editar($dados){
		if (!is_numeric($dados['id'])) {
			return false;
		}
		$agenda 	= new AgendaModel();
		header('Content-Type', 'application/json;charset=utf-8');
		echo json_encode($agenda->getEditar($dados['id']));
	}
}