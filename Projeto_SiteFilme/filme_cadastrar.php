<?php
    include_once('testeconexao.php');

    if($_POST)
    {
        $idcategoria = $_POST['txtidcategoria'];
        $nome = $_POST['txtnome'];
        $img = '';
        $sinopse = $_POST['txtsinopse'];
        $nota = $_POST['txtnota'];
        $obs = $_POST['txtobs'];
        $status = $_POST['txtstatus'];

        try 
        {
            if (isset($_FILES['txtimg'])) 
            {
                $img = $_FILES['txtimg'];    
            }
            else
            {
                echo 'Erro, a imagem deve ser enviada';
                return;
            }

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
                ':img_filme'=>$img['name'],
                ':sinopse_filme'=>$sinopse,
                ':nota_filme'=>$nota,
                ':obs_filme'=>$obs,
                ':status_filme'=>$status
            ));



            if($sql->rowCount()>=1)
            {
                echo '<p>Dados cadastrados com sucesso!</p>';
                echo '<p>ID Gerado: '.$conn->lastInsertId().'</p>';

                $pasta = 'img/'.$conn->lastInsertId().'/';

                if (!file_exists($pasta)) 
                {
                    mkdir($pasta);
                }

                $capa = $pasta.$img['name'];

                move_uploaded_file($img['tmp_name'],$capa);

            }

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    else
    {
        header('Locatiom:_sistema.php?tela=filme');
    }

?>

<a href="_sistema.php?tela=filme">Voltar</a>