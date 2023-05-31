<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <?php include_once('testeconexao.php') ?>
</head>

<body>
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-sm-12">
                <h1>Teste de Filme</h1>
            </div>
        </div>

        <form action="" method="post" class="form-control">
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="number" class="form-control" min="0" name="txtidfilme" value="<?= $idUsuario ?>"
                        placeholder="ID do Usuário">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" name="btopesquisar" id="btopesquisar"
                        formaction="##">&#128269;</button>
                </div>
            </div>


        </form>
    </div>

</body>

</html>