<!DOCTYPE html>
<html lang="en">

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox | Contact</title>
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

    <!-- contact form -->
    <div class="container">
      <div class="row row-content">
        <div>
          <p style="font-size:20px;line-height:40px;">If you would like to contact me, please use the form below or email me directly:
            <br><a class="email" href="mailto:contact@privoox.com"> contact@privoox.com</a></p>
        </div>
        <form class="contact-form" role="contact"  action="email.php" method="post">
          <div class="input-group">
          <input type="text" name="email" class="email-subject" placeholder="Your Email Address" required>
          <br>
          <input type="text" name="subject" class="email-subject" placeholder="Subject" required>
          <br>
          <textarea name="emailContent" class="email-content" cols="100" rows="10" placeholder="Your message..." required></textarea>
          <br>
          <button type="Submit" name="submit" class="email-submit"><strong>Send</strong></button>
        </div>
        </form>
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
