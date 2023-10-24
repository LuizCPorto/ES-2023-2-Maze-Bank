<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/7c15533c30.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/painel.css" />
    <title>Painel</title>
  </head>
  <body class="h-screen overflow-y-hidden bg-[#d9d9d9]">

    <?php
      require_once(__DIR__ ."/../controllers/painelDoCliente/controllerPainel.php");
      
      $control = new controllerPainel();
      $user = $control -> extrairDadosDoUsuario();
    ?>


    <header class="flex w-full justify-between border-b border-black p-5 px-24">
      <img src="./img/logo.webp" alt="logo" class="my-1 w-20" />

      <button class="my-2 rounded-xl bg-red-600 hover:bg-red-700 font-bold text-white">
        <a href="../routes/home.php" class="mx-4 block h-full w-36 pt-6"
          >Voltar para Home</a
        >
      </button>
    </header>

    <main class="m-auto mt-20 h-5/6 w-8/12 rounded-xl bg-red-600 ">
      <form action="../controllers/painelDoCliente/controllerPainel.php" method="POST" class="m-auto w-1/2 pt-24">
        <h1 class="mb-16 text-6xl font-bold text-white">Ajustes</h1>

        <label for="name" class="text-xl font-bold text-white"
          >Nome de usuario</label
        >

        <i class="fa-solid fa-user"></i>

        <input
          type="text"
          class="mb-8 focus:ring-4 focus:ring-red-500"
          name="Usuario"
          id="name"
          value="<?php echo $user["nome"];?>"
        /><br />

        <label for="mail" class="text-xl font-bold text-white">Meu Email</label>

        <i class="fa-solid fa-envelope"></i>

        <input
          type="text"
          class="mb-8 focus:ring-4 focus:ring-red-500"
          name="email"
          id="mail"
          value="<?php echo $user["email"];?>"
        /><br />

        <label for="cpf" class="text-xl font-bold text-white">Meu CPF</label>

        <i class="fa-solid fa-passport"></i>

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

        <i class="fa-solid fa-lock"></i>

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
