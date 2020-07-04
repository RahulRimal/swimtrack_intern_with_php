<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
        <th>Date</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>

            <?php

                include "database.php";

                $selectquery = " select * from starttimeinfo ";

                $query = mysqli_query($con,$selectquery);

                $nums = mysqli_num_rows($query);

                while($res = mysqli_fetch_array($query))
                {
            
            ?>
                    
                    <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['location']; ?></td>
                        <td><?php echo $res['date']; ?></td>
                        <td><?php echo $res['time']; ?></td>
                    </tr>

            <?php

                }
            ?>


    </tbody>
  </table>
</div>

</body>
</html>
