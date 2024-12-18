<?php require_once 'includes/users/head.php'; ?>

<body class="application application-offset ready">

    <!-- Application container -->
    <div class="container-fluid container-application">
        <!-- Sidenav -->
        <!-- Content -->
        <div class="main-content position-relative">

            <div class="page-content">
                <div class="min-vh-100 py-5 d-flex align-items-center">
                    <div class="w-100">
                        <div class="row justify-content-center">
                            <div class="col-sm-8 col-lg-5 col-xl-4">
                                <div class="card shadow zindex-100 mb-0">
                                    <div class="card-body px-md-5 py-5">
                                        <div class="mb-5">
                                            <h6 class="h3">Password reset</h6>
                                            <p class="text-muted mb-0">Enter your email below to proceed.</p>
                                        </div>
                                        <span class="clearfix"></span>
                                        <form role="form">
                                            <div class="form-group">
                                                <label class="form-control-label">Email address</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-user"></i></span>
                                                    </div>
                                                    <input type="email" class="form-control" id="input-email" placeholder="name@example.com">
                                                </div>
                                            </div>
                                            <div class="mt-4"><button type="button" class="btn btn-sm btn-primary btn-icon rounded-pill">
                                                    <span class="btn-inner--text">Reset password</span>
                                                    <span class="btn-inner--icon"><i class="far fa-long-arrow-alt-right"></i></span>
                                                </button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer px-md-5"><small>Not registered?</small>
                                        <a href="sign-up" class="small font-weight-bold">Create account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>