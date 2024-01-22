<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registro</title>
    <link rel="stylesheet" href="../Views/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Views/assets/css/styles.min.css">
    <link rel="stylesheet" href="../Views/assets/css/register.css">
    
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background: url(&quot;../Views/assets/img/ssangue.jpg&quot;)"></div>
            <form id="sondaggi" method="post" name="{HTMLFormName}" action="register/save">
                <h2 class="text-center"><strong>Registro para Doação de Sangue 🫀</strong></h2>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"  name="email" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Idade</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1"  name="idade" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1"  name="telefone" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1"  name="senha" placeholder="">
                    
                  </div>

                  <a href="/Login" class="col text-center">Já tenho uma conta</a>
      
                <div class="form-group mb-3">
                    <button id="btnregister" class="btn btn-primary d-block w-100"  type="submit" name="{Button_Name}" onclick="teste()">Cadastrar  <span id="spinbtn" class="spinner-border spinner-border-sm" role="status"></span></button> 
                </div>
            </form>
        </div>
    </div>
    <script src="../View/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../Views/assets/bootstrap/js/sidebarscript.js"></script>
    <script src="../Views/assets/bootstrap/js/register.js"></script>
</body>

</html>