<?php
namespace App\Controller\Pages;

require_once __DIR__ . '/config.php';
require __DIR__ . '/../vendor/autoload.php';

use \App\Utils\View;
use \App\Config\Conexao;

class Connect
{
    public static function AlterarSaldo($id_user, $novoSaldo)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        // Use prepared statements para evitar injeção de SQL
        $sql = "UPDATE usuarios SET saldo = ? WHERE id = ?";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param('di', $novoSaldo, $id_user); // 'd' indica que o primeiro parâmetro é um double e 'i' que o segundo é um inteiro

        if ($stmt->execute()) {
            return true; // A alteração foi bem-sucedida
        } else {
            return false; // Ocorreu um erro na alteração
        }
    }

    public static function ConsultarUsuariosExceto($id_user)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        // Use prepared statements para evitar injeção de SQL
        $sql = "SELECT * FROM usuarios WHERE id != ?";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param('i', $id_user); // 'i' indica que o parâmetro é um inteiro

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false; // Ocorreu um erro na consulta
        }
    }

    public static function ConsultarSaldo($id_user)
    {
        $conexao = new Conexao;
        $conectado = $conexao->conectarBancoDeDados();

        // Use prepared statements para evitar injeção de SQL
        $sql = "SELECT saldo FROM usuarios WHERE id = ?";
        $stmt = $conectado->prepare($sql);
        $stmt->bind_param('i', $id_user); // 'i' indica que o parâmetro é um inteiro

        if ($stmt->execute()) {
            $stmt->bind_result($saldo);
            $stmt->fetch();
            return $saldo;
        } else {
            return false; // Ocorreu um erro na consulta
        }
    }

    public static function ConsultarUsuarioPorCPF($cpf)
{
    $conexao = new Conexao;
    $conectado = $conexao->conectarBancoDeDados();

    // Use prepared statements para evitar injeção de SQL
    $sql = "SELECT id, saldo FROM usuarios WHERE cpf = ?";
    $stmt = $conectado->prepare($sql);
    $stmt->bind_param('s', $cpf); // 's' indica que o parâmetro é uma string (CPF)

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    } else {
        return false; // Ocorreu um erro na consulta
    }
}


}
