<?php session_start(); ?>
<?php include('dbcon.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>

	<title>Login</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shortcut icon" type="image/x-icon" href="src/images/logos/favicon.png">
	<link rel="stylesheet" type="text/css" href="src/css/util.css">
	<link rel="stylesheet" type="text/css" href="src/css/login.css">
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type="text/css">
	<link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
	
</head>
<body>

<!-- MENSAGEM DE ERRO DE LOGIN ---------------------------------------------------->

<?php $msgerror = "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
<div class='alert alert-danger fade show' id='success-alert' style='position:fixed; top: 20px; right: 20px;'>
<ion-icon name='alert'></ion-icon>
	&nbsp;Nome ou password incorrectos!
</div>
<script>
  window.setTimeout(function() {
    $('.alert').fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
  </script>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>"; ?>

<!------------------------------------------------------------------------------------->

<!-- FORM LOGIN ------------------------------------------------------------------------>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">


				<form class="login100-form validate-form flex-sb flex-w" method="post" action="">


					<span class="login100-form-title p-b-51">
						<img src="src/images/logos/aiccopn_logo.jpg" width="50%"></img>
						<br>
						<label>Medicina no Trabalho</label>
					</span>


					<div class="wrap-input100 m-b-16">
						<input required class="input100" type="text" name="username" placeholder="Nome de utilizador" autocomplete="off">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 m-b-16">
						<input required class="input100" type="password" name="password" placeholder="Palavra-passe" autocomplete="off">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" name="submit" onsubmit="check()">
							Entrar
						</button>
					</div>

					
					<div class="container-login100-form-btn m-t-17">
						<a class="login100-form-btn" type="button" name="registar" href="registar.php" style="text-decoration: none; ">
							Registar
					</a>
					</div>

					

				</form>

				<?php
				
				if (isset($_POST['submit']))
				{
					$username = mysqli_real_escape_string($con, $_POST['username']);
					$password = mysqli_real_escape_string($con, $_POST['password']);

					$query 		= mysqli_query($con, "SELECT * FROM utilizadores WHERE  password='$password' and username='$username'");
					$row		= mysqli_fetch_array($query);
					$num_row 	= mysqli_num_rows($query);



					if ($num_row > 0)
					{
						$_SESSION['username']=$row['username'];
						header('location:index.php');
					}
					else
					{
						echo "$msgerror";
					}



		
					if ($username === 'utilizador.dev') {

						if ($num_row > 0)
						{
							$_SESSION['username']=$row['username'];
							header('location:index.php');
						}
						else
						{
							echo "$msgerror";
						}
					}
				}

  				?>


			</div>
		</div>
	</div>

<!----------------------------------------------------------------------------------------------->	

<!-- SCRIPTS ---------------------------->

	<script src="js/main.js"></script>
	<script src="toastr-master/toastr.js"></script>
	<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
<!--------------------------------------->

</body>
</html>
