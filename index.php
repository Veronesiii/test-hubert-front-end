<?php
    if($_POST){
        $arquivo="condominios.json";
        if (file_exists($arquivo)) {
            $dados=file_get_contents($arquivo);
            $dados=json_decode($dados,true); // para array associativo // adicionei , true para tornar o array associativo// sem ele ele retorna um objeto.
            $formdados = $_POST;
            $dados["condominios"][]= $formdados;
            $dadosemjson= json_encode($dados); //json string
            file_put_contents($arquivo, $dadosemjson);
        }else{
            $dados=["condominios"=>[]];
            $dados["condominios"][]= $_POST;
            $formdados=json_encode($dados); //json string
            file_put_contents($arquivo, $formdados);
        } 
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
    <title>Hubert</title>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo_hubert.svg" alt="hubert-brand"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Agendamentos</a></li>
                    <li class="active"><a href="#">Ficha Técnica</a></li>
                    <li><a href="#">Inventário</a></li>
                    <li><a href="#">Vistoria</a></li>
                    <li><a href="#">Relatório</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown edificio">
                        <a id="ap" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false"><i class="far fa-building"></i> | 023543 - Edifício Platinum Tower
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="pagina2.php"><i class="far fa-building"></i> | 023542 - Edifício Golden Tower</a>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false"><img src="images/150.png" class="foto-perfil" alt="foto-perfil">
                            Lucia Almeida <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <p><span>Ficha Técnica</span> > COD 023543 - Edifício Platinum - Rua Felicidade 207 , Parque, São
                        Paulo - SP</p>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><strong>Edifício Platinum </strong><span class="specs">COD 023543</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="osp col-md-12">
                    <p><strong>Endereço</strong>: Rua Felicidade</p>
                    <p><strong>Número</strong>: 207</p>
                    <p><strong>Bairro</strong>: Parque</p>
                    <p><strong>Cidade</strong>: São Paulo</p>
                    <p><strong>CEP</strong>: 04758-190</p>
                </div>
            </div>
            <div class="row">
                <div class="osp2 col-md-12">
                    <p><strong>última atualização em 01/01/2017</strong></p>
                    <p><strong>Vistoriador</strong>: José Carlos</p>
                </div>
            </div>
            <form action="index.php" method="post" id="form-condominio">
                <input type="hidden" name="condominio-id" id="condominio-id" value="023543">
                <input type="hidden" name="condominio-nome" value="Edifício Platinum">
                <input type="hidden" name="endereco" value="Rua Felicidade">
                <input type="hidden" name="numero" value="207">
                <input type="hidden" name="bairro" value="Parque">
                <input type="hidden" name="cidade" value="São Paulo">
                <input type="hidden" name="CEP" value="04758-190">
                <input type="hidden" name="ultima-atualizacao" value="01/01/2017">
                <input type="hidden" name="vistoriador" value="José Carlos">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Ficha Ténica</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#info-contato">Informações e Contato</a></li>
                            <li><a data-toggle="tab" href="#regioes-locais">Regiões e Locais</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="info-contato" class="tab-pane fade in active">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="incorporadora">Incorporadora</label><br>
                                        <input class="form-control" id="incorporadora" type="text" name="incorporadora"
                                            placeholder="ABC LTDA">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="engenheiro">Engenheiro</label><br>
                                        <input class="form-control" id="engenheiro" type="text" name="engenheiro"
                                            placeholder="Luis Carlos Neto">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="metodo-construtivo">Método Construtivo</label><br>
                                        <input class="form-control" id="metodo-construtivo" type="text" name="metodo-construtivo">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="construtora">Construtora</label><br>
                                        <input class="form-control" id="construtora" type="text" name="construtora"
                                            placeholder="Constructure LTDA">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="outros-responsaveis">Outros Responsáveis</label><br>
                                        <input class="form-control" id="outros-responsaveis" type="text" name="outros-responsaveis">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="telefone">Telefone</label><br>
                                        <input class="form-control" id="telefone" type="text" name="telefone">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <h4>Características do Empreendimento</h4>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="tipoap">Tipo</label>
                                            <select class="form-control" name="tipoap" id="tipoap">
                                                <option value="apartamentos">Apartamentos</option>
                                                <option value="casas">Casas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="area-construida">Área Construida</label>
                                            <input class="form-control" id="area-construida" name="area-construida"
                                                type="text" placeholder="12000 m2">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="area-do-terreno">Área Do Terreno</label>
                                            <input class="form-control" id="area-do-terreno" name="area-do-terreno"
                                                type="text" placeholder="129000 m2">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="area-verde">Área Verde</label>
                                            <input class="form-control" id="area-verde" name="area-verde" type="text"
                                                placeholder="9000 m2">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="obs">Observações</label>
                                            <textarea class="form-control" rows="5" id="obs" name="obs"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <h4>Informações Técnicas</h4>
                                    </div>
                                    <div class="col-xs-12">
                                    <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="protecao">Proteção Patrimonial</label>
                                            <select class="form-control" name="protecao" id="protecao">
                                                <option value="nao-verificado">Não Verificado</option>
                                                <option value="verificado">Verificado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="antenas">Antenas</label>
                                            <select class="form-control" name="antenas" id="antenas">
                                                <option value="nao-possui">Não Possui</option>
                                                <option value="possui">Possui</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="cftv">Sistema CFTV</label>
                                            <select class="form-control" name="cftv" id="cftv">
                                                <option value="nao-verificado">Não Verificado</option>
                                                <option value="verificado">Verificado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="qtcameras">Qtd. de Câmeras</label>
                                            <input class="form-control" id="qtcameras" name="qtcameras" type="number" placeholder="38">
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr style="margin-top:80px;">
                                </div>
                                <div class="col-xs-12">
                                    <div id="lista-erros">

                                    </div>
                                </div>
                            </div>
                            <div id="regioes-locais" class="tab-pane fade">
                                <h3>Menu Vazio</h3>
                                <p>Conteudo da pagina regioes e locais.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-default">Salvar e Sair</button>
                                <button class="btn btn-success" id="btn-finalizar" type="button">ENVIAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>