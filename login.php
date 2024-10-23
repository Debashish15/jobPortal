<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerCrafters</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="nav">
        <div id="head1">
            <h2>CareerCrafters</h2>
        </div>
        <div id="head2">
            <ul>
                <a href="jobs.php"><li>Jobs</li></a>
                <a href="companies.php"><li>Companies</li></a>
                <a href="services.php"><li>Services</li></a>
                <a href="Contact.php"><li>Contact / Report</li></a>
            </ul>
        </div>
        <div id="head3">
            <a href="./login.php">Login</a>
            <a href="./Registration.php">Register</a>
            <a href="./Admin.php">Admin</a>
        </div>
    </div>
    <br><br><br><br><br><br><br>
    <form action="login.php" method="POST">
        <h1>Login Form:</h1><br><br>
        <label>Username:</label>
        <input type="text" id="User" name="Username" required><br><br>
        <label>Password:</label>
        <input type="password" id="password" name="Password" required><br><br>
        <input type="submit" name="Submit" id="btn" value="Login" style="width:100px;height:50px;border-radius:30px;background-color:red;color:white;">
    </form>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "Login";

    $con = new mysqli($servername, $username, $password, $database);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    if (isset($_POST['Submit'])) {
        $user = $_POST['Username'];
        $pass = $_POST['Password'];

        $stmt = $con->prepare("SELECT * FROM Registration WHERE Username = ? AND Password = ?");
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            header("Location: companies.php");
            exit();
        } else {
            echo "Invalid Username or Password.";
        }

        $stmt->close();
    }

    $con->close();
    ?>
</body>
</html>
