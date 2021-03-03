<!DOCTYPE html>
<html>
<head>
	<title>Log In |  PAYROLL MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
	<header>
		<nav>
			<h1>Payroll Sys. (Mumbai)</h1>
			<ul id="navli">
				<!-- Development Connection -->
				<!-- <li><a class="homeblack" href="/phpprogram/PAYROLL(MS)/index.php">HOME</a></li> -->
				<!-- Remote Database Connection -->
				<li><a class="homeblack" href="/index.php">HOME</a></li>
				<li><a class="homeblack" href="elogin.php">Employee Login</a></li>
				<li><a class="homered" href="alogin.php">Admin Login</a></li>
				
			</ul>
		</nav>
	</header>
	<div class="divider"></div>

	<div class="loginbox">
    <img src="assets/admin.png" class="avatar">
        <h1>Login Here</h1>
        <form action="process/aprocess.php" method="POST">
            <p>Email</p>
            <input type="text" name="mailuid" placeholder="Enter Email Address" required="required">
            <p>Password</p>
			<input type="password" name="pwd" placeholder="Enter Password" required="required">
            <input type="submit" name="login-submit" value="Login">
           
        </form>
        
    </div>
</body>
</html>