<?php
include_once('testeconexao.php');

    if($_POST)
    {
        $nome = ['txtnome'];
        $status = ['txtstatus'];
        $obs = ['txtobs'];
        $desc = ['txtdesc'];
   
         try {
        $sql = $conn->prepare("
        insert into categoria
        (
            nome_categoria,
            descricao_categoria,
            obs_status,
            status_categoria
            

        )
        values
        (
            :nome_categoria,
            :descricao_categoria,
            :obs_categoria,
            :status_categoria
        ");
            //--------------------------------//

            if($sql->rowCount()>=1)
            {
                echo '<P> Categoria cadastrada com sucesso!</p>';
                echo '<p>ID gerado: ' .$conn->lastinsertid(). '</p>';
            }
            else
            {
                '<p>Algo deu errado no cadastro!</p>';
            }

        } catch (PDOException $ex) {
        echo $ex->getMessage();
        }
     }
     else
     {
        header('location:##');
     }



?>