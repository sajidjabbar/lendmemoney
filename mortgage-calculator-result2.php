<link rel="stylesheet" href="css/mortgagecalculatorresult.css">
<?php include 'inc/app.php'; ?>
<!-- start here -->
<section class="result-calculatorsec">
    <div class="container">
        <div class="result-heading">
            <h1 class="animate__animated animate__fadeInDown animate__delay-1s">Refinance Mortgage Calculator</h1>
            <div class="aboutresult-heading">
                <h3 class="animate__animated animate__fadeInDown animate__delay-1s">Result based on information Provided</h3>
                <p class="animate__animated animate__fadeInDown animate__delay-1s">Sit amet commodo nulla facilisi nullam. Lectus mauris ultrices eros in
                    cursus turpis <br> massa. Velit egestas dui id ornare. Orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero.</p>
            </div>
        </div>
        <div class="animate__animated animate__fadeInDown animate__delay-2s result-table" >
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">loan Type</th>
                    <th scope="col">30 yr Fixed</th>
                    <th scope="col">15 yr Fixed</th>
                    <th scope="col">5.1 yr ARM</th>
                    <th scope="col">Cash Out</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="side-border">New Monthly payment</th>
                    <td>$11</td>
                    <td>$11
                    </td>
                    <td>$11</td>
                    <td>$11</td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">Monthly Savings</th>
                    <td> $533 </td>
                    <td> $533 </td>
                    <td> $533 </td>
                    <td> $533 </td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">Interesting Savings</th>
                    <td class="highlight">-$1,210</td>
                    <td class="highlight">-$1,210</td>
                    <td class="highlight">-$1,210</td>
                    <td class="highlight">-$1,210</td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">Cash Out</th>
                    <td>$0</td>
                    <td>$0</td>
                    <td>$0</td>
                    <td>$0</td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">APR</th>
                    <td>3.25%(2.88)</td>
                    <td>3.25%(2.88)</td>
                    <td>3.25%(2.88)</td>
                    <td>3.25%(2.88)</td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">Term</th>
                    <td>30 Years</td>
                    <td>30 Years</td>
                    <td>30 Years</td>
                    <td>30 Years</td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">Lower Payment </th>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">Payoff Faster</th>
                    <td><img src="img/cross-img.png" alt="" class="img-fluid"></td>
                    <td><img src="img/cross-img.png" alt="" class="img-fluid"></td>
                    <td><img src="img/cross-img.png" alt="" class="img-fluid"></td>
                    <td><img src="img/cross-img.png" alt="" class="img-fluid"></td>
                </tr>
                <tr>
                    <th scope="row" class="side-border">Pay Less Interest </th>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                    <td><img src="img/tick-icon.png" alt="" class="img-fluid"></td>
                </tr>
                <tr>
                    <th scope="row" class="side-border"></th>
                    <td> <a href="15-year-vs-30-year-mortgage.php"><button>More Info</button></a></td>
                    <td> <a href="15-year-vs-30-year-mortgage.php"><button>More Info</button></a></td>
                    <td> <a href="15-year-vs-30-year-mortgage.php"><button>More Info</button></a></td>
                    <td> <a href="15-year-vs-30-year-mortgage.php"><button>More Info</button></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</section>


<!--  end Here -->
<?php include 'inc/footer.php'; ?>