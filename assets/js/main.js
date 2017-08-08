jQuery(document).ready(function($){
    
    $('.form-box').on('submit', function(e) {
        let peso = Number(this.peso.value);
            altura = Number(this.altura.value);
            idade = Number(this.idade.value);
            resultado = $('#resultado');
            mensagem = $('#message h2');
            mensagem_boa = 'Parabéns, você está no ';
            mensagem_ruim = 'Ops, está na hora de rever seus hábitos ';
            emote_bom = ':)';
            emote_ruim = ':/';

        e.preventDefault();

        let total = Math.round(peso/Math.pow(altura, 2)).toFixed(1);

        resultado.text(total);

    });

    let peso = $('#peso'),
        altura = $('#altura'),
        idade = $('#idade'),

        boxChangeOne = $('#box-change-one'),
        boxChangeTwo = $('#box-change-two'),
        boxChangeThree = $('#box-change-three'),

        groupOne = $('#group-one'),
        groupTwo = $('#group-two'),
        groupThree = $('#group-three');

    boxChangeOne.click(function() {
        groupOne.hide(100);
        groupTwo.removeClass('hide');
    });

    boxChangeTwo.click(function() {
        groupTwo.hide(100);
        groupThree.removeClass('hide');
        boxChangeThree.removeClass('hide');
    });

    boxChangeThree.click(function() {
        $('.main-content').hide(50);
        $('.result-header').removeClass('hide');
        $('#message').removeClass('hide');
    });

    $('#show-tables button').click(function() {
        $('#tables').toggleClass('hide');
    });
});