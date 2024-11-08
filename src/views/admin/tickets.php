<?php require_once 'includes/admin/head.php'; ?>

<body>
    <div class="wrapper">
        <?php include_once "includes/admin/header.php"; ?>


        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3">Witdrawal Request</h1>

                <div class="col-xl-4 col-md-6">
                    <div class="card plan-box">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-grow-1 m-3">
                                    <h4>Support Ticket</h4>
                                    <hr>
                                    <p><i class="bx bx-checkbox-square text-primary me-2"></i> User: <span>Rashid Rashid</span></p>
                                    <p><i class="bx bx-checkbox-square text-primary me-2"></i> Ticket ID: <span>28141006</span></p>
                                    <p><i class="bx bx-checkbox-square text-primary me-2"></i>Category: <span>Others</span></p>
                                    <p><i class="bx bx-checkbox-square text-primary me-2"></i> Subject: <span>Help confirmed my KYC </span> </p>
                                    <p><i class="bx bx-checkbox-square text-primary me-2"></i> Status: <span>Opened</span></p>
                                </div>
                            </div>
                            <div class="text-center plan-btn">
                                <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Close</a>
                                <button data-bs-toggle="modal" data-bs-target="#ticket" class="btn btn-danger btn-sm waves-effect waves-light">View Message</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </main>

        <div class="modal fade" id="ticket" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Support Ticket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="outer-repeater modal_list_info" target="_blank" action="mailer">
                            <div data-repeater-list="outer-group" class="outer">
                                <div data-repeater-item="" class="outer">
                                    <div class="form-group mb-3">
                                        <label>Full Name </label>

                                        <input id="name" type="text" value="Rashid Rashid" class="form-control" disabled="disabled">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Subject </label>

                                        <input id="subject" type="text" value="Deposit" class="form-control" disabled="disabled">
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 mb-3">
                                            <div class="form-group" id="message">Account name Rashid confirmed my KYC I am waiting for you admin </div>
                                        </div>
                                    </div>
                                    <a href="send-mail" class="btn btn-md btn-danger">Reply Message</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <?php require_once 'includes/admin/footer.php'; ?>