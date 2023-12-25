<?php
include("conf.php");

if (isset($_POST['register'])) {
    $furnitureName = $_POST['furnitureName'];
    $ownerName = $_POST['ownerName'];

    $insertSql = "INSERT INTO furniture (FurnitureName, FurnitureOwnerName) VALUES ('$furnitureName', '$ownerName')";
    
    if ($a->query($insertSql) === TRUE) {
        echo "Furniture registered successfully";
    } else {
        echo "Error registering furniture: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>cargo</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(255, 254, 254);
            color: black;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #6b4f4f;
            box-shadow: 0 3px 6px rgba(5, 5, 5, 0.2);
            height: 70px;
            align-items: center;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 30px;
            font-size: 24px;
            transition: color 0.3s;
            padding: 600px;
        }

        .navbar a i {
            margin-right: 5px;
        }

        .navbar a:hover {
            color: red;
        }

        .container {
            text-align: center;
            margin-top: 90px;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px 0px black;
            width: 400px;
            margin: 0 auto;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            margin: 10px 0;
            padding: 15px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #716868;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #5a5252;
        }

        .copyright {
            text-align: center;
            padding: 10px;
            background-color: #6b4f4f;
            color: white;
            position: absolute;
            bottom: 0;
            width: 99%;
            box-shadow: 0 0 34px 0px black;
        }

        .navbar a {
            font-size: 20px;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="navbar"><br>
    <a href="login.php"><i class="ion-log-in"></i>LOG OUT</a>
    </div>

    <div class="container">
        <div class="form-container">
            <h2>Register Furniture</h2>
            <form action="" method="post">
                <label for="furnitureName">Furniture Name:</label>
                <input type="text" name="furnitureName" placeholder="Furniture Name" required>
                
                <label for="ownerName">Owner Name:</label>
                <input type="text" name="ownerName" placeholder="Owner Name" required>

                <button type="submit" name="register">Register</button>
            </form>
        </div>
    </div>

    <div class="copyright">
        &copy; CARGO Ltd | 2023
    </div>
</body>
</html>
