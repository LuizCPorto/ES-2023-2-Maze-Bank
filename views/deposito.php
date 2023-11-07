<?php
// 1. Recupere o user_id da URL

session_start();
$user_id = $_SESSION['id'];
if (isset($_SESSION['nome_do_usuario'])) {
    $nome_do_usuario = $_SESSION['nome_do_usuario'];
} else {
    $nome_do_usuario = "Usuário não está logado!";
}
$saldo = $_SESSION['saldo'];

require_once '../configuration/cfg.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/menu.css">
    <title>Transferências - MazeBank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../views/js/menu.js"></script>
</head>

<body>
    <header>
        <h1>MazeBank</h1>
        <p>Seu Banco de Confiança</p>
        <div class="user-info">
            <span><?php echo "Bem-vindo $nome_do_usuario"; ?></span>
        </div>
    </header>

    <nav>
        <ul>
            <li><a class="btn btn-dark" href="../routes/home.php">Início</a></li>
            <!-- <li><a class="btn btn-dark" href="../routes/conta.html">Conta</a></li> -->
            <li><a class="btn btn-dark" href="../routes/transferencias.php?user_id=<?php echo $user_id; ?>">Transferências</a></li>
            <li><a class="btn btn-dark">Deposito</a></li>
            <!-- <li><a class="btn btn-dark" href="painel.php">Ajustes</a></li> -->
            <?php if (isset($_SESSION['nome_do_usuario'])) : ?>
                <li><a class="btn btn-warning" href="../controllers/login/Logout.php">Sair</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <div class="container">
        <h2>Deposito</h2>

        <form id="transfer-money-form" method="POST" action="../controllers/deposito/deposito.php">
            <label for="transfer-amount">Digite o CPF de quem vai receber o deposito:</label>
            <input type="text" id="transfer-amount" name="cpfUsuario" required>
            <br>
            <label for="transfer-amount">Digite o valor do deposito (R$):</label>
            <input type="text" id="transfer-amount" name="valorDeposito" required>
            <br>
            <button class="btn btn-primary" type="submit">Confirmar</button>
            <button class="btn btn-secondary" type="button" onclick="goBack()">Voltar</button>
        </form>
        <?php
        if (isset($transfer_message)) {
            echo "<p>$transfer_message</p>";
            $saldo = $_SESSION['saldo'];
            echo "Novo saldo: R$$saldo";
        }
        ?>
    </div>

    <footer>
        &copy; 2023 MazeBank. Todos os direitos reservados.
    </footer>

    <script>
        function goBack() {
            // You can navigate back to the previous page using JavaScript.
            window.history.back();
        }
    </script>
</body>
</html>