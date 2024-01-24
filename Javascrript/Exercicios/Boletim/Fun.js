function calcularMedia() {
    var nota1 = parseFloat(document.getElementById('campoNota1').value);
    var nota2 = parseFloat(document.getElementById('campoNota2').value);
    var nota3 = parseFloat(document.getElementById('campoNota3').value);
    var nota4 = parseFloat(document.getElementById('campoNota4').value);

    var media = (nota1 + nota2 + nota3 + nota4) / 4;

    var situacao = document.getElementById('situacao');
    var erro = document.getElementById('erro');

    if (media >= 0 && media < 1) {
        situacao.innerHTML = 'Situação: <span style="color: red;">Vermelho</span>';
    } else if (media >= 1 && media < 5) {
        situacao.innerHTML = 'Situação: <span style="color: red;">Vermelho</span>';
    } else if (media >= 5 && media < 7) {
        situacao.innerHTML = 'Situação: <span style="color: yellow;">Amarelo</span>';
    } else if (media >= 7 && media <= 10) {
        situacao.innerHTML = 'Situação: <span style="color: green;">Verde</span>';
    } else {
        erro.innerHTML = 'Erro: Média inválida';
    }

    // Mostra a média
    situacao.innerHTML += ' - Média: ' + media.toFixed(2);
}