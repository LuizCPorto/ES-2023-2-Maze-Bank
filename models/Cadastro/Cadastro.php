<?php
require_once(__DIR__ . '../../../configuration/connect.php');


class CadastroModel extends Connect{
    function __construct() {
        parent::__construct();
    }

    public function cadastrar($nome,$email,$cpf,$senha1,$senha2){
        $query = "INSERT INTO usuarios (nome, email, cpf, senha1, senha2) VALUES ('$nome', '$email', '$cpf', '$senha1', '$senha2');
        INSERT INTO conta (id_usuario, possui_cartao) VALUES (LAST_INSERT_ID(), 'N');";
        $queryBusca = "SELECT cpf,email FROM usuarios WHERE cpf = '$cpf' OR email = '$email'";

        $buscas = $this->connection->prepare($queryBusca);
        $buscas->execute();
        $row = $buscas->rowCount();

        if($senha1 != $senha2){
            return "Senhas nao coincidem.";
        }
        elseif($row > 0){
            return "Email ou CPF já cadastrado!";
            // $this->connection->close();
        }
        else{
            if ($this->connection->query($query)){
                return "Registro feito com sucesso!";
                $this->connection->close();
            }
            else{
                return "Nao foi possivel fazr o Cadastro.";
            }
         }
    }

    }

?>