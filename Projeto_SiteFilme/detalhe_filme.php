<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include_once('testeconexao.php');

            $sql = $conn->query('select * from filme where id_filme =' . $_GET["id"]);

            foreach ($sql as $row)
             {
                echo "
                    <div class = 'col-sm-3 text-center p-3'>
                      
                    </div>
                    <div class ='col-sm-9-p3'>
                        <h3>id: $row[0] </h3>
                        <hr>
                        <h3>id categoria: $row[1] </h3>
                        <hr>
                        <h3>Nome do filme: $row[2] </h3>
                        <hr>
                        <h3>  <img src='$row[3]' class = 'w-50'</h3>
                        <hr>
                        <h3>Sinopse do filme: $row[4]</h3>
                        <hr>
                        <h3>Nota do filme: $row[5]</h3>
                        <hr>
                        <h3>Observação: $row[6]</h3>
                        <hr>    
                        <h3>Status do filme $row[7]</h3>
                    </div>
                "; //lembre de trocar os valores das rows de acordo com o banco de dados.
            }

            ?>
        </div>
    </div>

</body>

</html>