<?php
  // include "database.php";

  // $selectonQuery = "select * from starttimeinfo ";

  // $query = mysqli_query($con,$selectonQuery);

  // $num = mysqli_num_rows($query);

  $apiUrl = "https://ipinfo.io/";

  $receivedJson = file_get_contents($apiUrl);

  $resultArray = json_decode($receivedJson,true);

  echo $resultArray['loc'];
  

?>
