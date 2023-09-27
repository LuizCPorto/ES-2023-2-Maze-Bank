<!DOCTYPE html>
<html lang="PT">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="reset.css">
  <script src="https://kit.fontawesome.com/1fee394696.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="login-esquerda">
    <img src="logo.webp" class="image" alt="mazebank">
    <h1>MAZE BANK</h1>
    <h2>Banco de Palmas</h2>
  </div>
  <div class="container">
    <div class="buttonsForm">
      <div class="btnColor"></div>
      <button id="btnSignin">Recuperação</button>
    </div>
    
    <form id="signin" method="POST" action="../controller/ResetController.php">
        <input type="text" id="cpf" name="cpfUsuario" placeholder="CPF" required />
        <i class="fa fa-passport icpf" style="color: #000000;"></i>
        <input type="password" id="senha1" name="senha1" placeholder="Senha" required />
        <i class="fa fa-lock iPassword" style="color: #000000;"></i>
        <input type="password" id="senha2" name="senha2" placeholder="Confirme a senha" required />
        <i class="fa fa-lock iPassword2" style="color: #000000;"></i>
        <button type="submit">Recupere</button>
        <br>
    </form>
  </div>
</body>
</html>
