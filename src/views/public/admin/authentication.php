<?php include_once "includes/head.php" ;?>
<?php require "actions/config.php" ;?>
<body>
	<div class="auth-full-page d-flex">
		<div class="auth-form p-3">

			<div class="text-center">
				<h1 class="h2">Welcome back!</h1>
				<p class="lead">
					Sign in to your account to continue
				</p>
			</div>

			<div class="mb-3">
				
				
				<form id="login" method="POST">
					<div class="mb-3">
						<label class="form-label">Email</label>
						<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
					</div>
					<div class="mb-3">
						<label class="form-label">Password</label>
						<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
						
					</div>
					<div>
						<div class="form-check align-items-center">
							<input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me" checked>
							<label class="form-check-label text-small" for="customControlInline">Remember me</label>
						</div>
					</div>
					<div class="d-grid gap-2 mt-3">
						<button type="submit" class='btn btn-lg btn-primary'>Sign in</button>
					</div>
				</form>
			</div>

			
		</div>
	</div>

	<script src="js/app.js"></script>
	<script>
    $(document).ready(function() {
        $("#login").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "actions/login-processor.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    setTimeout(() => {
                        $("#success").fadeOut("fast");
                        $("#error").fadeOut("fast");
                    }, 5000); // Hide messages after 5 seconds
                },
                success: function(data) {
                    if (data.trim() === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Authentication successful',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            window.location.assign("home");
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: data,
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An error occurred while processing your request. Please try again later.'
                    });
                }
            });
        });
    });
</script>

</body>


<!-- Mirrored from appstack.bootlab.io/auth-sign-in by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 11:08:25 GMT -->
</html>