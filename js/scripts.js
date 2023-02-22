function active(){

    var conteudo = document.querySelector('#conteudo').value;
    var qtd = {"caracteres": conteudo.length}

    var addcaracteres = document.querySelector('#caracteres').innerText = conteudo.length;

    var numPalavras = conteudo.match( /(\w+)?[a-z0-9áéíóúãõâêîôûà&](ça)?(çe)?(çi)?(ço)?(çu)?(çã)?(çõ)?(\w+)?/gi ).length;
    document.querySelector('#palavras').innerText = numPalavras;

}