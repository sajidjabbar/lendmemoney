<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/new-password.css">
<!-- css file ends here -->
<!-- sign up as a user section starts here -->

<section class="sign-up">
    <div class="container">
        <div class="row account">

            <div class="col-lg-6">
                <div class="sign-up-box-wrapper">

                    <div class="sign-up-heading-wrapper">
                        <h4>New Password</h4>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor</h6>
                    </div>
                    <div class="sign-up-form-wrapper">
                    <form action="login.php">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="New Password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Confirm Password" required>
                            </div>
                            
                            <div class="code ">
                                <button class=" btn" type="submit">Save Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- sign up as a user section ends here -->
<?php include 'inc/footer.php'; ?>