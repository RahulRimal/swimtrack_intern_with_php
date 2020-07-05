<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Sn.</th>
        <th>Name</th>
        <th>Location</th>
        <th>Co-ordinates</th>
        <!-- <th>Date</th> -->
        <th>Time</th>
      </tr>
    </thead>
    <tbody>

            <?php

            session_start();

                include "database.php";
                include "links.php";

                // global $listOfDays;
                
                // echo $_SESSION['dayValue'];

                echo $_SESSION['returnedDay'];

                $numToAlpha = array(
                  '01'=>"January",
                  '02'=>"February",
                  '03'=>"March",
                  '04'=>"April",
                  '05'=>"May",
                  '06'=>"June",
                  '07'=>"July",
                  '08'=>"August",
                  '09'=>"September",
                  '10'=>"October",
                  '11'=>"November",
                  '12'=>"December",
          
              );
                $currentDate = date('Y-m-d');
                $currentDateSplit = explode("-", $currentDate);
                $currentMonth = $currentDateSplit[1];
                $currentDay = $currentDateSplit[2];

                ?>

                <h4 class="container"> <?php echo $numToAlpha[$currentMonth]. " ".$currentDay; ?> </h4>

                <?php


                // $selectquery = " select * from starttimeinfo ";
                $selectQuery = " select * from starttimeinfo where month(date)=$currentMonth ";
                $query = mysqli_query($con,$selectQuery);

                // $nums = mysqli_num_rows($query);

                while($res = mysqli_fetch_array($query))
                {
            
            ?>
                    
                    <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['coordinates']; ?></td>
                        <td><?php echo $res['location']; ?></td>
                        <!-- <td><?php// echo $res['date']; ?></td> -->
                        <td><?php echo $res['time']; ?></td>
                    </tr>

            <?php

                }

                session_destroy();
            ?>


    </tbody>
  </table>
</div>

</body>
</html>
