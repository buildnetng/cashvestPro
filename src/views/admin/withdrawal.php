<body>
	<div class="wrapper">
		<?php include_once "includes/admin/header.php"; ?>


		<main class="content">
			<div class="container-fluid p-0">

				<h1 class="h3 mb-3">Witdrawal Request</h1>

				<div class="col-12 col-md-4 col-lg-4">
					<div class="card">

						<div class="card-header px-4 pt-4">
							<div class="card-actions float-end">
								<div class="dropdown position-relative">
									<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
										<i class="align-middle" data-lucide="more-horizontal"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-end">

										<a class="dropdown-item" href="#">Accept Request</a>
										<form id="delete-campaign">
											<input type="hidden" name="id" value="<?= $id ?>">
											<button class="dropdown-item" type="submit">Decline
												Request</button>

										</form>


										<!-- <a class="dropdown-item" href="#">Something else here</a> -->
									</div>
								</div>
							</div>
							<div class="badge bg-warning my-2">Pending</div>
						</div>
						<div class="card-body px-4 pt-2">
							<form>
								<div class="form-group mb-2">
									<label for="Refernce-ID">Refernce ID</label>
									<input type="text" class="form-control" id="" value="#55y5h5"
										disabled>
								</div>
								<div class="form-group mb-2">
									<label for="">User</label>
									<input type="text" class="form-control" id="" value="John Doe"
										disabled>
								</div>
								<div class="form-group mb-2">
									<label for="Refernce-ID">Withdrawal Amount</label>
									<input type="text" class="form-control" id="" value="$5000"
										disabled>
								</div>

								<div class="form-group mb-2">
									<label for="Refernce-ID">User Email</label>
									<input type="text" class="form-control" id="" value="johndoe@gmail.com"
										disabled>
								</div>

								<div class="form-group mb-2">
									<label for="Refernce-ID">Payment Method</label>
									<input type="text" class="form-control" id="" value="Bitcoin"
										disabled>
								</div>

								<button class="btn btn-primary btn-sm">View Proof</button>

							</form>






						</div>
					</div>
				</div>
			</div>

	</div>
	</div>


	</div>
	</main>