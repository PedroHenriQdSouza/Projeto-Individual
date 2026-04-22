<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/root.css">
    <title>Header</title>
</head>
<header class="header">
    <div class="header-top">
        <div class="logo">
            <a class="home" href="index.php">
                <img src="./images/Home.svg" alt="Home">
            </a>
            <button name="lateral-menu" class="lateral-menu">
                <img src="./images/Menu.svg" alt="Menu">
            </button>

        </div>
        <div class="search-bar">
            <img src="./images/Lupa.svg" alt="lupa">
            <input type="text" class="searchbar-input" placeholder="Pesquisar">
        </div>
        <div class="header-buttons">
            <a href="../Public/login.php">
                <button name="acao" class="secondary-button button" value="login">Login</button>
            </a>
            <a href="../Public/cadastrar.php">
                <button name="acao" class="primary-button button" value="cadastrar">Cadastrar</button>
            </a>
        </div>
    </div>
    <nav class="header-menu">
        <a href="./conteudo.php" style="color: white;">
            <h5>JAVACRIPT</h5>
        </a>
        <a href="#" style="color: white;">
            <h5>PHP</h5>
        </a>
        <a href="#" style="color: white;">
            <h5>JAVA</h5>
        </a>
        <a href="#" style="color: white;">
            <h5>HTML</h5>
        </a>
        <a href="#" style="color: white;">
            <h5>CSS</h5>
        </a>
    </nav>
</header>

</html>