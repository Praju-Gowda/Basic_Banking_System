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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Basic Banking System</title>
  </head>

  <body style="background-color: 	#228B22">
  <?php
  include 'navbar.php';
  ?>

      <div class="container-fluid" >
      <!-- Introduction section -->

            <div class="row intro py-1" style="background-color : #88BDBC;">
            
              <div class="col-sm-12 col-md-8">
                <div class="heading text-center my-5">
                  <h1>Welcome to<i class="fas fa-building"></i>PRINCE BANK<i class="fas fa-landmark"></i></h1>
                  <h3>"Let us take care of all your money needs"</h3>
                </div>
              </div>
              <div class="col-sm-6 col-md-1 img text-right">
                <img  src="img\PicsArt_06-20-12.00.04.png" height="300" width="330">
              </div>
            </div>
            <br><br><br><br><br><br>
      <!-- Activity section --> 
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user1.jpg" height="245" style="border-radius:50%;" width="245" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : 	#FF69B4;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" height="245" width="245"  class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : 	#FF69B4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" height="245" width="245" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : 	#FF69B4;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Designed by <b>PRAJWAL M S</b> <br>The Spark Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>