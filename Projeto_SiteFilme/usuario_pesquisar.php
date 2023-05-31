<?php
    include_once('testeconexao.php');

    $idusuario = '';
    $nomeusuario = '';
    $nascimentousuario = '';
    $cadastrousuario = '';
    $loginusuario = '';
    $senhausuario = '';
    $imgusuario = '';
    $obsusuario = '';
    $statususuario = '';


    if($_POST)
    {

        $id = $_POST['txtid'];

        $sql = $conn->query('select * from usuario where id_usuario='.$id);

        if($sql->rowCount()>=1)
        {
            foreach ($sql as $row) 
            {

                $idusuario=$row[0];
                $nomeusuario=$row[1];
                $nascimentousuario=$row[2];
                $cadastrousuario=$row[3];
                $loginusuario=$row[4];
                $senhausuario=$row[5];
                $imgusuario=$row[6];
                $obsusuario=$row[7];
                $statususuario=$row[8];
            }
        }
        else
        {
            echo '<p>Usuário não existe</p>';
        }
    }
?>