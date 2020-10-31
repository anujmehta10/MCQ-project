<?php include('config.php');
session_start();

if(isset($_POST['login']))
	{
		$username = isset($_POST['username']) ? ($_POST['username']) : '';
		$password = isset($_POST['password']) ? ($_POST['password']) : '';
       
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