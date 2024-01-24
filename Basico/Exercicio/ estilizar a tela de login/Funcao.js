function validaCampo() {
    // validar o e-mail
    var email = document.getElementById('email');

    if (email.value == '') {
        document.getElementById("erro").innerHTML = "Favor preencher o campo email";
        document.getElementById('erro').className = 'style-message';
        email.focus();
        return false;
    }

    if (email.value.indexOf('@') == -1) {
        document.getElementById("erro").innerHTML = "Formato de email incorreto ";
        document.getElementById('erro').className = 'style-message';
        email.focus();
        return false;
    }

    if (email.value.indexOf('.') == -1) {
        document.getElementById("erro").innerHTML = "Formato de email incorreto ";
        document.getElementById('erro').className = 'style-message';
        email.focus();
        return false;
    }

    if (email.value == "mateus@gmail.com") {
        document.getElementById('grato').innerHTML = "realizado com sucesso"
        email.focus();
        return false

    }

    //Validar a senha

    var senha = document.getElementById('Senha');

    if (senha.value == '') {
        document.getElementById("erro").innerHTML = "Favor preencher o campo senha";
        document.getElementById('erro').className = 'style-message';
        email.focus();
        return false;
    }


    return true;
}



function limpa() {
    document.getElementById('erro').innerHTML = "";
}


