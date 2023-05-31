<?php
    include_once('testeconexao.php');

    $idfilme = '';
    $idcategoriafilme = '';
    $nomefilme = '';
    $imgfilme = '';
    $sinopsefilme = '';
    $notafilme = '';
    $obsfilme = '';
    $statusfilme = '';

    if($_POST)
    {
        $id = $_POST['txtidfilme'];

        $sql = $conn->query('select * from filme where id_filme='.$id);

        if($sql->rowCount()>=1)
        {
            foreach ($sql as $row) 
            {
                $idfilme=$row[0];
                $idcategoriafilme=$row[1];
                $nomefilme=$row[2];
                $imgfilme=$row[3];
                $sinopsefilme=$row[4];
                $notafilme=$row[5];
                $obsfilme=$row[6];
                $statusfilme=$row[7];
            }
        }
        else
        {
            echo '<p>Filme não existe</p>';
        }
    }

?>