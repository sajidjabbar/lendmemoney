<!-- Header Start Here -->
<?php include 'inc/app.php'; ?>
<!-- Header End Here  -->
<!-- Css Link Here -->
<link rel="stylesheet" href="css/sign-in.css">
<!-- Css End Here Here -->
<!-- Body Start Here -->
<section class="form-box-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="shadowed-box">
                    <div class="the-text-box text-center">
                        <h3 class="greenheading">Sign In To Your Account</h3>
                        <p>Et netus et malesuada fames. Dolor magna eget est lorem ipsum.</p>
                        <span>Not a member? <a href="" class="greentext">Create new Account</a></span>
                    </div>
                    <div class="form-start">
                        <form action="sign-up.php">
                            <div class="form-row">
                                <input type="text" class="form-control" placeholder="Username" name="" id="">
                            </div>
                            <div class="form-row">
                                <input type="text" class="form-control" placeholder="Password" name="" id="">
                            </div>
                            <div class="form-group d-flex justify-content-between sign-this">
                                <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                <a href="forget-password.php">Forgot Password?</a>
                            </div>
                            <div class="form-row">
                            <a href="sign-up.php"><button type="submit" class="form-control"> Sign In</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Start Here -->
<?php include 'inc/footerlinks.php'; ?>
<!-- Footer End Here  -->