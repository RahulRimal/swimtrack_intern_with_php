<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>

    </style>

    <title>Contacts | Swimtrack</title>

    <script>
    	function showSuccess()
    	{
    		let today = new Date();
    		let showTime = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();;
    			swal({
					  title: "Thank you for signing in",
					  text: "You are signed in at "+ showTime,
					  icon: "success",
					  button : false,
					  timer: 3000,
					});
    	}

    </script>
    

  </head>
  <body>	

<?php

	include "links.php";
if(isset($_POST['name']))
{
    include"database.php";
    
  //  --------------------------- Fetching the location coordinates----------------------

  $apiUrl = "https://ipinfo.io/";

  $receivedJson = file_get_contents($apiUrl);

  $resultArray = json_decode($receivedJson,true);

	

	$name = $_POST['name'];
  $locaction = $resultArray['loc'];
  $city = $resultArray['city'];
  $date = date("Y/m/d");

  echo"<script> showSuccess(); </script>";



    $sql = "INSERT INTO `starttimeinfo` (`name`, `location`, `coordinates`, `date`, `time`) VALUES ('$name', '$locaction', '$city',  '$date', current_timestamp());";
    
    mysqli_query($con, $sql);

    mysqli_close($con);

}

?>

        
       <div class="container-fluid text-center">
         <form class="form-signin" action="contactinfo.php" method="POST">
  			<img class="mb-4" src="https://www.swimtrack.ca/img/swimtrack%20design.png" alt="">
  			<div class="from-group nameInput">
  				<input type="text" id="inptName" name="name" class="form-control" placeholder="Name" required="" autofocus="">
  			</div>
  			<div class="submit-button my-4">
  				<button class="btn btn-md btn-success" onclick=" showTime = showSuccess()">Start</button>
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