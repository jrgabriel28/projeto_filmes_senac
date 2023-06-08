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

<body id="fund">
    <div class="container">
        <div class="row">
            <?php include_once('_topo.php');
                  include_once('_menu2.php'); 

                include_once('testeconexao.php');
            ?>
        </div>
        <div classe="row">
            <?php
                
                $sql = $conn->query('select filme.*, categoria.nome_categoria from filme inner join categoria on categoria.id_categoria = filme.id_categoria_filme WHERE filme.id_filme =' . $_GET["id"]);

                foreach($sql as $row)
                {
                    echo"
                        <div = class='container' id='modulo'>
                            <div class='row mt-3'> 
                                <div classe='col-sm-5 mt-3'>
                                    <br>
                                    <h2><b>$row[2]</b></h2>
                                </div>
                            </div>
                            <div class='row' id='sinopse'> 
                                <div class = 'col-sm-5 mt-3 text-center'>
                                    <img src = img/$row[0]/$row[3] class='w-75' id='cfilme'> <br>
                                    <b>Nota: $row[5]<br>
                                    Categoria: $row[8]</b>
                                </div>
                                <div class='col-sm-7 mt-3' >
                                    <h2>$row[4]</h2>
                                </div>
                            </div>
                            <div class='row'> 
                                <div classe='col-sm-12 mt-3'>
                                    <a href='_sistema.php?tela=filme' id='edit'>Editar</a>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
        </div>

        <div class="row">
            <?php include_once('_rodape.php')?>
        </div>
    </div>

</body>

</html>