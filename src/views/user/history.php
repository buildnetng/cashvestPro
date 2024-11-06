<?php include "includes/users/head.php" ?>

<body class="application application-offset">
   
    <div class="container-fluid container-application" >

        <?php include "includes/users/header.php" ?>

        <div class="main-content position-relative">

            <?php include "includes/users/nav.php" ?>
            <div class="page-content">

              

                <div class="row mt-4">
                    <div class="col-xl-12 col-md-12">
                        <div class="bg-white card card-fluid">
                            <div class="card-header d-flex justify-content-between align-items-center ">
                                <h6 class="mb-0 text-white">Transaction History</h6>
                                <div class="d-flex">
                                    <input type="text" class="form-control form-control-sm mr-2" placeholder="Search transactions"
                                        id="transactionSearch">
                                    <button class="btn btn-sm btn-light" onclick="searchTransactions()">Search</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2024-10-14</td>
                                            <td>Deposit</td>
                                            <td>$1000.00</td>
                                            <td><span class="badge bg-success text-white">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>2024-10-12</td>
                                            <td>Withdrawal</td>
                                            <td>$500.00</td>
                                            <td><span class="badge bg-warning text-white">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>2024-10-10</td>
                                            <td>Deposit</td>
                                            <td>$2000.00</td>
                                            <td><span class="badge bg-success text-white">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>2024-10-08</td>
                                            <td>Withdrawal</td>
                                            <td>$300.00</td>
                                            <td><span class="badge bg-success text-white">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>2024-10-06</td>
                                            <td>Deposit</td>
                                            <td>$1500.00</td>
                                            <td><span class="badge bg-success text-white">Completed</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- Static Pagination (no functionality without JavaScript) -->
                                <nav>
                                    <ul class="pagination justify-content-center">
                                        <span class="badge badge-primary badge-circle">
                                            3
                                        </span>

                                        <span class="badge badge-secondary badge-circle">
                                            3
                                        </span>

                                        <span class="badge badge-success badge-circle">
                                            3
                                        </span>

                                        <span class="badge badge-danger badge-circle">
                                            3
                                        </span>

                                        <span class="badge badge-warning badge-circle">
                                            3
                                        </span>

                                        <span class="badge badge-info badge-circle">
                                            3
                                        </span>

                                        <span class="badge badge-dark badge-circle">
                                            3
                                        </span>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <?php include "includes/users/footer.php" ?>

      