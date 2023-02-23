function active(){

    var conteudo = document.querySelector('#conteudo').value;
    var qtd = {"caracteres": conteudo.length}

    var numCaracteres = document.querySelector('#caracteres').innerText = conteudo.length;

    var numPalavras = conteudo.match( /(\w+)?[a-z0-9áéíóúãõâêîôûà&](ça)?(çe)?(çi)?(ço)?(çu)?(çã)?(çõ)?(\w+)?/gi ).length;
    var contPalavras = document.querySelector('#palavras').innerText = numPalavras;
    
    // var numEspaços = conteudo.match([' ']).length;
    // var contEspaços = document.querySelector('#espaços').innerText = numEspaços;

    // se for vazio mostra erro e apaga o conteúdo.
    if (conteudo == 0) {
        contPalavras = '0';
        contEspaços = '0';
        alert('deu certo');
    }

    alert(conteudo);
}