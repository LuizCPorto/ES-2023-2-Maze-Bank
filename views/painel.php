<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/painel.css" />
    <title>Painel</title>
  </head>
  <body class="h-screen overflow-y-hidden bg-[#d9d9d9]">


    <?php
      
    ?>



    <header class="flex w-full justify-between border-b border-black p-5 px-24">
      <img src="./img/logo.webp" alt="logo" class="my-1 w-20" />

      <button class="my-2 rounded-xl bg-red-600 font-bold text-white">
        <a href="../routes/home.html" class="mx-4 block h-full w-36 pt-6"
          >Voltar para Home</a
        >
      </button>
    </header>

    <main class="m-auto mt-12 h-5/6 w-8/12 rounded-xl bg-red-600">
      <form action="" method="post" class="m-auto w-1/2 pt-24">
        <h1 class="mb-16 text-4xl font-bold text-white">Ajustes</h1>

        <label for="name" class="text-xl font-bold text-white"
          >Nome de usuario</label
        >
        <input
          type="text"
          class="mb-8 focus:ring-4 focus:ring-red-500"
          name="Usuario"
          id="name"
          value="Randaram"
        /><br />

        <label for="mail" class="text-xl font-bold text-white">Meu Email</label>
        <input
          type="text"
          class="mb-8 focus:ring-4 focus:ring-red-500"
          name="email"
          id="mail"
          value="example@ex.com"
        /><br />

        <label for="cpf" class="text-xl font-bold text-white">Meu CPF</label>
        <input
          type="text"
          class="mb-8 focus:ring-4 focus:ring-red-500"
          name="cpf"
          id="cpf"
          value="*********-02"
        /><br />

        <label for="senha" class="text-xl font-bold text-white"
          >Minha senha</label
        >
        <input
          type="password"
          class="mb-8 focus:ring-4 focus:ring-red-500"
          name="senha"
          id="senha"
          value="********"
        /><br />

        <button type="submit" class="hover:bg-white">Aplicar</button>
      </form>
    </main>
  </body>
</html>
