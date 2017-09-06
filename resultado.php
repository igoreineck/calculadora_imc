
<?php  include 'header.php' ?>

<?php
    $peso   = $_COOKIE['peso'];
    $altura = $_COOKIE['altura'];
    $idade  = $_POST['idade'];

    $imc = round( ( $peso / pow($altura, 2) ), 2 );

    $mensagem       = '';
    $resposta_boa   = 'Parabéns, você está no ';
    $resposta_ruim  = '. Ops, está na hora de rever os seus hábitos ';
    $smiley         = ' :)';
    $sad            = ':/';

    $situacao = [
        '[Risco de desnutrição]',
        '[Desnutrição]',
        '[Baixo peso]',
        '[Peso ideal]',
        '[Excesso de peso]',
        '[Pré-obesidade]',
        '[Obesidade]',
        '[Obesidade, grau I]',
        '[Obesidade, grau II]',
        '[Obesidade mórbida]'
    ];

    if( $idade <= 20 ) {
        if( $imc < 18.5 ) {

            $mensagem = $situacao[2] . $resposta_ruim . $sad;

        } elseif ( $imc >= 18.5 && $imc < 25 ) {

            $mensagem = $resposta_boa . $situacao[3] . $smiley;

        } elseif ( $imc >= 25 && $imc < 30 ) {

            $mensagem = $situacao[4] . $resposta_ruim . $sad;

        } else {

            $mensagem = $situacao[6] . $resposta_ruim . $sad;

        }
    } elseif ( $idade > 20 && $idade <= 65 ) {

        if( $imc < 18.5 ) {

            $mensagem = $situacao[2] . $resposta_ruim . $sad;

        } elseif ( $imc >= 18.5 && $imc < 25 ) {

            $mensagem = $resposta_boa . $situacao[3] . $smiley;

        } elseif ( $imc >= 25 && $imc < 30 ) {

            $mensagem = $situacao[5] . $resposta_ruim . $sad;

        } elseif ( $imc >= 30 && $imc < 35 ) {

            $mensagem = $situacao[7] . $resposta_ruim . $sad;

        } elseif ( $imc >= 35 && $imc < 40 ) {

            $mensagem = $situacao[8] . $resposta_ruim . $sad;

        } else {

            $mensagem = $situacao[9] . $resposta_ruim . $sad;

        }

    } else {

        if( $imc < 22 ) {

            $mensagem = $situacao[1] . $resposta_ruim . $sad;

        } elseif ( $imc >= 22 && $imc < 24 ) {

            $mensagem = $situacao[0] . $resposta_ruim . $sad;

        } elseif ( $imc >= 24 && $imc < 27 ) {

            $mensagem = $resposta_boa . $situacao[3] . $smiley;

        } elseif ( $imc >= 27 && $imc < 32 ) {

            $mensagem = $situacao[5] . $resposta_ruim . $sad;

        } else {

            $mensagem = $situacao[6] . $resposta_ruim . $sad;

        }

    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="result-header">
                <div class="row result-header-content">
                    <div class="col-md-8">
                        <div class="thumb">
                            <img src="assets/images/icons/person.png" class="img-responsive" alt="Logo">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="result-header-title text-center">
                            <h1>Seu IMC é</h1>
                            <p id="resultado"><?php echo $imc ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<div id="message" class="container-fluid">    
    <h2 class="text-center"><?php echo $mensagem ?></h2>
</div>

<div id="show-tables">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-5">
                <button class="btn btn-secondary btn-block">
                    <p>Confira a tabela de classificação<p>
                </button>
            </div>
        </div>
    </div>
</div>

<?php include 'tabelas-classificacao.php' ?>

<?php include 'footer.php' ?>