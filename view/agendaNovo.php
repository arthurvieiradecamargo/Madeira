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

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form method="POST" action="index.php?acao=insert"  role="form" class="register-form" name="registro">
                    <h2>Cadastro de <small>agenda telefônica.</small></h2>
                    <hr class="colorgraph">
  
                    <div class="form-group">
                        <input type="text" name="age_nome" id="age_nome" value="" class="form-control input-lg" placeholder="Nome completo" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="age_email" id="age_email" value="" class="form-control input-lg" placeholder="Endereço de Email" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="age_end" id="age_end" value="" class="form-control input-lg" placeholder="Endereço" tabindex="3">
                    </div>
                    <div class="form-group">
                        <input type="text" name="age_logn" id="age_logn" value="" class="form-control input-lg" placeholder="Logradouro" tabindex="4">
                    </div>
                    <div class="form-group">
                        <input type="text" name="age_bairro" id="age_bairro" value="" class="form-control input-lg" placeholder="Bairro" tabindex="5">
                    </div>
                    <div class="form-group">
                        <input type="text" name="age_cidade" id="age_cidade" value="" class="form-control input-lg" placeholder="Cidade" tabindex="6">
                    </div>
                    <div class="form-group" >
                        <select name="age_estado" class="form-control input-lg" tabindex="7">
							<option selected="" value="" required>Selecione o Estado (UF)</option>
							<option value="Acre">Acre</option>
							<option value="Alagoas">Alagoas</option>
							<option value="Amapá">Amapá</option>
							<option value="Amazonas">Amazonas</option>
							<option value="Bahia">Bahia</option>
							<option value="Ceará">Ceará</option>
							<option value="Distrito Federal">Distrito Federal</option>
							<option value="Espírito Santo">Espírito Santo</option>
							<option value="Goiás">Goiás</option>
							<option value="Maranhão">Maranhão</option>
							<option value="Mato Grosso">Mato Grosso</option>
							<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
							<option value="Minas Gerais">Minas Gerais</option>
							<option value="Pará">Pará</option>
							<option value="Paraíba">Paraíba</option>
							<option value="Paraná">Paraná</option>
							<option value="Pernambuco">Pernambuco</option>
							<option value="Piauí">Piauí</option>
							<option value="Rio de Janeiro">Rio de Janeiro</option>
							<option value="Rio Grande do Sul">Rio Grande do Sul</option>
							<option value="Rio Grande do Norte">Rio Grande do Norte</option>
							<option value="Rondônia">Rondônia</option>
							<option value="Roraima">Roraima</option>
							<option value="Santa Catarina">Santa Catarina</option>
							<option value="São Paulo">São Paulo</option>
							<option value="Sergipe">Sergipe</option>
							<option value="Tocantins">Tocantins</option>
						</select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="age_telefone1" id="age_telefone1" onBlur="ValidaTelefone(registro.age_telefone1, 1);" onKeyPress="MascaraTelefone(registro.age_telefone1);" value="" class="form-control input-lg" placeholder="Telefone Residencial: (xx) xxxx-xxxx" tabindex="8" maxlength="15" >
                        <div class="alert-telefone1" style="display: none"> 
                            <a class="close" onclick="$('.alert-telefone1').hide()">×</a>  
                            <strong>Atenção!</strong> Telefone inválido.  <br />
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="age_telefone2" id="age_telefone2" onBlur="ValidaTelefone(registro.age_telefone2, 2);" onKeyPress="MascaraTelefone(registro.age_telefone2);" value="" class="form-control input-lg" placeholder="Telefone Comercial: (xx) xxxx-xxxx" tabindex="9" maxlength="15" >
                        <div class="alert-telefone2" style="display: none"> 
                            <a class="close" onclick="$('.alert-telefone2').hide()">×</a>  
                            <strong>Atenção!</strong> Telefone inválido.  <br />
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="age_telefone3" id="age_telefone3" onBlur="ValidaTelefone(registro.age_telefone3, 3);" onKeyPress="MascaraTelefone(registro.age_telefone3);" value="" class="form-control input-lg" placeholder="Telefone Celular: (xx) xxxx-xxxx" tabindex="10" maxlength="15" >
                        <div class="alert-telefone3" style="display: none"> 
                            <a class="close" onclick="$('.alert-telefone3').hide()">×</a>  
                            <strong>Atenção!</strong> Telefone inválido.  <br />
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="age_telefone4" id="age_telefone4" onBlur="ValidaTelefone(registro.age_telefone4, 4);" onKeyPress="MascaraTelefone(registro.age_telefone4);" value="" class="form-control input-lg" placeholder="Telefone Cônjuge: (xx) xxxx-xxxx" tabindex="11" maxlength="15" >
                        <div class="alert-telefone4" style="display: none"> 
                            <a class="close" onclick="$('.alert-telefone4').hide()">×</a>  
                            <strong>Atenção!</strong> Telefone inválido.  <br />
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="age_telefone5" id="age_telefone5" onBlur="ValidaTelefone(registro.age_telefone5, 5);" onKeyPress="MascaraTelefone(registro.age_telefone5);" value="" class="form-control input-lg" placeholder="Telefone Fax: (xx) xxxx-xxxx" tabindex="12" maxlength="15" >
                        <div class="alert-telefone5" style="display: none"> 
                            <a class="close" onclick="$('.alert-telefone5').hide()">×</a>  
                            <strong>Atenção!</strong> Telefone inválido.  <br />
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="age_telefone6" id="age_telefone6" onBlur="ValidaTelefone(registro.age_telefone6, 6);" onKeyPress="MascaraTelefone(registro.age_telefone6);" value="" class="form-control input-lg" placeholder="Telefone Outros: (xx) xxxx-xxxx" tabindex="13" maxlength="15" >
                        <div class="alert-telefone6" style="display: none"> 
                            <a class="close" onclick="$('.alert-telefone6').hide()">×</a>  
                            <strong>Atenção!</strong> Telefone inválido.  <br />
                        </div>
                    </div>

                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6"><input type="submit" value="Cadastrar" class="btn btn-theme btn-block btn-lg" tabindex="7"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
	//echo $mensagem;
	require 'view/layout/footer.php';
?>