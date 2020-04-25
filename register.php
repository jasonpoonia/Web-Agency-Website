<!DOCTYPE html>
<html lang="en">
<title>Register | Lucid Media | Digital Agency | New Zealand</title>
<link rel="canonical" href="https://lucidmedia.co.nz/register.php" />

<head>
    <?php
    include("includes/header.php")
    ?>
		<link href="register.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body id="page-top">
  <?php
  include("includes/navfixed.php")
  ?>
    <div style="padding-top:100px"></div>
    <!-- Services -->
    <!-- Web Design -->
		<div class="register">
			<h1>Register</h1>
			<form action="registerprocess.php" method="post" autocomplete="off">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>
                <a class="text-dark" href="login.php">Already have an Account? Login</a>
				<input type="submit" value="Register">
			</form>
		</div>

    <!-- Footer -->
    <?php
    include('includes/footer.php')
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

</body>

</html>
