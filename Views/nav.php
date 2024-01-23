<?php
if (isset($_SESSION['usuario_id']) && isset($_SESSION['usuario_nome'])) {
    $usuario_id = $_SESSION['usuario_id'];
    $usuario_nome = $_SESSION['usuario_nome'];
    $usuario_email= $_SESSION['usuario_email'];
} 
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>menu</title>
    <link rel="stylesheet" href="../views/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../views/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../views/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../views/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../views/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../views/assets/css/styles.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body id="page-top" style="background-color: #F1F7FC;">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4"></div>
                    <nav class="navbar navbar-expand-md bg-body">
                        <div class="container-fluid">
                            <nav class="navbar navbar-expand-md fixed-top navbar--apple " style="background: #991217; color:white;">
                                <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#menu"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                                    <div class="collapse navbar-collapse" id="menu">
                                        <ul class="navbar-nav flex-grow-1 justify-content-between">
                                            <li class="nav-item d-none d-xs-block d-md-block"><a class="nav-link" style="color: white;" href="/menu"><i class="fa fa-heartbeat apple-logo"></i></a></li>
                                            <li class="nav-item"><a class="nav-link" style="color: white;" href="/bancosdesangue">Bancos de Sangue</a></li>
                                            <li class="nav-item"><a class="nav-link" style="color: white;" href="/calendario">Meu Calendario</a></li>
                                            <li class="nav-item"><a class="nav-link" style="color: white;" href="/profile">Meu Perfil</a></li>
                                            <li class="nav-item d-none d-xs-block d-md-block"><a class="nav-link" style="color: white;" href="/logout"><i class="icon ion-android-exit"></i></a></li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>