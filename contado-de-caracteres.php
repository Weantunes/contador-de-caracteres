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
        <section class="container">

        </section>
    </header>

    <main>
        <section id="content" class="container">
            <article>
                <h1 class="font1">CONTADOR DE CARACTERES</h1>

                <ul>
                    <li>Caracteres: <span id="caracteres">0</span></li>
                    <li>Espaços: <span id="espaços">0</span></li>
                </ul>

                <fieldset>
                    <legend>Title</legend>
                    <textarea name="texto" id="conteudo" cols="70" rows="10" placeholder="Seu texto aqui!" oninput="active()"></textarea>
                </fieldset>

            </article>
        </section>
    </main>

    <footer>

    </footer>

    <script src="js/scripts.js"></script>
</body>

</html>