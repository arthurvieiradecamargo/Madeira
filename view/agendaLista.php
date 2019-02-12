<?php
/*
    PROJETO TESTE - AGENDA TELEFÔNICA
    EMPRESA REQUERENTE: MadeiraMadeira
    DEV. ARTHUR VIEIRA DE CAMARGO
    E-MAIL: ARTHUR.VIEIRADECAMARGO@GMAIL.COM
    TELEFONE: (41) 99712-7777
    DATA ENTREGA DO PROJETO: 12/02/2019
*/
	require 'view/layout/head.php';
	require 'view/layout/header.php';
?>

<section id="featured" class="bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 style="text-transform: uppercase;">Lista ***</h4>
            </div>
        </div>
    </div>
    <!-- start slider -->
</section>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if($dados['insert'] == 'ok'){ ?>
		              <br /><div class="alert alert-success">Contato cadastrado com sucesso</div>
            <?php } ?>
            <?php if($dados['insert'] == 'erro'){ ?>
              <br /><div class="alert alert-danger">Erro ao cadastrar contato</div>
            <?php } ?> 
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Lista
						<a href="index.php?acao=novo">
							<button class="btn btn-primary" style="float: right;">Cadastrar Novo</button>
						</a>
					</h3>
				</div>
				<div class="box-body">
					<table id="listaAgenda" class="table table-bordered">
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="detalhesContato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalhes do Contato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div id="detalhes">
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
	
$(document).ready(function(){
    listaAgenda();
});

function listaAgenda(){
	$.ajax({ 
        url: "restAgenda.php?acao=listar",  
        dataType: 'json',
        type : 'GET',
        headers: { "Accept": "application/json; odata=verbose" },
        success:function(data){
        	var	rows = '';
				rows = rows + '<tr>';
				rows = rows + '<th>Nome</th>';
				rows = rows + '<th style="width: 245px">Ação</th>';
				rows = rows + '</tr>';
        	$.each(data, function(index, item){  
                console.log(item.age_nome);
                rows = rows + '<tr>';
		  		rows = rows + '<td>'+item.age_nome+'</td>';
		  		rows = rows + '<td><button class="btn btn-warning" data-toggle="modal" data-target="#detalhesContato"  onclick="detalhes('+item.age_id+')">Detalhes</button> <a href="index.php?acao=editar&id='+item.age_id+'"><button class="btn btn-primary">Editar</button></a> <button class="btn btn-danger" onclick="excluir('+item.age_id+')">Excluir</button> </td>';
		  		rows = rows + '</tr>';
            });
            $("#listaAgenda").html(rows);
		},
		error: function(data){
			alert('erro');
		}
	});
}

function detalhes($id){
	$.ajax({ 
        url: "restAgenda.php?acao=detalhes&id="+$id,  
        dataType: 'json',
        type : 'GET',
        headers: { "Accept": "application/json; odata=verbose" },
        success:function(data){
        	var	rows = '';
        	$.each(data, function(index, item){  
                console.log(item.age_nome);
                rows = rows + '<b>Nome: </b>'+item.age_nome+'</br>';
                rows = rows + '<b>Endereço: </b>'+item.age_end+'</br>';
                rows = rows + '<b>Logradouro: </b>'+item.age_logn+'</br>';
                rows = rows + '<b>Bairro: </b>'+item.age_bairro+'</br>';
                rows = rows + '<b>Cidade: </b>'+item.age_cidade+'</br>';
                rows = rows + '<b>Estado: </b>'+item.age_estado+'</br>';
                rows = rows + '<b>E-mail: </b>'+item.age_email+'</br>';
                rows = rows + '<b>Telefone Residencial: </b>'+item.age_telefone1+'</br>';
                rows = rows + '<b>Telefone Comercial: </b>'+item.age_telefone2+'</br>';
                rows = rows + '<b>Telefone Celular: </b>'+item.age_telefone3+'</br>';
                rows = rows + '<b>Telefone Cônjuge: </b>'+item.age_telefone4+'</br>';
                rows = rows + '<b>Telefone Fax: </b>'+item.age_telefone5+'</br>';
                rows = rows + '<b>Telefone Outros: </b>'+item.age_telefone6+'</br>';
            });
            $("#detalhes").html(rows);
		},
		error: function(data){
			alert('erro');
		}
	});
}

function excluir($id){
	$.ajax({ 
        url: "index.php?acao=excluir&id="+$id,
        type: "GET",
        contentType: "application/json",
        success:function(data){
        	alert('Excluido com sucesso!');
        	listaAgenda();
		},
		error: function(data){
			alert('Ocorreu algum erro!');
		}
	});
}
</script>

<?php
	//echo $mensagem;
	require 'view/layout/footer.php';
?>