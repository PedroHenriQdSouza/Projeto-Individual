<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript</title>
    <link rel="stylesheet" href="../Public/css/style.css">
    <link rel="stylesheet" href="../Public/css/textarea.css">
</head>

<body>

    <?php include './header.php'; ?>

    <div class="banner">
        <div style="margin-bottom:-10px" class="banner-left">
            <img style="width: 120%;" src="./images/JAVASCRIPT.png" alt="">
        </div>
        <div class="banner-right">
        </div>
    </div>

        <nav class="conteudo-menu">
            <a href="./conteudo.php">
                <h5>Condicionais</h5>
            </a>
            <a href="#" >
                <h5>Vetores</h5>
            </a>
            <a href="#" >
                <h5>Matrizes</h5>
            </a>
            <a href="#" >
                <h5>Switch Case</h5>
            </a>
            <a href="#" >
                <h5>Do-While</h5>
            </a>
        </nav>

    <div class="container1">
        <h1 class="title-desc">Exemplos de JavaScript</h1>
        <p class="text">
            Javascript é uma linguagem de programação utilizada para criar interatividade em páginas web.
            Aqui você poderá testar códigos diretamente no navegador e ver o resultado em tempo real.
        </p>
    </div>

    <div class="container2">

        <h1 class="title-script">Calculadora Simples</h1>
        <div class="container-exemplo">
            <div class="code-box">
                <div id="editor"><!-- código inserido --></div>
                <div id="resultado" class="resultado-box"></div>

            </div>
            <button onclick="executarCodigo()" class="button primary-button large-btn">Executar</button>
        </div>

        <p class="text">
            Explicação do script... lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum efficitur felis a quam ultrices, vitae suscipit risus tempus.
            Phasellus non consectetur tellus. Quisque et laoreet odio. Nunc non dictum nisl. Nam vestibulum ultrices aliquet. Vestibulum ante ipsum primis in faucibus
            orci luctus et ultrices posuere cubilia curae; Praesent fermentum, lacus et faucibus dignissim, eros metus luctus urna, nec convallis lorem justo eu est.
            Praesent nec mauris molestie, bibendum erat vel, lacinia diam. Sed non dictum enim. Curabitur id hendrerit metus. .
        </p>

    </div>

    <?php include './footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs/loader.min.js"></script>
    <script>
        function executarCodigo() {
            const codigo = document.getElementById("codeArea").value;

            try {
                eval(codigo);
            } catch (e) {
                document.getElementById("resultado").innerText = "Erro: " + e.message;
            }
        }

        let editor;

        require.config({
            paths: {
                vs: 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs'
            }
        });

        require(["vs/editor/editor.main"], function() {
            editor = monaco.editor.create(document.getElementById("editor"), {
                value: `
// Exemplo
let n1 = 10;
let n2 = 5;
let operador = "+";

let resultado;

switch (operador) {
    case "+":
        resultado = n1 + n2;
        break;
    case "-":
        resultado = n1 - n2;
        break;
}

document.getElementById("resultado").innerText = resultado;`,

                language: "javascript",
                theme: "vs-dark",
                fontSize: 14,
                automaticLayout: true
            });
        });

        function executarCodigo() {
            const codigo = editor.getValue();

            try {
                eval(codigo);
            } catch (e) {
                document.getElementById("resultado").innerText = "Erro: " + e.message;
            }
        }
    </script>

</body>

</html>