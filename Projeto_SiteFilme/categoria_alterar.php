<?php
include_once('testeconexao.php');
if ($_POST) {
    $id = $_POST['txtid'];
}

try {
    $sql = $conn->query(" select * from categoria where id_categoria = $id");


    if ($sql->rowCount() >= 1) {
        foreach ($sql as $row) {
            $id = $row[0];
            $nome = $row[1];
            $desc = $row[2];
            $obs = $row[3];
            $status = $row[4];
        }
    }

} catch (PDOException $ex) {
    echo $ex->getMessage();
}

try {
    $sql = $conn->prepare("
        update categoria set
        nome_categoria =:nome_categoria,
        descricao_categoria =: descricao_categoria,
        obs_categoria =: obs_categoria,
        status_categoria =: status_categoria
        where id_categoria =: id_categoria       
        ");
    $sql->execute(
        array(
            ':id_categoria' => $id,
            ':nome_categoria' => $nome,
            ':desc_categoria' => $desc,
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


?>