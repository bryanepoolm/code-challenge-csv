<!DOCTYPE html>
<html lang="es" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../public/">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title>Code Challenge</title>

	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?= base_url('public/img/favicon/favicon.ico') ?>" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

	<!-- Icons. Uncomment required icon fonts -->
	<link rel="stylesheet" href="<?= base_url('public/vendor/fonts/boxicons.css') ?>" />

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/solid.min.css" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/svg-with-js.min.css" rel="stylesheet" />

	<!-- Core CSS -->
	<link rel="stylesheet" href="<?= base_url('public/vendor/css/core.css') ?>" class="template-customizer-core-css" />
	<link rel="stylesheet" href="<?= base_url('public/vendor/css/theme-default.css') ?>" class="template-customizer-theme-css" />
	<link rel="stylesheet" href="<?= base_url('public/css/demo.css') ?>" />

	<!-- Vendors CSS -->
	<link rel="stylesheet" href="<?= base_url('public/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />

	<link rel="stylesheet" href="<?= base_url('public/vendor/libs/apex-charts/apex-charts.css') ?>" />

	<!-- Page CSS -->

	<!-- Helpers -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->


	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->
	<script src="<?= base_url('public/vendor/libs/popper/popper.js') ?>"></script>
	<script src="<?= base_url('public/vendor/js/bootstrap.js') ?>"></script>
	<script src="<?= base_url('public/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>


	<!-- endbuild -->

	<!-- Vendors JS -->
	<script src="<?= base_url('public/vendor/libs/apex-charts/apexcharts.js') ?>"></script>

	<!-- Main JS -->
	<script src="<?= base_url('public/js/main.js') ?>"></script>

	<!-- Page JS -->

	<!-- Place this tag in your head or just before your close body tag. -->



</head>

<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">
			<!-- Menu -->

			<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
				<div class="app-brand demo">
					<a href="<?= base_url() ?>" class="app-brand-link">

						<span class="app-brand-text demo menu-text fw-bolder ms-2">code challenge</span>
					</a>

					<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
						<i class="bx bx-chevron-left bx-sm align-middle"></i>
					</a>
				</div>

				<div class="menu-inner-shadow"></div>

				<ul class="menu-inner py-1">
					<!-- Dashboard -->
					<li class="menu-item">
						<a href="<?= base_url('home') ?>" class="menu-link">
							<i class="menu-icon tf-icons fas fa-home"></i>
							<div data-i18n="Analytics">Inicio</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?= base_url('products') ?>" class="menu-link">
							<i class="menu-icon fas fa-regular fa-box"></i>
							<div data-i18n="Analytics">Productos</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?= base_url('clients') ?>" class="menu-link">
							<i class="menu-icon tf-icons fas fa-users"></i>
							<div data-i18n="Analytics">Clientes</div>
						</a>
					</li>
					<li class="menu-item">
						<a href="<?= base_url('sellers') ?>" class="menu-link">
							<i class="menu-icon tf-icons fas fa-user-tag"></i>
							<div data-i18n="Analytics">Vendedores</div>
						</a>
					</li>
				</ul>
			</aside>
			<!-- / Menu -->

			<!-- Layout container -->
			<div class="layout-page">
				<!-- Navbar -->

				<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
					<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
						<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
							<i class="bx bx-menu bx-sm"></i>
						</a>
					</div>

					<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
						<!-- Search -->
						<div class="navbar-nav align-items-center">
							<div class="nav-item d-flex align-items-center">
								<i class="bx bx-search fs-4 lh-0"></i>
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
							</div>
						</div>
						<!-- /Search -->

						<ul class="navbar-nav flex-row align-items-center ms-auto">

							<!-- User -->
							<li class="nav-item navbar-dropdown dropdown-user dropdown">
								<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
									<div class="avatar avatar-online">
										<img src="<?= base_url('public/img/avatars/1.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
									</div>
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li>
										<a class="dropdown-item" href="javascript:void(0)">
											<div class="d-flex">
												<div class="flex-grow-1">
													<span class="fw-semibold d-block"><?= $this->session->userdata('user_data')->nombre ?></span>
												</div>
											</div>
										</a>
									</li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
										<a class="dropdown-item" href="<?= base_url('settings') ?>">
											<i class="bx bx-cog me-2"></i>
											<span class="align-middle">Ajustes</span>
										</a>
									</li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
										<a class="dropdown-item" href="<?= base_url('logout') ?>">
											<i class="bx bx-power-off me-2"></i>
											<span class="align-middle">Cerrar sesión</span>
										</a>
									</li>
								</ul>
							</li>
							<!--/ User -->
						</ul>
					</div>
				</nav>

				<!-- / Navbar -->

				<!-- Content wrapper -->
				<div class="content-wrapper">
					<!-- Content -->

					<div class="container-xxl flex-grow-1 container-p-y">
						<?= $content ?>
					</div>
					<!-- / Content -->

					<!-- Footer -->
					<footer class="content-footer footer bg-footer-theme">
						<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
							<div class="mb-2 mb-md-0">
								©
								<script>
									document.write(new Date().getFullYear());
								</script>
								, desarrollado por
								<a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Bryan E. Pool Mercado</a>
							</div>
						</div>
					</footer>
					<!-- / Footer -->

					<div class="content-backdrop fade"></div>
				</div>
				<!-- Content wrapper -->
			</div>
			<!-- / Layout page -->
		</div>

		<!-- Overlay -->
		<div class="layout-overlay layout-menu-toggle"></div>
	</div>
	<!-- / Layout wrapper -->
	<script src="<?= base_url('public/vendor/js/helpers.js') ?>"></script>
	<script src="<?= base_url('public/vendor/js/menu.js') ?>"></script>
	<script src="<?= base_url('public/js/config.js') ?>"></script>
	<script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>
