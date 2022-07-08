<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/enter-otp-code.css">
<!-- css file ends here -->
<!-- sign up as a user section starts here -->
<section class="forget-sec">

</section>
<section class="sign-up">
    <div class="container">
        <div class="row account">
            <div class="col-lg-6">
                <div class="sign-up-box-wrapper">

                    <div class="sign-up-heading-wrapper">
                        <h4>Enter OTP Code</h4>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor</h6>
                    </div>
                    <div class="sign-up-form-wrapper">
                        <form action="new-password.php">
                        <div class="input-group">
                                        <input type="text" name="" class="enter-first-name for-all-form-input" >
                                        <input type="text" name="" class="enter-first-name for-all-form-input" id="">
                                        <input type="text" name="" class="enter-first-name for-all-form-input" id="">
                                        <input type="text" name="" class="enter-first-name for-all-form-input" id="">
                                    </div>
                              
                            <div class="code ">
                                <button type="submit" class="form-control btn">submit</button>
                            </div>
                            <span>An email has been sent to reset the password
                                Haven't Received the email yet? </span> <a href="#">  Resend Code</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- sign up as a user section ends here -->
<?php include 'inc/footer.php'; ?>