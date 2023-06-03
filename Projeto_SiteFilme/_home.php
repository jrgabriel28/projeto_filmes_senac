<?php
    include_once('testeconexao.php');

    $sql = $conn->query('select * from filme');

    foreach ($sql as $row)
    {
        echo "
            <div class='col-sm-4 text-center p-3'>
                <a href='#'>
                <div class='card'>
                    <img src='$row[3]' class='cfilme'>
                </div>
                    <div class='row'>
                        <div class='col-sm-3'>
                            <h3>$row[2]</h3>
                        </div>
                        <div class='col-sm-1'>
                            <h3>$row[5]</h3>
                        </div>
                    </div>    
                </a>    
            </div>      
        ";
    }


?>