<?php
if(!isset($_COOKIE['locadora'])){
    
    header("location:/login.php");
    
}
?>

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
        <script type="text/javascript" src="js/catalogo.js"></script>
    </head>
    <body>

    <main>

        <?php include_once 'menu.php' ?>
        <div class="container">
            <div class="row">
                <section class="content">                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <div class="col-sm-3">
                                    <input type="text" id="busca" name="busca" class="form-control" placeholder="Buscar o filme"/>
                                </div>
                                <div class="pull-right col-sm-3">
                                    <select id="filtro-categoria" class="form-control">
                                        <option value=""> --Categoria --</option>
                                        <option value="Ação">Ação</option>
                                        <option value="Aventura">Aventura</option>
                                        <option value="Comedia">Comédia</option>
                                        <option value="Drama">Drama</option>
                                        <option value="Terror">Terror</option>
                                        <option value="Infantil">Infantil</option>
                                    </select>
                                </div>
                                <div class="pull-right">
                                    
                                    <div class="btn-group" id="filtro">
                                        <button type="button" class="btn btn-success btn-filter" data-target="lancamentos">Lançamentos</button>
                                        <button type="button" class="btn btn-danger btn-filter" data-target="catalogos">Catálogos</button>
                                        <button type="button" class="btn btn-primary btn-filter" data-target="disponiveis">Disponíveis</button>
                                        <button type="button" class="btn btn-default btn-filter active" data-target="all">Todos</button>
                                    </div>
                                    
                                    <br><br>
                                </div>
                                <div class="table-container">
                                    <table class="table table-filter">
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
            <div class="content-footer">
                <p>                
                    Powered By Welington <span class="glyphicon glyphicon-briefcase"></span>
                </p>
            </div>
        </div>

    </main>
    <?php
// put your code here
    ?>
</body>
</html>
