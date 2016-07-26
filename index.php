<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-filter" data-target="pagado">Pagado</button>
                                        <button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendiente</button>
                                        <button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelado</button>
                                        <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
                                    </div>
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
