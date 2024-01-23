<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="../views/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../views/assets/css/styles.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/5.x/dist/jquery.inputmask.min.js"></script>
</head>

<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row">
                <div class="col"><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="100%"></iframe></div>
                <div class="col-md-6 col-xl-4">
                    
                    <div>
                        <form class="p-3 p-xl-4" method="post">
                            <h4>Centros de Coleta de Sangue</h4>
                            <p class="text-muted">Confira pelo CEP e retornará no mapa os locais</p>
                            <div class="mb-3"><label class="form-label" for="name">CEP</label><input class="form-control" type="text" id="cep" name="cep"></div><button class="btn btn-primary" type="submit" style="background: #991217;">Buscar</button>
                            <div class="mb-3"></div>
                            <div class="mb-3"><label class="form-label" for="message">Retorno</label><textarea class="form-control" id="message" name="message" rows="6"></textarea></div>
                            <div class="mb-3"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="../Views/assets/bootstrap/js/mask.js"></script>
</body>

</html>