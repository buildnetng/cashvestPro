<body>
    <div class="wrapper">
        <?php include_once "includes/admin/header.php"; ?>


        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3">Send Mail</h1>

                <div class="col-12 col-xl-12">
                    <div class="card">

                        <div class="card-body">
                            <form id="mailerForm">
                                <div class="mb-3">
                                    <label class="form-label">Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" class="form-control" placeholder="Email Message" rows="3"></textarea>
                                </div>
                                <div id="responseMessage"></div>

                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>



                </div>


            </div>
        </main>

        <script>
            $(document).ready(function() {
                $("#mailerForm").on('submit', function(e) {
                    e.preventDefault();

                    // Show sending message and keep it open until the process finishes
                    Swal.fire({
                        icon: 'info',
                        title: 'Sending Mail',
                        text: 'Please wait while mail is being sent...',
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        didOpen: function() {
                            // Proceed with AJAX request after the Swal alert opens
                            $.ajax({
                                url: "actions/send_mail.php",
                                type: "POST",
                                data: new FormData(document.getElementById('mailerForm')),
                                contentType: false,
                                cache: false,
                                processData: false,
                                success: function(response) {
                                    console.log('Server Response:', response); // Log the server response
                                    try {
                                        var result = JSON.parse(response);

                                        if (result.success) {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success',
                                                text: result.message,
                                                timer: 2000,
                                                showConfirmButton: false
                                            }).then(() => {
                                                // Reload the page after showing the success message
                                                window.location.reload();
                                                // Or redirect to a new page
                                                window.location.href = 'send-mail';
                                            });
                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error',
                                                text: result.message
                                            });
                                        }
                                    } catch (e) {
                                        console.error('Error parsing JSON response:', e);
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Error',
                                            text: 'An unexpected error occurred.'
                                        });
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.error('AJAX Error:', error);
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'An error occurred while sending the request.'
                                    });
                                }
                            });
                        }
                    });
                });
            });
        </script>