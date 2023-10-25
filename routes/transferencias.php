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
require_once '../configuration/sql.php';

use \App\Controller\Pages\Connect;

$Connect = new Connect;
$resultado = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recipient_cpf = $_POST['recipient-cpf'];
    $transfer_amount = floatval(str_replace(',', '.', $_POST['transfer-amount'])); // Convert to float and handle possible comma as decimal separator

    $sender_balance = $Connect->ConsultarSaldo($user_id);

    if ($sender_balance !== false) { // Verifique se a consulta foi bem-sucedida
        $sender_balance = floatval($sender_balance); // Convert to float

        // Realize uma consulta SQL para encontrar o destinatário com base no CPF
        $recipient = $Connect->ConsultarUsuarioPorCPF($recipient_cpf);

        if ($recipient) {
            $recipient_id = $recipient['id'];
            $recipient_balance = floatval($recipient['saldo']); // Convert to float

            if ($sender_balance >= $transfer_amount) {
                $new_sender_balance = $sender_balance - $transfer_amount;
                $Connect->AlterarSaldo($user_id, $new_sender_balance);
                $_SESSION['saldo'] = $new_sender_balance;

                $new_recipient_balance = $recipient_balance + $transfer_amount;
                $Connect->AlterarSaldo($recipient_id, $new_recipient_balance);

                $transfer_message = "Transferência de R$$transfer_amount  realizada com sucesso.";
            } else {
                $transfer_message = "Saldo insuficiente para a transferência.";
            }
        } else {
            $transfer_message = "Destinatário com o CPF $recipient_cpf não encontrado.";
        }
    } else {
        $transfer_message = "Erro ao consultar saldo do remetente.";
    }
}

//$users_result = $Connect->ConsultarUsuariosExceto($user_id);
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
            <li><a class="btn btn-dark" href="home.php">Início</a></li>
            <!-- <li><a class="btn btn-dark" href="../routes/conta.html">Conta</a></li> -->
            <li><a class="btn btn-dark" href="../routes/transferencias.php?user_id=<?php echo $user_id; ?>">Transferências</a></li>
            <!-- <li><a class="btn btn-dark" href="../routes/configuracoes.html">Configurações</a></li> -->
            <li><a class="btn btn-dark" href="../views/painel.php">Ajustes</a></li>
            <?php if (isset($_SESSION['nome_do_usuario'])) : ?>
                <li><a class="btn btn-warning" href="../controllers/login/Logout.php">Sair</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <div class="container">
        <h2>Transferência</h2>
        <?php
        echo "Seu saldo: R$$saldo";
        ?>
        <form id="transfer-money-form" method="POST" action="transferencias.php?user_id=<?php echo $user_id; ?>">
            <label for="recipient-cpf">CPF do Destinatário:</label>
            <input type="text" id="recipient-cpf" name="recipient-cpf" required>
            <br>

            <label for="transfer-amount">Valor da Transferência (R$):</label>
            <input type="text" id="transfer-amount" name="transfer-amount" required>
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