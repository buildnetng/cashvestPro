<?php include "includes/users/head.php" ?>

<body class="application application-offset">

    <div class="container-fluid container-application">

        <?php include "includes/users/header.php" ?>

        <div class="main-content position-relative">

            <?php include "includes/users/nav.php" ?>

            <div class="page-content">
                <!-- Page title -->
                <div class="page-title">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
                            <!-- Page title + Go Back button -->
                            <div class="d-inline-block">
                                <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Account settings</h5>
                            </div>
                            <!-- Additional info -->
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 order-lg-2">
                        <div class="card">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item active">
                                    <div class="media">
                                        <i class="far fa-cog"></i>
                                        <div class="media-body ml-3">
                                            <a href="settings" class="stretched-link h6 mb-1">Settings</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="media">
                                        <i class="far fa-user"></i>
                                        <div class="media-body ml-3">
                                            <a href="profile" class="stretched-link h6 mb-1">Profile</a>
                                        </div>
                                    </div>
                                </div>
                               
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 order-lg-1">
                        <div class="card">
                            <div class="card-header">
                                <h5 class=" h6 mb-0">Change password</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Old password</label>
                                                <input class="form-control" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">New password</label>
                                                <input class="form-control" type="password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Confirm password</label>
                                                <input class="form-control" type="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="button" class="btn btn-sm btn-primary rounded-pill">Update password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                       
                        <div class="card">
                            <div class="card-header">
                                <h5 class=" h6 mb-0">Danger zone</h5>
                            </div>
                            <div class="card-body">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-danger rounded-pill" data-toggle="modal" data-target="#modal-delete-account">Delete account</button>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

        <?php include "includes/users/footer.php" ?>

    </div>
</body>