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
    <link rel="stylesheet" href="css/cart.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Cart Page</title>

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
        <div class="row prod d-flex align-items-center">
            <div class="col-md-4 text-center">
                <div class="product-images">
                    <img src="https://hips.hearstapps.com/hmg-prod/images/2019-honda-civic-sedan-1558453497.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-md-8 desc mx-auto" >
                <div class="product-description">
                    <p style = "font-size: large;"><b>prodName</b></p>
                    <p>prodDescription | Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a maximus ipsum. </p>
                    <p>Category</p>
                    <div class="row">
                        <div class="col-xs-6">
                            <button class="btn btn-delete"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                        </div>
                        <div class="col-xs-6 text-right">
                            <p>Price 999.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row prod d-flex align-items-center">
            <div class="col-md-4 text-center">
                <div class="product-images">
                    <img src="https://hips.hearstapps.com/hmg-prod/images/2019-honda-civic-sedan-1558453497.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-md-8 desc mx-auto" >
                <div class="product-description">
                    <p style = "font-size: large;"><b>prodName</b></p>
                    <p>prodDescription | Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a maximus ipsum. </p>
                    <p>Category</p>
                    <div class="row">
                        <div class="col-xs-6">
                            <button class="btn btn-delete"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                        </div>
                        <div class="col-xs-6 text-right">
                            <p>Price 999.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row prod d-flex align-items-center">
            <div class="col-md-4 text-center">
                <div class="product-images">
                    <img src="https://hips.hearstapps.com/hmg-prod/images/2019-honda-civic-sedan-1558453497.jpg" alt="Product Image">
                </div>
            </div>
            <div class="col-md-8 desc mx-auto" >
                <div class="product-description">
                    <p style = "font-size: large;"><b>prodName</b></p>
                    <p>prodDescription | Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a maximus ipsum. </p>
                    <p>Category</p>
                    <div class="row">
                        <div class="col-xs-6">
                            <button class="btn btn-delete"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                        </div>
                        <div class="col-xs-6 text-right">
                            <p>Price 999.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class = "row row-prod" style=" margin-top: 20px;">
            <div class = "col-md-6 text-center">
            Subtotal
            </div>
            <div class = "col-md-6 text-center">
                Total
            </div>
        </div>

        <div class="row" style="margin-top: 70px;">
            <div class="col-md-12 text-center">
                <button class="btn checkout" onclick="window.location.href='checkout.html';">Proceed to Checkout</button>
            </div>
        </div>

    </div>
</body>
</html>







