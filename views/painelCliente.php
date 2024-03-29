<?php
session_start();

if (!isset($_SESSION['nome']) || !isset($_COOKIE["jwt_token"])) {
  header('Location: ./../index.html');
}
$id = $_SESSION['id'];
$nome = $_SESSION['nome'];
$cartao = $_SESSION['possui_cartao'];
include_once("../configuration/cfg.php");
$query = "SELECT * FROM usuarios WHERE id = $id";
$result = $conn->query($query);
$result = $result->fetch_assoc();

$queryConta = "SELECT * FROM conta WHERE id_usuario = $id";
$resultConta = $conn->query($queryConta);
$resultConta = $resultConta->fetch_assoc();

function delete($id)
{
  include_once("../configuration/cfg.php");
  $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
  $delete = $conn->query($sqlSelect);
  if ($delete->num_rows > 0) {
    $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
    $resultDelete = $conn->query($sqlDelete);
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/detalhes.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>MazeBank - Meu Perfil</title>
</head>
<header>
  <h1>MAZEBANK</h1>
  <ul>
    <li><img class="img1" src="img/logo 1.png" alt=""></li>
    <!-- <li><img class="img2" src="ph_user-light.png" alt=""></li> -->
    <li><a class="ativoHome" href="home.php">Home</a></li>
    <li><a href="">Transferências</a></li>
    <li><a href="">Depósito</a></li>
    <li><a href="">Empréstimos</a></li>
    <div class="dropdown">
      <button class="btn btn-danger border border-light bg-transparent btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <li><img class="img2" src="img/ph_user-light.png" alt=""></li>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="../views/painelCliente.php">Meu Perfil</a>
        <a class="dropdown-item" href="../views/suporte/suporte.html">Suporte</a>
        <a class="dropdown-item" href="../index.html">Sair</a>
      </div>
    </div>
  </ul>
</header>

<body>
  <div class="row ">
    <div class="col-3">
      <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link text-white active text-center" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-details" role="tab" aria-controls="v-pills-home" aria-selected="true">Detalhes da Conta</a>
        <a class="nav-link text-white text-center" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Meu Cartão</a>
        <a class="nav-link text-white text-center" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Fechar Conta</a>
        <!-- <a class="nav-link text-white text-center" id="v-pills-settings-tab" data-toggle="pill" href="../index.html" role="tab" aria-controls="v-pills-settings" aria-selected="false">Voltar</a> -->
      </div>
    </div>
    <div class="col-9">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-details" role="tabpanel" aria-labelledby="v-pills-details-tab">
          <div class="img-user">
            <img src="img/image 1.png" alt="">
          </div>
          <div class="container mt-5">
            <form method="POST" action="../controllers/painelDoCliente/controllerPainel.php">
              <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control form-control-sm" name="nome" id="nome" value="<?php echo $result["nome"] ?>">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control form-control-sm" name="email" id="email" value="<?php echo $result["email"] ?>">
              </div>
              <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control form-control-sm" name="cpf" id="cpf" value="<?php echo $result["cpf"] ?>">
              </div>
              <div class="form-group">
                <label for="senha1">Senha:</label>
                <input type="text" class="form-control form-control-sm" name="senha1" id="senha1" value="<?php echo $result["senha1"] ?>">
              </div>
              <div class="form-group">
                <label for="senha2">Confirme a Senha:</label>
                <input type="text" class="form-control form-control-sm" name="senha2" id="senha2" value="<?php echo $result["senha2"] ?>">
              </div>
              <button type="submit" class="btn">Enviar</button>
            </form>
          </div>
        </div>
        <!-- ABA - SOLICITAR CARTÃO -->
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

          <?php
          if ($resultConta["possui_cartao"] == 'S') {
          ?>
            <h4 align="center">Você já possui um cartão, obrigado por ser nosso cliente!</h4>
          <?php
          }
          if ($resultConta["possui_cartao"] == 'N') {
          ?>
            <h4 align="center">Foi verificado que você ainda não tem o cartão MazeBank.</h4>
            <h5 align="center">Deseja Solicitar ?</h5>
          <?php
          }
          ?>
          <?php
          if ($resultConta["possui_cartao"] == 'P') {
          ?>
            <h4 align="center">Seu cartão foi aprovado com sucesso!</h4>
            <h5 align="center">Logo chegará ao seu endereço :) </h5>
          <?php
          }
          ?>

          <div class="container mt-5">
            <img style="height: 300px; width: 480px;" src="img/cartao.png" class="img-cartao-frente" alt="">
            <img style="height: 300px; width: 480px;" src="img/verso-cartao.png" class="img-cartao-verso" alt="">
          </div>

          <?php
          if ($resultConta["possui_cartao"] == 'N') {
          ?>
            <div style="text-align: center; margin-top: 50px;">
              <form id="solicitar-cartao-form" method="POST" action="../controllers/solicitarCartao/SolicitarCartao.php">
                <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id']; ?>">
                <input type="hidden" name="possui_cartao" value="P">

                <button type="submit" class="btn btn-danger">Solicitar</button>
              </form>
            </div>
          <?php
          }
          ?>

          <?php
          if ($resultConta["possui_cartao"] == 'P') {
          ?>
            <div style="text-align: center; margin-top: 50px;">
              <form id="solicitar-cartao-form" method="POST" action="../controllers/solicitarCartao/SolicitarCartao.php">
                <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id']; ?>">
                <input type="hidden" name="possui_cartao" value="N">

                <button type="submit" class="btn btn-danger">Deseja cancelar o envio ?!</button>
              </form>
            </div>
          <?php
          }
          ?>

        </div>
        <!--  -->
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
          <div class="img-user">
            <img src="img/image 1.png" alt="">
          </div>
          <div class="containerDelete">
            <h1 class="user"><?php echo $result["nome"] ?></h1>
            <p class="aviso1">Tem certeza que deseja excluir a sua conta? </p><br>
            <p class="aviso2">Ao fazer isso você perderá acesso as
              atividades em sua conta.</p>
            <p class="danger">Certifique que não tem nem um Débito ou Empréstimo ativo.</p>
            <?php
            echo "<button class='btn' onclick='confirmDelete({$_SESSION['id']})'>Excluir Conta</button>";
            ?>
          </div>
        </div>
        <!-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">home</div> -->
      </div>
    </div>
  </div>
</body>

<script>
        function confirmDelete(userId) {
            Swal.fire({
                title: 'Tem certeza?',
                text: 'Isso excluirá sua conta',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, deletar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../routes/crud/deleteUser.php?id=' + userId;
                }
            });
        }
    </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>