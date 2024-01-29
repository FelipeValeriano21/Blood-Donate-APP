<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="../views/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../views/assets/css/styles.min.css">
    <link rel="stylesheet" href="../views/assets/css/cep.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/5.x/dist/jquery.inputmask.min.js"></script>

    <style>

#mapViewHeaderNav {

background-color: red;

}

    </style>
</head>

<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row">
                <div class="col"><div><iframe src="https://maps.co/embed/65b79e4903294421608774glwfb8e7c" width="800" height="600" frameborder="0" allowfullscreen></iframe><div></div></div></div>
                <div class="col-md-6 col-xl-4">
                    
                    <div>
                            <h4>Centros de Coleta de Sangue</h4>
                            <p class="text-muted">Confira pelo CEP e retornará os locais</p>
                            <div class="mb-3"><label class="form-label" for="name">CEP</label><input class="form-control" type="text" id="cep" name="cep"></div><button class="btn btn-primary" type="submit" style="background: #991217;" onclick="BuscaCep()">Buscar</button>
                            <div class="mb-3"></div>
                            <label class="mt-4">Centros no estado:</label> <b><label id="estadoselected"></label>
                            <div class="mb-3 mt-4">
                            <div id="resultado"></div>
                          </div>
                            <div class="mb-3"></div>
                         
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../Views/assets/bootstrap/js/mask.js"></script>
    <script src="../Views/assets/bootstrap/js/viacep.js"></script>
</body>

</html>


