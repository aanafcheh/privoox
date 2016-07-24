<!DOCTYPE html>
<html lang="en">

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox | The Best Linux Office Tools</title>
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
        <a class="libreoffice" href="#libreoffice">
          <div class="col-xs-12 col-sm-3">
            <img alt="LibreOffice" src="multimedia/apps/libreoffice.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>LibreOffice<br>Office Suite</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="calibre" href="#calibre">
          <div class="col-xs-12 col-sm-3">
            <img alt="Calibre" src="multimedia/apps/calibre.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Calibre<br>E-book Management</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="okular" href="#okular">
          <div class="col-xs-12 col-sm-3">
            <img alt="Okular" src="multimedia/apps/okular.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Okular<br>Document Viewer</span>
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
          <li><a href="#libreoffice">LibreOffice</a>
            <br>
            <ul start="number">
              <li><a href="#installingLibreOffice">Installing LibreOffice</a></li>
              <li><a href="#libreofficeTips">To-Do After Installing LibreOffice</a>
                <ul>
                  <li><a href="#libreofficeT1">LibreOffice Privacy Settings</a></li>
                  <li><a href="#libreofficeT2">Installing LibreOffice Extentions</a></li>
                </ul>
              </li>
              <li><a href="#troubleshootingLibreOffice">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#calibre">Calibre</a>
            <br>
            <ul start="number">
              <li><a href="#installingCalibre">Installing Calibre</a></li>
              <li><a href="#calibreTips">To-Do After Installing Calibre</a>
                <ul>
                  <li><a href="#calibreT1">Connecting a Device to Calibre</a></li>
                </ul>
              </li>
              <li><a href="#troubleshootingCalibre">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#okular">Okular</a>
            <br>
            <ul start="number">
              <li><a href="#installingOkular">Installing Okular</a></li>
              <li><a href="#installingOkular">To-Do After Installing Okular</a></li>
              <li><a href="#troubleshootingOkular">Troubleshooting</a></li>
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
        <h1 id="libreoffice">LibreOffice</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://www.libreoffice.org"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://www.libreoffice.org</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#libreOffice"><img src="multimedia/icons/Content/websiteTutorial.png" alt="LibreOffice Privux Tutorial" /> http://privoox.com/hamster</a>
          </div> -->
        </div>
        <p>
          "LibreOffice is a powerful office suite; Its clean interface and its powerful tools let you unleash your creativity and grow your productivity. LibreOffice embeds several applications that make it the most powerful Free & Open Source Office suite on the
          market."
        </p>
        <h2 id="installingLibreOffice">Installing LibreOffice</h2>
        <p>
          Run the following commands to add the repository and install LibreOffice:
        </p>
        <p class="codeContainer">
          <code>
            # sudo add-apt-repository ppa:libreoffice/ppa
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install libreoffice
          </code>
        </p>

        <h2 id="libreofficeTips">To-Do After Installing LibreOffice</h2>
        <p>
          Share more LibreOffice tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h4 id="libreofficeT1">LibreOffice Privacy Settings</h4>
        <p>
          1. Go to “Tools &gt; Options &gt; LibreOffice &gt; User Data” . Add or edit any data you wish. This is the data that is used when saving documents.
        </p>
        <p>
          2. Go to “Tools &gt; Options &gt; LibreOffice &gt; Security . In “Security Options and Warnings” section, choose “Options”. Edit the options as below or as you wish.
          <br>
          <img class="tutorialImages" src="multimedia/images/LibreOffice/LibreOffice_1.png" alt="LibreOffice Privacy Settings" />
        </p>
        <h4 id="libreofficeT2">Installing LibreOffice Extentions</h4>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://extensions.libreoffice.org/extension-center"><img src="multimedia/multimedia/icons/Content/website.png" alt="Official Website" /> http://extensions.libreoffice.org/extension-center</a>
          </div>
        </div>
        <p>
          1. Go through the extensions in the link above and download your favorites.
          <br>
          <img class="tutorialImages" src="multimedia/images/LibreOffice/LibreOffice_2.png" alt="Downloading LibreOffice Extensions" />
        </p>
        <p>
          2. In LibreOffice, go to “Tools > Extension Manager...” . Click on “Add”.
          <br>
          <img class="tutorialImages" src="multimedia/images/LibreOffice/LibreOffice_3.png" alt="Installing LibreOffice Extensions" />
        </p>
        <p>
          3. Choose the extension that you have downloaded and click “Open”. You’ll be asked to choose “For whom do you want to install the extension.
          <br>
          <img class="tutorialImages" src="multimedia/images/LibreOffice/LibreOffice_4.png" alt="Installing LibreOffice Extensions" />
        </p>
        <p>
          4. That’s it. You may find some options of your extension in “Tools &gt; Add-Ons”.
        </p>

        <h2 id="troubleshootingLibreOffice">Troubleshooting LibreOffice</h2>
        <p>
          Privoox has not encountered any problems while using LibreOffice. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="calibre">Calibre</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://calibre-ebook.com"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://calibre-ebook.com</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#calibre"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Calibre Privux Tutorial" /> http://privoox.com/calibre</a>
          </div> -->
        </div>
        <p>
          "calibre is a free and open source e-book library management application developed by users of e-books for users of e-books."
        </p>
        <h2 id="installingCalibre">Installing Calibre</h2>
        <p>
          Run the following command to install or<strong> upgrade </strong> Calibre:
        </p>
        <p class="codeContainer">
          <code>
            sudo -v && wget -nv -O- https://raw.githubusercontent.com/kovidgoyal/calibre/master/setup/linux-installer.py | sudo python -c "import sys; main=lambda:sys.stderr.write('Download failed\n'); exec(sys.stdin.read()); main()"
          </code>
        </p>

        <h2 id="calibreTips">To-Do After Installing Calibre</h2>
        <p>
          Share more Calibre tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h4 id="calibreT1">Connecting a Device to Calibre</h4>
        <p>
          1. Run Calibre, connect your device to your computer. You will be notified that your device is detected and whether you would like to add it or not. When you choose “yes”, Calibre starts adding and scanning your device for e-book info. Click on the “jobs” icon on the bottom corner to see the status:
          <br>
          <img class="tutorialImages" src="multimedia/images/Calibre/Calibre_2.png" alt="Calibre Jobs Status" />
        </p>
        <p>
    2. “Getting list of books on device” job takes a little long. Even though the progress is unavailable, just be patient and it will finish successfully after a few minutes.
          <br>
          <img class="tutorialImages" src="multimedia/images/Calibre/Calibre_1.png" alt="Calibre Jobs Status" />
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="Moo:" />When Calibre detects a device, you may choose to not add it by mistake or for other reasons. In this case, that device will be added in the ignored devices list, so Calibre will not try to add it again. You can modify your ignored devices list by going to “Preferences &gt; Ignored devices”.
        </p>

        <h2 id="troubleshootingCalibre">Troubleshooting Calibre</h2>
        <p>
          Privoox has not encountered any problems while using Calibre. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="okular">Okular</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://okular.kde.org"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://okular.kde.org</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#okular"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Okular Privux Tutorial" /> http://privoox.com/okular</a>
          </div> -->
        </div>
        <p>
          "Okular is a universal document viewer based developed by KDE. Okular combines the excellent functionalities with the versatility of supporting different kind of documents, like PDF, Postscript, DjVu, CHM, XPS, ePub and others."
        </p>
        <h2 id="installingOkular">Installing Okular</h2>
        <p>
          Run the following commands to install Okular:
        </p>
        <p class="codeContainer">
          <code>
            # sudo apt-get update
            <br>
            # sudo apt-get install okular
          </code>
        </p>

        <h2 id="okularTips">To-Do After Installing Okular</h2>
        <p>
          Share more Okular tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>

        <h2 id="troubleshootingOkular">Troubleshooting Okular</h2>
        <p>
          Privoox has not encountered any problems while using Okular. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
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
