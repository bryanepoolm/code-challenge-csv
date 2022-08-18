<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title>Code Challenge | Login</title>

	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?= base_url('public/img/favicon/favicon.ico') ?>" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

	<!-- Icons. Uncomment required icon fonts -->
	<link rel="stylesheet" href="<?= base_url('public/vendor/fonts/boxicons.css') ?>" />

	<!-- Core CSS -->
	<link rel="stylesheet" href="<?= base_url('public/vendor/css/core.css" class="template-customizer-core-css') ?>" />
	<link rel="stylesheet" href="<?= base_url('public/vendor/css/theme-default.css" class="template-customizer-theme-css') ?>" />
	<link rel="stylesheet" href="<?= base_url('public/css/demo.css') ?>" />

	<!-- Vendors CSS -->
	<link rel="stylesheet" href="<?= base_url('public/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />

	<!-- Page CSS -->
	<!-- Page -->
	<link rel="stylesheet" href="<?= base_url('public/vendor/css/pages/page-auth.css') ?>" />
	<!-- Helpers -->
	<script src="<?= base_url('public/vendor/js/helpers.js') ?>"></script>


	<script src="<?= base_url('public/js/config.js') ?>"></script>
</head>

<body>
	<!-- Content -->

	<div class="container-xxl">
		<div class="authentication-wrapper authentication-basic container-p-y">
			<div class="authentication-inner">
				<!-- Register -->
				<div class="card">
					<div class="card-body">
						<!-- Logo -->
						<div class="app-brand justify-content-center">
							<a href="<?= base_url() ?>" class="app-brand-link gap-2">
								<span class="app-brand-logo demo">




								</span>
								<span class="app-brand-text demo text-body fw-bolder">Code Challenge</span>
							</a>
						</div>
						<!-- /Logo -->
						<h4 class="mb-2">Hola, bienvenido! 👋</h4>
						<p class="mb-4">Por favor inicia sesión y que empiece la aventura</p>

						<form id="formAuthentication" class="mb-3">
							<div class="mb-3">
								<label for="email" class="form-label">Nombre de usuario</label>
								<input type="text" class="form-control" id="email" name="username" placeholder="Ingrese su nombre de usuario" autofocus />
								<div id="validate-username" class="invalid-feedback">

								</div>
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Contraseña</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" />
								<div id="validate-password" class="invalid-feedback">

								</div>
							</div>

							<div class="mb-3">
								<button id="login-button" class="btn btn-primary d-grid w-100" type="submit">Iniciar sesión</button>
							</div>
						</form>


					</div>
				</div>
				<!-- /Register -->
			</div>
		</div>
	</div>

	<!-- / Content -->

	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->
	<script src="<?= base_url('public/vendor/libs/jquery/jquery.js') ?>"></script>
	<script src="<?= base_url('public/vendor/libs/popper/popper.js') ?>"></script>
	<script src="<?= base_url('public/vendor/js/bootstrap.js') ?>"></script>
	<script src="<?= base_url('public/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>

	<script src="<?= base_url('public/vendor/js/menu.js') ?>"></script>
	<!-- endbuild -->

	<!-- Vendors JS -->

	<!-- Main JS -->
	<script src="<?= base_url('public/js/main.js') ?>"></script>

	<!-- Page JS -->
	<script>
		$("#formAuthentication").submit(function(e) {
			e.preventDefault();
			$("#login-button").attr('disabled', 'disabled');
			const request = $.post("<?= base_url('authcontroller/login') ?>", $(this).serialize());
			request.done((response) => {
				window.location.reload();
				$("#login-button").html(`<center><div class="text-center spinner-grow text-light" role="status">
                          <span class="visually-hidden">Cargando...</span>
                        </div></center>`);
			});
			request.fail((jqxhr) => {
				$("#login-button").attr('disabled', false);
				if (jqxhr.status === 400) {
					let errors = jqxhr.responseJSON;
					if (errors.username != '') {
						$("#email").addClass('is-invalid');
						$("#validate-username").html(errors.username);

					} else {
						$("#email").removeClass('is-invalid');
						$("#validate-username").empty();
					}

					if (errors.password != '') {
						$("#password").addClass('is-invalid');
						$("#validate-password").html(errors.password);
					} else {
						$("#password").removeClass('is-invalid');
						$("#validate-password").empty();
					}
				} else {
					let validate = jqxhr.responseText;
					$("#email").removeClass('is-invalid');
					$("#validate-username").empty();
					$("#password").removeClass('is-invalid');
					alert(validate);

				}
			});
		});
	</script>
	<!-- Place this tag in your head or just before your close body tag. -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
