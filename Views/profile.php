<?php include 'nav.php'; ?>
<section id="profile">
<div class="container-fluid">
        <h3 class="text-dark mb-4">Profile</h3>
        <div class="card shadow mb-3">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">User Settings</p>
            </div>
            <div class="card-body">
                <form>
                    <div class="row" style="margin-bottom: 25px;text-align: left;">
                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-2 col-xxl-2" style="display: inline;text-align: center;margin-bottom: 25px;"><img class="rounded-circle mb-3 mt-4 img-fluid" src="assets/img/dogs/image2.jpeg" style="display: inline;max-height: 110px;"><br></div>
                        <div class="col-sm-8 col-md-8 col-lg-9 col-xl-10 col-xxl-10 align-self-center">
                            <div class="row">
                                <div class="col-md-12 text-start">
                                    <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" name="email" required="" value="<?php echo  $usuario_email ?>"></div>
                                </div>
                                <div class="col-md-12 text-start">
                                    <div class="mb-3"><label class="form-label" for="username"><strong>Username</strong></label><input class="form-control" type="text" placeholder="Username" name="username" required=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-start">
                            <div class="mb-3"><label class="form-label" for="username"><strong>Password</strong></label><input class="form-control" type="password" id="password" placeholder="Password"></div>
                        </div>
                        <div class="col-md-6 text-start">
                            <div class="mb-3"><label class="form-label" for="username"><strong>Confirm Password</strong></label><input class="form-control" type="password" id="verifyPassword" placeholder="Password"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" placeholder="John" name="first_name" required=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" placeholder="Doe" name="last_name" required=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="country"><strong>Country</strong></label><select class="form-select countries order-alpha limit-pop-1000000 presel-MX group-continents group-order-na" id="countryId" name="country" required=""></select></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="city"><strong>State</strong></label><select class="form-select states order-alpha" id="stateId" name="state" required=""></select></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="city"><strong>City</strong></label><input class="form-control" type="text" id="cityId" placeholder="Los Angeles" name="city" required=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input class="form-control" type="text" placeholder="Sunset Blvd, 38" name="address"></div>
                        </div>
                        <div class="col">
                            <p id="emailErrorMsg" class="text-danger" style="display:none;"></p>
                            <p id="passwordErrorMsg" class="text-danger" style="display:none;"></p>
                        </div>
                        <div class="col-md-12" style="text-align: right;margin-top: 5px;"><button class="btn btn-primary btn-sm" id="submitBtn" type="submit">Save Settings</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
