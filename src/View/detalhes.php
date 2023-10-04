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
      $premium = $user_data['premium'];
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
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #c94c4c;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        .container h2 {
            text-align: center;
            color: #333;
        }

        .user-info {
            color: #333;
            margin-top: 20px;
        }

        .user-info label {
            font-weight: bold;
        }

        .user-info p {
            margin: 5px 0;
        }

        .back-button {
            display: block;
            margin-top: 20px;
            text-align: center;
        }

        .back-button a {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .back-button a:hover {
            background-color: #555;
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
            <label for="premium">Premium:</label>
            <p><?php echo $premium ?></p>
        </div>
        <div class="back-button">
            <a href="javascript:history.go(-1)">Voltar</a>
        </div>
    </div>
</body>

</html>
