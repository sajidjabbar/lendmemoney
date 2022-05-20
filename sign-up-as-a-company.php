<!-- Header Start Here -->
<?php include 'inc/app.php'; ?>
<!-- Header End Here  -->
<!-- Css Link Here -->
<link rel="stylesheet" href="css/sign-in.css">
<!-- Css End Here Here -->
<!-- Body Start Here -->

<section class="form-box-section ">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
                <div class="shadowed-box sign-as-a-company">
                    <div class="the-text-box text-center">
                        <h3 class="greenheading">Sign Up As a Company</h3>
                        <p>Et netus et malesuada fames. Dolor magna eget est lorem ipsum.</p>
                        <div class="upload-your-photo text-center mt-4">
                            <label for="uploadimg">
                                <input type="file" name="" hidden id="uploadimg">
                                <div class="comera-photo">
                                    <img src="img/camera.png" alt="">
                                </div>
                                <div class="for-the-text">
                                    <span class="for-upload-file">Upload Profile</span>
                                    <span class="for-browse-file">Browse</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="form-start">
                        <form action="terms-condition.php">
                            <div class="form-row">
                                <input type="text" class="form-control" placeholder="Company Name" name="" id="">
                            </div>
                            <div class="form-row">
                                <input type="email" class="form-control" placeholder="Email" name="" id="">
                            </div>
                            <div class="form-row">
                                <input type="password" class="form-control" placeholder="Password" name="" id="">
                            </div>
                            <div class="form-row">
                                <input type="password" class="form-control" placeholder="Confirm Password" name=""
                                    id="">
                            </div>
                            <div class="form-row">
                                <button type="submit" class="form-control">Submit</button>
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