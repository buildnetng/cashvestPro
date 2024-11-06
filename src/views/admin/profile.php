<?php include_once "includes/admin/head.php" ;?>


<body>
	<div class="wrapper">
		<?php include_once "includes/admin/header.php" ;?>


		<main class="content">
			<div class="container-fluid p-0">

				<h1 class="h3 mb-3">Settings</h1>

				<div class="row">

					<div class="col-md-4 col-xl-4">

						<div class="card">
							<div class="card-header">
								<h5 class="card-title mb-0">Profile Settings</h5>
							</div>

							<div class="list-group list-group-flush" role="tablist">
								<a class="list-group-item list-group-item-action active" data-bs-toggle="list"
									href="#account" role="tab">
									Account
								</a>

							</div>
						</div>
					</div>

					<div class="col-md-8 col-xl-8">
						<div class="tab-content">
							<div class="tab-pane fade show active" id="account" role="tabpanel">

								<div class="card ">
									<div class="card-header">

										<h5 class="card-title mb-0">Email info</h5>
									</div>
									<div class="card-body">
										<form action="actions/update_email.php" method="POST">
											<div class="row">

												<div class="mb-3">
													<input type="hidden" name="user_id" value="<?= $user_id ?>">

													<label for="email" class="form-label">Email</label>
													<input type="email" class="form-control" name="email"
														value="">
												</div>

												<button type="submit" class="btn btn-primary">Save changes</button>

						</form>
											</div>

									</div>



								</div>
								<div class="card mt-3">
									<div class="card-header">

										<h5 class="card-title mb-0">Password Info</h5>
									</div>
									<div class="card-body">
										<form id="updatePasswordForm" method="POST">
											<input type="hidden" name="user_id" value="<?= $user_id ?>">

											<div class="mb-3">
												<label for="password" class="form-label">Current password</label>
												<input type="password" class="form-control" name="password"
													id="password">
											</div>
											<div class="mb-3">
												<label for="new_password" class="form-label">New password</label>
												<input type="password" class="form-control" name="new_password"
													id="new_password">
											</div>
											<div class="mb-3">
												<label for="verify_new_password" class="form-label">Verify
													password</label>
												<input type="password" class="form-control" name="verify_new_password"
													id="verify_new_password">
											</div>
											<button type="submit" class="btn btn-primary"
												onclick="updatePassword()">Save change</button>
										</form>

									</div>
								</div>

							</div>
						</div>
					</div>

				
				</div>
		</main>

		<?php include_once "includes/admin/footer.php" ;?>

</body>

<script>
	function updatePassword() {
		$.ajax({
			url: 'actions/update_password.php',
			type: 'POST',
			data: $('#updatePasswordForm').serialize(),
			success: function (response) {
				response = JSON.parse(response);
				if (response.status === 'success') {
					Swal.fire({
						icon: 'success',
						title: 'Password Updated!',
						text: response.message
					}).then(() => {
						$('#updatePasswordForm')[0].reset(); // Reset form on success
					});
				} else {
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: response.message
					});
				}
			},
			error: function () {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'An error occurred while processing your request. Please try again later.'
				});
			}
		});
	}
</script>


</html>