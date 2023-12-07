<?php
    $funcionarios = require "dadosf.view.php";
?>
<?php componente('topo') ?>

<link href="<?=css('estilo4')?>" rel="stylesheet">
<div class="team-boxed">
<div class="intro">
                <h2 >Serviços</h2>
                <p >Encontre alguém pra te ajudar no que você precisa </p>
            </div>
        <div class="container">
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="public/imagem/icon1.png">
                        <h3 class="name">Gabriela Oliveira</h3>
                        <p class="title">Design Gráfico</p>
                        <p class="description">UFBA</p>
                        <p class="description">gabrielaOliveira@gmail.com</p>
                        
                    </div>
              
                </div>

                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="public/imagem/icon1.png">
                        <h3 class="name">Ana Silva</h3>
                        <p class="title">Ciência da Computação </p>
                        <p class="description">UNIFESP.</p>
                        <p class="description">anasilva@gmail.com</p>
                    </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="box"><img class="rounded-circle" src="public/imagem/icon1.png">
                    <h3 class="name"> Rodrigo Mendes</h3>
                    <p class="title">Marketing Digital</p>
                    <p class="description">UNICAMP</p>
                    <p class="description">rodrigoMendes@gmail.com</p>
                </div>
        </div>
        <div class="col-md-6 col-lg-4 item">
            <div class="box"><img class="rounded-circle" src="public/imagem/icon1.png">
                <h3 class="name">Lucas Oliveira</h3>
                <p class="title">Mestrado em Ciência de Dados</p>
                <p class="description">IME-USP</p>
                <p class="description">lucasOliveira@gmail.com</p>
              
            </div>
            </div>

            <div class="col-md-6 col-lg-4 item">
                <div class="box"><img class="rounded-circle" src="public/imagem/icon1.png">
                    <h3 class="name">Carlos Santos</h3>
                    <p class="title"> Bachareu Contabilidade</p>
                    <p class="description">Faculdade de Economia da Universidade de São Paulo</p>
                    <p class="description">carlosSantos@gmail.com</p>
                </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="public/imagem/icon1.png">
                        <h3 class="name">Marcela Costa</h3>
                        <p class="title">Engenheira Civil</p>
                        <p class="description">UNESP</p>
                        <p class="description">marcelacosta@gmail.com</p>
            
                    </div>
                    </div>
            </div>
            </div>
    </div>

    <?php componente('rodape') ?>