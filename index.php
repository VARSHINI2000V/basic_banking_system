<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>
<style>
body
{
background-image:
url('https://wallpapercave.com/wp/wp2581365.jpg');
background-repeat:repeat;
}
</style>
  <body>
  <?php
  include 'navbar.php';
  ?>
  <br>
<center>
  <h1 style="background-color : black;color:white;"><b>Welcome to our Banking System</b></h1></center>
  <br><br><br>
      <div class="container-fluid">
     
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    
                    <br>
                    <a href="user.php"><button style="background-color : black;font-size: 30px;border-radius: 50px 20px;border:2px solid white;">Create User</button></a>
                  </div>
                  <div class="col-md act">
                    
                    <br>
                    <a href="transfer.php"><button style="background-color : black;font-size: 30px;border-radius: 50px 20px;border:2px solid white;">Transfer Amount</button></a>
                  </div>
                  <div class="col-md act">
                    
                    <br>
                    <a href="transaction.php"><button style="background-color : black;font-size: 30px;border-radius: 50px 20px;border:2px solid white;">Transaction Details</button></a>
                  </div>
            </div>
      </div>
	  <br><br><br><br><br><br><br><br><br>
      <footer style="background-color : black;color:white;font-size: 30px;">
       <p><b><center>VARSHINI_V</center></b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>