<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel = "icon" href="uploads/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: rgb(22, 22, 22);
            color: white;
            font-family: "Barlow", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            max-width: 500px;
            width: 60%;
            padding: 20px;
            border: 1px solid white;
            border-radius: 12px;
            background-color: rgb(37, 37, 37);
            box-shadow: rgba(0, 0, 0, 0.1) 0 2px 5px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: white;
            font-weight: bold;
            text-align: center;
        }
        .form-group label {
            color: white;
            font-weight: bold;
        }
        .form-control {
            background-color: rgb(37, 37, 37);
            border-color: white;
            color: white;
        }
        .btn {
            background-color: white;
            border-color: white;
            font-weight: bold;
            color: rgb(22, 22, 22);
        }
        .btn:hover {
            background-color: #FD6262;
            border-color: #FD6262;
            color: white;
        }
        .btn:active {
            background-color: #FD6262;
            border-color: #FD6262;
            color: white;
        }
        .btn:focus {
            background-color: #FD6262;
            border-color: #FD6262;
            box-shadow: 0 0 0 0.2rem rgba(253, 98, 98, 0.5);
            color: white;
        }
        p {
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-block">Login</button>
        </form>
        <br>
        <p>admin123</p>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-zDnhMsjV4Z2of5w3plmX4tsI3mYN6P4Ucj7f8v3hNW0lsGjO2rERmC89IF0ehIWC" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
