<style>
.nav-item.active::after {
    content: "";
    display: block;
    width: 100%;
    height: 4px;
    background-color: black;
}
</style>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="nav-container">

                <div class="logo-img">
                    <img src="img/logo.png" alt="" class="img-fluid">
                </div>
                <div class="about-nav">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="Unconstitutional.php">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="Unconstitutional.php" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-selected="true" aria-controls="home">
                                    Mortgage
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Refinance mortgage lenders</a>
                                    <a class="dropdown-item" href="#">Compare current mortgage rates</a>
                                    <a class="dropdown-item" class="nav-link" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown">
                                        Credit Cards
                                        <i class="fa fa-angle-down"></i></a>
                                    <div class="dropdown-menu side" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>

                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                    Insurance
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Auto insurance</a>
                                    <a class="dropdown-item" href="#">life insurance</a>
                                    <a class="dropdown-item" href="#">home insurance</a>
                                    <a class="dropdown-item" href="#">about life insurance calculator </a>
                                    <a class="dropdown-item" href="#">pet insurance</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                    Credit Cards
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                    Loan
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">personal loan</a>
                                    <a class="dropdown-item" href="#">home equity loan</a>
                                    <a class="dropdown-item" href="#">Auto Refinance</a>
                                    <a class="dropdown-item" href="#">Shudent loan Refinance</a>
                                </div>
                            </li>
                            <li class="nav-item nbar">
                                <a class="nav-link ">Become A Member</a>
                            </li>
                            <li class=" nav-item  nbar">
                                <a class="nav-link ">Login/Register <i class="fa fa-search" style="color: #88B379;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <div class="canvas-icon text-right">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div> -->
            
        </nav>

    </div>

    

    <!-- <div class="mobile-header">
        <div class="cancel">

        </div>
        <ul class="mobile-nav">
            <li><a href="#">Home</a></li>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mortgage
                    <i class="fa fa-angle-down"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Refinance mortgage lenders</a>
                    <a class="dropdown-item" href="#">Compare current mortgage rates</a>
                    <a class="dropdown-item" class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown">
                        Credit Cards
                        <i class="fa fa-angle-down"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>

                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Insurance
                <i class="fa fa-angle-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Auto insurance</a>
                <a class="dropdown-item" href="#">life insurance</a>
                <a class="dropdown-item" href="#">home insurance</a>
                <a class="dropdown-item" href="#">about life insurance calculator </a>
                <a class="dropdown-item" href="#">pet insurance</a>
            </div>
            <li class="nav-item"><a href=""> Credit Cards
                    <i class="fa fa-angle-down"></i></a></li>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Loan
                <i class="fa fa-angle-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">personal loan</a>
                <a class="dropdown-item" href="#">home equity loan</a>
                <a class="dropdown-item" href="#">Auto Refinance</a>
                <a class="dropdown-item" href="#">Shudent loan Refinance</a>
            </div>
            <li class="nav-item nbar">
                <a href="">Become A Member</a>
            </li>
            <li class="nbar">
                <a href="">Login/Register <i class="fa fa-search" style="color: #88B379;"></i> </a>
            </li>
        </ul>
    </div> -->


    <div class="mobile-header navbar-dark">
        <div class="cancel">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x"
                viewBox="0 0 16 16">
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </div>
        <ul class="mobile-nav navbar-nav">
            <li class="nav-link"><a class="text-black" href="index.php">Home</a></li>
            <li class="nav-link"><a class="text-black" href="souvenir.php">Wigs</a></li>
            <li class="nav-link"><a class="text-black" href="gifts.php">Hair Extensions</a></li>
            <li class="nav-link"><a class="text-black" href="candels.php">Hair Care</a></li>
            <li class="nav-link"><a class="text-black" href="#">Skin Care</a></li>
            <li class="nav-link"><a class="text-black" href="#">Makeup</a></li>
            <li class="nav-link"><a class="text-black" href="accessories.php">Health & Wellness</a></li>
            <li class="nav-link"><a class="text-black" href="accessories.php">Perfumes</a></li>
            <li class="nav-link"><a class="text-black" href="accessories.php">Men</a></li>
            <a href="wishlist.php"><img class="img-fluid" src="img/heart.png" alt=""> WISHLIST</a>
            <a href="login.php"><i class="fa fa-user-o" aria-hidden="true"></i> Login</a>
            <a href="productcart.php"><img class="img-fluid" src="img/bag.png" alt=""></a>
            <li>
                <div class="button-group mt-3">
                    <a href="signin.php"><img width="18px" src="img/user.png" alt=""></a>
                    <a href="bookmark.php" class="mx-2"><img width="18px" src="img/ribbon.png" alt=""></a>
                    <a href="productcart.php"><img width="18px" src="img/shopping-bag.png" alt=""></a>
                </div>
            </li>
        </ul>
    </div>
</header>