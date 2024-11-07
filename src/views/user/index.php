<body class="application application-offset">


    <div class="container-fluid container-application">
        <?php include "includes/users/header.php" ?>
        <!-- Content -->
        <div class="main-content position-relative">
            <?php include "includes/users/nav.php" ?>
            <div id="omnisearch" class="omnisearch">
                <div class="container">
                    <!-- Search form -->
                    <form class="omnisearch-form">
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Type and hit enter ...">
                            </div>
                        </div>
                    </form>
                    <div class="omnisearch-suggestions">
                        <h6 class="heading">Search Suggestions</h6>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a class="list-link" href="#">
                                            <i class="far fa-search"></i>
                                            <span>macbook pro</span> in Laptops
                                        </a>
                                    </li>
                                    <li>
                                        <a class="list-link" href="#">
                                            <i class="far fa-search"></i>
                                            <span>iphone 8</span> in Smartphones
                                        </a>
                                    </li>
                                    <li>
                                        <a class="list-link" href="#">
                                            <i class="far fa-search"></i>
                                            <span>macbook pro</span> in Laptops
                                        </a>
                                    </li>
                                    <li>
                                        <a class="list-link" href="#">
                                            <i class="far fa-search"></i>
                                            <span>beats pro solo 3</span> in Headphones
                                        </a>
                                    </li>
                                    <li>
                                        <a class="list-link" href="#">
                                            <i class="far fa-search"></i>
                                            <span>smasung galaxy 10</span> in Phones
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <div class="page-content">

                <div class="row mb-4 justify-content-between align-items-center">
                    <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
                        <!-- Page title + Go Back button -->
                        <div class="d-inline-block">
                            <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Welcome</h5>
                        </div>
                        <!-- Additional info -->
                        <div class="align-items-center ml-4 d-inline-flex">
                            <span class="h4 text-info mb-0 mr-2"><?= $_SESSION['user_email'] ?></span>
                        </div>
                        <!-- Optional link -->
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                        <div class="actions actions-dark d-inline-block">
                            <a href="#" class="action-item ml-md-4">
                                <i class="far fa-file-export mr-2"></i>Withdraw
                            </a>
                            <a href="#" class="action-item ml-3">
                                <i class="far fa-cog mr-2"></i>Transactions
                            </a>
                        </div>
                        <a href="#modal-project-create" class="btn btn-sm btn-white btn-icon-only rounded-circle ml-4" data-toggle="modal">
                            <span class="btn-inner--icon"><i class="far fa-plus"></i></span>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="card card-fluid">
                            <div class="card-body">

                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="card mb-3 border shadow-none ">
                                            <div class="card-body">
                                                <h4 class=" card-title mb-3 ">Wallet Balance <i class="fa fa-eye-slash toggle-visibility float-right"
                                                        aria-hidden="true"></i></h4>
                                                <div class="text-success">$5,271.39</div>
                                                <div class="mt-3">
                                                    <span class="text-success">+15% from last month</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card mb-3 border shadow-none">
                                            <div class="card-body">
                                                <h4 class="card-title">Total Earnings</h4>
                                                <div class="text-success">$4,771.00</div>
                                                <div class="progress mt-3" style="height: 10px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-3 border shadow-none">
                                            <div class="card-body ">
                                                <h4 class=" mb-3 ">Invested Capital</h4>
                                                <div class="portfolio-value  h2 ">$500.39</div>
                                                <a href="deposit" class="button_default btn btn-danger btn-sm mt-3" style="font-size: 10px;">UPGRADE CAPITAL</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card mb-3 border shadow-none">
                                            <div class="card-body ">
                                                <h4 class="mb-3 ">Total Deposits</h4>
                                                <div class="portfolio-value h2 ">$7,500.00</div>
                                                <small>Last deposit: 2 days ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3 border shadow-none">
                                            <div class="card-body ">
                                                <h4 class="mb-3 ">Total Withdrawals</h4>
                                                <div class="portfolio-value h2 ">$2,728.61</div>
                                                <small>Last withdrawal: 5 days ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-3 border shadow-none">
                                            <div class="card-body ">
                                                <h4 class="mb-3 ">Bonus</h4>
                                                <div class="portfolio-value h2 ">$2,728.61</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Footer -->
            <div class="footer pt-5 pb-4 footer-light" id="footer-main">
                <div class="row text-center text-sm-left align-items-sm-center">
                    <div class="col-sm-6">
                        <p class="text-sm mb-0">© 2019 <a href="https://webpixels.io/" class="h6 text-sm" target="_blank">Webpixels</a>. All rights reserved.</p>
                    </div>
                    <div class="col-sm-6 mb-md-0">
                        <ul class="nav justify-content-center justify-content-md-end">
                            <li class="nav-item dropdown border-right">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit/assets/img/icons/flags/ro.svg">
                                    <span class="h6 text-sm mb-0">RO</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(82px, -2px, 0px);">
                                    <a href="#" class="dropdown-item"><img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit/assets/img/icons/flags/es.svg" class="mr-2">Spanish</a>
                                    <a href="#" class="dropdown-item"><img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit/assets/img/icons/flags/us.svg" class="mr-2">English</a>
                                    <a href="#" class="dropdown-item"><img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit/assets/img/icons/flags/gr.svg" class="mr-2">Greek</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Support</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pr-0" href="#">Privacy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>