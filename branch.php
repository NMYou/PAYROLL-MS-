<!DOCTYPE html>
<html>
<head>
	<title>Log In |  PAYROLL MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
    <script language="javascript">
function SelectRedirect(){
// ON selection of section this function will work
//alert( document.getElementById('s1').value);

switch(document.getElementById('s1').value)
{
case "mumbai":
window.location="../PAYROLL(MS)/mumbai/elogin.php";
break;

case "pune":
window.location="../PAYROLL(MS)/pune/elogin.php";
break;

case "ahmedabad":
window.location="../PAYROLL(MS)/ahmedabad/elogin.php";
break;

}// end of switch 
}
////////////////// 
</script>
<style>

.box {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.box select {
  background-color: #0563af;
  color: white;
  padding: 12px;
  width: 250px;
  border: none;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;
  appearance: button;
  outline: none;
}

.box::before {
  content: "\f13a";
  font-family: FontAwesome;
  position: absolute;
  top: 0;
  right: 0;
  width: 20%;
  height: 100%;
  text-align: center;
  font-size: 0px;
  background-color: rgba(255, 255, 255, 0.1);
  pointer-events: none;
}

.box:hover::before {
  color: rgba(255, 255, 255, 0.6);
  background-color: rgba(255, 255, 255, 0.2);
}

.box select option {
  padding: 30px;
}
</style>

</head>


<body>


	<header>
		<nav>
      <h1>Payroll Sys.</h1>
      <ul id="navli">
				<li><a class="homeblack" href="index.php">HOME</a></li>
				<li><a class="homered" href="branch.php">LOG IN</a></li>
			</ul>
		</nav>
	</header>
  <div class="divider"></div>
  
	<div class="loginbox">
  <header>
		<nav>
			<h1>Branch Section</h1>
		</nav>
	</header>
	<div class="box">
    <select id="s1" NAME="section" onChange="SelectRedirect();">
		<Option value="">Select Branch</option>
		<Option value="mumbai">Mumbai</option>
		<Option value="pune">Pune</option>
		<Option value="ahmedabad">Ahmedabad</option>
	</select>
	</div>
	</div>
	

</body>
</html>


