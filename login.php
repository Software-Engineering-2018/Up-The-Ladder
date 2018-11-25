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

if(isset($_POST['login']))
{
$username=$_POST['username']; // Get username
$password=$_POST['password'];

 // get password
//query for match  the user inputs
$sql = "SELECT * FROM `users` WHERE `Username` LIKE '$username' AND `Password` LIKE '$password'";
$result = mysqli_query($con,$sql);
$num_of_arrays= mysqli_num_rows($result);
if($num_of_arrays>0 )
   {
    $_SESSION['login']=$username;
    while($row= mysqli_fetch_array($result) )
    {
        
    $_SESSION['id']=$row['User_id'];
    }
      
    //$_SESSION['id']=$u;
    // hold the user name in session
    //$_SESSION['id']=$num['id']; // hold the user id in session
   // $uip=$_SERVER['REMOTE_ADDR']; // get the user ip
// query for inser user log in to data base

// code redirect the page after login

 // hold the user name in session
 // hold the user id in session
 // get the user ip
// query for inser user log in to data base
// code redirect the page after login

//$extra="../admin/vieworders.php";
//$role="select Role_id from users_roles where User_id = (select User_id from  users_master where users_master.`User_name`='$username' ) ";
//$data=mysqli_query($con,$role);

//$num_of_arrays= mysqli_num_rows($data);
//$row= mysqli_fetch_array($data);
//$host=$_SERVER['HTTP_HOST'];
//$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');

    
      $_SESSION['user']=1;
      header('location:homepage.php');
    
    
exit();
}
// If the userinput no matched with database else condition will run
else
{

//$extra="home.php";
$host  = $_SERVER['HTTP_HOST'];
//$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:../up the ladder/login.php");
exit();
 }
}
?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>
	<!--
    Template 2105 Input
	http://www.tooplate.com/view/2105-input
	-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="login">
    <div class="container">
        <div class="row tm-register-row tm-mb-35">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-l">
               <form name="login"   action="login.php" method="post" class="tm-bg-black p-5 h-100">
                    <div class="input-field">
                        <input placeholder="Username" id="username" name="username" type="text" class="validate">
                    </div>
                    <div class="input-field mb-5">
                        <input placeholder="Password" id="password" name="password" type="password" class="validate">
                    </div>
                    <div class="tm-flex-lr">
                        <a href="#" class="white-text small">Forgot Password?</a>
                        <button type="submit" name="login" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-r">
                <header class="font-weight-light tm-bg-black p-5 h-100">
                    <h3 class="mt-0 text-white font-weight-light">Login</h3>
                    <p>Move a step ahead by taking advantage of all the valuable content.</p>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ml-auto mr-0 text-center">
                <a href="signup.php" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Create New Account</a>
            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12 text-center">
                <p class="d-inline-block tm-bg-black white-text py-2 tm-px-5">
                    Copyright &copy; 2018 Up The Ladder 
                    
                     
                    <a rel="nofollow" href="http://tooplate.com" class="tm-footer-link"></a>
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