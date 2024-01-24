function validaCampo() {
    var email = document.getElementById('email').value;
    var senha = document.getElementById('Senha').value;
    var mensagem = document.getElementById('erro');

    if (email == '') {
        mensagem.innerHTML = "Favor preencher o campo email";
        mensagem.className = 'style-message';
        document.getElementById('email').focus();
        return false;
    }

    if (email.indexOf('@') == -1 || email.indexOf('.') == -1) {
        mensagem.innerHTML = "Formato de email incorreto";
        mensagem.className = 'style-message';
        document.getElementById('email').focus();
        return false;
    }

    if (senha == '') {
        mensagem.innerHTML = "Favor preencher o campo senha";
        mensagem.className = 'style-message';
        document.getElementById('Senha').focus();
        return false;
    }

    //verificação de credenciais
    
    if (email == 'mateus@gmail.com' && senha == 'senha_correta') {
        mensagem.innerHTML = "Autenticação realizada com sucesso!";
        mensagem.className = 'style-message sucesso';
    } else {
        mensagem.innerHTML = "Erro na autenticação. Verifique o email e a senha.";
        mensagem.className = 'style-message erro';
    }

    return false; // Impede o envio do formulário
}

function limpa() {
    document.getElementById('erro').innerHTML = "";
}
