<html>
<head>
<title>Login to Goel Book Depot Admin</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet">
</head>
<body>
<div class="row">
	<div class="col-md-12 header" align="center">
		<p>GBD<sub>Admin</sub></p>
	</div>
</div>
<div class="row">
	<div class="col-md-12 body">
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
			<form method="POST" action="<?php echo site_url('login/login') ?>">
				<input type="text" name="username" placeholder="Username" class="form-control" required>
				<br>
				<input type="password" name="password" placeholder="Password" class="form-control" required>
				<br>
				<div align="center">
					<button class="btn btn-primary">Login</button>
				</div>

			</form>
		</div>
		<div class="col-md-4">

		</div>
	</div>
</div>

</body>
</html>
