<?php require_once 'includes/users/head.php'; ?>



<body class="application application-offset">

    <div class="container-fluid container-application">

        <?php include "includes/users/header.php" ?>

        <div class="main-content position-relative">

            <?php include "includes/users/nav.php" ?>



            <div class="page-content">

                <div id="data-container"></div>
                <!-- Page title -->
                <div class="page-title">
                    <div class="row justify-content-between align-items-center">
                        <div
                            class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
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
                                            <a href="setting" class="stretched-link h6 mb-1">Settings</a>
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

                                    <form id="updateForm" method="POST" enctype="multipart/form-data">

                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a href="#" class="avatar rounded-circle">
                                            <img alt="Image placeholder" src="#" class="" id="imagePreview"
                                                style=" width:60px; height:60px;margin-left:2rem; margin-top:20px; border-radius:50%;">
                                        </a>
                                    </div>

                                    <div class="form-group mb-4 mt-6">
                                        <label for="imageUpload" class="form-label"
                                            style="font-size: 13px !important; cursor:pointer; margin-left:2rem;">Choose
                                            Image</label>

                                        <input class="form-control " type="file" name="image" id="imageUpload"
                                            style="display:none;">


                                    </div>

                                    <div class=" mb-4">
                                        <div class="card-body">
                                            <div class="form-group mb-2">
                                                <label class="form-label" style="font-size: 13px !important;">Full
                                                    Name</label>
                                                <input class="form-control " type="text" name="fullname" id=""
                                                    value="<?= $fullname ?>">

                                            </div>



                                            <div class="form-group mb-2">
                                                <label class="col-md-12 col-form-label"
                                                    style="font-size: 13px !important;">Gender</label>
                                                <select class="form-control" name="gender" id="gender"
                                                    value="<?= isset($user['account_info']['gender']) ? $user['account_info']['gender'] : ''; ?>">
                                                    <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>

                                            <div class="mb-2 form-group">
                                                <label class="form-label"
                                                    style="font-size: 13px !important;">E-Mail</label>
                                                <input class="form-control" type="email"
                                                    value="<?= isset($user['account_info']['email']) ? $user['account_info']['email'] : ''; ?>"
                                                    name="email" id="email">
                                            </div>


                                            <div class="mb-2 position-relative" id="phonenumberdiv">
                                                <label class="form-label" style="font-size: 13px !important;">Phone
                                                    Number</label>
                                                <input type="tel" id="phoneNo" class="form-control" name="phone_number"
                                                    value="<?= isset($user['account_info']['phone_number']) ? $user['account_info']['phone_number'] : ''; ?>">
                                            </div>


                                            <div class="form-group mb-2">
                                                <label class="form-label"
                                                    style="font-size: 13px !important;">Residential Address</label>
                                                <input class="form-control " type="text" name="address" id=""
                                                    value="<?= isset($user['account_info']['address']) ? $user['account_info']['address'] : ''; ?>">

                                            </div>




                                            <div class="form-group mb-4">
                                                <label class="form-label"
                                                    style="font-size: 13px !important;">Country</label>
                                                <input class="form-control " type="text" name="country" id=""
                                                    value="<?= isset($user['account_info']['country']) ? $user['account_info']['country'] : ''; ?>">

                                            </div>

                                            <p><?= $user_id ?></p>

                                            <input type="hidden" name="update_request" value="1">

                                            <input type="hidden" name="user_id" value="<?= $user_id ?>">

                                            <button type="submit" class="btn btn-primary w-100">Submit</button>


                                        </div>
                                    </div>

                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

        <script>
            // image previewing
            $('#imageUpload').change(function (event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imagePreview').attr('src', e.target.result).show();
                    };
                    reader.readAsDataURL(file);
                }
            });

            // uploading the form
            $(document).ready(function () {

                ajaxSubmitForm("#updateForm", "controllers/user/post_processor.php", "home");

            });

        </script>

        <?php require_once 'includes/users/footer.php'; ?>