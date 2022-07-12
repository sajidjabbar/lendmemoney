<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="css/mortgage-analysis.css">
<?php include 'inc/app.php'; ?>
<!-- start here -->
<section class="mortgage-analysis-sec">
    <div class="container">
        <!-- sec-heading start here -->
        <div class="Refinance-heading">
            <h1 class="animate__animated animate__fadeInDown animate__delay-1s">Mortgage Analysis</h1>
            <h3 class="animate__animated animate__fadeInDown animate__delay-1s">Best & Accurate Mortgage Analysis
            </h3>
            <p class="animate__animated animate__fadeInDown animate__delay-1s">Sit amet commodo nulla facilisi nullam.
                Lectus mauris ultrices eros in cursus turpis massa. Velit egestas dui id ornare. Orci porta non pulvinar
                neque laoreet suspendisse interdum consectetur libero.
            </p>
        </div>

        <div class="stepwizard">
            <h4>Lets get Started</h4>
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-1" type="button" class="btn1 btn-success btn-circle">Step 01</a>

                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-2" type="button" class="btn1 btn-default btn-circle" disabled="disabled">Step 02</a>

                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-3" type="button" class="btn1 btn-default btn-circle" disabled="disabled">Step 03</a>

                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-4" type="button" class="btn1 btn-default btn-circle" disabled="disabled">Step 04</a>

                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-5" type="button" class="btn1 btn-default btn-circle" disabled="disabled">Step 05</a>

                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-6" type="button" class="btn1 btn-default btn-circle" disabled="disabled">Step 06</a>

                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-7" type="button" class="btn1 btn-default btn-circle" disabled="disabled">Step 07</a>

                </div>
            </div>
        </div>
        <form role="form">
            <div class="panel panel-primary setup-content" id="step-1">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-5 ">
                            <div class="tab-1">
                                <div class="tab1form">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">What Is Your Mortgage Goal?</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected>Select Your Mortgage Goal</option>
                                            <option>Downdown will include</option>
                                            <option>Lower My Monthly Payment </option>
                                            <option>Pay Less Interest</option>
                                            <option>Have a Shorter Term</option>
                                            <option>Lower My Rate Cash Out</option>
                                        
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            <button class="btn btn-primary nextBtn" type="button">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary setup-content" id="step-2">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-5">
                            <div class="tab-1">
                                <div class="tab1form">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Monthly Mortgage payment</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected>Select Monthly Mortgage payment</option>
                                            <option>$201-$300</option>
                                            <option>$301-$400</option>
                                            <option>$401-$500</option>
                                            <option>$501-$600</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            <button class="btn btn-primary nextBtn" type="button">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary setup-content" id="step-3">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-5">
                            <div class="tab-1">
                                <div class="tab1form">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Current Mortgage Balance</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected>Select Current Mortgage Balance </option>
                                            <option>$201-$300</option>
                                            <option>$301-$400</option>
                                            <option>$401-$500</option>
                                            <option>$501-$600</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            <button class="btn btn-primary nextBtn" type="button">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary setup-content" id="step-4">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-5">
                            <div class="tab-1">
                                <div class="tab1form">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Estimated Home Value</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected>Select Estimated Home Value</option>
                                            <option>$5,001-$10,000</option>
                                            <option>$5,001-$10,00</option>
                                            <option>$5,001-$10,000</option>
                                            <option>$5,001-$10,00</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            <button class="btn btn-primary nextBtn" type="button">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary setup-content" id="step-5">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-5">
                            <div class="tab-1">
                                <div class="tab1form">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Credit Profile</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected>Select Credit Profile </option>
                                            <option>Execellent (720 or above)</option>
                                            <option>Good(620-719)</option>
                                            <option>Fair (580-619)</option>
                                            <option>Needs Improvement (540-579)</option>
                                            <option>Poor (539 or lower)</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            <button class="btn btn-primary nextBtn" type="button">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary setup-content" id="step-6">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-5">
                            <div class="tab-1">
                                <div class="tab1form">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Interest Rate</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected>Select Interest Rate</option>
                                            <option>2.00%</option>
                                            <option>3.00%</option>
                                            <option>4.00%</option>
                                            <option>5.00%</option>
                                            <option>6.00%</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            <button class="btn btn-primary nextBtn" type="button">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-primary setup-content" id="step-7">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="tab-1">
                                <div class="tab1form">
                                    <div class="form-group">
                                        <label >Enter Your ZIP Code
                                        </label>
                                        <input class="form-control" type="text" id="inlineFormInputName2"   placeholder="Enter Your ZIP Code ">
                                        </input>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            <a href="">
                                <button class="btn btn-success " onclick="location.href='great-job-you-received-an-a.php';" type="submit">submit</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<!--  end Here -->
<?php include 'inc/footer.php'; ?>