function validar(){
    
    var titulo = document.getElementById("titulo").value;
    var genero = document.getElementById("genero").value;
    var paginas = document.getElementById("qtd_paginas").value;
    var autor = document.getElementById("autor").value;
    var erro = document.getElementById("erro")


    if (titulo.trim() == '') {
        erro.innerHTML = ("Informe o titulo!");
        return false;
    }
    if (genero.trim() == '') {
        erro.innerHTML = ("Informe o genero!");
        return false;
    }
    if (paginas.trim() == '') {
        erro.innerHTML = ("Informe a quantidade de paginas!");
        return false;
    }
    if (autor.trim() == '') {
        erro.innerHTML = ("Informe o autor!");
        return false;
    }

    return true;
}