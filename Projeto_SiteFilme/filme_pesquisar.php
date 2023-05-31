<?php
    include_once('testeconexao.php');

    $idFilme = '';
    $idCategoriaFilme = '';
    $nomeFilme = '';
    $imgFilme = '';
    $sinopseFilme = '';
    $notaFilme = '';
    $obsFilme = '';
    $statusFilme = '';

    if($_POST)
    {
        $id = $_POST['txtidfilme'];

        $sql = $conn->query('select * from filme where id_filme='.$id);

        if($sql->rowCount()>=1)
        {
            foreach ($sql as $row) 
            {
                $idFilme=$row[0];
                $idCategoriaFilme=$row[1];
                $nomeFilme=$row[2];
                $imgFilme=$row[3];
                $sinopseFilme=$row[4];
                $notaFilme=$row[5];
                $obsFilme=$row[6];
                $statusFilme=$row[7];
            }
        }
        else
        {
            echo '<p>Filme não existe</p>';
        }
    }

?>