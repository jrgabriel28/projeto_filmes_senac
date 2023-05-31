<?php
    include_once('testeconexao.php');

    if($_POST)
    {
        $id = $_POST['txtidfilme'];

        try 
        {
            $sql = $conn->prepare("
                delete from filme where id_filme=:if_filme
            ");
            
            $sql->execute(array(
                ':id_filme'=>$id
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
        header('Location:##');
    }

?>

<a href="##">Voltar</a>