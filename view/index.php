<?php 

@session_start();

$timestamp = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard ERP</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/dashboardERP/style.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <a class="navbar-brand">Dashboard ERP</a>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">   
                <li class="dropdown">
                    <a><?php print gmdate("d/m/Y", $timestamp) ?></a>
                </li>
                <li class="dropdown">
                    <a><?php print $_SESSION['usu_nome'].' '.$_SESSION['usu_sobrenome'] ?></a>
                </li> 
                <li class="dropdown">
                    <a href="sair.php"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Painel Principal</a>
                    </li>
                    <li>
                        <a href="fluxoDeCaixa.php"><i class="fa fa-fw fa-bar-chart-o"></i> Fluxo de caixa</a>
                    </li>
                    <!--<li>
                        <a href="entradasSaidas.php"><i class="fa fa-exchange"></i> Entradas/Saídas</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Painel Principal</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-usd fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">R$12.357,31</div>
                                        <div>Saldo Atual</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-usd fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">R$300,00</div>
                                        <div>Saldo Devedor(Mês)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Adimplência de alunos</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-arrow-down"></i> Entradas</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge ">R$120.00</span>
                                        <i class="fa fa-user"></i> Matrícula Aluno 
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge ">R$110.00</span>
                                        <i class="fa fa-fw fa-money"></i> Pagamento Mensalidade
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">R$50.00</span>
                                        <i class="fa fa-graduation-cap"></i> Pagamento Farda
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">R$120.00</span>
                                        <i class="fa fa-user"></i> Matrícula Aluno
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">R$120.00</span>
                                        <i class="fa fa-user"></i> Matrícula Aluno
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">R$110.00</span>
                                        <i class="fa fa-fw fa-money"></i> Pagamento Mensalidade
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">R$75.00</span>
                                        <i class="fa fa-futbol-o"></i> Pagamento Jogos Internos
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="fluxoDeCaixa.php">Mais detalhes <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-arrow-up"></i> Saídas</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">R$92.50</span>
                                        <i class="fa fa-archive"></i> Compra Material Limpeza
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">R$80.00</span>
                                        <i class="fa fa-print"></i> Carregamento Tonner
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">R$274.87</span>
                                        <i class="fa fa-lightbulb-o"></i> Pagamento Energia
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">R$984.95</span>
                                        <i class="fa fa-fw fa-user"></i> Pagamento Funcionário
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">R$956.80</span>
                                        <i class="fa fa-fw fa-user"></i> Pagamento Funcionário
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">R$150.00</span>
                                        <i class="fa fa-desktop"></i> Pagamento Sistema
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">R$40.00</span>
                                        <i class="fa fa-tint"></i> Compra Água
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="fluxoDeCaixa.php">Mais detalhes <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery-2.1.1.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>

</body>

</html>
