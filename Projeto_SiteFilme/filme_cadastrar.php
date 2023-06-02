<?php
    include_once('testeconexao.php');

    if($_POST)
    {
        $idcategoria = $_POST['txtidcategoria'];
        $nome = $_POST['txtnome'];
        $img = $_FILES['txtimg']['name'];
        $sinopse = $_POST['txtsinopse'];
        $nota = $_POST['txtnota'];
        $obs = $_POST['txtobs'];
        $status = $_POST['txtstatus'];

        try 
        {
            $sql = $conn->prepare('
                insert into filme
                (
                    id_categoria_filme,
                    nome_filme,
                    img_filme,
                    sinopse_filme,
                    nota_filme,
                    obs_filme,
                    status_filme
                )
                values
                (
                    :id_categoria_filme,
                    :nome_filme,
                    :img_filme,
                    :sinopse_filme,
                    :nota_filme,
                    :obs_filme,
                    :status_filme

                )
            ');

            $sql->execute(array(
                ':id_categoria_filme'=>$idcategoria,
                ':nome_filme'=>$nome,
                ':img_filme'=>$img,
                ':sinopse_filme'=>$sinopse,
                ':nota_filme'=>$nota,
                ':obs_filme'=>$obs,
                ':status_filme'=>$status
            ));



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
        header('Locatiom:###');
    }

?>

<a href="frm_filme.php">Voltar</a>