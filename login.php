<?php
    @session_start();
    
    if((isset ($_SESSION['usu_login']) == true) and (isset ($_SESSION['usu_senha']) == true)){
        header('location:view/index.php');
    }    
?>

<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>DASHBOARD ERP</title>
 
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/dashboardERP/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="smoke-v3.1.1/css/smoke.min.css" rel="stylesheet">

    <nav class="navbar navbar-login" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">DASHBOARD ERP</div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- /.navbar-collapse -->
    </nav>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <a class="navbar-brand text-login">Dashboard ERP</a>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- /.navbar-collapse -->
        </nav>

</head>

<body class="login">

    <br><br><br><br>
    <div id="msgRetorno"></div>
    <!--<div class="tgeral" id="t01main">HelpDesk!</div>-->
    <center>
        
        <!--<img class="logo" width="400px" height="160px" src="image/logo.png">-->

    <br><br>
     
    <form role="form" action="view/index.php" class="signin-wrapper" id="frmLogin" name="frmLogin">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Login:" name="USU_LOGIN" id="USU_LOGIN"> 
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha:" name="USU_SENHA" id="USU_SENHA">
        </div>
        <div class="actions">  
            <input id="btnLogin" class="btn btn-primary buttonMedio" type="button" value="Entrar" onclick="efetuarLogin()">
        </div>
    </form>

    <br><br>

    </center>

<script language="javascript" src="js/dashboardERP/jsLogin.js"></script>

<script src="smoke-v3.1.1/js/smoke.min.js"></script>
<script src="smoke-v3.1.1/lang/es.min.js"></script>
</body>

</html>