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
            <input type="text" class = "form-control" name = "txtnome" placeholder ="Nome do Usuário" value = "<? $nomeusuario ?>"> 
        </div>
        .<div class="col-sm-12">
            <input type="date" class = "form-control" name = "txtnascimento" placeholder = "data de nascimento" value="<?= substr($nascimentousuario, 0, 10) ?>">
        </div>
        
        .<div class="col-sm-2">
            <input type = "text" class= "form-control" name="txtlogin" placeholder = "Login do Usuário" value="<?= $loginusuario ?>">
        </div>

        .<div class="col-sm-2">
            <input type = "text" class = "form-control" name = "txtsenha" placeholder = "senha do Usuário" value = "<?= $senhausuario ?>">
        </div>
        
        <div class = "row mt-3">
            .<div class="col-sm-8">
                <input type = "file" class = "form-control" name = "txtimg" id = "txtimg" placeholder = "Imagem do Usuário" value = "<?= $imagemusuario ?>">
            </div>
            .<div class="col-sm-4">
                <div>
                <select name="txtStatus" id="txtStatus" class="form-control">
                        <option value="">--Selecione um Status</option>
                        <option value="Ativo" <?= ($statususuario == 'Ativo' ? 'selected' : "") ?>>Ativo</option>
                        <option value="Inativo" <?= ($statususuario == 'Inativo' ? 'selected' : "") ?>>Inativo</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            .<div class="col-sm-12">
                <textarea name="txtobs" id= "txtobs" row="5" class = "form-control" placeholder = "Observação do Usuário"><?= $obsusuario ?></textarea>
            </div>
        </div>
    </div>
    <div class = "row mt-3">
        <div class = "col-sm-12 text-end">
            <button name= "btocadastrar" id= "btocadastrar" class = "btn btn-sucess"
            formaction = "##">cadastrar</button>  <!----- coloque a tela para cadastrar aqui -->
            <button id="btnalterar" name = "btnalterar" class = "btn btn-secondary" formaction= "##" value = "alterar">alterar</button> <!--volte aqui e insira uma tela-->
            <!-- <a href="##" name = "btolimpar" id= "btolimpar" class="btn btn-primary">Limpar</a> -->
            <button name = "btoexcluir" id= "btoexcluir" class= "btn btn-info" formaction= "usuario_excluir.php">Excluir</button>
            <button name = "btosair" id= "btosair" class = "btn btn-danger">Sair</button>
        </div>
    </div>



    </form>
</div>