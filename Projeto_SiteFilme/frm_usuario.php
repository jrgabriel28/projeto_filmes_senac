<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once('usuario_pesquisar') ?>
</head>
<body>
    
</body>
</html>
<div class="container" mt-3>
    <div class ="row">
        <div class="col-sm-12">
            <h1>Usuário</h1>
        </div>
    </div>
    <form action="" method="post">
    .<div class="row">
        .<div class="col-sm-2">
            <input type="number" class = "form-control" min="0" name="txtid" placeholder="ID do Usuário" value="<?= $idusuario ?>">           
        </div>
        .<div class="col-sm-2">
            <button class ="btn btn-primary" formaction="##"></button> <!-- volte aqui quando o sistema estiver ok -->
        </div>
        <div class="col-sm-12">
            <input type="text" class = "form-control" name = "txtnome" placeholder ="Nome do Usuário" value = "<?$nomeusuario?>"> 
        </div>
        .<div class="col-sm-12">
            <input type="date" class = "form-control" name = "txtnascimento" placeholder = "data de nascimento" value="<?= substr($nascimentousuario,0,10)?>">
        </div>
        <!-- na tela cadastro linha 30 -->
    </div>



    </form>
</div>