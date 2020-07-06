<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Calender</title>

    <style>
        .daysBut
    {
      border: none;
      background: none;
      padding: 0px;
      text-decoration: none;
      
    }

    .card:hover
    {
        box-shadow: 7px 10px 12px 3px rgba(253,231,152,0.79);
    }
    
    </style>

</head>
<body>


<?php

    include "database.php";

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

    $listOfDays = array();

    $selectedMonth = $_GET['selectedMonth'];


    
    ?>

    <div class="container text-center" style="margin-top: 100px; margin-bottom: 50px;">
        <h2 id="month-here"><?php echo $numToAlpha[$selectedMonth]; ?></h2>
    </div>
        
    <?php
    $selectQuery = " select * from starttimeinfo where month(date)=$selectedMonth ";

    $query = mysqli_query($con, $selectQuery);


    while($resul = mysqli_fetch_array($query))
    {
        $todayDate = $resul['date'];

        $dateAlone = explode("-", $todayDate);

        $day = $dateAlone[2];
        array_push($listOfDays, $day);
    }

    $finalDayList = array_unique($listOfDays);

    ?>
        <div class="container">
        <div class="row" style="display: flex; justify-content: center;">
    <?php 
    foreach ($finalDayList as $dayssss)
    {
        ?>
            <div class="col-md-2">
        <div id="monthSection" class="container text-center">
        <div class="card border-warning " style="width: 80px; height: 80px ; border-radius: 5px;">
          <div class="card-body text-warning my-2">
            <h5><a id="dayNoIs" href="#" onclick="sendDay(this)" style="text-decoration: none; color: black;"><?php echo $dayssss;?></a></h5>
          </div>
        </div>
    </div>
</div>

        <?php
    }
    ?>
    </div>
    </div>

        <script>

            function sendDay(dayy)
            {
                var sendMonth = "<?php echo $selectedMonth; ?>"
                console.log(typeof(sendMonth));

                var selectedDay = dayy.innerHTML;
                dayy.href = "http://localhost/swimtrack_intern_with_php/site_files/fetchdata.php?selectedMonth="+sendMonth+"&selectedDay="+selectedDay; 
            }
            
             

        </script>

    </body>
</html>