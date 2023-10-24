<?php
session_start();

if (isset($_SESSION['nome_do_usuario'])) {
    $nome_do_usuario = $_SESSION['nome_do_usuario'];
} else {
    $nome_do_usuario = "Usuário não está logado!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/menu.css">
    <title>MazeBank - Seu Banco de Confiança</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../views/js/menu.js"></script>
</head>

<body>
    <header>
        <h1>MazeBank</h1>
        <p>Seu Banco de Confiança</p>
        <div class="user-info">
            <span><?php echo $nome_do_usuario; ?></span>
        </div>
    </header>

    <nav>
        <ul>
            <li><a class="btn btn-dark" href="#">Início</a></li>
            <li><a class="btn btn-dark" href="../routes/conta.html">Conta</a></li>
            <li><a class="btn btn-dark" href="../routes/transferencias.html">Transferências</a></li>
            <li><a class="btn btn-dark" href="../routes/configuracoes.html">Configurações</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Bem-vindo ao MazeBank</h2>
        <p>Somos o banco que você pode confiar para todas as suas necessidades financeiras. Oferecemos uma ampla gama de serviços bancários para ajudar você a atingir seus objetivos financeiros.</p>
        
        <div id="balance-info">
            <p id="balance">Saldo: R$ 10.000,00</p>
            <button class="btn btn-outline-danger balance-toggle" onclick="toggleBalance()">Ocultar Saldo</button>
        </div>
    </div>

    <footer>
        &copy; 2023 MazeBank. Todos os direitos reservados.
    </footer>
</body>
</html>
