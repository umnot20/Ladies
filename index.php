<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
    <link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ladies</title>
    <nav>
      <?php
      echo file_get_contents("nav.txt");
       ?>
    </nav>
  </head>
  <body>
    <div>
      <?php
        echo file_get_contents($_GET['id'].".txt");
       ?>
    </div>
















    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
  </body>
</html>
