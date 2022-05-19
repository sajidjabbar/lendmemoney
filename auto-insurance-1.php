<!-- Header Start Here -->
<?php include 'inc/app.php' ?>
<!-- Header End Here -->
<!-- Css Link Here -->
<link rel="stylesheet" href="css/auto-insurance-1.css">
<!-- Css Link Here -->

<!-- Body Start Here -->
<section class="auto-insurance">
    <div class="container">
        <div class="row">
            <div class="col-md-9 PX-0 mx-auto">
                <div class="top-text text-center">
                    <h1 class="greenheading">Auto Insurance</h1>
                    <h2 class="mt-4">Find Auto Insurance</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <div class="row">
                <div class="col-md-8  mx-auto px-0">
                    <div class="form-start">
                        <form action="">
                            <div class="form-row">
                                <div class="single-input">
                                    <label for="">Zip code</label>
                                    <input type="text" class="form-control" placeholder="Write Zip code" name="" id="">
                                </div>
                                <div class="single-input">
                                    <label for="">Age</label>
                                    <input type="text" class="form-control" placeholder="Write Your Age" name="" id="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="single-input">
                                    <label for="">Own your home </label>
                                    <label class="contact_container">
                                        <input type="radio" checked="checked" hidden name="radio">
                                        <span class="button">Yes</span>
                                    </label>
                                    <label class="contact_container">
                                        <input type="radio" hidden name="radio">
                                        <span class="button">No</span>
                                    </label>
                                </div>
                                <div class="single-input">
                                    <label for="">Currently Insured </label>
                                    <label class="contact_container">
                                        <input type="radio" checked="checked" hidden name="radio2">
                                        <span class="button">Yes</span>
                                    </label>
                                    <label class="contact_container">
                                        <input type="radio" hidden name="radio2">
                                        <span class="button">No</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="single-input">
                                    <label for="">Incidents</label>
                                    <select name="" id="" class="form-control">
                                        <option value="Select Incidents" selected>Select Incidents</option>
                                    </select>
                                </div>
                                <div class="single-input">
                                    <label for="">Vehicles</label>
                                    <select name="" id="" class="form-control">
                                        <option value="Select Incidents" selected>Select no of Vehicles</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="single-input">
                                    <label for="">Credit score</label>
                                    <select name="" id="" class="form-control">
                                        <option value="Select Incidents" selected>Select Incidents</option>
                                    </select>
                                </div>
                                <div class="single-input">
                                    <label for="">Military Affiliation?</label>
                                    <label class="contact_container">
                                        <input type="radio" checked="checked" hidden name="afilitation">
                                        <span class="button">Yes</span>
                                    </label>
                                    <label class="contact_container">
                                        <input type="radio" hidden name="afilitation">
                                        <span class="button">No</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <button type="submit" class="form-control">Next</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Body End Here -->






<!-- Footer Start Here -->
<?php include 'inc/footer.php' ?>
<!-- Footer End Here -->