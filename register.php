<?php include('config.php');
session_start();

if(isset($_POST['submit']))
	{
        //session_start();
		$username = isset($_POST['username']) ? ($_POST['username']) : '';
		$email = isset($_POST['email']) ? ($_POST['email']) : '';
		$password = isset($_POST['password']) ? ($_POST['password']) : '';
        $repassword=isset($_POST['repassword']) ? ($_POST['repassword']) : '';
       if ($password == $repassword)
        {
            //$password = md5($password);
            $insert = "INSERT INTO users(`username`, `email`, `password`)
            VALUES('$username', '$email', '$password')";
             mysqli_query($conn, $insert);
             $_SESSION['message'] = "Password Match";
             $_SESSION['message'] = "You are logged in";
             $_SESSION['username'] = $username;
             header("location: login.php");
        }
        else
        {
            $_SESSION['message'] = "Password Not Match";
        }
        
	
	//$insert = "INSERT INTO users(`username`, `email`, `password`)
	//VALUES('$username', '$email', '$password')";
		///mysqli_query($conn, $insert);
	
	}

?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Register</title>
        </head>
    </html>
    <body>
        <div class="header">
            <h1>Register</h1>
        </div>
        <form method="post" action="register.php">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" class="textInput"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" class="textInput"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" class="textInput"></td>
            </tr>
            <tr>
                <td>Re Password:</td>
                <td><input type="password" name="repassword" class="textInput"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
    </body>
    </html>