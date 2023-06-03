<?php
include_once('testeconexao.php');

$sql = $conn->query('select * from filme where id_filme ='($_GET["id"]));

foreach ($sql as $row) {
    echo "
    <div class = 'col-sm-4 text-center p-3>
    <a href= '#'>
    <div class = 'card'>
        <img src=''$row[3]
        <h3> $row[2]</h3>
    </div>
    .<div class=  'col-sm-8 text-justify p-3>
        <p> $row[4] </p>
    </div>

        <hr>

     <div class = 'row'> 
    
        <div class = 'col-sm-4 text-center p-3>
            <h3> Nota: $row[5] </h3>       
            </div>
    </div>
    ";
}

?>