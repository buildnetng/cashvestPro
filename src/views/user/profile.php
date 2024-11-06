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
                                <div class="">
                                    <h1 style="font-size: 16px;" class="mb-3">Update Profile Settings</h1>

                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a href="#" class="avatar rounded-circle">
                                            <img alt="Image placeholder" src="https://cdn-icons-png.freepik.com/512/7718/7718888.png" class="">
                                        </a>
                                    </div>

                                    <div class=" mb-4">
                                        <div class="card-body">
                                            <div class="form-group mb-2">
                                                <label class="form-label" style="font-size: 13px !important;">Full
                                                    Name</label>
                                                <input class="form-control " type="text" name="" id=""
                                                    value="Michael David">

                                            </div>



                                            <div class="form-group mb-2">
                                                <label class="col-md-12 col-form-label"
                                                    style="font-size: 13px !important;">Gender</label>
                                                <select class="form-control" name="gender" id="gender">
                                                    <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>

                                            <div class="mb-2 form-group">
                                                <label class="form-label"
                                                    style="font-size: 13px !important;">E-Mail</label>
                                                <input class="form-control" type="email"
                                                    value="michaeldavidb123@gmail.com" name="email" id="email">
                                            </div>


                                            <div class="mb-2 position-relative" id="phonenumberdiv">
                                                <label class="form-label" style="font-size: 13px !important;">Phone
                                                    Number</label>
                                                <input type="tel" id="phoneNo" class="form-control" name="phone"
                                                    value="09019912137">
                                            </div>


                                            <div class="form-group mb-2">
                                                <label class="form-label"
                                                    style="font-size: 13px !important;">Residential Address</label>
                                                <input class="form-control " type="text" name="" id=""
                                                    value="137 East West Road Montana">

                                            </div>




                                            <div class="form-group mb-4">
                                                <label class="form-label"
                                                    style="font-size: 13px !important;">Country</label>
                                                <input class="form-control " type="text" name="" id=""
                                                    value="United States">

                                            </div>


                                            <button type="submit" class="btn btn-primary w-100">Submit</button>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
