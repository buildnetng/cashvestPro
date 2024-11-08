<?php require_once 'includes/admin/head.php'; ?>

<body>
    <div class="wrapper">
        <?php include_once "includes/admin/header.php"; ?>
        <style>
            input {
                font-size: 12px !important;
            }


            label {
                font-size: 12px !important;
            }
        </style>

        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3">Wallet Settings</h1>
                <div class="row">
                    <div class="col-md-12 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h6 class="mb-2"><img
                                                src="https://www.account.notchchaincapitals.com/assets/images/crypto/logo/btc.png"
                                                width="20px" alt=""> Bitcoin </h6>

                                    </div>

                                    <div class="col-12 mt-3">
                                        <div>
                                            <label for="btc_address">Wallet Address</label>
                                            <input id="btc_address" type="text"
                                                value="1My8MUcyzmgVumEMkEuvJPjATakfTPHwTS"
                                                class="form-group form-control" placeholder="Wallet Address">

                                            <label class="mt-3" for="btc_min">Minimum Withdrawal Amount</label>
                                            <input id="btc_min" type="number" step="0.01" value="10"
                                                class="form-group form-control" placeholder="Minimum Amount">

                                            <label class="mt-3" for="btc_max">Maximum Withdrawal Amount</label>
                                            <input id="btc_max" type="number" step="0.01" value="1100000"
                                                class="form-group form-control" placeholder="Maximum Amount">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h6 class="mb-2"><img
                                                src="https://www.account.notchchaincapitals.com/assets/images/crypto/logo/btc.png"
                                                width="20px" alt=""> Bitcoin </h6>

                                    </div>

                                    <div class="col-12 mt-3">
                                        <div>
                                            <label for="btc_address">Wallet Address</label>
                                            <input id="btc_address" type="text"
                                                value="1My8MUcyzmgVumEMkEuvJPjATakfTPHwTS"
                                                class="form-group form-control" placeholder="Wallet Address">

                                            <label class="mt-3" for="btc_min">Minimum Withdrawal Amount</label>
                                            <input id="btc_min" type="number" step="0.01" value="10"
                                                class="form-group form-control" placeholder="Minimum Amount">

                                            <label class="mt-3" for="btc_max">Maximum Withdrawal Amount</label>
                                            <input id="btc_max" type="number" step="0.01" value="1100000"
                                                class="form-group form-control" placeholder="Maximum Amount">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h6 class="mb-2"><img
                                                src="https://www.account.notchchaincapitals.com/assets/images/crypto/logo/btc.png"
                                                width="20px" alt=""> Bitcoin </h6>

                                    </div>

                                    <div class="col-12 mt-3">
                                        <div>
                                            <label for="btc_address">Wallet Address</label>
                                            <input id="btc_address" type="text"
                                                value="1My8MUcyzmgVumEMkEuvJPjATakfTPHwTS"
                                                class="form-group form-control" placeholder="Wallet Address">

                                            <label class="mt-3" for="btc_min">Minimum Withdrawal Amount</label>
                                            <input id="btc_min" type="number" step="0.01" value="10"
                                                class="form-group form-control" placeholder="Minimum Amount">

                                            <label class="mt-3" for="btc_max">Maximum Withdrawal Amount</label>
                                            <input id="btc_max" type="number" step="0.01" value="1100000"
                                                class="form-group form-control" placeholder="Maximum Amount">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </main>
        <?php require_once 'includes/admin/footer.php'; ?>