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
                                <h6 class="mb-0">Loan Application</h6>
                            </div>
                            <div class="card-body">
                                <h4>Apply for a Loan</h4>
                                <p>Please fill out the form below to apply for a loan. We'll review your application and get back to you as soon as possible.</p>

                                <form id="loanApplicationForm">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="fullName" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="fullName" name="fullName" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="phoneNumber" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dateOfBirth" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="employmentStatus" class="form-label">Employment Status</label>
                                            <select class="form-select form-control" id="employmentStatus" name="employmentStatus" required>
                                                <option value="">Select...</option>
                                                <option value="employed">Employed</option>
                                                <option value="self-employed">Self-Employed</option>
                                                <option value="unemployed">Unemployed</option>
                                                <option value="retired">Retired</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="annualIncome" class="form-label">Annual Income</label>
                                            <input type="number" class="form-control" id="annualIncome" name="annualIncome" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="loanAmount" class="form-label">Loan Amount Requested</label>
                                            <input type="number" class="form-control" id="loanAmount" name="loanAmount" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="loanPurpose" class="form-label">Loan Purpose</label>
                                            <select class="form-select form-control" id="loanPurpose" name="loanPurpose" required>
                                                <option value="">Select...</option>
                                                <option value="personal">Personal</option>
                                                <option value="business">Business</option>
                                                <option value="education">Education</option>
                                                <option value="home-improvement">Home Improvement</option>
                                                <option value="debt-consolidation">Debt Consolidation</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="additionalComments" class="form-label">Additional Comments</label>
                                        <textarea class="form-control" id="additionalComments" name="additionalComments" rows="3"></textarea>
                                    </div>

                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="termsAgreement" required>
                                        <label class="form-check-label" for="termsAgreement">I agree to the terms and conditions</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit Application</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "includes/users/footer.php" ?>

        <script>
            document.getElementById('loanApplicationForm').addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you would typically send the form data to your server
                alert('Loan application submitted successfully! We will review your application and contact you soon.');
            });
        </script>