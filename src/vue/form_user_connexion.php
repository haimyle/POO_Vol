<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../../assets/user/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(../../assets/user/images/hoian.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section">CONNECTEZ-VOUS</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form action="../traitement/traitement_user_connexion.php" method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="email" name="email" class="form-control" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="password" class="form-control" placeholder="Mot de passe" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-light submit px-3">Se sonnecter</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox">Rester connecté
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Mot de passe oublié?</a>
								</div>
	            </div>
	          </form>
	          <div class="w-100 text-center" >
                  <a href="form_user_inscription.php" style="color: #fff">Créez votre compte </a>
			  </div>
				</div>
			</div>
		</div>
	</section>

	<script src="../../assets/user/js/jquery.min.js"></script>
  <script src="../../assets/user/js/popper.js"></script>
  <script src="../../assets/user/js/bootstrap.min.js"></script>
  <script src="../../assets/user/js/main.js"></script>

	</body>
</html>

