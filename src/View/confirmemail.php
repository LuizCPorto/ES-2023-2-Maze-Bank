<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="confirme.css">
  <script src="https://kit.fontawesome.com/1fee394696.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="login-esquerda">
    <img src="logo.webp" class="image" alt="mazebank">
    <h1>MAZE BANK</h1>
    <h2>Banco de Palmas</h2>
  </div>
  <div class="container">
    <form id="signin" method="POST" action="../controller/EmailController.php">
        <input type="text" id="email" name="emailUsuario" placeholder="Email" required />
        <i class="fa fa-envelope iEmail" style="color: #000000;"></i>
        <button type="submit">Confirme o email</button>
        <br>
    </form>
  </div>
</body>
</html>