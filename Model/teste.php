<!-- arquivo de teste, pode apagar se quiser-->
<?php
require_once("./Cadastro.php");

$func = new Cadastro();

if ($func -> cadastro("Pedro", "sulin@gmail.com", "000.000.000-02", "12345678")) {
    echo "Usuario cadastrado com sucesso!";
}
else {
    echo "Cpf ou email ja cadastrado";
}