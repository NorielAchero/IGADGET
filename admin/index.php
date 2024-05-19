<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" href="uploads/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Google Fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap">
    <!-- Custom CSS -->
    <style>
        /* Importing Google Fonts - Poppins */
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

        /* Resetting default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* Body styles */
        body {
            min-height: 100vh;
            background-image: linear-gradient(to bottom left, #23176c, #be3398);
            color: #f5f5f5;
        }

        /* Login container styles */
        .login-container {
            max-width: 500px;
            width: 60%;
            padding: 20px;
            border: 1px solid #ffffff;
            border-radius: 12px;
            background-color: #5936b2;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: auto;
            margin-top: 70px;
        }

        /* Heading styles */
        .login-container h2 {
            margin-bottom: 20px;
            color: #d858ff;
            font-weight: bold;
            text-align: center;
            font-size: 2.5rem;
        }

        /* Form group styles */
        .form-group label {
            color: #ffffff;
            font-weight: bold;
        }

        /* Form control styles */
        .form-control {
            background-color: #5936b2;
            border-color: #ffffff;
            color: #ffffff;
        }

        /* Button styles */
        .btn {
            background-color: #ffffff;
            border-color: #ffffff;
            font-weight: bold;
            color: #5936b2;
            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
        }

        .btn:hover {
            background-color: #FD6262;
            border-color: #FD6262;
            color: #ffffff;
        }

        .btn:active,
        .btn:focus {
            background-color: #FD6262;
            border-color: #FD6262;
            color: #ffffff;
        }

        /* Paragraph styles */
        p {
            color: #ffffff;
            text-align: center;
            margin-top: 20px;
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
        <p>admin123</p>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-zDnhMsjV4Z2of5w3plmX4tsI3mYN6P4Ucj7f8v3hNW0lsGjO2rERmC89IF0ehIWC" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
