<?php
    include_once('testeconexao.php');

    if($_POST)
    {
        $idfilme = $_POST['txtidfilme'];
        $idcategoria = $_POST['txtidcategoria'];
        $nome = $_POST['txtnome'];
        $img = $_FILES['txtimg']['name'];
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
                $img = '';
            }


            $sql = $conn->prepare("
                update filme set
                    id_categoria_filme=:id_categoria_filme,
                    nome_filme=:nome_filme,
                    img_filme=:img_filme,
                    sinopse_filme=:sinopse_filme,
                    nota_filme=:nota_filme,
                    obs_filme=:obs_filme,
                    status_filme=:status_filme
                where id_filme=:id_filme
            ");
            
            $sql->execute(array(
                ':id_filme'=>$idfilme,
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
                echo '<p>Dados alterados com sucesso!</p>';

                $pasta = 'img/'.$id.'/';
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