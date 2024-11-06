<body>
	<div class="wrapper">
		<?php include_once "includes/admin/header.php" ;?>


		<main class="content">
			<div class="container-fluid p-0">

				<h1 class="h3 mb-3">Users</h1>

				<div class="col-12 col-xl-12">
					<div class="card">

						<div class="card-body">
							<table id="datatables-reponsive" class="table table-striped w-100">
								<thead>
									<tr>
										<th>SN</th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone Number</th>
										<th>Status</th>
										<th>Actions</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Tiger Nixon</td>
										<td>tigernixon@gmail.com</td>
										<td>+805895961</td>
										<td><span class="badge badge-subtle-success me-2"> Active </span></td>
										<td>
											<div class="d-flex gap-3">
											<button data-bs-toggle="modal" data-bs-target="#fundwallet"
												class="btn btn-sm btn-warning  ">
												<svg
													xmlns="http://www.w3.org/2000/svg" width="12" height="12"
													viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
													stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-edit">
													<path
														d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
													</path>
													<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
													</path>
												</svg>
											</button>

											<button  class="btn btn-sm btn-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                        </svg>
                                            </button>

											<a href="send-mail" class="btn btn-sm btn-primary ">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                                        <polyline points="22,6 12,13 2,6"></polyline>
                                                                    </svg>
                                                                </a>
											</div>
											

										</td>
										
									</tr>

								</tbody>
							</table>
						</div>
					</div>



				</div>


			</div>
		</main>

		<div class="modal fade" id="fundwallet" tabindex="-1" style="display: none;" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Fund Wallet</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body" id="fund-details">


						<div class="row">

							<div class="col-6">
								<div class="mb-3">
									<label for="roi" class="form-label">ROI Balance </label>
									<input type="number" class="form-control" placeholder="ROI Balance" id="roi"
										value="0" name="roi" step="0.01">
								</div>
							</div>

							<div class="col-6">
								<div class="mb-3">
									<label for="invested" class="form-label">Invested Capital </label>
									<input type="number" class="form-control" placeholder="Invested Capital"
										id="invested" value="0" name="invested" step="0.01">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label for="Target Amount" class="form-label">User Notification</label>
									<textarea class="form-control" rows="2" placeholder="Textarea"></textarea>
								</div>
							</div>
						</div>
			
						<div>
							<button type="submit" class="btn btn-primary w-md">Save changes</button>
						</div>


					</div>
				</div>
			</div>
			
		</div>
	</div>
	</div>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			// Datatables Responsive
			$("#datatables-reponsive").DataTable({
				destroy: true,
				responsive: true
			});
		});
	</script>