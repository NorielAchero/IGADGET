<!DOCTYPE html>
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
        .btn-primary {
            background-color: #FD6262; /* Button background color */
            border-color: #FD6262; /* Button border color */
            color: #ffffff; /* Button text color */
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #ffffff; /* Button hover background color */
            color: #FD6262; /* Button hover text color */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>EDIT PRODUCT TABLE</h1>
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <?php 
                getTableById($_GET['id']);
            ?>
            <button type="submit" class="btn btn-primary" name="update_prodtable">UPDATE PRODUCT</button>
        </form>
    </div>
</body>
</html>

<?php
    function getTableById($recno) {
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM prodtable WHERE id='$recno'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                    <input type='hidden' name='txtid' value='".$row['id']."'>

                    <div class='form-group'>
                    <label>PRODUCT NAME: </label>
                    <input type='text' name='txtprodname' placeholder='".$row['prodname']. "'placeholder='".$row['prodname']. "' class='form-control' >
                </div>
    
                <div class='form-group'>
                    <label>PRODUCT DECRIPTION: </label>
                    <input type='text' name='txtproddesc' placeholder='".$row['proddesc']."'class='form-control'>
                </div>
    
                <div class='form-group'>
                    <label>PRODUCT PRICE: </label>
                    <input type='text' name='txtprice' placeholder='".$row['price']." 'class='form-control'>
                </div>
                    <div class='form-group'>
                        <label>Image:</label>
                        <input type='file' name='txtimage'>
                        <br>
                        <img src='uploads/".$row['image']."' width='300'>
                        <input type='hidden' name='txtold_image' value ='".$row['image']."'>
                    </div>

                <div class='form-group'>
                    <label>CATEGORY: </label>
                    <select name='txtcategory' placeholder='".$row['category']."' class='form-control'>
                        <option value='unknown'></option>                    
                        <option value='phone'>Phone</option>
                        <option value='PC'>PC</option>
                        <option value='laptop'>Laptop</option>
                        <option value='console'>Console</option>
                        <option value='tablet'>Tablet</option>
                    </select>
                </div>
                    ";
            }
        } else {
            echo "no record found";
        }

        $conn->close();
    }
?>