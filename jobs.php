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

    <div class="sec1">
        <h1><b>Find your dream job now</b></h1> <br>
        <h4>5 lakh+ jobs for you to explore</h4> <br><br>

        <div id="srch">
      <input type="text" value="Enter Skills/ Designation / Comapnies">
      <input type="number" placeholder="Experience">
      <input type="number" placeholder="Location"> <br><br>

      <div id="srcbtn" >
     <a href="companies.php"> <input style="background-color: red; color: white;" type="submit" name="Submit" id="btn" value="Search "></a>
        </div>
    </div> <br><br>

    <div id="imgcomp">
    <img src="image/img1.jpeg" alt="">
    </div>
    </div>
    </div>

    <div class="sec2">
        <h2>Browse top-paying jobs by industry</h2> <br>
        <div id="sec2comp">
     <label><h2 style="color : red ;">Choose an industry : </h2></label> <br>
     <select name="cars" id="cars" style="width: 350px; height:50px;border-radius:30px;text-align:center;">
    <option >All industry</option>
    <option >It industry</option>
    <option >Business Management Administration </option>
    <option >Community and Social Service</option>
    <option >Finance and accounting</option>
    <option >HealthCare</option>
  </select> <br><br>
  <div id="srcbtn" >
     <a href="companies.php"> <input style="background-color: red; color: white;" type="submit" name="Submit" id="btn" value="Search "></a>
        </div>
        </div><br><br>
        <div class="footimg">
            <img src="image/img2.png" alt="" style="width:1300px;height:400px;border-radius:30px;">
        </div>
        
    </div> <br><br>

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
