<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/register.css">
    <link rel="stylesheet" href="../Public/css/style.css">

    <title>Login</title>
</head>

<body class="login-body">
    <?php include './header-login.php'; ?>
    <div class="container-login">
        <form class="form-container" action="post">
            <h1 class="title-desc">Olá novamente!</h1>
            <div class="form-inputs">
                <input type="text" class="input" placeholder="Email">
                <div style="display: flex; flex-direction: column; gap:10px">
                    <input type="text" class="input" placeholder="Senha">
                    <a style="margin-left: 20px; color: #E25D5D;" href="">Esqueceu a senha?</a>
                </div>
            </div>
            <div class="form-buttons">
                <button name="acao" class="secondary-button button" value="login">Cadastrar</button>
                <button name="acao" class="primary-button button" value="cadastrar">Login</button>
            </div>

        </form>
    </div>
    <div></div>
</body>

</html>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script> -->