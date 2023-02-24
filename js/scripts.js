
function active() {
    const textarea = document.querySelector('#conteudo');
    if (textarea) {
        const conteudo = textarea.value;
        const conteudo_trin = textarea.value.trim();
        if (conteudo.length === 0) {
            // O textarea está vazio
            document.querySelector('#caracteres').innerText = 0;
            document.querySelector('#palavras').innerText = 0;
            document.querySelector('#espacos').innerText = 0;
        } else {
            // O textarea tem conteúdo
            const numCaracteres = conteudo.length;
            const numPalavras = conteudo.split(/\s+/).filter(word => word !== '').length;
            const regex = /\s/g;
            const match = conteudo.match(regex);
            const numEspaços = match ? match.length : 0;
            document.querySelector('#caracteres').innerText = numCaracteres;
            document.querySelector('#palavras').innerText = numPalavras;
            document.querySelector('#espacos').innerText = numEspaços;
        }
    }
}
