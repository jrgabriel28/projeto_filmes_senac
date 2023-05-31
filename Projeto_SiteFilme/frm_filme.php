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
    <?php include_once('filme_pesquisar.php')?>
</head>

<body>
    <div class="container mt-3">
        <div class="row mt-3">
            <div class="col-sm-12">
                <h1>Teste de Filme</h1>
            </div>
        </div>

        <form action="" method="post" class="form-control">
            <!-- ID filme + bto de pesquisa -->
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="number" class="form-control" min="0" name="txtidfilme" value="<?= $idfilme?>"
                        placeholder="ID do Filme">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-primary" name="btopesquisar" id="btopesquisar"
                        formaction="frm_filme.php">&#128269;</button>
                </div>
            </div>
            <!-- Nome do filme + nota -->
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtnome" id="txtnome" placeholder="Nome do filme" value="<?=$nomefilme?>">
                </div>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="txtnota" min="0" placeholder="Nota do filme" value="<?=$notafilme?>">
                </div>
            </div>
            <!-- Categoria + Id da categoria + status  -->
            <div class="row mt-3">
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="txtcategoria" id="txtnome" placeholder="Categoria" >
                </div>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="txtidcategoria" min="0" placeholder="ID da categoria" value="">
                </div>
                <div class="col-sm-4">
                    <select name="txtstatus" id="textstatus" class="form-control">
                        <option value="">--Selecione um Status--</option>
                        <option value="ativo"<?=($statusfilme=='ativo'?'selected':"") ?>>Ativo</option>
                        <option value="inativo"<?=($statusfilme=='inativo'?'selected':"") ?>>Inativo</option>
                    </select>
                </div>
            </div>
            <!-- Img do filme + Sinopse -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="txtimg" id="txtimg" placeholder="Imagem do filme" value="<?=$imgfilme?>">
                </div>
                <div class="col-sm-6">
                    <textarea name="txtsinopse" id="txtsinopse" rows="5" class="form-control" formaction="" placeholder="*Sinopse do filme"><?=$sinopsefilme?></textarea>
                </div>
            </div>
            <!-- Observação -->
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea class="form-control" name="txtobs" id="txtobs" rows="5"  placeholder="Observação do filme"><?=$obsfilme?></textarea>
                </div>
            </div>
            <!-- Botões -->
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar" id="btoCadastrar" class="btn btn-primary" formaction="filme_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar" id="btoAlterar" class="btn btn-danger" formaction="filme_alterar.php">Alterar</button>
                    <button name="btoLimpar" id="btoLimpar" class="btn btn-secundary" formaction="frm_filme.php">Limpar</button>
                    <button name="btoExcluir" id="btoCExcluir" class="btn btn-warning" formaction="filme_excluir.php">Excluir</button>
                    <button name="btoExcluir" id="btoCExcluir" class="btn btn-warning" formaction="frm_filme.php">Sair</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>