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
      $premiun = $user_data['premiun'];
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
  <title>Detalhes do Usuário</title>
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

    .user-info {
      color: white;
    }

    .user-info label {
      font-weight: bold;
    }

    .user-info p {
      margin: 10px 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Detalhes do Usuário</h2>
    <div class="user-info">
      <label for="email">Email:</label>
      <p><?php echo $email; ?></p>
      <label for="usuario">Usuário:</label>
      <p><?php echo $nome; ?></p>
      <label for="cpf">CPF:</label>
      <p><?php echo $cpf; ?></p>
      <label for="senha1">Senha-1:</label>
      <p><?php echo $senha; ?></p>
      <label for="senha2">Senha-2:</label>
      <p><?php echo $senha2; ?></p>
      <label for="conta">Conta:</label>
     <p><?php echo $conta; ?></p>
      <label for="premiun">Premium:</label>

    </div>
  </div>
</body>

</html>
