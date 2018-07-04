<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="bs4/bootstrap.min.css">
</head>
<body class="bg-secondary"> 

    <div class="container">
        <div class="row">
            <div class="col-lg-12 jumbotron bg-dark" style="padding-bottom: calc(20px)">
                <h1 class="text-primary">Intranet Portal</h1>
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <!-- Brand -->
                        <a class="navbar-brand" href="#">Home</a>
                      
                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Forms</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Complaints</a>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                      Kits and Liveries
                                    </a>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Link 1</a>
                                      <a class="dropdown-item" href="#">Link 2</a>
                                      <a class="dropdown-item" href="#">Link 3</a>
                                    </div>
                            </li>
                          </ul>
                        </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 jumbotron">
                <div class="row">
                    <div class="col-lg-3">
                        <h3 class="text-primary">News</h3>
                        <div class="card" style="height:300px;overflow: hidden">

                                <div id="content_center">
                                
                                    <div class="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
                                        <div class="vmarquee" style="position: absolute;">
                                                    
                                        <h6><a href="asds.html">News Bulletin Heading News Bulletin Heading News Bulletin Heading News Bulletin Heading</a></h6>
                                        <h6><a href="asds.html">News Bulletin Heading News Bulletin Heading News Bulletin Heading News Bulletin Heading</a></h6>
                                        <h6><a href="asds.html">News Bulletin Heading News Bulletin Heading News Bulletin Heading News Bulletin Heading</a></h6>
                        
                                        <!--YOUR SCROLL CONTENT HERE-->
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bg-light">
                            <h3 class="text-success lead text-center">Latest NEWS</h3>
                                <div id="demo" class="carousel slide" data-ride="carousel">

                                        <!-- Indicators -->
                                        <ul class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1"></li>
                                        <li data-target="#demo" data-slide-to="2"></li>
                                        </ul>
                                        
                                        <!-- The slideshow -->
                                        <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="myslides" src="images/s1.jpg" alt="s1">
                                            <a href="eg.html">Image 1</a>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="myslides" src="images/s2.jpg" alt="s2">
                                            <a href="eg.html">Image 2</a>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="myslides" src="images/s3.jpg" alt="s3">
                                            <a href="eg.html">Image 3</a>
                                        </div>
                                        </div>
                                        
                                        <!-- Left and right controls -->
                                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#demo" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                        </a>
                                  </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="text-primary">News</h3>
                        <div class="card" style="height:300px;overflow: hidden">

                                <div id="content_center">
                                
                                    <div class="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
                                        <div class="vmarquee" style="position: absolute;">
                                                    
                                        <?php
                                        include 'dataaccess.php';
                                        $data = new Database();
                                        $info = $data->getAllData();
                                        ?>
                                        <?php
                                            foreach($info as $i){
                                                echo "<h6><a href='#'>".$i[0]."</a></h6>";
                                            }
                                        ?>
                                        
                                        <!--YOUR SCROLL CONTENT HERE-->
                                        </div>
                                    </div>
                                </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 jumbotron bg-dark">
                <h1 class="text-light">Contact Us</h1>
            </div>
        </div>
    </div>

<script src="bs4/jquery-3.3.1.slim.min.js"></script>
<script src="bs4/popper.min.js"></script>
<script src="bs4/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>