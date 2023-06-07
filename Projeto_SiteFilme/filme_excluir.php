<?php
include_once('testeconexao.php');

if ($_POST) {
    $id = $_POST['txtidfilme'];

    try {
        $sql = $conn->prepare("
            delete from filme where id_filme=:id_filme
        ");
        
        $sql->execute(array(
            ':id_filme' => $id
        ));

        if ($sql->rowCount() >= 1) 
        {
            echo '<p>Dados Excluidos com sucesso! (espero que seja o que você queria fazer...)</p>';
        }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    header('location:_sistema.php?tela=filme');
}

?>

<a href="_sistema.php?tela=filme">Voltar</a>

