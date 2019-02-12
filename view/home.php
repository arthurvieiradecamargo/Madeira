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
                <h4 style="text-transform: uppercase;">SISTEMA TESTE - AGENDA TELEFÔNICA</h4>
            </div>
        </div>
    </div>
    <!-- start slider -->
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 style="text-transform: uppercase;">MÓDULO 1</h4>
        </div>
        <div class="col-lg-3">
            <div class="pricing-box-alt">
                <div class="pricing-terms">
                    <h6>AGENDA TELEFÔNICA</h6>
                </div>
                <div class="pricing-action">
                    <a href="index.php?acao=listar" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> ENTRAR</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	require 'view/layout/footer.php';
?>