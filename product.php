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
    <link rel = "icon" href="image/icon.jpg">
    <title>Product Page</title>
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
    <footer>
        <p>© 2024 iGadget. All rights reserved.</p>
    </footer>

</body>
</html>

<?php
function getTableById($recno) {
    include("admin/includes/sqlconnection.php");
    $sql = "SELECT * FROM prodtable WHERE id='$recno'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $formattedPrice = '₱' . number_format($row['price'], 2);

            echo "
                <div class='col-md-8 animate__animated animate__fadeInUp' style='animation-delay: 0.2s;'>
                    <div class='container1'>
                        <button class='btn' onclick='goBack()'>BACK</button>
                        <img src='admin/uploads/" . $row['image'] . "' alt='" . $row['prodname'] . "'>
                    </div>
                </div>
                <div class='col-md-4  animate__animated animate__fadeInUp' style='animation-delay: 0.3s;'>
                    <div class='container2'>
                        <h1>" . $row['prodname'] . "</h1>
                        <p>" . $row['proddesc'] . "</p>
                        <h4>Price: ". $formattedPrice . "</h4>
                    </div>
                        <div class='button-container'>
                            <a href='checkout-single.php?id=" . $row['id'] . "' class='button1'>BUY</a>
                            <form action='admin/controller.php' method='post' enctype='multipart/form-data'>
                                <input type='hidden' name='txtprodid' value='" . $row['id'] . "'>
                                <input type='hidden' name='txtprodname' value='" . $row['prodname'] . "'>
                                <input type='hidden' name='txtproddesc' value='" . $row['proddesc'] . "'>
                                <input type='hidden' name='txtprice' value='" . $row['price'] . "'>
                                <input type='hidden' name='txtimage' value='" . $row['image'] . "'>
                                <input type='hidden' name='txtcategory' value='" . $row['category'] . "'>
                            
                            <button type='submit' name='save_cartprod' class='button2'>ADD TO CART</button>
                            </form>
                        </div>
                </div>
            ";
        }
    } else {
        echo "<p>No product found.</p>";
    }
}
?>

<!-- forda back ang ferson -->
<script>
    function goBack() {
        window.history.back();
    }
</script>
