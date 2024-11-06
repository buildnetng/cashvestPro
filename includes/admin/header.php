
<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class='sidebar-brand' href='home'>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
						xml:space="preserve">
						<path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
              C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z" />
						<path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z" />
						<path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z" />
					</svg>

					<span class="align-middle me-3">AppStack</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Home
					</li>
					<li class="sidebar-item active">
						<a href="home" class="sidebar-link">
							<i class="align-middle" data-lucide="sliders"></i> <span
								class="align-middle">Dashboard</span>
						</a>
						
					</li>
					<li class="sidebar-item">
						<a class='sidebar-link' href='users'>
							<i class="align-middle" data-lucide="users"></i> <span class="align-middle">Users</span>
						</a>
					</li>

					
                    
					<li class="sidebar-item">
						<a data-bs-target="#jobs" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-lucide="layout"></i> <span class="align-middle">Requests</span>
						</a>
						<ul id="jobs" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='deposits'>	Deposits</a>
							</li>
							<li class="sidebar-item"><a class='sidebar-link' href='withdrawal'>Withdrawal</a>
							</li>
							<li class="sidebar-item"><a class='sidebar-link' href='tickets'>Tickets</a>
							</li>
							
							
						</ul>
					</li>


					<li class="sidebar-item">
						<a class='sidebar-link' href='send-mail'>
							<i class="align-middle" data-lucide="mail"></i> <span class="align-middle">Mailer</span>
						</a>
					</li>
                    
                    <li class="sidebar-item">
						<a class='sidebar-link' href='profile'>
							<i class="align-middle" data-lucide="target"></i> <span class="align-middle">Profile</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class='sidebar-link' href='settings'>
							<i class="align-middle" data-lucide="settings"></i> <span class="align-middle">Settings</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class='sidebar-link' href='system'>
							<i class="align-middle" data-lucide="server"></i> <span class="align-middle">System</span>
						</a>
					</li>
                    

					
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						

						<div class="d-grid">
							<form action="actions/logout.php">
								<button type="submit" class="btn btn-primary">Log out</button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</nav>

        <div class="main">
			<nav class="navbar navbar-expand navbar-bg">
				<a class="sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>


				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item nav-theme-toggle dropdown">
							<a class="nav-icon js-theme-toggle" href="#">
								<div class="position-relative">
									<i class="align-middle text-body nav-theme-toggle-light" data-lucide="sun"></i>
									<i class="align-middle text-body nav-theme-toggle-dark" data-lucide="moon"></i>
								</div>
							</a>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
								data-bs-toggle="dropdown">
								<i class="align-middle" data-lucide="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
								data-bs-toggle="dropdown">
								<img src="img/avatars/avatar.jpg" class="img-fluid rounded-circle me-1 mt-n2 mb-n2"
									alt="Chris Wood" width="40" height="40" /> <span>Chris Wood</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class='dropdown-item' href='profile'><i class="align-middle me-1"
										data-lucide="user"></i> Profile</a>
								
								<div class="dropdown-divider"></div>
								
								<a class="dropdown-item" href="#">Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>