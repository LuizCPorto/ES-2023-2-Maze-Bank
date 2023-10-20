<?php

require_once '../Model/ConectionEmail.php';

class EmailController {
    private $database;

    public function __construct() {
        $this->database = new Database();
    }

    public function realizarEmail($emailUsuario) {
        if (empty($emailUsuario)) {
            return "Por favor, preencha todos os campos.";
        }
        
        $resultado = $this->database->fazerEmail($emailUsuario);

        
        if (strpos($resultado, "Link enviado pelo email") !== false) {

            
            //exec("email.py $emailUsuario");
            header("Location: ../view/resetlogin.php");
            exit(); // Termina o script após o redirecionamento.
        } else {
            // Em caso de falha, redireciona o usuário de volta para a página de login com uma mensagem de erro.
            echo "erro";
            exit(); // Termina o script após o redirecionamento.
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $emailController = new EmailController();
    $emailUsuario = $_POST['emailUsuario'];
    $resultadoEmail = $emailController->realizarEmail($emailUsuario);
    echo $resultadoEmail;
}

?>
