<?php
require_once "cadastro_function.php";

$cadastro = new Cadastro();

if (isset($_GET["id"])) {
    $codigo = $_GET["id"];
    $cadastro->delete($codigo);
    header('Location: listar_usuarios.php');
} else {
    echo "ID do usuário não fornecido.";
}

?>