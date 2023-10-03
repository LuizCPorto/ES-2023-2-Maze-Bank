<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'mazebank';
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if (!empty($_GET['id'])) {
  $id = $_GET['id'];

  $sqlSelect = "SELECT * FROM usuarios WHERE id_usuario=$id";
  $result = $conn->query($sqlSelect);
  
  if ($result->num_rows > 0) {
    while ($user_data = mysqli_fetch_assoc(($result))) {
      $nome = $user_data['usuario'];
      $email = $user_data['email'];
      $cpf = $user_data['cpf'];
      $senha = $user_data['senha1'];
      $senha2 = $user_data['senha2'];
      $conta = $user_data['conta'];
      $limite = $user_data['limite'];
      $premium = $user_data['premium'];
    }
  } else {
    header('Location: crud.php');
  }
} else {
  header('Location: crud.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alteração de Dados</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #787475;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #941212;
      padding: 50px;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .container h2 {
      text-align: center;
      color: white;
    }

    .form-group {
      margin-bottom: 20px;
      color: white;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 95%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group input[type="submit"] {
      background-color: #787475;
      color: white;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Alteração de Dados</h2>
    <form action="../Model/saveEdit.php" method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email ?>" required>
      </div>
      <div class="form-group">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" value="<?php echo $nome ?>" required>
      </div>
      <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" value="<?php echo $cpf ?>" required>
      </div>
      <div class="form-group">
        <label for="senha1">Nova Senha:</label>
        <input type="text" id="senha1" name="senha1" value="<?php echo $senha ?>" required>
      </div>
      <div class="form-group">
        <label for="senha2">Confirme a Nova Senha:</label>
        <input type="text" id="senha2" name="senha2" value="<?php echo $senha2 ?>" required>
      </div>
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" name="update" id="update">
      </div>
    </form>
  </div>
</body>

</html>