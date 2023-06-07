<?php
    include_once('testeconexao.php');

    if($_POST)
    {
        $id= $_POST['txtid'];

        try {
            $sql = $conn->prepare("
                delete from usuario where id_usuario=:id_usuario
            ");

            $sql->execute(array(
                ':id_usuario'=>$id
            ));

            if($sql->rowCount()>=1)
            {
                echo '<p>Dados excluidos com sucesso</p>';
            }

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    
    else
    {
        header('Location:_sistema.php?tela=usuario');
    }
    
?>

<hr>
<a href="_sistema.php?tela=usuario">Voltar</a>