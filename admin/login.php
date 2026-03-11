<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

<link rel="stylesheet" href="../assets/css/login.css">

</head>

<body>

<div class="login-container">

<h2>Admin Login</h2>

<form action="../api/login_api.php" method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit">Login</button>

</form>

</div>

</body>
</html>