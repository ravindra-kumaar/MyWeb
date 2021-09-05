<!DOCTYPE html>
<html lang="en">
<head>
  <title>GPA Sports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet">
 </head>

<body>
<section class="my-5">
	<div class="py-5">
		<h3 class="text-center">Login Here</h3>
	</div> 
	<div class="w-50 m-auto">
		<form action="register.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password"name="password" autocomplete="off" class="form-control" required>
			</div>
			<button type="submit" class="btn btn-success">Login</button>
		</form>
	</div>
</section>
</body>
</html>