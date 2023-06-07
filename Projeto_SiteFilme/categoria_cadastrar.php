<?php
include_once('testeconexao.php');

if ($_POST) {
    $nome = $_POST ['txtnome'];
    $desc = $_POST['txtdesc'];
    $obs = $_POST['txtobs'];
    $status = $_POST['txtstatus'];
 
    try {
        $sql = $conn->prepare("
                insert into categoria
                (
                    nome_categoria,
                    descricao_categoria,
                    obs_categoria,
                    status_categoria
                )
                values
                (
                    :nome_categoria,
                    :descricao_categoria,
                    :obs_categoria,
                    :status_categoria
                )
            ");

        $sql->execute(array(
            ':nome_categoria' => $nome,
            ':descricao_categoria' => $desc,
            ':obs_categoria' => $obs,
            ':status_categoria' => $status));



        if($sql->rowCount()>=1)
        {
            echo '<p>Dados cadastrados com sucesso!</p>';
            echo '<p>ID Gerado: '.$conn->lastInsertId().'</p>';
        }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }

}
else
{
    header('Locatiom:frm_categoria.php');
}

?>

<<<<<<< HEAD
<a href="frm_categoria.php">Voltar</a>
=======
<a href="_sistema.php?tela=categoria">Voltar</a>
>>>>>>> parent of cdcb024 (aa)
