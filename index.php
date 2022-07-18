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
    <style>
      button{
        color: black;
      }
      footer{
        background-color:lightgray;
        color:black;
      }
    </style>

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction -->
            <div class="row intro py-1" style="background-color : whitesmoke">
              
              <div class="col-sm-12 col-md img text-center">
          <marquee><h1 style="color:black">Welcome to the be_Aman's Banking Page</h1></marquee>
              </div>
            </div>

      <!-- Activity -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <br>
                    <br>
                    <img src="img/newuser.png" class="img-fluid">
                    <br>
                    <br>
                    <a href="createuser.php"><button class="btn btn-secondary" style="border-radius:0%">New User</button></a>
                  </div>
                  <div class="col-md act">
                  <br>
                  <br>
                    <img src="img/removeuser.png" class="img-fluid">
                    <br>
                    <br>
                    <a href="removeuser.php"><button class="btn btn-secondary" style="border-radius:0%">Remove a User</button></a>
                  </div>
                  <div class="col-md act">
                  <br>
                  <br>
                  <br>
                    <img src="img/makepay.jpg" class="img-fluid">
                    <br>
                    <br>
                    <a href="transfermoney.php"><button class="btn btn-secondary">Do Transaction</button></a>
                  </div>
                  <div class="col-md act">
                  <br>
                  <br>
                    <img src="img/payhis.png" class="img-fluid">
                    <br>
                    <br>
                    <a href="transactionhistory.php"><button class="btn btn-secondary">Payment history</button></a>
                  </div>
                  
            </div>
      </div>

      <!-- Footer -->
      <br>
      <br>
      <br>


     <footer class="text-center mt-5 py-2">
        <p>&copy 2022 Made by <b>be_Aman</b></p>
      </footer>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>