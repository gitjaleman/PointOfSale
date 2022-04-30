<html lang="es"><head>
		<meta charset="utf-8">
		<title>GESTION</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content="Sistema Gestión" name="description">
		<meta content="AGENCIA CRAFT" name="author">
		<link rel="icon" type="image/png" href="SYSTEM/SRC/images/craft/favicon.png">
		<link rel="stylesheet" href="SYSTEM/SRC/libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="SYSTEM/SRC/libs/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" type="text/css" href="SYSTEM/SRC/libs/toastr/build/toastr.min.css">
		<link href="SYSTEM/SRC/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
		<link href="SYSTEM/SRC/css/icons.min.css" rel="stylesheet" type="text/css">
		<link href="SYSTEM/SRC/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
	</head>
	<body style="background-color: #303952 ;">
		<div class="account-pages my-5 pt-sm-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-6 col-xl-5">
						<div class="card overflow-hidden">
							<div style="background-color: #9EBFFE;">
								<div class="row">
									<div class="col-7">
										<div class="text-primary p-4">
											<h4 class="card-tittle"><b style="color:#303952">COBRANZA</b> </h4>
											<h5 class="card-subtitle font-14 " style="color:#fff">Versión 3.0</h5>
										</div>
									</div>
									<div class="col-5 align-self-end">
										<img src="SYSTEM/SRC/images/page/profile-img.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>
							<div class="card-body pt-0">
								<div class="auth-logo">
									<a class="auth-logo-light">
										<div class="avatar-md profile-user-wid mb-4">
											<img class="avatar-title rounded-circle bg-light" src="SYSTEM/SRC/images/cliente/logo.svg" alt="">
										</div>
									</a>

									<a class="auth-logo-dark">
										<div class="avatar-md profile-user-wid mb-4">
											<img class="avatar-title rounded-circle bg-light" src="SYSTEM/SRC/images/cliente/logo.svg" alt="">
										</div>
									</a>
								</div>
								<div class="p-2">
									<form id="frm" class="form-horizontal">


										<div class="mb-3">
											<label class="form-label">Nombre Usuario</label>
											<input type="text" class="form-control" id="username" required="">
										</div>
										<div class="mb-3">
											<label class="form-label">Contraseña</label>
											<div class="input-group auth-pass-inputgroup">
												<input type="password" class="form-control" id="userpass">
												<button class="btn btn-light " type="button" id="password-addon" required="">
													<i class="mdi mdi-eye-outline"></i>
												</button>
											</div>
										</div>
										<div class="mt-5 d-grid">
											<button class="btn btn-lg btn-success waves-effect waves-light " type="submit">
												<b>INGRESO</b>
											</button>
										</div>

									</form>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>

		<script src="SYSTEM/SRC/libs/jquery/jquery.min.js"></script>
		<script src="SYSTEM/SRC/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="SYSTEM/SRC/libs/metismenu/metisMenu.min.js"></script>
		<script src="SYSTEM/SRC/libs/simplebar/simplebar.min.js"></script>
		<script src="SYSTEM/SRC/libs/node-waves/waves.min.js"></script>
		<script src="SYSTEM/SRC/libs/toastr/build/toastr.min.js"></script>
		<script src="SYSTEM/SRC/js/app.js"></script>
		<script>
/*  prueba  final */
		$(document).ready(function() {
			$('#frm')[0].reset();
			localStorage.clear();
			login();
		});
		let dir_local =  "http://localhost/server/cobranza_api/api/";
		let dir_server =  "https://gestioncobranza.com/api/api/";
		let http_data = dir_server;

		const login = () =>{
			$('#frm').on('submit', function(e) {
				e.preventDefault();
				let user = $("#username").val();
				let pass = $("#userpass").val();
				let url = http_data + 'login?u=' + user + '&p=' + pass;
				select_asesor(url);
			});
		}

		const select_asesor = async (url) => {
			try {
				const resp = await fetch(url);
				const data = await resp.json();
				await process_data(data);
			} catch (e) {
				console.log('no hay resultados:' + e)
			}
		};

		const process_data = (data) => {
			let data_num = data.num;
			if (data_num == 1){
				let data_user = data.data[0];
				let url_session = 'app/php/session.php?a=on&t='+data_user['usertype'];
				localStorage.setItem('session_name', data_user['nombre']);
				localStorage.setItem('session_user', data_user['username']);
				localStorage.setItem('session_type', data_user['usertype']);
				localStorage.setItem('session_avatar', data_user['avatar']);
				localStorage.setItem('session', 'ACTIVE');
				$.ajax({
					url: url_session
				}).done(function(e) {  
					window.location = "public/";
				});

				
			} else {
				error(data);
			}
		}

		function error(data) {
			toastr.options = {
				"closeButton": false,
				"debug": false,
				"newestOnTop": false,
				"progressBar": false,
				"positionClass": "toast-top-right",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": 300,
				"hideDuration": 1000,
				"timeOut": 5000,
				"extendedTimeOut": 1000,
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			}
			toastr["error"]("Los datos de acceso  no son correctos");
			console.log(data);
			console.log(data.sql);
		}
		</script>
	
	
</body></html>