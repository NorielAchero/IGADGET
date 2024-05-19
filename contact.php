<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/contact.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>Contact Page</title>
</head>
<body>
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">iGADGET</a>
            </div>
            
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="category.php">Categories</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="contact.php" class="active">Contact Us</a></li>
                <li><a href="admin/index.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
                </ul>

                <div class="nav navbar-nav form-inline navbar-right">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    
    <section id="contact">
        <h1>Contact Us</h1>
        <hr>

        <div class='row justify-content-center animate__animated animate__fadeInUp' style='animation-delay: 0.2s;'>
            <form class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your Name" type="text"/>
                </div>
                    
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your Email" type="email"/>
                </div>
                    
                <div class="form-group">
                    <input class="form-control" placeholder="Subject" type="text"/>
                </div>
                    
                <div class="form-group">
                    <textarea class="form-control" rows="10" placeholder = "Comments"></textarea>
                </div>
                    
                <div class="form-group">
                    <input class="btn btn-block" type="submit"/>
                </div>
            </form>
        </div>

        <div class="container animate__animated animate__fadeInUp" style="animation-delay: 0.2s;" id="members">
            <div class="person">
                <img src="image/noy.png" alt="noy">
                <div class="caption">
                    <p class="name">Noriel Achero</p>
                    <p>Project Manager <br> Lead Back-End Developer</p>
                </div>
            </div>
            <div class="person">
                <img src="image/hana.jpg" alt="noy">
                <div class="caption">
                    <p class="name">Hannah Condada</p>
                    <p>UI Design <br> Front-End Developer</p>
                </div>
            </div>
            <div class="person">
                <img src="image/cesar.jpg" alt="noy">
                <div class="caption">
                    <p class="name">Cesar Julius Jimenez</p>
                    <p>Front-End Developer</p>
                </div>
            </div>
            <div class="person">
                <img src="image/gelo.png" alt="noy">
                <div class="caption">
                    <p class="name">Angelo Mallari</p>
                    <p>Back-End Developer</p> 
                </div>
            </div>
            <div class="person">
                <img src="image/angel.jpg" alt="noy">
                <div class="caption">
                    <p class="name">Angelica Mae Manliguez</p>
                    <p>Lead Front-End Developer</p>
                </div>
            </div>
        </div>
	</section>
    
    <footer>
        <p>© 2024 iGadget. All rights reserved.</p>
    </footer>
</body>
</html>