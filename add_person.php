<?php
session_start();
	include("connection.php");
	include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$egn = $_POST['egn'];
		$f_name = $_POST['f_name'];
		$m_name = $_POST['m_name'];
		$l_name = $_POST['l_name'];
		$bloodtype = $_POST['bloodtype'];
		$birthdate = $_POST['birthdate'];
		$alergies = $_POST['alergies'];
		$imunization = $_POST['imunization'];
		$weight = $_POST['weight'];
		$height = $_POST['height'];
		$gender = $_POST['gender'];
		$labresult = 'Nothing';
		if(!empty($egn) && !empty($f_name) && !empty($m_name) && !empty($l_name) && !empty($bloodtype) && !empty($birthdate)&& !empty($alergies)&& !empty($imunization)&& !empty($weight)&& !empty($height)&& !empty($gender)&& !empty($labresult))
		{
				$query = "insert into patien (egn,f_name,m_name,l_name,bloodtype,birthdate,alergies,imunization,weight,height,gender,labresult) values ('$egn','$f_name','$m_name','$l_name','$bloodtype','$birthdate','$alergies','$imunization','$weight','$height','$gender','$labresult')";
				pg_query($con, $query);
				header("Location: menu.html");
				die;
		}
		else
		{
			if ($_SERVER['REQUEST_METHOD'] === 'POST')
				{
  				if (isset($_POST['back']))
						{
							header("Location: menu.html");
						}
					else
						{
							echo "wrong data!";
  					}
				}
	  }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup patient</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<div class="center">
		<div class="scroll">
		<form method="post">
			<h1>Add patient</h1>
			<div class="txt_fieldl">
			<label>EGN:</label>
			<input id="text" type="text" name="egn">
			</div>
			<div class="txt_fieldl">
			<label>Firstname:</label>
			<input id="text" type="text" name="f_name">
			</div>
			<div class="txt_fieldl">
			<label>Middlename:</label>
			<input id="text" type="text" name="m_name">
			</div>
			<div class="txt_fieldl">
			<label>Lastname:</label>
			<input id="text" type="text" name="l_name">
			</div>
			<div class="txt_fieldl">
			<label>Bloodtype:</label>
			<input id="text" type="text" name="bloodtype">
			</div>
			<div class="txt_fieldl">
			<label>Birthday:</label>
			<input id="text" type="text" name="birthdate">
			</div>
			<div class="txt_fieldl">
			<label>Alergies:</label>
			<input id="text" type="text" name="alergies">
			</div>
			<div class="txt_fieldl">
			<label>imunization:</label>
			<input id="text" type="text" name="imunization">
			</div>
			<div class="txt_fieldl">
			<label>Weight:</label>
			<input id="text" type="text" name="weight">
			</div>
			<div class="txt_fieldl">
			<label>Height:</label>
			<input id="text" type="text" name="height">
			</div>
			<div class="txt_fieldl">
			<label>Gender:</label>
			<input id="text" type="text" name="gender">
			</div>

			<input id="button" type="submit" value="Add patient">
			<form method="get" action="menu.html">
			<input id="button" name="back" type="submit" value="Back">
			</form>

		</form>
		</div>
	</div>
</body>
</html>
