<?php include('config.php');
session_start();

if(isset($_POST['login']))
	{
       // session_start();
		$username = isset($_POST['username']) ? ($_POST['username']) : '';
		$password = isset($_POST['password']) ? ($_POST['password']) : '';
       
	   /*$sql = "SELECT * FROM users WHERE username='anuj' AND password='anuj' ";
        $result = mysqli_query($conn,$sql);
		$rows=mysqli_num_rows($result);
		printf("Result set has %d rows.\n",$rows);*/
		
		
		//if(mysqli_num_rows($result)==1)
		if($username=='anuj' && $password=='anuj')
		{
			$_SESSION['message']="You are now logged in";
			$_SESSION['username'] = anuj;
			header("location: add.php");
		}
		else
		{
		$_SESSION['message']="Invalid Credintials";	
		}
	
	//$insert = "INSERT INTO users(`username`, `email`, `password`)
	//VALUES('$username', '$email', '$password')";
		///mysqli_query($conn, $insert);
	
	}

?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Admin Login</title>
        </head>
    </html>
    <body>
        <div class="header">
            <h1>ADMIN LOGIN</h1>
        </div>
        <form method="post" action="adminlogin.php">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" class="textInput"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" class="textInput"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
    </body>
    </html>