<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Select the day !!</title>
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

    // $_SESSION['returnedDay'] = "0";

    
    ?>

    <div class="container text-center">
        <h2><?php echo $numToAlpha[$currentMonth]; ?></h2>
    </div>
        
    <?php
    // $selectQuery = " select * from starttimeinfo where date = CURDATE() ";
    $selectQuery = " select * from starttimeinfo where month(date)=$currentMonth ";

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
    <div class="container text-center">
    <h3>
    <?php 
    foreach ($finalDayList as $dayssss)
    {
        $_SESSION['returnedDay'] = $dayssss;
        ?>
        <a href="fetchdata.php"><?php echo $dayssss."&emsp;"; ?></a>
        
        <?php
    }
    echo "Session is ".$_SESSION['returnedDay'];
    ?>
    </h3>
    </div>

    </body>
</html>