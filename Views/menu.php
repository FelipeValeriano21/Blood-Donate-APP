<?php include 'nav.php'; ?>
    <div class="col" style="height: 48px;"></div>
        <div class="container">
             <div class="row">
                 <div class="col">
                    <h3>Bem vindo(a), <?php echo $usuario_nome ?></h3>
                </div>
                <div class="col">
                    <div class="container text-center boxed-countdown" data-countdown="09/15/2021 23:59:59">
                        <div class="row" style="margin-right: 15px;margin-left: 15px;">
                            <h3>Nova doação em</h3>
                            <div class="col-6 col-md-3 mt-3 fw-bolder">
                                <p class="number-days m-0 rounded-top " style="background: #991217; color:white;">00</p>
                                <p class="text-countdown rounded-bottom bg-light text-danger">Days</p>
                            </div>
                            <div class="col-6 col-md-3 mt-3 fw-bolder">
                                <p class="number-days m-0 rounded-top " style="background: #991217; color:white;">00</p>
                                <p class="text-countdown rounded-bottom bg-light text-danger">Hours</p>
                            </div>
                            <div class="col-6 col-md-3 mt-3 fw-bolder">
                                <p class="number-days m-0 rounded-top " style="background: #991217; color:white;">00</p>
                                <p class="text-countdown rounded-bottom bg-light text-danger">Minutes</p>
                            </div>
                            <div class="col-6 col-md-3 mt-3 fw-bolder">
                                <p class="number-days m-0 rounded-top " style="background: #991217; color:white;">00</p>
                                <p class="text-countdown rounded-bottom bg-light text-danger">Seconds</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

    <script src="../views/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../views/assets/js/script.min.js"></script>
</body>

</html> 