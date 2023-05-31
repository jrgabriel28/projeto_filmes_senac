<?php
include_once('testeconexao.php');

$id_categoria = '';
$nome_categoria = '';
$desc_categoria = '';
$obs_categoria = '';
$status_categoria = '';

if ($_POST) {
    $id = $_POST['txtid'];

    $sql = $conn->query('select * from categoria where id_categoria =' . $id);
    if ($sql->rowCount() >= 1) {
        foreach ($sql as $row) {
            $id_categoria = $row[0];
            $nome_categoria = $row[1];
            $desc_categoria = $row[2];
            $obs_categoria = $row[3];
            $status_categoria = $row[4];
        }
    } else {
        echo '<p>Categoria inexistente!</p>';
    }
}
?>