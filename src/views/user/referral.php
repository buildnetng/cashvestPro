<body class="application application-offset">

    <div class="container-fluid container-application" >

        <?php include "includes/users/header.php" ?>

        <div class="main-content position-relative">

            <?php include "includes/users/nav.php" ?>
            <div class="page-content">

                <div class="row mt-4">
                    <div class="col-xl-12 col-md-12">
                        <div class="bg-white card card-fluid">
                            <div class="card-header">
                                <h6 class="mb-0 ">Referral Program</h6>
                            </div>
                            <div class="card-body">
                                <h4>Invite Friends and Earn Rewards!</h4>
                                <p>Share your unique referral link with friends and family. When they sign up and make their first deposit, you'll both receive a bonus!</p>

                                <div class="form-group mb-5">
                                    <label for="referralLink">Your Referral Link:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="referralLink" value="https://example.com/ref/<?php echo $user_id; ?>" readonly>
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button" onclick="copyReferralLink()">Copy</button>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="mt-4">Your Referrals</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Date Joined</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>JohnDoe</td>
                                            <td>2024-10-15</td>
                                            <td><span class="badge bg-success text-white">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>JaneSmith</td>
                                            <td>2024-10-14</td>
                                            <td><span class="badge bg-warning text-white">Pending</span></td>
                                        </tr>
                                    </tbody>
                                </table>

                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php include "includes/users/footer.php" ?>

        <script>
            function copyReferralLink() {
                var copyText = document.getElementById("referralLink");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");
                alert("Copied the referral link: " + copyText.value);
            }
        </script>
  