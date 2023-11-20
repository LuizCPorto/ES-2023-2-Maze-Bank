<?php
session_start();
if (!isset($_SESSION['nome']) || !isset($_COOKIE["jwt_token"])) {
  header('Location: ./../index.html');
}

$nome_do_usuario = $_SESSION['nome'];
$saldo = $_SESSION['saldo'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>MazeBank - Home</title>
</head>
<header>
  <h1>MAZEBANK</h1>
  <div class="user">
    <h2><?php echo "Bem-vindo $nome_do_usuario"; ?></h2>
  </div>
  <ul>
    <li><img class="img1" src="img/logo 1.png" alt=""></li>
    <!-- <li><img class="img2" src="ph_user-light.png" alt=""></li> -->
    <li><a class="ativoHome" href="">Home</a></li>
    <li><a href="">Transferências</a></li>
    <li><a href="">Depósito</a></li>
    <li><a href="">Empréstimos</a></li>
    <div class="dropdown">
      <button class="btn btn-danger border border-light bg-transparent btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <li><img class="img2" src="img/ph_user-light.png" alt=""></li>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="../header padrao/index.html">Meu Perfil</a>
        <a class="dropdown-item" href="#">Suporte</a>
        <a class="dropdown-item" href="#">Sair</a>
      </div>
    </div>
  </ul>
</header>

<body>
  <div class="angry-grid">
    <div id="item-0">
      <h1>$aldo <br><?php echo "R$" . $saldo ?></h1>
    </div>
    <div id="item-1">
      <a href="#">Extrato da Conta</a>
      <img src="img/extrato.png" class="img-extrato" alt="">
    </div>
    <div id="item-2">
      <h1>Crédito <br></h1>
      <img src="img/credito.png" class="img-credito" alt="">
    </div>

    <div id="item-3">
      <h1>Empréstimo <br>
        <h5>Empréstimo disponivel para sua conta: <br>R$ 10.000,00</h5>
      </h1>
      <img src="img/emprestimo.png" class="img-emprestimo" alt="">
    </div>

    <div id="item-4">
      <h1>Meu Cartão</h1>
      <img src="img/cartao.png" class="img-cartao"  alt="">
    </div>
  </div>
</body>
<footer>2023 MazeBank. Todos os direitos reservados.</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>