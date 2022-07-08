<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/forget-password.css">
<!-- css file ends here -->
<!-- sign up as a user section starts here -->

<section class="sign-up">
    <div class="container">
        <div class="row account">

            <div class="col-lg-6">
                <div class="sign-up-box-wrapper">

                    <div class="sign-up-heading-wrapper">
                        <h4>Forget Password</h4>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor</h6>
                    </div>
                    <div class="sign-up-form-wrapper">
                        <form action="enter-otp-code.php">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="code ">
                              <a href="enter-otp-code.php"> <button class=" btn">Send Code</button></a>
                            </div>
                            <span>An email has been sent to reset the password
                                Haven't Received the email yet? </span> <a href="#">Try again</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- sign up as a user section ends here -->
<?php include 'inc/footer.php'; ?>