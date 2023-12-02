<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/tail.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Transferência</title>
    <script src="https://kit.fontawesome.com/7c15533c30.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h1>MAZEBANK</h1>
        <ul>
            <li><img class="img1" src="../../header padrao/logo 1.png" alt=""></li>
            <!-- <li><img class="img2" src="ph_user-light.png" alt=""></li> -->
            <li><a class="ativoHome" href="../home.php">Home</a></li>
            <li><a href="">Transferências</a></li>
            <li><a href="../deposito/deposito.php">Depósito</a></li>
            <li><a href="../emprestimo/">Empréstimos</a></li>
            <div class="dropdown">
                <button class="btn btn-danger border border-light bg-transparent btn-lg dropdown-toggle" type="button"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <li><img class="img2" src="../../header padrao/ph_user-light.png" alt=""></li>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Meu Perfil</a>
                    <a class="dropdown-item" href="#">Suporte</a>
                    <a class="dropdown-item" href="#">Sair</a>
                </div>
            </div>
        </ul>
    </header>

    <h1 class="text-center text-6xl">Transferências</h1>
    <main class="h-screen">

        
        <form id="form" action="../../controllers/transferencia/controllerTransferencia.php" method="POST" class="w-2/3 h-3/6 mt-9 rounded-3xl mx-auto pt-5 pl-28 bg-[#D6D6D6] formt">

            <h1 class="">Chave do Destinatário:</h1>
            <i class="fa-solid fa-key fa-2xl relative left-4 top-[54px]"></i>

            <input class="w-3/4 h-20 bg-white rounded-3xl  block text-2xl px-16" name="chave">

            <h1 class="">Valor da Transferência:</h1>
            <i class="fa-solid fa-money-bill fa-2xl relative left-4 top-[54px]"></i>

            <input class="w-3/4 h-20 bg-white rounded-3xl  block text-2xl px-16" name="valor">

            <p style="position: relative; left: 1rem;"><?php echo $_SESSION["status_transferencia"]?></p>
        </form>

        <button class=" mx-auto bg-[#660a07] rounded-3xl mt-14 hover:bg-red-950 block" form="form">
            <h1 class="text-white my-2 mx-36">Confirmar</h1>
        </button>
        
    </main>

</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</html>