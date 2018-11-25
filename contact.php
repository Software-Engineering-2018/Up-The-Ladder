<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
	<!--
    Template 2105 Input
	http://www.tooplate.com/view/2105-input
	-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="application">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  mx-auto">
                <header class="mt-5 mb-5 text-center">
                    <h3>Contact Us.</h3>
                    <p class="tm-form-description">Feel free to share your queries and requests with us.</p>
                </header>
                <form action="" method="post" enctype="multipart/form-data" class="tm-form-white tm-font-big">
                    <div class="tm-bg-white tm-form-pad-big">
                        <div class="form-group mb-5">
                            <label for="name" class="black-text mb-4 big">Full Name</label>
                            <input id="name" name="name" type="text" class="validate tm-input-white-bg">
                        </div>
                        <div class="form-group mb-5">
                            <label for="email" class="black-text mb-4 big">Email</label>
                            <input id="email" name="email" type="email" class="validate tm-input-white-bg">
                        </div>
                        
                        

                        <div class="form-group">
                            <label for="message" class="black-text mb-4 big">Additional Message</label>
                            <textarea class="p-3" name="message" id="message" cols="30" rows="4"></textarea>
                        </div>

                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="waves-effect btn-large btn-large-white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12 text-center">
                <p class="d-inline-block tm-bg-black white-text py-2 tm-px-5">
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