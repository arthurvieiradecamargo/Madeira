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

class Agenda {
	public function index() {
		$agenda = new AgendaModel();
		$mensagem = $agenda->getMensagem();
		require_once 'view/home.php';
	}

	public function listar($dados){
		if(!isset($dados['insert'])){
			$dados['insert'] = null;
		}
		require_once 'view/agendaLista.php';
	}

	public function excluir($id){
		$url 	= 'http://localhost/madeiramadeira/restAgenda.php?acao=excluir&id='.$id;
		$ch 	= curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response_json = curl_exec($ch);
		curl_close($ch);
		$response=json_decode($response_json, true);
		if($response == true){
			return true;
		}else{
			return false;
		}
	}

	public function novo(){
		require_once 'view/agendaNovo.php';
	}

	public function insert($dados){
		$data = array(
			'age_nome' 			=> $dados['age_nome'],
			'age_email' 		=> $dados['age_email'],
			'age_end' 			=> $dados['age_end'],
			'age_logn' 			=> $dados['age_logn'],
			'age_bairro' 		=> $dados['age_bairro'],
			'age_cidade' 		=> $dados['age_cidade'],
			'age_estado' 		=> $dados['age_estado'],
			'age_telefone1' 	=> $dados['age_telefone1'],
			'age_telefone2' 	=> $dados['age_telefone2'],
			'age_telefone3' 	=> $dados['age_telefone3'],
			'age_telefone4' 	=> $dados['age_telefone4'],
			'age_telefone5' 	=> $dados['age_telefone5'],
			'age_telefone6' 	=> $dados['age_telefone6']
		);
		$url = 'http://localhost/madeiramadeira/restAgenda.php?acao=insert';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response_json = curl_exec($ch);
		curl_close($ch);
		if(json_decode($response_json, true)){
			header('Location: http://localhost/madeiramadeira/index.php?acao=listar&insert=ok');
		}else{
			header('Location: http://localhost/madeiramadeira/index.php?acao=listar&insert=ok');
		}
	}

	public function update($dados){
		$data = array(
			'age_id' 			=> $dados['age_id'],
			'age_nome' 			=> $dados['age_nome'],
			'age_email' 		=> $dados['age_email'],
			'age_end' 			=> $dados['age_end'],
			'age_logn' 			=> $dados['age_logn'],
			'age_bairro' 		=> $dados['age_bairro'],
			'age_cidade' 		=> $dados['age_cidade'],
			'age_estado' 		=> $dados['age_estado'],
			'age_telefone1' 	=> $dados['age_telefone1'],
			'age_telefone2' 	=> $dados['age_telefone2'],
			'age_telefone3' 	=> $dados['age_telefone3'],
			'age_telefone4' 	=> $dados['age_telefone4'],
			'age_telefone5' 	=> $dados['age_telefone5'],
			'age_telefone6' 	=> $dados['age_telefone6']
		);
		$url = 'http://localhost/madeiramadeira/restAgenda.php?acao=update';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response_json = curl_exec($ch);
		curl_close($ch);
		if(json_decode($response_json, true)){
			header('Location: http://localhost/madeiramadeira/index.php?acao=editar&id='.$dados['age_id'].'&update=ok');
		}else{
			header('Location: http://localhost/madeiramadeira/index.php?acao=editar&id='.$dados['age_id'].'&update=erro');
		}
	}

	public function editar($dados){
		$url = 'http://localhost/madeiramadeira/restAgenda.php?acao=editar&id='.$dados['id'];
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response_json = curl_exec($ch);
		curl_close($ch);
		$resultado = json_decode($response_json, true);
		$resultado = $resultado[0];
		if($resultado != ''){
			require_once 'view/agendaEditar.php';
		}else{
			header('Location: http://localhost/madeiramadeira/index.php?acao=listar');
		}
	}
}