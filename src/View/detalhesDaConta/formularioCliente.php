<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formulario do cliente</title>
  <link rel="stylesheet" href="formularioCliente.css">
  <script src="https://kit.fontawesome.com/1fee394696.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="login-esquerda">
    <img src="../logo.webp" class="image" alt="mazebank">
    <h1>MAZE BANK</h1>
    <h2>Banco de Palmas</h2>
  </div>
  <div class="container">
    <form id="formulario" method="POST" action="../../controller/formController">
        <span id="title" style="color: white;">Detalhes da conta</span>
        <input type="text" id="conta" name="tipoConta" placeholder="Tipo de conta" required />
        <input type="text" id="cartão" name="limiteCartao" placeholder="Limite do cartão" required />

        <span style="color: white;">Cliente premium?</span><br>
        <input type="radio" name="tipoCliente" id="isPremium" value="sim" required>
        <label for="isPremiun">Sim</label><br>
        <input type="radio" name="tipoCliente" id="isNotPremium" value="nao" required>
        <label for="isNotPremiun">Não</label><br>
        <!-- <i class="fa fa-envelope iEmail" style="color: #000000;"></i> -->
        <button type="submit">Confirmar</button>
        <br>
    </form>
  </div>
</body>
</html>
