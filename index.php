<?php
	session_start();
	include("connection.php");
	include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		if(empty($_SESSION['email']) || $_SESSION['password'] == ''){
    header("Location: http://example.com/index.php");
    die();
}
		if(!empty($email) && !empty($password) && !is_numeric($email))
		{
			$query = "select * from doctor where email = '$email' limit 1";
			$result = pg_query($con, $query);
			if($result)
			{
				if($result && pg_num_rows($result) > 0)
				{
					$user_data = pg_fetch_assoc($result);
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];

 echo "<script>location.href='menu.php'</script>";
						die;
					}
				}
			}
			echo "wrong username or password!";
		}
		else
			{
				echo "wrong username or password!";
			}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login doctor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">

</head>
<body>

	  <div class="center">
      <h1>Login Doctor</h1>
      <form method="post">

        <div class="txt_field">

		  <label>Username</label>
          <input id="text" type="text" name="email" required>
        </div>
        <div class="txt_field">

		<label>Password</label>
          <input id="text" type="password"  name="password" required>
        </div>
        <input id="button" type="submit" value="Login Doctor">
        <div class="signup_link">
          Not a member? <a href="signup-doctor.php">Signup</a>
        </div>
      </form>
    </div>
</body>
</html>
