<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/product.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <title>Product Page</title>

</head>

<body class="animate__animated animate__bounceIn">
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
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span></a></li>
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

    <div class="center-div">
        <div class="row">
            <?php
               getTableById($_GET['id']);
            ?>
        </div>
    </div>

    
</body>
</html>

<?php
    function getTableById($recno) {
        include("admin/includes/sqlconnection.php");
        $sql = "SELECT * FROM prodtable WHERE id='$recno'";
       

        $result = $conn->query($sql);



        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                echo "
                        <div class='col-md-8'>
                        <div class='container1'>
                            <button class='btn'>BACK</button>
                                <img src='admin/uploads/" . $row['image'] . "'>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class='container2'>
                            <br>
                            <h1 class='text'>" .$row['prodname']  . "</h1>
                            <h3>" . $row['proddesc'] . " </h3>
                            <h4>" . $row['price'] . "</h4>
                            <a href='checkout-single.php?id=".$row['id']."' class = 'button1'> BUY </a>
                            <form action='admin/controller.php' method='post' enctype='multipart/form-data'>
                                <input type='hidden' name='txtprodid' value='".$row['id']."'>
                                <input type='hidden' name='txtprodname' value='".$row['prodname']."'>
                                <input type='hidden' name='txtproddesc' value='".$row['proddesc']."'>
                                <input type='hidden' name='txtprice' value='".$row['price']."'>
                                <input type='hidden' name='txtimage' value='".$row['image']."'>
                                <input type='hidden' name='txtcategory' value='".$row['category']."'>
                                <button type='submit' name='save_cartprod' class='button2'>ADD TO CART</button>
                            </form>
                        </div>
                    </div>
                    
                    ";
            }
        } else {
            echo "Error Buwaha";
        }

    }



?>