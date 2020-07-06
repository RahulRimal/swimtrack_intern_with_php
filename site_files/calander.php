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
    $currentYear = $currentDateSplit[0];


    
    ?>
    
    <div class="container my-5">
        <div class="year text-center py-3">
            <h1><?php echo $currentYear ?></h1>
        </div>
    </div>
        <div class="container">
        <div class="row">
            
    <?php 
    foreach ($numToAlpha as $key => $value)
    {
        ?>
            <div class="col-md-3">
                
                <div id="monthSection" class="container text-center">
        <div class="card border-warning mb-3" style="width: 180px; max-width: 18rem; height: 160px ; border-radius: 35px;">
          <div class="card-body text-warning my-5">
            <h5><a id="dayNoIs" class="card-title" href="#" onclick="sendDay(this)" style="text-decoration: none; color: black; padding: 19px;  "><?php echo $value;?></a></h5>
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
                var numm = dayy.innerHTML;
                console.log(numm);
                var testMonth = "August"

                var monthNumber = {

                    January: '01',
                    February: '02',
                    March :'03',
                    April : '04',
                    May : '05',
                    June : '06',
                    July : '07',
                    August : '08',
                    September : '09',
                    October : '10',
                    November : '11',
                    December : '12',
                };


                dayy.href = "http://localhost/swimtrack_intern_with_php/site_files/showdateonly.php?selectedMonth="+monthNumber[numm]; 

            }

        </script>

    </body>
</html>