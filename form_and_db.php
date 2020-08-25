
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Zomato</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
        

        // Connecting to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contact";

        // Create a connection
        $con = mysqli_connect($servername, $username, $password, $database);

        // Die if connection was denied
        if (!$con){
            die("Sorry we failed to connect". mysqli_connect_error());
        }
        else{
            echo "Connection was successful<br>";

        }

        // Inserting data in the database
        // $insertdb = "INSERT INTO `contact` ( `Name` , `dest` ) VALUES ('$Name', '$destination')";
        
        $insertdb = "INSERT INTO `contact` (`S. No`, `Name`, `Email`, `Complaint`, `Date`) VALUES (NULL, '$name', '$email', '$desc', current_timestamp())";

        $result = mysqli_query($con, $insertdb);


        // Check if data has been inserted in the database or not
        if ($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thank you!, Your complaint has been sucessfully registered.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>';
        }
        else{
            echo "<br>The data cannot be added because :". mysqli_error($con);

        }
    }
    
?>
    <h3>Reach us out here.</h3>
    <form action = "/phptut/index.php" method = "post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name = "name" class="form-control" id="name" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name = "email" class="form-control" id="email" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="desc">Complaint</label>
    <textarea class="form-control" name="desc" id="desc" cols="30" rows="8"></textarea>
    
  </div>
 
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

















