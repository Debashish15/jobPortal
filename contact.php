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
               <a href="jobs.php"> <li>Jobs</li></a>
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
    <form action="contact.php" method="POST">
        <h1>Contact Form : </h1> <br><br>
        <label>Name : </label>
        <input type="text" name="name" required><br><br>
        <label>Email : </label>
        <input type="email" name="email" required><br><br>
        <label>Phone : </label>
        <input type="number" name="phone" required><br><br>
        <label>Message : </label>
        <input type="text" name="message" required><br><br>

        <input type="submit" name="Submit" id="btn" value="Call me Back" style="width:100px;height:50px:boprder-radius:30px;background-color:red;color:white;">
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
        $name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        $message = $_POST['message'];

        $stmt = $con->prepare("INSERT INTO Contact (name, email, phone, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $Email, $Phone, $message);
        
        if ($stmt->execute()) {
            echo "THANK YOU! , We will get in touch with you soon";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $con->close();
    ?>
</body>
</html>
