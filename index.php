<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="assets/css/inc/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/inc/bootstrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <title>Calcule o seu IMC</title>

    <script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
    0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
    for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
    mixpanel.init("48b0771eb3601b05f2740693b22720fa");</script>
</head>
<body>

    <div class="container">
        
        <header class="main-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-5">
                    <h2 class="title text-center">Calcule o seu</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-md-offset-5">
                    <div class="subtitle">
                        <h2 class="text-center">IMC</h2>
                        <div class="thumb">
                            <img src="assets/images/icons/person.png" class="img-responsive" title="Logo" alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="main-content">
            <div class="row">
                <div class="col-md-10 col-md-offset-3">
                    <div class="row">
                        <form class="form-box background-default">
                            <div id="group-one" class="form-group">
                                <label class="labels" for="peso">
                                    <h3>Qual o seu peso?</h3>
                                </label>
                                <div class="row">
                                    <div class="col-md-14">
                                        <input type="number" min="0" max="999" step="0.01" name="peso" id="peso" class="form-control input-lg height-default background-default" required>
                                    </div>
                                    <div class="col-md-2">
                                        <button id="box-change-one" class="height-default background-default position-default">
                                            <span class="prev-icon"><img src="assets/images/icons/arrow.png" title="Próxima etapa" alt="Próxima etapa"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="group-two" class="form-group hide">
                                <label class="labels" for="altura">
                                    <h3>Qual a sua altura?</h3>
                                </label>
                                <div class="row">
                                    <div class="col-md-14">
                                        <input type="number" min="0" max="3" step="0.01" name="altura" id="altura" class="form-control input-lg height-default background-default" required>
                                    </div>
                                    <div class="col-md-2">
                                        <button id="box-change-two" class="height-default background-default position-default">
                                            <span class="prev-icon"><img src="assets/images/icons/arrow.png" title="Próxima etapa" alt="Próxima etapa"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id="group-three" class="hide">
                                <label class="labels" for="idade">
                                    <h3>Qual a sua idade?</h3>
                                </label>
                                <div class="row">
                                    <div class="col-md-14">
                                        <input type="number" min="0" max="199" step="1" name="idade" id="idade" class="form-control input-lg height-default background-default" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="box-change-three" class="btn btn-primary hide height-default background-default position-default">
                                <span class="prev-icon"><img src="assets/images/icons/arrow.png" title="Próxima etapa" alt="Próxima etapa"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="result-header hide">
                    <div class="row result-header-content">
                        <div class="col-md-8">
                            <div class="thumb">
                                <img src="assets/images/icons/person.png" class="img-responsive" alt="Logo">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="result-header-title text-center">
                                <h1>Seu IMC é</h1>
                                <p id="resultado"></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div id="message" class="container-fluid hide">    
        <h2 class="text-center">Mensagem Teste</h2>
    </div>

    <div id="show-tables">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-5">
                    <button class="btn btn-secondary">Confira a tabela de classificação</button>
                </div>
            </div>
        </div>
    </div>
    
    <div id="tables" class="hide">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>Crianças e Jovens <span>(até 20 anos)</span></h3>
                    <div class="tables-content">
                        <ul class="list">
                            <li>
                                <div class="row">
                                    <div class="col-md-8 text-left">
                                        <h4>CLASSIFICAÇÃO</h4>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <h4>IMC</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-8 text-left">
                                        <p>Baixo peso</p>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <p>< 18,5</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-8 text-left">
                                        <p>Eutrofia (peso ideal)</p>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <p>18,5 a 24,9</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-8 text-left">
                                        <p>Excesso de peso</p>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <p>25 a 29,9</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-8 text-left">
                                        <p>Obesidade</p>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <p>> 30</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="middle-column">
                        <h3>Adultos <span>(entre 21 e 65 anos)</span></h3>
                        <div class="tables-content">
                            <ul class="list">
                                <li>
                                    <div class="row">
                                        <div class="col-md-8 text-left">
                                            <h4>CLASSIFICAÇÃO</h4>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <h4>IMC</h4>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8 text-left">
                                            <p>Baixo peso</p>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <p>< 18,5</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8 text-left">
                                            <p>Eutrofia (peso ideal)</p>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <p>18,5 a 24,9     </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8 text-left">
                                            <p>Pré-obesidade</p>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <p>25 a 29,9</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8 text-left">
                                            <p>Obesidade, grau I</p>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <p>30 a 34,9</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8 text-left">
                                            <p>Obesidade, grau II</p>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <p>35 a 39,9</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-8 text-left">
                                            <p>Obesidade mórbida</p>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <p>> = 40</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h3>Idosos <span>(a partir de 66 anos)</span></h3>
                    <div class="tables-content">
                        <ul class="list">
                            <li>
                                <div class="row">
                                    <div class="col-md-8 text-left">
                                        <h4>CLASSIFICAÇÃO</h4>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <h4>IMC</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-8 text-left">
                                        <p>Desnutrição</p>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <p>< 22</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-8 text-left">
                                        <p>Risco de desnutrição</p>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <p>22 a 23,9</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-8 text-left">
                                        <p>Eutrofia (peso ideal)</p>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <p>24 a 26,9</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-8 text-left">
                                        <p>Pré-obesidade</p>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <p>27 a 32</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-8 text-left">
                                        <p>Obesidade</p>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <p>> 32</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<footer>
    <script src="assets/js/inc/jquery-3.2.1.min.js"></script>
    <script src="assets/js/inc/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</footer>
</html>