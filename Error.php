<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Error</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/5c5038153c.js" crossorigin="anonymous"></script>

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="/statics/css/error.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

    <div id="notfound">
        <div class="notfound">
            <div class="notfound-bg">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <h1>oops!</h1>
            <h2> <?php echo $error ?> </h2>
            <a href="index.php">Volver al inicio</a>
            <!-- <div class="notfound-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div> -->
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>