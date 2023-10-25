<?php
// 1. Recupere o user_id da URL

session_start();
$user_id = $_SESSION['id'];
if (isset($_SESSION['nome_do_usuario'])) {
    $nome_do_usuario = $_SESSION['nome_do_usuario'];
} else {
    $nome_do_usuario = "Usuário não está logado!";
}

require_once '../configuration/sql.php';

use \App\Controller\Pages\Connect;

$Connect = new Connect;
$resultado = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recipient_id = $_POST['recipient-id'];
    $transfer_amount = floatval(str_replace(',', '.', $_POST['transfer-amount'])); // Convert to float and handle possible comma as decimal separator

    $sender_balance = $Connect->ConsultarSaldo($user_id);

    if ($sender_balance !== false) { // Verifique se a consulta foi bem-sucedida
        $sender_balance = floatval($sender_balance); // Convert to float

        if ($sender_balance >= $transfer_amount) {
            $recipient_balance = $Connect->ConsultarSaldo($recipient_id);

            if ($recipient_balance !== false) { // Verifique se a consulta foi bem-sucedida
                $recipient_balance = floatval($recipient_balance); // Convert to float

                $new_sender_balance = $sender_balance - $transfer_amount;
                $Connect->AlterarSaldo($user_id, $new_sender_balance);
                $_SESSION['saldo'] = $new_sender_balance;
                $new_recipient_balance = $recipient_balance + $transfer_amount;
                $Connect->AlterarSaldo($recipient_id, $new_recipient_balance);


                $transfer_message = "Transferência de $transfer_amount R$ realizada com sucesso.";
            } else {
                $transfer_message = "Conta do destinatário não encontrada.";
            }
        } else {
            $transfer_message = "Saldo insuficiente para a transferência.";
        }
    } else {
        $transfer_message = "Erro ao consultar saldo do remetente.";
    }
}

$users_result = $Connect->ConsultarUsuariosExceto($user_id);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/menu.css">
    <title>Transferências - MazeBank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoI6uLrA9TneNEoa7Rxnatzjc4SCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            <li><a class="btn btn-dark" href="home.php">Início</a></li>
            <li><a class="btn btn-dark" href="../routes/conta.html">Conta</a></li>
            <li><a class="btn btn-dark" href="../routes/transferencias.php?user_id=<?php echo $user_id; ?>">Transferências</a></li>
            <li><a class="btn btn-dark" href="../routes/configuracoes.html">Configurações</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Transferência</h2>
        <form id="transfer-money-form" method="POST" action="transferencias.php?user_id=<?php echo $user_id; ?>">
            <label for="recipient-id">Destinatário:</label>
            <select id="recipient-id" name="recipient-id" required>
                <option value="" disabled selected>Selecione o destinatário</option>
                <?php
                if ($users_result) {
                    foreach ($users_result as $row) {
                        echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
                    }
                }
                ?>
            </select>
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
