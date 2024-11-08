<?php require_once 'includes/users/head.php'; ?>

<body class="application application-offset">

    <div class="container-fluid container-application">

        <?php include "includes/users/header.php" ?>

        <div class="main-content position-relative">

            <?php include "includes/users/nav.php" ?>
            <div class="page-content">

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="border-radius: 30px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 mb-3">
                                        <div class="main">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h1 style="font-size: 16px;" class="mb-3">Shares Enquiries</h1>

                                                    <form action="contact_admin_shares.php" method="POST">
                                                        <!-- Full Name -->
                                                        <div class="form-group mb-2">
                                                            <label class="form-label" style="font-size: 13px !important;">Full Name</label>
                                                            <input class="form-control" type="text" name="full_name" id="full_name" placeholder="Enter Your Name" required>
                                                        </div>

                                                        <!-- Email Address -->
                                                        <div class="form-group mb-2">
                                                            <label class="form-label" style="font-size: 13px !important;">Email</label>
                                                            <input class="form-control" type="email" name="email" id="email" placeholder="Enter Your Email" required>
                                                        </div>

                                                        <!-- Phone Number -->
                                                        <div class="form-group mb-2">
                                                            <label class="form-label" style="font-size: 13px !important;">Phone Number</label>
                                                            <input class="form-control" type="tel" name="phone" id="phone" placeholder="Enter Your Phone Number" required>
                                                        </div>

                                                        <!-- Shares of Interest -->
                                                        <div class="form-group mb-2">
                                                            <label class="form-label" style="font-size: 13px !important;">Shares of Interest</label>
                                                            <input class="form-control" type="text" name="shares_interest" id="shares_interest" placeholder="Enter the Shares You Are Interested In" required>
                                                        </div>

                                                        <!-- Number of Shares -->
                                                        <div class="form-group mb-2">
                                                            <label class="form-label" style="font-size: 13px !important;">Number of Shares</label>
                                                            <input class="form-control" type="number" name="num_shares" id="num_shares" placeholder="Enter Number of Shares" required>
                                                        </div>

                                                        <!-- Message -->
                                                        <div class="form-group mb-2">
                                                            <label class="form-label" style="font-size: 13px !important;">Additional Message</label>
                                                            <textarea class="form-control" name="message" id="message" rows="4" placeholder="Enter any additional information or questions" required></textarea>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary w-100">Submit Inquiry</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div> 
        <?php require_once 'includes/users/footer.php'; ?>