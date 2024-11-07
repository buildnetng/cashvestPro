<?php require_once 'config/session_manager.php'; ?>

<body class="application application-offset ready">
    <!-- Application container -->
    <div class="container-fluid container-application">
        <!-- Sidenav -->
        <!-- Content -->
        <div class="main-content position-relative">

            <!-- Page content -->
            <div class="page-content">
                <div class="min-vh-100 py-5 d-flex align-items-center">
                    <div class="w-100">
                        <div class="row justify-content-center">
                            <div class="col-sm-8 col-lg-4">
                                <div class="card shadow zindex-100 mb-0">
                                    <div class="card-body px-md-5 py-5">
                                        <div class="mb-5">
                                            <h6 class="h3">Login </h6>

                                            <p class="text-muted mb-0">Sign in to your account to continue.</p>
                                        </div>
                                        <span class="clearfix"></span>
                                        <form id="signInForm" method="POST">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Email address</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-user"></i></span>
                                                    </div>
                                                    <input type="email" class="form-control" id="input-email" name="email" placeholder="name@example.com">
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <label class="form-control-label" for="input-password">Password</label>
                                                    </div>
                                                    <div class="mb-2">
                                                        <a href="reset-password" class="small text-muted text-underline--dashed border-primary">Lost password?</a>
                                                    </div>
                                                </div>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="far fa-key"></i></span>
                                                    </div>
                                                    <input type="password" class="form-control" id="input-password" name="password" placeholder="Password">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <a href="#" data-toggle="password-text" data-target="#input-password">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-sm btn-primary btn-icon rounded-pill">
                                                    Grant access
                                                </button>
                                            </div>
                                            <input type="hidden" name="login_request" value="1">
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
            <!-- Footer -->
        </div>
    </div>


</body>

</html>