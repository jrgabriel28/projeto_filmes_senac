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
    <div class="container ">
        <div class="row">
            <?php include_once('_topo.php'); 

                include_once('testeconexao.php');
                
                $sql = $conn->query('select * from filme where id_filme =' . $_GET["id"]);

                {
                    
                    echo "
                        <div class='row'>
                            <div class='col-sm-5 text-center mt-3'>
                                <h2>$row[2]</h2>
                            </div>
                        </div>

                        <div class = 'col-sm-5 text-center mt-3'>
                            <img src = img/$row[0]/$row[3] class='w-75' id='cfilme'>
                        </div>
                        <div class ='col-sm-7 mt-3 '>
                            id: $row[0]
                            <hr>
                            Id categoria: $nomecategoria
                            <hr>
                            Sinopse do filme: $row[4]
                            <hr>
                            Nota do filme: $row[5]
                            <hr>
                            <hr>    
                        </div>
                    "; //lembre de trocar os valores das rows de acordo com o banco de dados.
                }
            ?>
        </div>
        <a href="index.php">Voltar para home</a>
    </div>

</body>

</html>