<?php
include('config.php');
session_start();

?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Register</title>
        </head>
    </html>
    <body>
        <div class="header">
            <h1>HOME</h1>
        </div>
       <h3>Welcome User</h3>
       <h4>Practics Session : Attempt the test</h4>
                    
                    <?php $filename= basename($_SERVER['REQUEST_URI']);
                        $productmenu=array('question.php,add.php');
                    ?>
                    <ul>
						<li><a <?php if($filename=='question.php'):?>class="current"<?php endif;?> href="question.php ? n=1 ">Take Quiz</a></li> 
                        <li><a <?php if($filename=='adminlogin.php'):?>class="current"<?php endif;?> href="adminlogin.php">Add Question</a></li>
                   
                    </ul>
       <div><a href="logout.php">Logout</a></div>
    </body>
    </html>