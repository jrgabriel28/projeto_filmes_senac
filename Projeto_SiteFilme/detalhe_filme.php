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
            ?>
        </div>
        <div classe="row">
            <?php include_once('_menu2.php') ?>
        </div>
        <div classe="row">
            <?php
                
                $sql = $conn->query('select * from filme where id_filme =' . $_GET["id"]);

                {
                    echo"
                        <div class='row'> "/*Titulo*/"
                            <div classe='col-sm-5 text-center mt-3'>
                                <h2>$row[2]</h2>
                            </div>
                        </div>
                        <div class='row'> "/*Capa do filme*/"
                            <div class = 'col-sm-5 text-center mt-3'>
                                <img src = img/$row[0]/$row[3] class='w-75' id='cfilme'>
                            </div>
                            <div class='col-sm-7 mt-3'>
                                <div class='row'> "/*sinopse*/"
                                    <div class='col-sm-12'>
                                        <p>$row[4]</p>
                                    </div>
                                </div>
                                <div class='row'> "/*Categoria*/"
                                    <div class='col-sm-12'>
                                        <p>Categoria: $row[8]</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row'> "/*Nota*/"
                            <div classe='col-sm-5 text-center mt-3'>
                                <h2>$row[5]</h2>
                            </div>
                        </div>

                    "
                }
            ?>
        </div>
        <a href="index.php">Voltar para home</a>
    </div>

</body>

</html>