<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Locadora</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.css" />
        <link rel="stylesheet" href="css/principal.css" />
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
    </head>
    <body>
    <main>
        <div class="container" style="margin-top:30px">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title"><strong>Entrar no sistema</strong></h3>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Esqueceu sua senha?</a></div>
                    </div>

                    <div class="panel-body">
                        <form role="form" action="/model/login.php" method="post" id="form-login">
                            <div class="alert alert-danger " id="alert-erro" style="display:none">
                                Usuário ou senha incorretos!
                            </div>
                            <div style="margin-bottom: 12px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Login">                                        
                            </div>

                            <div style="margin-bottom: 12px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="Senha">
                            </div>

                            <div class="input-group">
                                <div class="checkbox" style="margin-top: 0px;">
                                    <label>
                                        <input id="login-remember" type="checkbox" name="remember" value="1"> Manter conectado
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Acessar</button>

                            <hr style="margin-top:10px;margin-bottom:10px;" >

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php
// put your code here
    ?>
</body>
</html>
