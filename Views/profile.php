<?php include 'nav.php'; ?>

<?php 

$nome = $_SESSION['usuario_nome'];
$email = $_SESSION['usuario_email'];
$idade = $_SESSION['usuario_idade'];
$telefone = $_SESSION['usuario_telefone'];
$senha = $_SESSION['usuario_senha'];

?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="../views/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../views/assets/css/styles.min.css">
</head>

<body>
    <div class="container profile profile-view mt-5" id="profile">
  
        <form>
            <div class="row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                    <img src="../Views/assets/img/junior.png" class="img-fluid " alt="Responsive image">
                       
                    </div>
                    
                </div>
                <div class="col-md-8">
                    <h1>Perfil</h1>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Nome</label><input class="form-control" type="text" name="firstname" value="<?php echo $nome ?>"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Idade (anos)</label><input class="form-control" type="text" name="lastname" value="<?php echo $idade ?>"></div>
                        </div>
                    </div>
                    <div class="form-group mb-3"><label class="form-label">Email </label><input class="form-control" type="email" autocomplete="off" required="" name="email" value="<?php echo $email ?>"></div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Telefone</label><input class="form-control" type="text" name="password" autocomplete="off" required="" value="<?php echo $telefone ?>"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Senha</label><input class="form-control" type="password" name="confirmpass" autocomplete="off" required="" value="<?php echo $senha ?>"></div>
                        </div>
                    </div>
                    <hr>
                   
                      <button class="btn btn-danger form-btn" type="reset" style="background: #991217;">Salvar dados</button></div>
                    
                </div>
            </div>
        </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>