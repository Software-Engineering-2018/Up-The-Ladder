<?php
session_start();
if(!isset($_SESSION['user']))
    header('location:login.php');

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

if(isset($_POST['skill']))
{
    $user_id=$_SESSION['id'];
    $skill1=$_POST['skill1'];
    $skill2=$_POST['skill2'];
    $skill3=$_POST['skill3'];
    $skill4=$_POST['skill4'];
    $skill5=$_POST['skill5'];
    
    $query="INSERT INTO `skills` (`id`, `User_id`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`) VALUES (NULL, '$user_id', '$skill1', '$skill2', '$skill3', '$skill4', '$skill5')";
    $result = mysqli_query($con, $query);
            
        

        if($result == true){
            //echo $_SESSION['login'];
            header('location: homepage.php');
        }
        
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills</title>
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
                    <h3 class="mt-0 white-text">Skills</h3>
                    <p class="white-text mb-4">Please input your skills to help us make your experience more interactive.</p>
                    
                </header>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <form name="skill" action="" method="post" class="tm-signup-form">
                    <div class="input-field">
                        <input placeholder="Skill 1" id="skill 1" name="skill 1" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Skill 2" id="skill 2" name="skill 2" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Skill 3" id="skill 3" name="skill 3" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Skill 4" id="skill 4" name="skill 4" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Skill 5" id="skill 5" name="skill 5" type="text" class="validate">
                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" name="skill" class="waves-effect btn-large btn-large-white px-4 tm-border-radius-0">Submit</button>
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