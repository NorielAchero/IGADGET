<!DOCTYPE html>
<html>
<head>
    <title>Noriel Achero</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel = "icon" href="uploads/icon.png">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <style>
        body {
            background-color: rgb(22, 22, 22);
            color: #ffffff; /* Light text color */
            font-family: "Barlow", sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            padding-top: 50px; /* Adjusted padding to center content */
        }
        h1 {
            color: #ffffff; /* Heading text color */
            text-align: center; /* Center align headings */
        }
        form {
            background-color: rgb(37, 37, 37);
            padding: 20px;
            border: 2px solid #ffffff; /* Form border color */
            box-shadow: 0px 2px 5px rgba(255, 255, 255, 0.1); /* Form shadow */
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            color: #ffffff; /* Label text color */
        }
        input[type="text"] {
            background-color: #373737; /* Input background color */
            color: #ffffff; /* Input text color */
            border: 2px solid #ffffff; /* Input border color */
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }
        .btn-success {
            background-color: #FD6262; /* Button background color */
            border-color: #FD6262; /* Button border color */
            color: #ffffff; /* Button text color */
            font-weight: bold;
        }
        .btn-success:hover {
            background-color: #ffffff; /* Button hover background color */
            color: #FD6262; /* Button hover text color */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><b>INSERT CART TABLE</b></h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>PRODUCT ID: </label>
                <input type="text" name="txtprodid" class="form-control" required>
            </div>


            <div class="form-group">
                <label>PRODUCT NAME: </label>
                <input type="text" name="txtprodname" class="form-control" required>
            </div>

            <div class="form-group">
                <label>PRODUCT DECRIPTION: </label>
                <input type="text" name="txtproddesc" class="form-control" required>
            </div>

            <div class="form-group">
                <label>PRODUCT PRICE: </label>
                <input type="text" name="txtprice" class="form-control" required>
            </div>
   
            <div class="form-group">
                <label>PRODUCT IMAGE: </label>
                <input type="file" name="txtimage" class="form-control-file" required>
            </div>

            <div class="form-group">
                <label>CATEGORY: </label>
                <select name="txtcategory" class="form-control" required>
                    <option value="unknown"></option>                    
                    <option value="phone">Phone</option>
                    <option value="PC">PC</option>
                    <option value="laptop">Laptop</option>
                    <option value="console">Console</option>
                    <option value="tablet">Tablet</option>
                </select>
            </div>
            <button type="submit" name="save_cart" class="btn btn-success">Save Product</button>
        </form>
    </div>
</body>
</html>