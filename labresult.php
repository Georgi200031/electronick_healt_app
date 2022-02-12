<?php
session_start();
include("connection.php");
	include("functions.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	$egn=$_REQUEST['egn'];
	$labresult_ =$_REQUEST['labresult'];
	if(!empty($egn) && !empty($labresult_))
	{
		$update="update patien set labresult ='".$labresult_."' where egn='".$egn."'";
		$rs = pg_query($con, $update) or die("Cannot execute query: $query\n");
		header("Location: menu.html");
		pg_close($con);
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
					 echo '<p class="error">Fill in all fields.</p>';

					}
			}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>labresult</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="center">
		<form method="post">
			<h1>Set labresult</h1>
			<div class="txt_fieldl">
			<label>EGN</label>
			<input id="text" type="text" name="egn">
			</div>
			<div class="txt_fieldl">
			<label>labresult</label>
			<input id="text" type="text" name="labresult">
			</div>
			<input id="button" type="submit" value="SET">
		</form>
		<form method="get" action="menu.html">
					 <input id="button" name = "back" type="submit" value="Back">
				 </form>
	</div>

</body>
</html>
