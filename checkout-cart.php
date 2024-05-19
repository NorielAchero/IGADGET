<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel = "icon" href="image/icon.jpg">
    <title>Checkout Page</title>

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
    <div class="center-div animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
       
            <?php
            checkout();
            ?>

    </div>
</body>
</html>

<?php
function checkout() {

    //para matago ung error about Deprecated: Implicit conversion from float since gumagana naman function pero may nagpriprint na error
    error_reporting(0);
    ini_set('display_errors', 0);

    include("admin/includes/sqlconnection.php");
    $sql = "SELECT * FROM cart ";
    $result = $conn->query($sql);

    function getRandDiscount($number) {
        return rand(1, $number);
    }

    if ($result->num_rows > 0) {
        $itemCount = 0;
        $allTotalItemPrice = 0;

        while ($row = $result->fetch_assoc()) {
            $itemCount++;
            $allTotalItemPrice = $allTotalItemPrice + $row['price'];
        }

        $shippingFee = 350.00;
        $discount = getRandDiscount(0.2 * $allTotalItemPrice);

        echo "
        <p style='font-weight: bolder;'>Purchase Summary</p>
        <div class='summary'>
            <div class='row details'>
                <div class='col-xs-6'>
                    <p style='margin: 0;'>Item Count</p>
                </div>
                <div class='col-xs-6 text-right'>
                    <p style='margin: 0;'>$itemCount</p>
                </div>
            </div>
            <div class='row details'>
                <div class='col-xs-6'>
                    <p style='margin: 0;'>Shipping Fee</p>
                </div>
                <div class='col-xs-6 text-right'>
                    <p style='margin: 0;'>₱" . number_format(350.00, 2) . "</p>
                </div>
            </div>
            <div class='row details'>
                <div class='col-xs-6'>
                    <p style='margin: 0;'>All Item Total Price</p>
                </div>
                <div class='col-xs-6 text-right'>
                    <p style='margin: 0;'>₱" . number_format($allTotalItemPrice, 2) . "</p>
                </div>
            </div>
            <div class='row details'>
                <div class='col-xs-6'>
                    <p style='margin: 0;'>Discount</p>
                </div>
                <div class='col-xs-6 text-right'>
                    <p style='margin: 0;'>₱" . number_format($discount, 2) . "</p>
                </div>
            </div>
        </div>";

        $total1 = $allTotalItemPrice  + $shippingFee;
        $total2 = $total1 - $discount;

        echo "
        <div class='row details'>
            <div class='col-xs-6'>
                <p style='margin: 0;'>TOTAL</p>
            </div>
            <div class='col-xs-6 text-right'>
                <p style='margin: 0;'>₱" . number_format($total2, 2) . "</p>
            </div>
        </div>

        <div class='row' style='margin-top: 30px;'>
            <div class='col-md-12 text-center'>
                <a class='btn checkout' href='ty.php'>Place Order</a> 
            </div>
        </div>";
    }
}
?>