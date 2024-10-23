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
               <a href="contact.php"><li>Contact / Report</li></a>
            </ul>
        </div>
        <div id="head3">
            <a href="./login.php">Login</a>
            <a href="./Registration.php">Register</a>
        </div>
    </div>

    <div class="sec1">
        <h1><b>Find your dream job now</b></h1> <br>
        <h4>5 lakh+ jobs for you to explore</h4> <br><br>

        <div id="srch">
      <input type="text" value="Enter Skills/ Designation / Comapnies">
      <input type="number" placeholder="Experience">
      <input type="number" placeholder="Location"> <br><br>

      <div id="srcbtn" >
     <a href=""> <input style="background-color: red; color: white;" type="submit" name="Submit" id="btn" value="Search "></a>
        </div>
    </div> <br><br>

    <form action="Apply.php" method="POST">
        <h1>Application Details : </h1> <br><br>
        <label>Name : </label>
        <input type="text" name="name" required><br><br>
       <label>Email : </label>
        <input type="email" name="email" required><br><br>
        <label>Company : </label>
        <input type="text" name="company" required><br><br>
        <label>Domain : </label>
        <input type="text" name="Domain" required><br><br>
        <label>Phone : </label>
        <input type="number" name="phone" required><br><br>

        <input type="submit" name="Submit" id="btn" value="apply" style="width:100px;height:50px:boprder-radius:30px;background-color:red;color:white;">
    </form>
<br><br><br>
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
        $Comapny = $_POST['company'];
        $Domain = $_POST['Domain'];
        $Phone = $_POST['phone'];

        $stmt = $con->prepare("INSERT INTO Application (Name, Email, Company, Domain, Phone) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $Email, $Comapny, $Domain, $Phone);
        
        if ($stmt->execute()) {
            echo "Registration Done";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $con->close();
    ?>

    
<footer class="footer">
    <div class="footer-links">
        <a href="#">Explore Indeed</a>
        <a href="#">Career Explorer</a>
        <a href="#">Career Advice</a>
        <a href="#">Browse Jobs</a>
        <a href="#">Browse Companies</a>
        <a href="#">Salaries</a>
        <a href="#">Indeed Events</a>
        <a href="#">Work at Indeed</a>
        <a href="#">Countries</a>
        <a href="#">About</a>
        <a href="#">Help Centre</a>
        <a href="#">ESG at Indeed</a>
        <a href="#">Guidelines for safe job search</a>
    </div> <hr><br>
    <h3 style="color:blue">© 2024 CareerCrafters-Accessibility at CareerCrafters-Privacy Centre and Ad Choices</h3>
</footer>
</body>
</html>
