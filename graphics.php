<!DOCTYPE html>
<html lang="en">

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox | The Best Linux Graphics Tools</title>
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
        <a class="gimp" href="#gimp">
          <div class="col-xs-12 col-sm-3">
            <img alt="GIMP" src="multimedia/apps/gimp.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>GIMP<br>Image Editor</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="inkscape" href="#inkscape">
          <div class="col-xs-12 col-sm-3">
            <img alt="Inkscape" src="multimedia/apps/inkscape.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Inkscape<br>Vector Graphics Editor</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="shutter" href="#shutter">
          <div class="col-xs-12 col-sm-3">
            <img alt="Shutter" src="multimedia/apps/shutter.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Shutter<br>Screenshot Application</span>
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
          <li><a href="#gimp">GIMP</a>
            <br>
            <ul start="number">
              <li><a href="#installingGIMP">Installing GIMP</a></li>
              <li><a href="#gimpTips">To-Do After Installing GIMP</a>
                <ul>
                  <li><a href="#gimpT1">Installing GIMP Plugin Registry</a></li>
                </ul>
              </li>
              <li><a href="#troubleshootingGIMP">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#inkscape">Inkscape</a>
            <br>
            <ul start="number">
              <li><a href="#installingInkscape">Installing Inkscape</a></li>
              <li><a href="#inkscapeTips">To-Do After Installing Inkscape</a></li>
              <li><a href="#troubleshootingInkscape">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#shutter">Shutter</a>
            <br>
            <ul start="number">
              <li><a href="#installingShutter">Installing Shutter</a></li>
              <li><a href="#shutterTips">To-Do After Installing Shutter</a></li>
              <li><a href="#troubleshootingShutter">Troubleshooting</a></li>
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
        <h1 id="gimp">GIMP</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://www.gimp.org"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://www.gimp.org</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#gimp"><img src="multimedia/icons/Content/websiteTutorial.png" alt="GIMP Privux Tutorial" /> http://privoox.com/gimp</a>
          </div> -->
        </div>
        <p>
          "GIMP is a cross-platform image editor available for GNU/Linux, OS X, Windows and more operating systems. Whether you are a graphic designer, photographer, illustrator, or scientist, GIMP provides you with sophisticated tools to get your job done. You
          can further enhance your productivity with GIMP thanks to many customization options and 3rd party plugins."
        </p>
        <h2 id="installingGIMP">Installing GIMP</h2>
        <p>
          Run the following commands to add the repository and install the latest version of GIMP:
        </p>
        <p class="codeContainer">
          <code>
            # sudo apt-add-repository ppa:otto-kesselgulasch/gimp
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install gimp
          </code>
        </p>

        <h2 id="gimpTips">To-Do After Installing GIMP</h2>
        <p>
          Share more GIMP tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h4 id="gimpT1">Installing GIMP Plugin Registry</h4>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://registry.gimp.org/glossary/a"><img src="multimedia/multimedia/icons/Content/website.png" alt="Official Website" /> http://registry.gimp.org/glossary/a</a>
          </div>
        </div>
        <p>
          “repository of optional extensions for GIMP”
        </p>
        <p>
          If you have installed GIMP following the method above then run the following command to install  GIMP Plugin Registry:
        </p>
        <p class="codeContainer">
          <code>
            sudo apt-get install gimp-plugin-registry
          </code>
        </p>

        <h2 id="troubleshootingGIMP">Troubleshooting GIMP</h2>
        <p>
          Privoox has not encountered any problems while using GIMP. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="inkscape">Inkscape</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://inkscape.org"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://inkscape.org</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#inkscape"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Inkscape Privux Tutorial" /> http://privoox.com/inkscape</a>
          </div> -->
        </div>
        <p>
          "Inkscape is professional quality vector graphics software which runs on Windows, Mac OS X and GNU/Linux. It is used by design professionals and hobbyists worldwide, for creating a wide variety of graphics such as illustrations, icons, logos, diagrams,
          maps and web graphics. Inkscape uses the W3C open standard SVG (Scalable Vector Graphics) as its native format, and is free and open-source software."
        </p>
        <h2 id="installingInkscape">Installing Inkscape</h2>
        <p>
          Run the following commands to install Inkscape:
        </p>
        <p class="codeContainer">
          <code>
            # sudo apt-get update
            <br>
            # sudo apt-get install inkscape
          </code>
        </p>

        <h2 id="inkscapeTips">To-Do After Installing Inkscape</h2>
        <p>
          Share your Inkscape tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>

        <h2 id="troubleshootingInkscape">Troubleshooting Inkscape</h2>
        <p>
          Privoox has not encountered any problems while using Inkscape. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="shutter">Shutter</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://shutter-project.org"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://shutter-project.org</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#shutter"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Shutter Privux Tutorial" /> http://privoox.com/shutter</a>
          </div> -->
        </div>
        <p>
          "Shutter is a feature-rich screenshot program for Linux based operating systems such as Ubuntu. You can take a screenshot of a specific area, window, your whole screen, or even of a website – apply different effects to it, draw on it to highlight points,
          and then upload to an image hosting site, all within one window."
        </p>
        <h2 id="installingShutter">Installing Shutter</h2>
        <p>
          Run the following commands to add the repository and install Shutter:
        </p>

        <p class="codeContainer">
          <code>
            # sudo add-apt-repository ppa:shutter/ppa
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install shutter
          </code>
        </p>

        <h2 id="shutterTips">To-Do After Installing Shutter</h2>
        <p>
          Share more Shutter tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>

        <h2 id="troubleshootingShutter">Troubleshooting Shutter</h2>
        <p>
          Privoox has not encountered any problems while using Shutter. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
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
