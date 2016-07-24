<!DOCTYPE html>
<html lang="en">

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox | Credit</title>
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
  <style>
    body {
      background: url('multimedia/images/creditbackground.jpg') no-repeat;
      background-size: cover;
    }

    @media (min-width: 400px) {
      footer a {
        color: floralwhite;
        font-weight: bold;
      }
      footer {
        background: none;
      }
    }
  </style>
</head>
<body>
  <!-- header -->
    <?php include("includes/header.html"); ?>

  <!-- Credit Names -->
  <div class="container">
    <div class="row row-content">
      <div class="credits">
        <p><strong>Many thanks and much love to:</strong></p>
        <br>
        <div class="col-xs-12 col-sm-6">
        <a href="https://pixabay.com">Pixabay</a>
        </div>
        <div class="col-xs-12 col-sm-6">
        <a href="http://alpha.wallhaven.cc">Wallhaven</a>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php include("includes/footer.html"); ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
