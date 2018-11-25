<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'up_the_ladder');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['signup']))
{
    $username=$_POST['username']; // Get username
    $password=$_POST['password'];
    $password1=$_POST['password2'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $query="INSERT INTO `users` (`User_id`, `Username`, `Password`, `Password1`, `Email`, `Phone`) VALUES
   (NULL,'$username','$password','$password1','$email','$phone')";



			$result = mysqli_query($con, $query);
			
		if($password==$password1){

           if($result == true){
                //echo $_SESSION['login'];
                $_SESSION['user']=1;
                header('location: skills.php');
		    }
        }else{
            echo "password do not match";
        }
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
	<!--
    Template 2105 Input
	http://www.tooplate.com/view/2105-input
	-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="register">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <header class="mb-5">
                    <h3 class="mt-0 white-text">Sign-up</h3>
                    <p class="white-text mb-4">Be a part of our amazing community.Helping others grow is the only motive.</p>
                    
                </header>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <form name="signup"  action="signup.php" method="post" class="tm-signup-form">
                    <div class="input-field">
                        <input placeholder="Username" id="username" name="username" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Password" id="password" name="password" type="password" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Re-type Password" id="password2" name="password2" type="password" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Email" id="email" name="email" type="email" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Phone" id="phone" name="phone" type="tel" class="validate">
                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" name="signup" class="waves-effect btn-large btn-large-white px-4 tm-border-radius-0">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12">
                <p class="text-center grey-text text-lighten-2 tm-footer-text-small">
                    Copyright &copy; 2018 Up The Ladder 
                    
                    
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>