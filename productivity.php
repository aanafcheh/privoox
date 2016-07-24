<!DOCTYPE html>
<html lang="en">

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox | The Best Linux Productivity Tools</title>
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

  <!-- app list -->
  <fieldset class="apps">
    <legend>App List</legend>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="hamster" href="#hamster">
          <div class="col-xs-12 col-sm-3">
            <img alt="Hamster" src="multimedia/apps/hamster-applet.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Hamster<br>Time Tracker</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="gtg" href="#gtg">
          <div class="col-xs-12 col-sm-3">
            <img alt="Getting Things GNOME!" src="multimedia/apps/gtg.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Getting Things GNOME!<br>Task Manager</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="gfg" href="#gfi">
          <div class="col-xs-12 col-sm-3">
            <img alt="Go For It!" src="multimedia/apps/goforit.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Go For it!<br>Task Manager</span>
          </div>
        </a>
      </div>
    </div>

  </fieldset>

  <!-- Table of content -->
  <div class="container-fluid">
    <fieldset class="content">
      <div class="text">
        <h1>Contents</h1>
        <ol>
          <li><a href="#hamster">Hamster Time Tracker</a>
            <br>
            <ul start="number">
              <li><a href="#installingHamster">Installing Hamster</a></li>
              <li><a href="#hamsterTips">To-Do After Installing Hamster</a></li>
              <li><a href="#troubleshootingHamster">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#gtg">Getting Things GNOME!</a>
            <br>
            <ul start="number">
              <li><a href="#installingGTG">Installing GTG!</a></li>
              <li><a href="#gtgTips">To-Do After Installing GTG!</a>
                <ul>
                  <li><a href="#gtgT1">Enabling GTG Plugins</a></li>
                </ul>
              </li>
              <li><a href="#troubleshootingGTG">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#gfi">Go For It!</a>
            <br>
            <ul start="number">
              <li><a href="#installingGFI">Installing Go For It!</a></li>
              <li><a href="#gfiTips">To-Do After Installing Go for It!</a></li>
              <li><a href="#troubleshootingGFI">Troubleshooting</a></li>
            </ul>
          </li>
        </ol>
      </div>
    </fieldset>
  </div>

  <!-- Content -->
  <div class="container-fluid">
    <fieldset class="content">
      <div class="text">
        <h1 id="hamster">Hamster</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://projecthamster.wordpress.com"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://projecthamster.wordpress.com</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#hamster"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Hamster Privux Tutorial" /> http://privoox.com/hamster</a>
          </div> -->
        </div>
        <p>
          "Hamster is time tracking for individuals. It helps you to keep track of how much time you have spent during the day on activities you choose to track."
        </p>
        <h2 id="installingHamster">Installing Hamster</h2>
        <p>
          1. Run the following commands to install Hamster Time Tracker:
        </p>
        <p class="codeContainer">
          <code>
            # sudo apt-get update
            <br>
            # sudo apt-get install hamster-indicator
          </code>
        </p>
        <p>
          2. If you don't need the indicator, you can install the latest version by adding the daily build ppa:
        </p>
        <p class="codeContainer">
          <code>
            # sudo add-apt-repository ppa:dylanmccall/hamster-time-tracker-git-daily
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install hamster-time-tracker
          </code>
        </p>

        <h2 id="hamsterTips">To-Do After Installing Hamster</h2>
        <p>
          Share your Hamster tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>

        <h2 id="troubleshootingHamster">Troubleshooting Hamster</h2>
        <p>
          Privoox has not encountered any problems while using Hamster. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="gtg">Getting Things GNOME!</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://gtgnome.net"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://gtgnome.net</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#gtg"><img src="multimedia/icons/Content/websiteTutorial.png" alt="GTG Privux Tutorial" /> http://privoox.com/gtg</a>
          </div> -->
        </div>
        <p>
          "Getting Things GNOME! (GTG) is a personal tasks and TODO-list items organizer for the GNOME desktop environment inspired by the Getting Things Done (GTD) methodology."
        </p>
        <h2 id="installingGTG">Installing GTG</h2>
        <p>
          Run the following commands to install GTG:
        </p>
        <p class="codeContainer">
          <code>
            # sudo apt-get update
            <br>
            # sudo apt-get install gtg
          </code>
        </p>

        <h2 id="gtgTips">To-Do After Installing GTG</h2>
        <p>
          Share more GTG tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h4 id="gtgT1">Enabling GTG Plugins</h4>
        <p>
          Go to “Edit &gt; Plugins” and enable the plugins that you need.
        </p>

        <h2 id="troubleshootingGTG">Troubleshooting GTG</h2>
        <p>
          Privoox has not encountered any problems while using GTG. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="gfi">Go For It!</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://manuel-kehl.de/projects/go-for-it"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://manuel-kehl.de/projects/go-for-it</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#gfi"><img src="multimedia/icons/Content/websiteTutorial.png" alt="GFI Privux Tutorial" /> http://privoox.com/gfi</a>
          </div> -->
        </div>
        <p>
          "Go For It! is a simple and stylish productivity app, featuring a to-do list, merged with a timer that keeps your focus on the current task."
        </p>
        <h2 id="installingGFI">Installing Go For It</h2>
        <p>
          Run the following commands to install GO For It!:
        </p>
        <p class="codeContainer">
          <code>
            # sudo add-apt-repository ppa:mank319/go-for-it
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install go-for-it
          </code>
        </p>

        <h2 id="gfiTips">To-Do After Installing GO For It!</h2>
        <p>
          Share more GO For It! tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>

        <h2 id="troubleshootingGFI">Troubleshooting GO For It!</h2>
        <p>
          Privoox has not encountered any problems while using GFI. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>
      </div>
    </fieldset>
  </div>

  <!-- footer -->
  <?php include("includes/footer.html"); ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
