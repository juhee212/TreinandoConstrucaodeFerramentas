<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../templates/style/estoque.css" />
    <link rel="shortcut icon" href="../../www/templates/img/favicon.png">
    <script src="https://kit.fontawesome.com/af7785c45e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../../templates/js/json.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <title>Site interno - Tramo</title>
</head>


<body>
    <nav>
        <div class="logo">
            <img class="logotop" src="../../templates/img/logo-tramoengenharia.png">
        </div>
        <div class="nav-links nav-active">
        </div> 
        <!-- <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="#" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../../modulos/logout.php">sair</a></li>
            </ul>
        </div> -->
    </nav>
    
    <nav class="nav_tabs">
        <ul >
            <li>
                <input type="radio" id="tab1" class="rd_tab" name="tabs" checked>
                <label for="tab1" class="tab_label">
                <i class="fa-solid fa-chart-line"></i><br>
                    Dashboard
                </label>
                <div class="tab-content">
                    <!--  -->
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tab" id="tab2">
                <label for="tab2" class="tab_label">
                <i class="fa-solid fa-pen"></i><br>
                    Cadastro
                </label>
                <div class="tab-content">
                    <div class="form-body">
                        <div class="row">
                            <div class="form-holder">
                                <div class="form-content">
                                    <div class="form-items">
                                        <h3>Cadastro de produtos</h3>
                
                                        <form class="requires-validation" action="../../../modulos/cad_produtos.php" method="POST">

                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="nome_produto" placeholder="Nome do produto">
                                            </div>

                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="id_produto"  placeholder="Código do produto" required>
                                            </div>

                                            <div class="col-md-12">
                                                <select class="form-select mt-3" id="categoria" name="categoria" required>
                                                        <option>Categoria</option>
                                                </select>
                                            </div>


                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="preco_un" placeholder="Valor unitário" onkeypress="$(this).mask('R$ ##.##0.00', {reverse: true});">
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="text" name="cod_fornecedor" placeholder="Código do fornecedor">
                                            </div>
                                    

                                            <div class="form-button mt-3">
                                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <input  type="radio" name="tabs" class="rd_tab" id="tab3">
                <label for="tab3" class="tab_label">
                <i class="fa-solid fa-cart-flatbed"></i><br>
                    Inventário
                </label>
                <div class="tab-content">
                <!-- cod produto, quantidade, nome do produto, quanto foi cada produto, consolidadora -->
                    <table id="myTable1" style="border:1;">
                        <thead>
                            <tr>
                                <th>Cod Produto</th>
                                <th>Nome do Produto</th>
                                <th>Categoria</th>
                                <th>Preço unitário</th>
                                <th>Quantidade em estoque</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include("../../../modulos/showProdutos.php");?>
                        </tbody>
                    </table>
                </div>
            </li>
            <li>
                <input  type="radio" name="tabs" class="rd_tab" id="tab4">
                <label for="tab4" class="tab_label">
                <i class="fa-solid fa-money-bill-transfer"></i><br>
                    Movimentação 
                </label>
                <div class="tab-content">
                    <table id="myTable2" style="border:1;">
                        <thead>
                            <tr>
                                <th>ID Movimento</th>
                                <th>ID produto</th>
                                <th>Quantidade</th>
                                <th>Valor un</th>
                                <th>Valor Total</th>
                                <th>Data Movimento</th>
                                <th>Movimento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include("../../../modulos/move.php");?>
                        </tbody>
                    </table>
                </div>
            </li>
            <li>
                <input  type="radio" name="tabs" class="rd_tab" id="tab5">
                <label for="tab5" class="tab_label">
                <i class="fa-solid fa-arrow-right-arrow-left"></i><br>
                    Entrada/Saida 
                </label>
                <div class="tab-content">
                    <div class="form-body">
                        <div class="row">
                            <div class="form-holder">
                                <div class="form-content">
                                    <div class="form-items">

                                        <h3>Registrar Movimento</h3>
                                        <div class="col-md-12">
                                            <input class="form-control" value="<?php echo date("Y-m-d");?>" id="dataEntrada"  >
                                        </div>
                
                                        <form class="requires-validation"  action="../../../modulos/movimento.php"  method="post"  >

                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="id_produto" placeholder="ID do produto">
                                            </div>

                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="quantidade"  placeholder="Quantidade" required>
                                            </div>

                                        
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="valor" placeholder="Valor unitário" onkeypress="$(this).mask('R$ ##.##0.00', {reverse: true});">
                                            </div>

                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="quem_solicitou" placeholder="Pessoa que solicitou">
                                            </div>

                                            <div class="col-md-12">
                                                <select class="form-select mt-3" name="consolidadora" required>
                                                    <option>Tramo Equipamentos LTDA NE</option>
                                                    <option>Tramo LTDA</option>
                                                    <option>Tramo Serviços</option>
                                                    <option>Tramo Painéis </option>
                                                    <option>Tramo Engenharia</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12 mt-3" style="margin-top: 10px;">
                                                <label class="mb-3 mr-1" for="gender">Movimento: </label>

                                                <input type="radio" class="btn-check" id="secret"name="movimento" value="1">
                                                <label class="btn btn-sm btn-outline-secondary" for="male">Entrada</label>

                                                <input type="radio" class="btn-check" id="secret"  name="movimento" value="-1"required>
                                                <label class="btn btn-sm btn-outline-secondary" for="female">Saida</label>
                                            </div>

                                            <div class="form-button mt-3">
                                                <button id="submit" type="submit" class="btn btn-primary">Registrar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <script src="../../templates/js/main.js"></script>
</body>

</html>