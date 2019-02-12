<?php
/*
    PROJETO TESTE - AGENDA TELEFÔNICA
    EMPRESA REQUERENTE: MadeiraMadeira
    DEV. ARTHUR VIEIRA DE CAMARGO
    E-MAIL: ARTHUR.VIEIRADECAMARGO@GMAIL.COM
    TELEFONE: (41) 99712-7777
    DATA ENTREGA DO PROJETO: 12/02/2019
*/
class AgendaModel {
	public function getMensagem() {
		return "teste Model";
	}

	public function getLista(){
		$conexao 	 = Conexao::getInstance();
        $consulta    = $conexao->prepare("SELECT * FROM agenda;");
        $consulta->execute();
        return $consulta->fetchAll();
	}

	public function getDetalhes($id){
		$conexao 	 = Conexao::getInstance();
        $consulta    = $conexao->prepare("SELECT * FROM agenda WHERE age_id = ".$id." LIMIT 1");
        $consulta->execute();
        return $consulta->fetchAll();
	}

	public function getExcluir($id){
		$conexao 	= Conexao::getInstance();
        $consulta 	= $conexao->prepare("DELETE FROM agenda WHERE age_id = ".$id.";");
        if($consulta->execute()){
        	return true;
        }else{
        	return false;
        }
	}

	public function getInsert($dados){
		$conexao 	= Conexao::getInstance();
		$age_nome	= $dados['age_nome'];
		$age_email	= $dados['age_email'];
		$age_end	= $dados['age_end'];
		$age_logn	= $dados['age_logn'];
		$age_bairro	= $dados['age_bairro'];
		$age_cidade	= $dados['age_cidade'];
		$age_estado	= $dados['age_estado'];
		$age_telefone1	= $dados['age_telefone1'];
		$age_telefone2	= $dados['age_telefone2'];
		$age_telefone3	= $dados['age_telefone3'];
		$age_telefone4	= $dados['age_telefone4'];
		$age_telefone5	= $dados['age_telefone5'];
		$age_telefone6	= $dados['age_telefone6'];

        $consulta 	= $conexao->prepare("INSERT INTO agenda (age_nome, age_email, age_end, age_logn, age_bairro, age_cidade, age_estado, age_telefone1, age_telefone2, age_telefone3, age_telefone4, age_telefone5, age_telefone6)
VALUES ('".$age_nome."', '".$age_email."', '".$age_end."', '".$age_logn."', '".$age_bairro."', '".$age_cidade."', '".$age_estado."', '".$age_telefone1."', '".$age_telefone2."', '".$age_telefone3."', '".$age_telefone4."', '".$age_telefone5."', '".$age_telefone6."' )");
        if($consulta->execute()){
        	return true;
        }else{
        	return false;
        }
	}

	public function getEditar($id){
		$conexao 	 = Conexao::getInstance();
        $consulta    = $conexao->prepare("SELECT * FROM agenda WHERE age_id = ".$id." LIMIT 1");
        $consulta->execute();
        return $consulta->fetchAll();
	}

	public function getUpdate($dados){
		$conexao 	= Conexao::getInstance();
		$age_id 	= $dados['age_id'];
		$age_nome	= $dados['age_nome'];
		$age_email	= $dados['age_email'];
		$age_end	= $dados['age_end'];
		$age_logn	= $dados['age_logn'];
		$age_bairro	= $dados['age_bairro'];
		$age_cidade	= $dados['age_cidade'];
		$age_estado	= $dados['age_estado'];
		$age_telefone1	= $dados['age_telefone1'];
		$age_telefone2	= $dados['age_telefone2'];
		$age_telefone3	= $dados['age_telefone3'];
		$age_telefone4	= $dados['age_telefone4'];
		$age_telefone5	= $dados['age_telefone5'];
		$age_telefone6	= $dados['age_telefone6'];

        $consulta 	= $conexao->prepare("UPDATE agenda SET age_nome='".$age_nome."', age_email='".$age_email."', age_end='".$age_end."', age_logn='".$age_logn."', age_bairro='".$age_bairro."', age_cidade='".$age_cidade."', age_estado='".$age_estado."', age_telefone1='".$age_telefone1."', age_telefone2='".$age_telefone2."', age_telefone3='".$age_telefone3."', age_telefone4='".$age_telefone4."', age_telefone5='".$age_telefone5."', age_telefone6='".$age_telefone6."' WHERE age_id = ".$age_id." ");

        if($consulta->execute()){
        	return true;
        }else{
        	return false;
        }
	}
}
?>