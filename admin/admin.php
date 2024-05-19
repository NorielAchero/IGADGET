<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Listings</title>
    <link rel = "icon" href="uploads/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            min-height: 100vh;
            background-image: linear-gradient(to bottom left, #23176c, #be3398);
            color: #ffffff; /* Light text color */
            font-family: 'Poppins', sans-serif;
        }

        section {
            position: relative;
            top: 0;
            left: 0; 
            min-height: 100vh;
            overflow: auto;
            box-sizing: border-box;
        }

        aside {
            margin-top: 70px;
            padding: 20px;
            background-color: #4b075c;
            border-radius: 30px;
            margin-right: 20px;
        }

        .home {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .title {
            font-size: 9rem;
            color: #d858ff;
            text-transform: uppercase;
            text-align: center;
            font-weight: 600;
        }

        .description {
            font-size: 18px;
            text-align: center;
            color: white;
            font-weight: 500;
        }

        .more {
            text-align: center;
            margin-top: 50px;
        }

        #categories h1 {
            text-align: center;
            font-size: 50px;
            font-weight: 600;
        }

        #categories p {
            text-align: justify;
            margin-top: 15px;
            margin-bottom: 15px;
            color: #e2b4d6;
            font-weight: 500;
            text-align: center;
            overflow: hidden;
        }

        .scrollable-cards {
            overflow-x: hidden;
            white-space: nowrap; 
            border-radius: 20px;
            overflow: hidden;
        }

        .card {
            background: #5936b2;
            display: inline-block;
            width: 300px;
            margin-right: 10px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .card-img-top {
            width: 100%; 
            height: 250px; 
            object-fit: cover; 
        }

        .card-body {
            padding: 10px;
        }

        .card-text {
            overflow: hidden;
            white-space: nowrap;
        }

        /* Styling for table */
        .table {
            background-color: rgba(0, 0, 0, 0.7); /* Dark transparent background */
            color: #ffffff; /* White text color */
            border: 2px solid #ffffff; /* White table border */
            border-collapse: collapse;
            box-shadow: 0px 2px 5px rgba(255, 255, 255, 0.1); /* Table shadow */
            margin: auto; /* Center align the table */
        }

        .table th,
        .table td {
            border: 2px solid #ffffff; /* White table cell border */
            padding: 10px; /* Cell padding */
        }
    </style>
</head>
<body>
    <div class="container">
        <br><br>
        <h1><strong><center>Edit Product Listings</center></strong></h1>

        <!-- Navigation -->
        <h2><strong>PRODUCT</strong></h2>
        <a href="insert_prodtable.php" class="btn btn-info">Insert Product </a>
        <br> 
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>prodid</th>
                    <th>prodname</th>
                    <th>prodname</th>
                    <th>price</th>
                    <th>image</th>
                    <th>category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("includes/sqlconnection.php");
                $sql = "SELECT * FROM prodtable";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['prodname']."</td>";
                        echo "<td>".$row['proddesc']."</td>";
                        echo "<td>".$row['price']."</td>";
                        echo "<td><img src='uploads/".$row['image']."' width='100'></td>";
                        echo "<td>".$row['category']."</td>";
                        echo "<td>
                                <a href='edit_prodtable.php?id=".$row['id']."' class='btn btn-primary'>Edit</a>
                                <a href='controller.php?control=false&table=prodtable&id=".$row['id']."' class='btn btn-danger'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No records found</td></tr>"; 
                }
                $conn->close();
                ?>
            </tbody>
        </table>

        <br><br><br>
        <h2><strong>CART</strong></h2>
        <a href="insert_cart.php" class="btn btn-info">Insert to Cart </a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>prodid</th>
                    <th>prodname</th>
                    <th>prodname</th>
                    <th>price</th>
                    <th>image</th>
                    <th>category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("includes/sqlconnection.php");
                $sql = "SELECT * FROM cart";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['prodid']."</td>";
                        echo "<td>".$row['prodname']."</td>";
                        echo "<td>".$row['proddesc']."</td>";
                        echo "<td>".$row['price']."</td>";
                        echo "<td><img src='uploads/".$row['image']."' width='100'></td>";
                        echo "<td>".$row['category']."</td>";
                        echo "<td>
                                <a href='edit_cart.php?id=".$row['id']."' class='btn btn-primary'>Edit</a>
                                <a href='controller.php?control=false&table=cart&id=".$row['id']."' class='btn btn-danger'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No records found</td></tr>"; 
                }
                $conn->close();
                ?>
            </tbody>
        </table>

        <br>
        <br>
        <center><a href="../index.php" class="btn btn-success">View Website</a></center>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>
</html>

