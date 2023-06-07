<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Login de Usuário</title>
</head>
<body>
    <?php
        $mensagem = "";    
        if($_POST)
        {
            include_once('testeconexao.php');
            $login = $_POST['txtlogin'];
            $senha = $_POST['txtsenha'];

            try {
                $sql = $conn->query('
                    select * from usuario
                    where
                        usuario_usuario = "'.$login.'" and
                        senha_usuario = "'.$senha.'"
                ');

                if($sql->rowCount()==1)
                {
                    session_start();

                    foreach ($sql as $row) {
                        $_SESSION['idusuario'] = $row[0];
                        $_SESSION['nomeusuario'] = $row[1];
                        $_SESSION['loginusuario'] = $row[4];
                        $_SESSION['imgusuario'] = $row[6];

                        header('Location:_sistema.php');
                    }
                }
                else{
                    $mensagem = 'Erro, usuário ou senha inválido';
                }
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
    ?>

    <style>
        body {
        margin: 0;
        padding: 0;
        background-color: #17a2b8;
        height: 100vh;
        }

        #login .container #login-row #login-column #login-box {
        margin-top: 120px;
        max-width: 600px;
        height: 320px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
        }

        #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
        }

        #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
        }
    </style>

    <div id="login">
            <h3 class="text-center text-white pt-5">Login form</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-info">Login</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info">Usuário:</label><br>
                                    <input type="text" name="txtlogin" id="txtlogin" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Senha:</label><br>
                                    <input type="text" name="txtsenha" id="txtsenha" class="form-control"><br>
                                </div>
                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
                                    <br>
                                    <?php echo '<p>'.$mensagem.'</p>'?>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>