<!DOCTYPE html>
<html lang="PT">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
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
      <button id="btnSignin">Login</button>
      <button id="btnSignup">Registra-se</button>
    </div>
    
    <form id="signin" method="POST" action="../controller/LoginController.php">
        <input type="text" id="usuario" name="nomeUsuario" placeholder="Usuário" required />
        <i class="fa fa-envelope iEmail" style="color: #000000;"></i>
        <input type="password" id="senha" name="senha" placeholder="Senha" required />
        <i class="fa fa-lock iPassword3" style="color: #000000;"></i>
        <a href="confirmemail.php" class = "reg">Esqueceu sua senha?</a>
        <button type="submit">Login</button>
    </form>

    <form id="signup" method="POST" action="../controller/RegisterController.php">
      <input type="text" id="email" name="email" placeholder="Email"  required />
      <i class="fa fa-envelope iEmail" style="color: #000000;"></i>
      <input type="text" id="usuarioRegistro" name="usuarioRegistro" placeholder="Usuario"  required/>
      <i class="fa fa-user iUsuario" style="color: #000000;"></i>
      <input type="text" id="cpf" name="cpf" placeholder="CPF"  required/>
      <i class="fa fa-passport icpf" style="color: #000000;"></i>
      <input type="password" id="senha1" name="senha1" placeholder="Password"  required />
      <i class="fa fa-lock iPassword" style="color: #000000;"></i>
      <input type="password" id="senha2"name="senha2" placeholder="Password"  required />
      <i class="fa fa-lock iPassword2" style="color: #000000;"></i>
      <button type="submit">Registrar-se</button>
    </form>
  </div>
  <script src="index.js"></script>
</body>
</html>