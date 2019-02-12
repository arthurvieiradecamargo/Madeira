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
                <?php if(isset($dados['update']) and $dados['update'] == 'ok'){ ?>
                      <br /><div class="alert alert-success">Contato atualizado com sucesso</div>
                <?php } ?>
                <?php if(isset($dados['update']) and $dados['update'] == 'erro'){ ?>
                  <br /><div class="alert alert-danger">Erro ao atualizar contato</div>
                <?php } ?> 
                <form method="POST" action="index.php?acao=update"  role="form" class="register-form" name="registro">
                    <input name="age_id" id="age_id" value="<?php echo $resultado['age_id']; ?>" hidden>
                    <h2>Editar contado <small>da agenda telefônica.</small></h2>
                    <hr class="colorgraph">
  
                    <div class="form-group">
                        <span>Nome completo</span>
                        <input type="text" name="age_nome" id="age_nome" value="<?php echo $resultado['age_nome']; ?>" class="form-control input-lg" placeholder="Nome completo" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <span>Endereço de Email</span>
                        <input type="email" name="age_email" id="age_email" value="<?php echo $resultado['age_email']; ?>" class="form-control input-lg" placeholder="Endereço de Email" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <span>Endereço</span>
                        <input type="text" name="age_end" id="age_end" value="<?php echo $resultado['age_end']; ?>" class="form-control input-lg" placeholder="Endereço" tabindex="3">
                    </div>
                    <div class="form-group">
                        <span>Logradouro</span>
                        <input type="text" name="age_logn" id="age_logn" value="<?php echo $resultado['age_logn']; ?>" class="form-control input-lg" placeholder="Logradouro" tabindex="4">
                    </div>
                    <div class="form-group">
                        <span>Bairro</span>
                        <input type="text" name="age_bairro" id="age_bairro" value="<?php echo $resultado['age_bairro']; ?>" class="form-control input-lg" placeholder="Bairro" tabindex="5">
                    </div>
                    <div class="form-group">
                        <span>Cidade</span>
                        <input type="text" name="age_cidade" id="age_cidade" value="<?php echo $resultado['age_cidade']; ?>" class="form-control input-lg" placeholder="Cidade" tabindex="6">
                    </div>
                    <div class="form-group" >
                        <span>Estado</span>
                        <select name="age_estado" class="form-control input-lg" tabindex="7">
                        	<option selected="" value="" required>Selecione o Estado (UF)</option>
                        	<option value="Acre" <?php if($resultado['age_estado'] == 'Acre'){ echo 'selected'; } ?> >Acre</option>
                        	<option value="Alagoas" <?php if($resultado['age_estado'] == 'Alagoas'){ echo 'selected'; } ?> >Alagoas</option>
                        	<option value="Amapá" <?php if($resultado['age_estado'] == 'Amapá'){ echo 'selected'; } ?> >Amapá</option>
                        	<option value="Amazonas" <?php if($resultado['age_estado'] == 'Amazonas'){ echo 'selected'; } ?> >Amazonas</option>
                        	<option value="Bahia" <?php if($resultado['age_estado'] == 'Bahia'){ echo 'selected'; } ?> >Bahia</option>
                        	<option value="Ceará" <?php if($resultado['age_estado'] == 'Ceará'){ echo 'selected'; } ?> >Ceará</option>
                        	<option value="Distrito Federal" <?php if($resultado['age_estado'] == 'Distrito Federal'){ echo 'selected'; } ?> >Distrito Federal</option>
                        	<option value="Espírito Santo" <?php if($resultado['age_estado'] == 'Espírito Santo'){ echo 'selected'; } ?> >Espírito Santo</option>
                        	<option value="Goiás" <?php if($resultado['age_estado'] == 'Goiás'){ echo 'selected'; } ?> >Goiás</option>
                        	<option value="Maranhão" <?php if($resultado['age_estado'] == 'Maranhão'){ echo 'selected'; } ?> >Maranhão</option>
                        	<option value="Mato Grosso" <?php if($resultado['age_estado'] == 'Mato Grosso'){ echo 'selected'; } ?> >Mato Grosso</option>
                        	<option value="Mato Grosso do Sul" <?php if($resultado['age_estado'] == 'Mato Grosso do Sul'){ echo 'selected'; } ?> >Mato Grosso do Sul</option>
                        	<option value="Minas Gerais" <?php if($resultado['age_estado'] == 'Minas Gerais'){ echo 'selected'; } ?> >Minas Gerais</option>
                        	<option value="Pará" <?php if($resultado['age_estado'] == 'Pará'){ echo 'selected'; } ?> >Pará</option>
                        	<option value="Paraíba" <?php if($resultado['age_estado'] == 'Paraíba'){ echo 'selected'; } ?> >Paraíba</option>
                        	<option value="Paraná" <?php if($resultado['age_estado'] == 'Paraná'){ echo 'selected'; } ?> >Paraná</option>
                        	<option value="Pernambuco" <?php if($resultado['age_estado'] == 'Pernambuco'){ echo 'selected'; } ?> >Pernambuco</option>
                        	<option value="Piauí" <?php if($resultado['age_estado'] == 'Piauí'){ echo 'selected'; } ?> >Piauí</option>
                        	<option value="Rio de Janeiro" <?php if($resultado['age_estado'] == 'Rio de Janeiro'){ echo 'selected'; } ?> >Rio de Janeiro</option>
                        	<option value="Rio Grande do Sul" <?php if($resultado['age_estado'] == 'Rio Grande do Sul'){ echo 'selected'; } ?> >Rio Grande do Sul</option>
                        	<option value="Rio Grande do Norte" <?php if($resultado['age_estado'] == 'Rio Grande do Norte'){ echo 'selected'; } ?> >Rio Grande do Norte</option>
                        	<option value="Rondônia" <?php if($resultado['age_estado'] == 'Rondônia'){ echo 'selected'; } ?> >Rondônia</option>
                        	<option value="Roraima" <?php if($resultado['age_estado'] == 'Roraima'){ echo 'selected'; } ?> >Roraima</option>
                        	<option value="Santa Catarina" <?php if($resultado['age_estado'] == 'Santa Catarina'){ echo 'selected'; } ?> >Santa Catarina</option>
                        	<option value="São Paulo" <?php if($resultado['age_estado'] == 'São Paulo'){ echo 'selected'; } ?> >São Paulo</option>
                        	<option value="Sergipe" <?php if($resultado['age_estado'] == 'Sergipe'){ echo 'selected'; } ?> >Sergipe</option>
                        	<option value="Tocantins" <?php if($resultado['age_estado'] == 'Tocantins'){ echo 'selected'; } ?> >Tocantins</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <span>Telefone Residencial</span>
                        <input type="text" name="age_telefone1" id="age_telefone1" onBlur="ValidaTelefone(registro.age_telefone1, 1);" onKeyPress="MascaraTelefone(registro.age_telefone1);" value="<?php echo $resultado['age_telefone1']; ?>" class="form-control input-lg" placeholder="Telefone Residencial: (xx) xxxx-xxxx" tabindex="8" maxlength="15" >
                        <div class="alert-telefone1" style="display: none"> 
                            <a class="close" onclick="$('.alert-telefone1').hide()">×</a>  
                            <strong>Atenção!</strong> Telefone inválido.  <br />
                        </div>
                    </div>

                    <div class="form-group">
                        <span>Telefone Comercial</span>
                        <input type="text" name="age_telefone2" id="age_telefone2" onBlur="ValidaTelefone(registro.age_telefone2, 2);" onKeyPress="MascaraTelefone(registro.age_telefone2);" value="<?php echo $resultado['age_telefone2']; ?>" class="form-control input-lg" placeholder="Telefone Comercial: (xx) xxxx-xxxx" tabindex="9" maxlength="15" >
                        <div class="alert-telefone2" style="display: none"> 
                            <a class="close" onclick="$('.alert-telefone2').hide()">×</a>  
                            <strong>Atenção!</strong> Telefone inválido.  <br />
                        </div>
                    </div>

                    <div class="form-group">
                        <span>Telefone Celular</span>
                        <input type="text" name="age_telefone3" id="age_telefone3" onBlur="ValidaTelefone(registro.age_telefone3, 3);" onKeyPress="MascaraTelefone(registro.age_telefone3);" value="<?php echo $resultado['age_telefone3']; ?>" class="form-control input-lg" placeholder="Telefone Celular: (xx) xxxx-xxxx" tabindex="10" maxlength="15" >
                        <div class="alert-telefone3" style="display: none"> 
                            <a class="close" onclick="$('.alert-telefone3').hide()">×</a>  
                            <strong>Atenção!</strong> Telefone inválido.  <br />
                        </div>
                    </div>

                    <div class="form-group">
                        <span>Telefone Cônjuge</span>
                        <input type="text" name="age_telefone4" id="age_telefone4" onBlur="ValidaTelefone(registro.age_telefone4, 4);" onKeyPress="MascaraTelefone(registro.age_telefone4);" value="<?php echo $resultado['age_telefone4']; ?>" class="form-control input-lg" placeholder="Telefone Cônjuge: (xx) xxxx-xxxx" tabindex="11" maxlength="15" >
                        <div class="alert-telefone4" style="display: none"> 
                            <a class="close" onclick="$('.alert-telefone4').hide()">×</a>  
                            <strong>Atenção!</strong> Telefone inválido.  <br />
                        </div>
                    </div>

                    <div class="form-group">
                        <span>Telefone Fax</span>
                        <input type="text" name="age_telefone5" id="age_telefone5" onBlur="ValidaTelefone(registro.age_telefone5, 5);" onKeyPress="MascaraTelefone(registro.age_telefone5);" value="<?php echo $resultado['age_telefone5']; ?>" class="form-control input-lg" placeholder="Telefone Fax: (xx) xxxx-xxxx" tabindex="12" maxlength="15" >
                        <div class="alert-telefone5" style="display: none"> 
                            <a class="close" onclick="$('.alert-telefone5').hide()">×</a>  
                            <strong>Atenção!</strong> Telefone inválido.  <br />
                        </div>
                    </div>

                    <div class="form-group">
                        <span>Telefone Outros</span>
                        <input type="text" name="age_telefone6" id="age_telefone6" onBlur="ValidaTelefone(registro.age_telefone6, 6);" onKeyPress="MascaraTelefone(registro.age_telefone6);" value="<?php echo $resultado['age_telefone6']; ?>" class="form-control input-lg" placeholder="Telefone Outros: (xx) xxxx-xxxx" tabindex="13" maxlength="15" >
                        <div class="alert-telefone6" style="display: none"> 
                            <a class="close" onclick="$('.alert-telefone6').hide()">×</a>  
                            <strong>Atenção!</strong> Telefone inválido.  <br />
                        </div>
                    </div>

                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6"><input type="submit" value="Atualizar" class="btn btn-theme btn-block btn-lg" tabindex="7"> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
	require 'view/layout/footer.php';
?>