<?php
    include_once('testeconexao.php');

    $sql = $conn->query('select * from filme');

    foreach ($sql as $row)
    {
        echo "
            <div class='col-sm-3 text-center p-3'>
                <a href='detalhe_filme.php?id=$row[0]' target='_blanc'>
                <div class='card text-center'>
                    <img src = img/$row[3] id='cfilme'>
                    <h3>$row[2]</h3>
                    <h3 class='nota'>Nota:$row[5]</h3>
                </div>
                </a>    
            </div>      
        ";
    }


?>