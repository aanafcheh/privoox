<!DOCTYPE html>
<html>

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox Search</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/privoox.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
</head>

<body>
  <!-- header -->
  <?php include("includes/header.html"); ?>
  <hr>

  <div class="container-fluid">
    <?php
     mysql_connect("localhost","privooxdb","JW-w=#R[1L0@");
     mysql_select_db("privoox-db");

     if(isset($_GET['search'])){
        $search_value = $_GET['value'];
        $query = "SELECT * FROM applications WHERE app_keyword LIKE '%$search_value%'";
        $result = mysql_query($query);
        while($row = mysql_fetch_array($result)) {
          $icon = $row['app_icon'];
          $title = $row['app_name'];
          $link = $row['app_link'];
          $desc = $row['app_description'];

          echo "<h1><img src='$icon'/><a href='$link'> $title</a></h1><p>$desc</p>";
        }
     }
     ?>
  </div>

  <!-- footer -->
  <?php include("includes/footer.html"); ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
