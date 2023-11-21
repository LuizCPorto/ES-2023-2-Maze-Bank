<?php
session_start();

include_once('../../configuration/cfg.php');

$id = $_SESSION['id'];

$sqlSelect = "SELECT id_conta, data_transferencia, valor FROM historico where id_conta = '$id' ORDER BY data_transferencia DESC ";
$result = $conn->query($sqlSelect);

$tableData = ''; // Inicializa a variável que conterá os dados da tabela

if ($result->num_rows > 0) {
    $tableData .= '<table>'; // Inicia a tabela
    $tableData .= '<tr><th>Nº da Conta</th><th>Data da Transferência</th><th>Valor da Transferência</th></tr>'; // Cabeçalho da tabela
    while ($user_data = mysqli_fetch_assoc($result)) {
        $conta = $user_data['id_conta'];
        $data = date('d/m/Y', strtotime($user_data['data_transferencia']));
        $valor = $user_data['valor'];

        $valorClass = ($valor >= 0) ? 'positive-value' : 'negative-value';
        $tableData .= "<tr><td>$conta</td><td>$data</td><td class='$valorClass'>$valor</td></tr>";
    }
    $tableData .= '</table>'; // Fecha a tabela
}

$nome_do_usuario = $_SESSION['nome'];
$saldo = $_SESSION['saldo'];
$saldoFormatado = number_format($saldo, 2, ',', '.');

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte ao Cliente</title>
    <link rel="stylesheet" href="../css/extrato.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1fee394696.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h1>MAZEBANK</h1>
        <ul>
            <li><img class="img1" src="../../header padrao/logo 1.png" alt=""></li>
            <!-- <li><img class="img2" src="ph_user-light.png" alt=""></li> -->
            <li><a class="ativoHome" href="../home.php">Home</a></li>
            <li><a href="">Transferências</a></li>
            <li><a href="">Depósito</a></li>
            <li><a href="">Empréstimos</a></li>
            <div class="dropdown">
                <button class="btn btn-danger border border-light bg-transparent btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <li><img class="img2" src="../../header padrao/ph_user-light.png" alt=""></li>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Meu Perfil</a>
                    <a class="dropdown-item" href="../suporte/suporte.html">Suporte</a>
                    <a class="dropdown-item" href="#">Sair</a>
                </div>
            </div>
        </ul>
    </header>

    <div class="extrato">
        <h4><span class="saldolinha">R$ </span><?php echo $saldoFormatado; ?></h4>
        <h5 class="saldoa">Saldo atual</h5>


        <?php echo $tableData; // Exibe a tabela ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
