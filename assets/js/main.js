jQuery.noConflict();
(function($) {

    let boxChangeOne = $('#box-change-one'),
        boxChangeTwo = $('#box-change-two'),
        boxChangeThree = $('#box-change-three'),

        groupOne = $('#group-one'),
        groupTwo = $('#group-two'),
        groupThree = $('#group-three');

    $('.form-box').on('submit', function(e) {
        let peso = Number(this.peso.value);
            altura = Number(this.altura.value);
            idade = Number(this.idade.value);

            resultado = $('#resultado');
            mensagem = $('#message h2');
            mensagem_boa = 'Parabéns, você está no PESO IDEAL ';
            mensagem_ruim = 'Ops, está na hora de rever seus hábitos ';
            emote_bom = ':)';
            emote_ruim = ':/';

        e.preventDefault();

        let total = Math.round(peso/Math.pow(altura, 2)).toFixed(1);

        resultado.text(total);

        if(idade < 20) {
        
            if (total < 18.5) mensagem.text(mensagem_ruim + emote_ruim);

            else if (total >= 18.5 && total < 24.9) mensagem.text(mensagem_boa + emote_bom);

            else if (total >= 25 && total < 29.9) mensagem.text(mensagem_ruim + emote_ruim);

            else if (total >= 30) mensagem.text(mensagem_ruim + emote_ruim);

            else console.log("OOPS!");
        
        } else if(idade > 20 && idade < 65) {
        
            if (total < 18.5) mensagem.text(mensagem_ruim + emote_ruim);

            else if (total >= 18.5 && total < 24.9) mensagem.text(mensagem_boa + emote_bom);

            else if (total >= 25 && total < 29.9) mensagem.text(mensagem_ruim + emote_ruim);

            else if (total >= 30 && total < 34.9) mensagem.text(mensagem_ruim + emote_ruim);

            else if (total >= 35 && total < 39.9) mensagem.text(mensagem_ruim + emote_ruim);

            else if (total >= 40) mensagem.text(mensagem_ruim + emote_ruim);

            else console.log("OOPS!");
        
        } else {
            if (total < 22) mensagem.text(mensagem_ruim + emote_ruim);

            else if (total >= 22 && total < 23.9) mensagem.text(mensagem_ruim + emote_ruim);

            else if (total >= 24 && total < 26.9) mensagem.text(mensagem_boa + emote_bom);

            else if (total >= 27 && total < 32) mensagem.text(mensagem_ruim + emote_ruim);

            else if (total >= 32) mensagem.text(mensagem_ruim + emote_ruim);

            else console.log("OOPS!");
        }
    });

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
        $('#show-tables').removeClass('hide');
    });

    $('#show-tables button').click(function() {
        $('#tables').toggleClass('hide');
    });
})(jQuery);



















// jQuery(document).ready(function($){
    
//     $('.form-box').on('submit', function(e) {
//         let peso = Number(this.peso.value);
//             altura = Number(this.altura.value);
//             idade = Number(this.idade.value);
//             resultado = $('#resultado');
//             mensagem = $('#message h2');
//             mensagem_boa = 'Parabéns, você está no ';
//             mensagem_ruim = 'Ops, está na hora de rever seus hábitos ';
//             emote_bom = ':)';
//             emote_ruim = ':/';

//         e.preventDefault();

//         let total = Math.round(peso/Math.pow(altura, 2)).toFixed(1);

//         var valor_tabela = resultado.text(total);

//         // Lógica das mensagems de classificação a serem implementadas aqui...
//     });

//     let peso = $('#peso'),
//         altura = $('#altura'),
//         idade = $('#idade'),

//         boxChangeOne = $('#box-change-one'),
//         boxChangeTwo = $('#box-change-two'),
//         boxChangeThree = $('#box-change-three'),

//         groupOne = $('#group-one'),
//         groupTwo = $('#group-two'),
//         groupThree = $('#group-three');

//     boxChangeOne.click(function() {
//         groupOne.hide(100);
//         groupTwo.removeClass('hide');
//     });

//     boxChangeTwo.click(function() {
//         groupTwo.hide(100);
//         groupThree.removeClass('hide');
//         boxChangeThree.removeClass('hide');
//     });

//     boxChangeThree.click(function() {
//         $('.main-content').hide(50);
//         $('.result-header').removeClass('hide');
//         $('#message').removeClass('hide');
//         $('#show-tables').removeClass('hide');
//     });

//     $('#show-tables button').click(function() {
//         $('#tables').toggleClass('hide');
//     });
// });