<?php require_once 'includes/users/head.php'; ?>

<body class="application application-offset">
    <div class="container-fluid container-application">
        <?php include "includes/users/header.php" ?>

        <div class="main-content position-relative">
            <?php include "includes/users/nav.php" ?>
            <div class="page-content">
                <div class="row mt-4">
                    <div class="col-xl-12 col-md-12">
                        <div class="bg-white card card-fluid">
                            <div class="card-header">
                                <h6 class="mb-0">Support Ticket System</h6>
                            </div>
                            <div class="card-body">
                                <h4>Submit a Support Ticket</h4>
                                <p>Please fill out the form below to submit a support ticket. Our team will respond to your inquiry as soon as possible.</p>

                                <form id="supportTicketForm">


                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="ticketType" class="form-label">Ticket Type</label>
                                            <select class="form-select form-control" id="ticketType" name="ticketType" required>
                                                <option value="">Select...</option>
                                                <option value="technical">Technical Issue</option>
                                                <option value="billing">Billing Inquiry</option>
                                                <option value="account">Account Management</option>
                                                <option value="feature">Feature Request</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="priority" class="form-label">Priority</label>
                                            <select class="form-select form-control" id="priority" name="priority" required>
                                                <option value="">Select...</option>
                                                <option value="low">Low</option>
                                                <option value="medium">Medium</option>
                                                <option value="high">High</option>
                                                <option value="urgent">Urgent</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="subject" name="subject" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="attachments" class="form-label">Attachments (optional)</label>
                                        <input type="file" class="form-control" id="attachments" name="attachments" multiple>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit Ticket</button>
                                </form>

                                <hr class="my-5">

                                <h4>Your Recent Tickets</h4>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ticket ID</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                            <th>Last Updated</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#1234</td>
                                            <td>Unable to access account</td>
                                            <td><span class="badge bg-warning">In Progress</span></td>
                                            <td>2024-10-19</td>
                                        </tr>
                                        <tr>
                                            <td>#1235</td>
                                            <td>Billing discrepancy</td>
                                            <td><span class="badge bg-success">Resolved</span></td>
                                            <td>2024-10-18</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('supportTicketForm').addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you would typically send the form data to your server
                alert('Support ticket submitted successfully! Our team will respond to your inquiry soon.');
                // Optionally, reset the form
                this.reset();
            });
        </script> 
        
        <?php require_once 'includes/users/footer.php'; ?>