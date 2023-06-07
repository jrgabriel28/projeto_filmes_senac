<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.js">
    <?php include_once('testeconexao.php') ?>
    <title>Gerenciamento de Cadastros</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
                include_once('login_autenticar.php');
                include_once('_topo.php') 
            ?>
        </div>
        <div class="row">
            <?php include_once('_menu1.php') ?>
        </div>

        <div class="row">
            <div class="col-sm-12" id="conteudo">
                <?php 
                    if(isset($_GET['tela']))
                    {
                        if($_GET['tela']=='usuario')
                        {
                            include_once('frm_usuario.php');
                        }
                        elseif($_GET['tela']=='filme')
                        {
                            include_once('frm_filme.php');
                        }
                        elseif($_GET['tela']=='categoria')
                        {
                            include_once('frm_categoria.php');
                        }
                        elseif($_GET['tela']=='sair')
                        {
                            include_once('index.php');
                        }
                        elseif($_GET['tela']=='nada')
                        {
                            include_once('nada.php');
                        }
                    }
                    else
                    {
                        include_once('nada.php');
                    }    

                ?>
            </div>
        </div>
        <div class="row">
            <?php include_once('_rodape.php') ?>
        </div>
    </div>

    
</body>
</html>