<?php

include_once('../../configuration/cfg.php');

if (!empty($_GET['id'])) {
  $id = $_GET['id'];

  $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
  $result = $conn->query($sqlSelect);

  if ($result->num_rows > 0) {
    while ($user_data = mysqli_fetch_assoc(($result))) {
      $nome = $user_data['nome'];
      $email = $user_data['email'];
      $cpf = $user_data['cpf'];
      $senha = $user_data['senha1'];
      $senha2 = $user_data['senha2'];
    }
  } else {
    header('Location: crudIndex.php');
  }
} else {
    header('Location: crudIndex.php');
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
            background-color: #c94c4c;
            margin: 10px;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        .container h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="radio"] {
            margin-right: 5px;
        }

        .form-group .radio-label {
            color: #333;
        }

        .form-group input[type="submit"] {
            background-color: #787475;
            color: #fff;
            cursor: pointer;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .back-button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Alteração de Dados</h2>
        
        <form action="../../models/Crud/saveEdit.php" method="POST">
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
            <!-- <div class="form-group">
                <label for="tipo">Tipo de Conta:</label>
                <input type="text" id="tipo" name="tipo" value="<?php echo $conta ?>" required>
            </div>
            <div class="form-group">
                <label for="premium">Premium:</label>
                <input type="radio" id="sim" name="premium" value="sim" <?php echo ($premium == 'sim') ? 'checked' : '' ?> required>
                <label for="sim" class="radio-label">Sim</label>
                <input type="radio" id="nao" name="premium" value="nao" <?php echo ($premium == 'nao') ? 'checked' : '' ?> required>
                <label for="nao" class="radio-label">Não</label>
            </div>
            <div class="form-group">
                <label for="limite">Limite:</label>
                <input type="text" id="limite" name="limite" value="<?php echo $limite ?>" required>
            </div> -->
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update" value="Atualizar">
                <a class="back-button" href="javascript:history.go(-1)">Voltar</a>
            </div>
        </form>
    </div>
</body>

</html>
