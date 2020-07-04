<?php
if(isset($_POST['name']))
{
		
    // include"start.php";
    include"database.php";

	

	$name = $_POST['name'];
	$locaction = "Nepalgunj";
	$date = "2020-07-04";



    $sql = "INSERT INTO `starttimeinfo` (`name`, `location`, `date`, `time`) VALUES ('$name', '$locaction', '$date', current_timestamp());";
    
    mysqli_query($con, $sql);

    mysqli_close($con);

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Contacts | Swimtrack</title>
    

  </head>
  <body>

        
       <div class="container-fluid text-center">
         <form class="form-signin" action="contactinfo.php" method="POST">
  			<img class="mb-4" src="https://www.swimtrack.ca/img/swimtrack%20design.png" alt="">
  			<div class="from-group nameInput">
  				<input type="text" id="inptName" name="name" class="form-control" placeholder="Name" required="" autofocus="">
  			</div>
  			<div class="submit-button my-4">
  			<!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> -->
  				<button class="btn btn-md btn-success">Start</button>
  			</div>
		</form>
      </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>