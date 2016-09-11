<?php

$start = new DateTime;
$start->setTime(8,0,0);

$end = clone $start;
$end->setTime(12,0,0);


// $interval = new DateInterval('PT1H'); // every 1 hour
$interval = new DateInterval('PT30M'); // every 30 minutes

$dateRange = new DatePeriod($start, $interval, $end);


 ?>



  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      
       <form class="" action="index.html" method="post">
          <select class="time" name="time">
            <?php foreach($dateRange as $date) { ?>
             <label for=""></label>
             <option value="<?php echo $date->format('H:i:s'); ?>"><?php echo $date->format('H:i:s'); ?></option>
           <?php } // end foreach?>
          </select>
       </form>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
  </html>
