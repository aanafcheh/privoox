<!DOCTYPE html>
<html lang="en">

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox | Perfect Your Distro</title>
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

  <header class="jumbotron">
    <div class="container">
      <div class="row row-header">
        <div>
          <h1>PERFECT YOUR LINUX DISTRO</h1>
          <br>
          <h2>Protect your privacy, move to Linux. You'll love it!</h2>
          <h2 class="row">
            <br>
            <div class="col-sm-5 col-md-4">
              Open-source <span style="color:green" class="glyphicon glyphicon-check"></span>
            </div>
            <div class="col-sm-3 col-md-4">
            Fast <span style="color:green" class="glyphicon glyphicon-check"></span>
            </div>
            <div class="col-sm-4">
            Secure <span style="color:green" class="glyphicon glyphicon-check"></span>
          </div>
          </h2>
          <!-- <p style="padding:40px;"></p> -->
          <p>
            <br>Privoox is built to make Linux easy for everyone. It's new, your help is very much needed in the Wiki.</p>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row row-content categories">
      <div class="col-sm-6 col-md-4">
        <a class="well OS" href="distributions.php"><span class="topic">Distributions</span></a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a class="well systemTools" href="systemtools.php"><span class="topic">System Tools</span></a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a class="well Internet" href="internet.php"><span class="topic">Internet</span></a>
      </div>

      <div class="col-sm-6 col-md-4">
        <a class="well Programming" href="programming.php"><span class="topic">Programming</span></a>
      </div>
      <div class="col-sm-6 col-sm-push-0 col-md-4 col-md-push-4">
        <a class="well Productivity" href="productivity.php"><span class="topic">Productivity</span></a>
      </div>
      <div class="col-sm-6 col-sm-push-0 col-md-4 col-md-pull-4">
        <a class="well Office" href="office.php"><span class="topic">Office</span></a>
      </div>

      <div class="col-sm-6 col-md-4">
        <a class="well Multimedia" href="multimedia.php"><span class="topic">Multimedia</span></a>
      </div>
      <div class="col-sm-6 col-sm-push-0 col-md-4 col-md-push-4">
        <a class=" well Graphics" href="graphics.php"><span class="topic">Graphics</span></a>
      </div>
      <div class="col-sm-6 col-sm-push-0 col-md-4 col-md-pull-4">
        <a class="well Education" href="education.php"><span class="topic">Education</span></a>
      </div>
    </div>
    <!-- first page second part -->
    <div class="row row-content categories">
      <p style="padding:10px;"></p>
      <p style="font-size: 20px;">Let's make everybody love Linux. Contribute and add tutorials of your favorite open-source software in the Wiki.</p><br>
      <a class="well wiki" href="/privooxwiki"><span class="topic">Wiki</span></a>
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
