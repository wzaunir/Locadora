<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Clientes</title>
        <link rel="stylesheet" href="/css/bootstrap.css" />
        <link rel="stylesheet" href="/css/bootstrap-theme.css" />
        <link rel="stylesheet" href="/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" />
        <link rel="stylesheet" href="/css/principal.css" />
        <script type="text/javascript" src="/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>  
        <script type="text/javascript" src="/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js"></script>
        <script type="text/javascript" src="/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
        <script type="text/javascript" src="/js/clientes.js"></script>
    </head>
    <body>

    <main>
        <?php include_once 'menu.php' ?>
        <div class="container">
            <div class="row">
                <form class="form-horizontal" id="form-cliente">
                    <fieldset>
                         <input type="hidden" name="id" id="id" />
                        <!-- Form Name -->
                        <legend>Cadastro</legend>
                        <div class="row" id="alertas">

                        </div>
                        <!-- Text input-->
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label" for="nome">Nome</label>  
                            <div class="col-md-4">
                                <input id="nome" name="nome" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label" for="fone">Telefone</label>  
                            <div class="col-md-4">
                                <input id="telefone" name="telefone" type="text" placeholder="Digite seu telefone" class="form-control input-md" required="">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label" for="data-nascimento">Data nascimento</label>  
                            <div class="col-md-4" id="seletor-data">                
                                <div class="input-group date">
                                    <input id="data-nascimento" name="data-nascimento" type="text" class="form-control" placeholder="10/10/1981"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label" for="email">E-mail</label>  
                            <div class="col-md-4">
                                <input id="email" name="email" type="text" placeholder="Digite seu e-mail" class="form-control input-md" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">

                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="cadastrar"></label>
                            <div class="col-md-4">
                                <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <div class="content-footer">
                <p>                
                    Powered By Welington <span class="glyphicon glyphicon-briefcase"></span>
                </p>
            </div>
        </div>
    </main>
</body>
</html>
