<?php

    if(isset($_GET['p'])) {
        $arquivo = $_GET['p'];    
    }
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>CRUD - Prog Web 2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>

        
        <!-- Custom styles for this template -->
        <link href="css/dashboard.css" rel="stylesheet">
    </head>
    <body>
        
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Unaerp 2021</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Sign out</a>
        </div>
    </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <?php 
                include('menu.php');
            ?>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <?php
                include($arquivo.'.php');
            ?>

            </main>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/feather.min.js"></script>
    <!-- <script src="js/Chart.min.js"></script> -->
    <script src="js/dashboard.js"></script>
  </body>
</html>
