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
    
    ?>

        <h4 class="container"> <?php echo $numToAlpha[$currentMonth]; ?> </h4>
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

    foreach ($finalDayList as $dayssss) {
        echo $dayssss." ";
    }