<?php
$site_key = '6LcFDx0UAAAAAKbSGmIbpDkFJ9Im5xyM8BvqsUoQ';
$secret_key = '6LcFDx0UAAAAAOK8R6mXw1zel-waaW3fb1hXET1h';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sinyo - BK login</title>
  <!-- Bootstrap core CSS-->
  <link href="theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="theme/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="theme/css/sb-admin.css" rel="stylesheet">
</head>

<body>
	<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Silahkan Masukkan Username dan Password</div>
      <div class="card-body">
		<form action="pre_login.php" method="post" onSubmit="return validasi()">
			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="nisn" id="nisn" />
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>
			<div class="form-group">
                    <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
                </div>
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
			©Copyright <?php $hariku = date('Y'); echo "$hariku"; ?>. Created by <a href="https://api.whatsapp.com/send?phone=6282228191006">Sinyo</a>
		</form>
	</div>
</body>


<script src='https://www.google.com/recaptcha/api.js'></script>
</html>
