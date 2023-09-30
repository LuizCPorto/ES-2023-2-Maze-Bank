<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="telaAdmin.css">
    <title>Administration</title>
</head>

<body>
    <header>
        <img src="logo.webp" alt="logo mazebank">
    </header>

    <div id="conteiner">

    <!-- Formulario de alteração de dados -->

        <section id="formulario">
            <form action="" method="post">
                <h3>Alterar dados</h3>
                <label for="tipoDaConta">Tipo da conta</label><br>
                <input type="text" id="tipoDaConta"><br>

                <label for="limite">Limite do cartão</label><br>
                <input type="text" id="limite"><br>

                <label for="radio1">Tipo de cliente</label><br>

                <input type="radio" name="premium" id="radio1" value="premium">
                <label for="radio1">Premium</label><br>

                <input type="radio" name="premium" id="radio2" value="comum">
                <label for="radio2">Comum</label><br>

                <input type="submit" value="Alterar">
            </form>
        </section>

        <!-- Tabela com informações do usuario -->

        <section id="table">
            <table>
                <tr id="cabeçario">
                    <td>Usuario</td>
                    <td>Email</td>
                    <td colspan="2">Cpf</td>
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>maria@gmail.com</td>
                    <td>000000000-00</td>
                    <td>
                        <button>Ver</button>
                        <button onclick="mostrarForm()">Alterar</button>
                        <button onclick= "abrirDialog()">Excluir</button>
                    </td>
                </tr>
            </table>
        </section>

    </div>

    <!-- Dialo de confirmação para exclusão de usuario -->

    <dialog id="excluir">
        <h3>Tem certeza de que deseja fazer isso?</h3>
        <p>Os dados do usuario serão excluidos permanentemente</p>

        <form action="" method="post">
            <!-- Confirmar -->
            <input type="submit" value="Excluir">
        </form>
        <!-- Cancelar -->
        <button onclick="fecharDialog()">Cancelar</button>
    </dialog>

    <script>
        function mostrarForm() {
            let form =document.getElementById("formulario");
            if (form.style.visibility === "visible") {
                form.style.visibility = "hidden";               
            }
            else {
                form.style.visibility = "visible";
            }
        }

        function abrirDialog() {
            const dialog =document.getElementById("excluir");
            dialog.showModal();
        }

        function fecharDialog() {
            const dialog =document.getElementById("excluir");
            dialog.close();
        }
    </script>

</body>

</html>