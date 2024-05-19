<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/category.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel = "icon" href="image/icon.jpg">
    <title>Console</title>
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
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="admin/index.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
                </ul>

                <div class="nav navbar-nav form-inline navbar-right">
                    <div class="input-group">
                        <form action="search.php" method="GET">
                            <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search Product">
                            <button type="submit" class="btn">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <section id="category">
        <nav class="navbar-category">
            <div class="container-fluid">
                <div id="navbar-category">
                    <ul class="nav navbar-nav">
                        <li><a href="category.php">Mobile Phone</a></li>
                        <li><a href="pc.php">PC</a></li>
                        <li><a href="laptop.php">Laptop</a></li>
                        <li><a href="console.php" class="active">Consoles</a></li>
                        <li><a href="tablet.php">Tablet</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="container">
                <?php

                printProducts();


                ?>   
        </div>
    </section>

    <footer>
        <p>© 2024 iGadget. All rights reserved.</p>
    </footer>
</body>
</html>


<?php

function printProducts(){
    include("admin/includes/sqlconnection.php");

    $sql = "SELECT * FROM prodtable WHERE category = 'console'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $formattedPrice = '₱' . number_format($row['price'], 2);

            echo"
            <a href='product.php?id=" . $row['id'] . "'>
                <div class='col-md-4 animate__animated animate__fadeInUp' style='animation-delay: 0.2s;'>
                    <div class='thumbnail'>
                        <img src='admin/uploads/" . $row['image'] . "'>
                        <div class='caption'>
                            <h4><a href='product.php?id=" . $row['id'] . "'>" . $row['prodname'] . "</a></h4>
                            <b>₱" . $formattedPrice . "</b>
                            <p>" . $row['proddesc'] . "</p>
                        </div>
                    </div>
                </div>
            </a>
            ";
        }
    } else {
        //wutdahek
    }
}
?>