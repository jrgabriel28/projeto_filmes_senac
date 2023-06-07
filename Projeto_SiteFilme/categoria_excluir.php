<?php
include_once('testeconexao.php');

if ($_POST) {
    $id = $_POST['txtid'];

    try {
        $sql = $conn->prepare("
            delete from categoria where id_categoria=:id_categoria");
        $sql->execute(array(':id_categoria' => $id));

        if ($sql->rowCount() >= 1) {
            echo '<p>Dados Excluidos com sucesso! (espero que seja o que você queria fazer...)</p>';
        }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}

else
{
    header('location:_sistema.php?tela=categoria');
}


?>

<a href="_sistema.php?tela=categoria">Voltar</a>