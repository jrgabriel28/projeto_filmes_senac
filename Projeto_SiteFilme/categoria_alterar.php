<?php
    include_once('testeconexao.php');

    if ($_POST) 
    {
        $id = $_POST['txtid'];
        $nome = $_POST['txtnome'];
        $desc = $_POST['txtdesc'];
        $obs = $_POST['txtobs'];
        $status = $_POST['txtstatus'];

        try {
            $sql = $conn->prepare("
                update categoria set
                    nome_categoria=:nome_categoria,
                    descricao_categoria=:descricao_categoria,
                    obs_categoria=:obs_categoria,
                    status_categoria=:status_categoria
                where id_categoria=:id_categoria       
                ");

            $sql->execute(
                array(
                    ':id_categoria' => $id,
                    ':nome_categoria' => $nome,
                    ':descricao_categoria' => $desc,
                    ':obs_categoria' => $obs,
                    ':status_categoria' => $status
                )
            );
            if($sql->rowCount() >=1)
            {
                echo '<p>Os dados foram alterados com sucesso!</p>';
            }

        } catch (PDOException$ex) {
            echo $ex->getMessage();
        }
    }
    else
    {
        header('Locatiom:_sistema.php?tela=categoria');
    }

?>

<a href="_sistema.php?tela=categoria">Voltar</a>
