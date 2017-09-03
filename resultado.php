
<?php  include 'header.php' ?>

<?php
    setcookie('idade', $_POST['idade']);

    $peso = $_COOKIE['peso'];
    $altura = $_COOKIE['altura'];
    $idade = $_COOKIE['idade'];

    $imc = round( ( $peso / pow($altura, 2) ), 2 );
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<div id="message" class="container-fluid">    
    <h2 class="text-center"><?php echo $imc ?></h2>
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