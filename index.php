<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de caracteres | Texto</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <div class="box">
            <ul class="grid container">
                <li>
                    <img src="img/svg/categoria.svg" alt="Analizador de texto">
                    <h1 class="font1">Contador de Caracteres</h1>
                    <h2 class="font2">Seja bem-vindo. A Feramenta é capaz de realizar a análise e contar palavras, caracteres, espaços, e letras.</h2>
                </li>
                <li>
                    <span id="caracteres">0</span>
                    <img src="img/svg/caracteres.svg" alt="">
                    <p class="font3">Quantidade de <br> Caracteres</p>
                </li>
                <li><span id="espaços">0</span><img src=img/svg/" alt="">
                    <p></p>
                </li>
                <li><span></span>
                    <img src=img/svg/" alt="">
                    <p></p>
                </li>
                <li><span></span>
                    <img src=img/svg/" alt="">
                    <p></p>
                </li>
                <li><span></span>
                    <img src=img/svg/" alt="">
                    <p></p>
                </li>
                <li>
                    <section id="content" class="container">
                        <article>
                            <textarea name="texto" id="conteudo" cols="70" rows="10" placeholder="Seu texto aqui!" oninput="active()"></textarea>
                        </article>
                    </section>
                </li>
            </ul>
        </div>
    </header>

    <footer>

    </footer>

    <script src="js/scripts.js"></script>
</body>

</html>