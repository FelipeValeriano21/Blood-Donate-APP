<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="../Views/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Views/assets/css/styles.min.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background: url(&quot;../Views/assets/img/ssangue.jpg&quot;)"></div>
            <form id="sondaggi" method="post" name="{HTMLFormName}" action="/logar">
                <h2 class="text-center"><strong>Login que salva vidas 🫀</strong></h2>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"  name="email" placeholder="">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1"  name="senha" placeholder="">  
                  </div>

                  <a href="/register" class="col text-center">Criar uma nova conta</a>
                  
                  <br>
                  <br>
                
                  <?php

                if (isset($_SESSION['loginerror'])) {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Úsuario não encontrado</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    echo $_SESSION['loginerror'];
                    unset($_SESSION['loginerror']);
                }
                    ?>

                <div class="form-group mb-3">
                   <button class="btn btn-primary d-block w-100" id="sondaggiButton_Update" type="submit" name="{Button_Name}">Entrar</button>
                </div>  
            </form>
        </div>
    </div>
<script src="../View/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>