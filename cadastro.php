<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--> 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadatro Filmes</title>
        <link rel="stylesheet" href="/css/bootstrap.css" />
        <link rel="stylesheet" href="/css/bootstrap-theme.css" />
        <link rel="stylesheet" href="/css/principal.css" />
        <script type="text/javascript" src="/js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/cadastro.js"></script>
    </head>
    <body>

    <main>
        <?php include_once 'menu.php'?>
        <div class="container">
            <div class="row">
 
                <form class="form-horizontal" id="form-cadastro">
                    <fieldset>
                        <input type="hidden" name="id" id="id" />
                        <!-- Form Name -->
                        <legend>Cadastro de Filme</legend>

                        <div class="row" id="alertas">

                        </div>
                        <!-- Text input-->
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label" for="nome"> 
                               Título do Filme</label>
                            <div class="col-md-4">
                                <input id="nome" name="nome" type="text" placeholder="Título do Filme" class="form-control input-md" >
                 
                            </div>
                            
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label" for="ano">Ano Lançamento</label>
                            <div class="col-md-4">
                                <select id="ano" name="ano" class="form-control">
                                        <option value="" selected>Selecione</option>
                                </select>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label" for="sinopse">Sinopse</label>
                            <div class="col-md-4">                     
                                <textarea class="form-control" id="sinopse" name="sinopse"></textarea>
                            </div>
                        </div>

                        <!-- Multiple Radios -->
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label" for="tipo">Tipo</label>
                            <div class="col-md-4">
                                <div class="radio">
                                    <label for="tipo-0">
                                        <input type="radio" name="tipo" id="tipo-0" value="lancamento" checked="checked">
                                        Lançamento
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="tipo-1">
                                        <input type="radio" name="tipo" id="tipo-1" value="catalogo">
                                        Catálogo
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Multiple Radios -->
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label" for="midia">Midia</label>
                            <div class="col-md-4">
                                <div class="radio">
                                    <label for="midia-0">
                                        <input type="radio" name="midia" id="midia-0" value="DVD" checked="checked">
                                        DVD
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="midia-1">
                                        <input type="radio" name="midia" id="midia-1" value="Blu-ray">
                                        Blu-ray
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="midia-2">
                                        <input type="radio" name="midia" id="midia-2" value="VHS">
                                        VHS
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label" for="disponivel">Quantidade disponível</label>  
                            <div class="col-md-4">
                                <input id="disponivel" name="disponivel" type="text" placeholder="Informe a quantidade" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Select Multiple -->
                        <div class="form-group has-feedback">
                            <label class="col-md-4 control-label" for="categoria">Categoria</label>
                            <div class="col-md-4">
                                <select id="categoria" name="categoria[]" class="form-control" multiple="multiple">
                                    <option value="" selected>Selecione</option>
                                    <option value="Ação">Ação</option>
                                    <option value="Aventura">Aventura</option>
                                    <option value="Comédia">Comédia</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Terror">Terror</option>
                                    <option value="Infantil">Infantil</option>
                                </select>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="cadastrar"></label>
                            <div class="col-md-4">
                                <button id="cadastrar" name="cadastrar" class="btn btn-primary" type="submit">Cadastrar</button>
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
    <?php
// put your code here
    ?>
</body>
</html>
