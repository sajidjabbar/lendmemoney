<link rel="stylesheet" href="css/mortgagecalculatorresult.css">
<?php include 'inc/app.php'; ?>
<!-- start here -->
<section class="result-calculatorsec">
    <div class="container">
        <div class="result-heading">
            <h1 class="animate__animated animate__fadeInDown animate__delay-1s">Mortgage Calculator</h1>
            <div class="aboutresult-heading">
                <h3 class="animate__animated animate__fadeInDown animate__delay-1s">Result based on information Provided</h3>
                <p class="animate__animated animate__fadeInDown animate__delay-1s">Sit amet commodo nulla facilisi nullam. Lectus mauris ultrices eros in
                    cursus turpis <br> massa. Velit egestas dui id ornare. Orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero.</p>
            </div>
        </div>
        <div class="animate__animated animate__fadeInDown animate__delay-2s result-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">loan Type</th>
                    <th scope="col">30 yr Fixed</th>
                    <th scope="col">15 yr Fixed</th>
                    <th scope="col">5.1 yr ARM</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="side-border">Loan Payment</th>
                    <td>$863</td>
                    <td>$863
                    </td>
                    <td>$863</td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">APR</th>
                    <td> 3.29% </td>
                    <td>3.29%</td>
                    <td> 3.29% </td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">Total Intrest</th>
                    <td>$105.680</td>
                    <td>$105.680</td>
                    <td>$105.680</td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">Term</th>
                    <td>30 Years</td>
                    <td>30 Years</td>
                    <td>30 Years</td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">Lower Payment </th>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">lower rates</th>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">Pay off Faster</th>
                    <td><img src="img/cross-img.png" alt="" class="img-fluid"></td>
                    <td><img src="img/cross-img.png" alt="" class="img-fluid"></td>
                    <td><img src="img/cross-img.png" alt="" class="img-fluid"></td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">Pay Less Interest </th>
                    <td><img src="img/cross-img.png" alt="" class="img-fluid"></td>
                    <td><img src="img/cross-img.png" alt="" class="img-fluid"></td>
                    <td><img src="img/cross-img.png" alt="" class="img-fluid"></td>
                </tr>
                <tr>
                    <th scope="row" class="side-border"></th>
                    <td> <a href="#"><button>More Info</button></a></td>
                    <td> <a href="#"><button>More Info</button></a></td>
                    <td> <a href="#"><button>More Info</button></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</section>


<!--  end Here -->
<?php include 'inc/footer.php'; ?>