<?php
  session_start();

  if (isset($_SESSION['nome_do_usuario'])) {
      $nome_do_usuario = $_SESSION['nome_do_usuario'];
  } else {
      $nome_do_usuario = "Usuário não está logado!";
  }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/7c15533c30.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/painel.css" />
    <title>Painel</title>
  </head>
  <body class="h-screen bg-[#d9d9d9]">

    <?php
      require_once(__DIR__ ."/../controllers/painelDoCliente/controllerPainel.php");
      
      $control = new controllerPainel();
      $user = $control -> extrairDadosDoUsuario();
    ?>


    <header>
            <h1 class="text-[2.5rem] mb-2">MazeBank</h1>
            <p class="mb-3">Seu Banco de Confiança</p>
            <div class="user-info">
                <span><?php echo "Bem-vindo $nome_do_usuario"; ?></span>
            </div>
    </header>

    <nav>
        <ul>
            <li><a class="btn btn-dark" href="../routes/home.php">Início</a></li>
            <!-- <li><a class="btn btn-dark" href="../routes/conta.html">Conta</a></li> -->
            <li><a class="btn btn-dark" href="../routes/transferencias.php">Transferências</a></li>
            <!-- <li><a class="btn btn-dark" href="../routes/configuracoes.html">Configurações</a></li> -->
            <li><a class="btn btn-dark" href="../views/painel.php">Ajustes</a></li>
            <?php if (isset($_SESSION['nome_do_usuario'])) : ?>
                <li><a class="btn btn-warning" href="../controllers/login/Logout.php">Sair</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <main class="mx-auto mt-5 h-5/6 w-8/12 rounded-xl bg-[#ba2e29] ">
      <form action="../controllers/painelDoCliente/controllerPainel.php" method="POST" class="mx-auto w-1/2 pt-16">
        <h1 class="mb-16 text-6xl font-bold text-white">Ajustes</h1>

        <label for="name" class="text-xl font-bold text-white"
          >Nome de usuario</label
        >

        <i class="fa-solid fa-user relative top-8 right-40"></i>

        <input
          type="text"
          class="mb-8 focus:ring-4 focus:ring-red-500"
          name="Usuario"
          id="name"
          value="<?php echo $user["nome"];?>"
        /><br />

        <label for="mail" class="text-xl font-bold text-white">Meu Email</label>

        <i class="fa-solid fa-envelope relative top-8 right-24"></i>

        <input
          type="text"
          class="mb-8 focus:ring-4 focus:ring-red-500"
          name="email"
          id="mail"
          value="<?php echo $user["email"];?>"
        /><br />

        <label for="cpf" class="text-xl font-bold text-white">Meu CPF</label>

        <i class="fa-solid fa-passport relative top-8 right-[75px]"></i>

        <input
          type="text"
          class="mb-8 focus:ring-4 focus:ring-red-500"
          name="cpf"
          id="cpf"
          value="<?php echo $user["cpf"];?>"
        /><br />

        <label for="senha" class="text-xl font-bold text-white"
          >Minha senha</label
        >

        <i class="fa-solid fa-lock  relative top-8 right-[120px]"></i>

        <input
          type="password"
          class="mb-8 focus:ring-4 focus:ring-red-500"
          name="senha"
          id="senha"
          value="<?php echo $user["senha1"];?>"
        /><br />

        <button type="submit" class="hover:bg-white">Aplicar</button>
      </form>
    </main>
  </body>
</html>
