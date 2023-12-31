<?php 
ob_start();
include '../koneksi.php';

session_start();
$username2="";
$username3=$_SESSION["session_username"];

if ($username2==$username3){
    header("Location: adminlogin.php");
}
 
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="../ajs/bootstrap.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>

        <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="border-bottom:2px solid ">
            <a class="navbar-brand" href="#">Hotel Kami</a>
            <span style="background-color:darkcyan; color:white; padding-left:20px; padding-right:20px; border-radius:15px;">Administrator</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="client.php">Client</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Branch
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="indo.php">Indonesia</a>
                            <a class="dropdown-item" href="japan.php">Japan</a>
                            <a class="dropdown-item" href="swiss.php">Switzerland</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <?php echo($username3); ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">Profile</a>
                            <a class="dropdown-item" href="adminlogout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/home1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>INDONESIA</h5>
                        <p>Selamat Datang Di Hotel Kami.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/home2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>JAPAN</h5>
                        <p>当ホテルへようこそ.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/home3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>SWITZERLAND</h5>
                        <p>Willkommen in unserem Hotel.</p>
                        </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </body>
</html>