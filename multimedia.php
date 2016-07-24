<!DOCTYPE html>
<html lang="en">

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox | The Best Linux Multimedia Tools</title>
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
        <a class="vlc" href="#vlc">
          <div class="col-xs-12 col-sm-3">
            <img alt="VLC" src="multimedia/apps/vlc.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>VLC<br>Multimedia Player</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="kodi" href="#kodi">
          <div class="col-xs-12 col-sm-3">
            <img alt="Kodi" src="multimedia/apps/kodi.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Kodi<br>Media Center</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="minitube" href="#minitube">
          <div class="col-xs-12 col-sm-3">
            <img alt="Minitube" src="multimedia/apps/minitube.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Minitube<br>YouTube Application</span>
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
          <li><a href="#vlc">VLC Media Player</a>
            <br>
            <ul start="number">
              <li><a href="#installingVLC">Installing VLC</a></li>
              <li><a href="#vlcTips">To-Do After Installing VLC</a>
                <ul>
                  <li><a href="#vlcT1">Download Subtitles from opensubtitles.org with VLSUB</a></li>
                </ul>
              </li>
              <li><a href="#troubleshootingVLC">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#kodi">Kodi</a>
            <br>
            <ul start="number">
              <li><a href="#installingKodi">Installing Kodi</a></li>
              <li><a href="#kodiTips">To-Do After Installing Kodi</a></li>
              <li><a href="#troubleshootingKodi">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#minitube">Minitube</a>
            <br>
            <ul start="number">
              <li><a href="#installingMinitube">Installing Minitube</a></li>
              <li><a href="#minitubeTips">To-Do After Installing Minitube</a></li>
              <li><a href="#troubleshootingMinitube">Troubleshooting</a></li>
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
        <h1 id="vlc">VLC Media Player</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://www.videolan.org"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://www.videolan.org</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#vlc"><img src="multimedia/icons/Content/websiteTutorial.png" alt="VLC Privux Tutorial" /> http://privoox.com/vlc</a>
          </div> -->
        </div>
        <p>
          "VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files as well as DVDs, Audio CDs, VCDs, and various streaming protocols."
        </p>
        <h2 id="installingVLC">Installing VLC</h2>
        <p>
          Run the following commands to add the repository and install the latest version of VLC:
        </p>
        <p class="codeContainer">
          <code>
            # sudo add-apt-repository ppa:mc3man/trusty-media
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install vlc browser-plugin-vlc
          </code>
        </p>

        <h2 id="vlcTips">To-Do After Installing VLC</h2>
        <p>
          Share more VLC tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h4 id="vlcT1">Download Subtitles from opensubtitles.org with VLSUB</h4>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://github.com/exebetche/vlsub"><img src="multimedia/multimedia/icons/Content/website.png" alt="Official Website" /> https://github.com/exebetche/vlsub</a>
          </div>
        </div>
        <p>
          1. VLSUB comes with VLC by default if you followed the installation method above. After you play something, go to “View &gt; Download Subtitles”.
          <br>
          <img class="tutorialImages" src="multimedia/images/VLC/VLC_1.png" alt="Download Subtitiles With VLSUB on VLC" />
        </p>
        <p>
        2. Search for the subtitle and click on “Download selection”. The subtitle will be automatically downloaded.
          <br>
          <img class="tutorialImages" src="multimedia/images/VLC/VLC_2.png" alt="Download Subtitiles With VLSUB on VLC" />
        </p>

        <h2 id="troubleshootingVLC">Troubleshooting VLC</h2>
        <p>
          Privoox has not encountered any problems while using VLC. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="kodi">Kodi</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://kodi.tv"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://kodi.tv</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#kodi"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Kodi Privux Tutorial" /> http://privoox.com/kodi</a>
          </div> -->
        </div>
        <p>
          "Kodi® (formerly known as XBMC™) is an award-winning free and open source (GPL) software media center for playing videos, music, pictures, games, and more. Kodi runs on Linux, OS X, Windows, iOS, and Android, featuring a 10-foot user interface for use
          with televisions and remote controls. It allows users to play and view most videos, music, podcasts, and other digital media files from local and network storage media and the internet."
        </p>
        <h2 id="installingKodi">Installing Kodi</h2>
        <p>
          Run the following commands to install Kodi:
        </p>
        <p class="codeContainer">
          <code>
            # sudo apt-get install software-properties-common
            <br>
            # sudo add-apt-repository ppa:team-xbmc/ppa
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install kodi
          </code>
        </p>

        <h2 id="kodiTips">To-Do After Installing Kodi</h2>
        <p>
          Share your Kodi tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>

        <h2 id="troubleshootingKodi">Troubleshooting Kodi</h2>
        <p>
          Privoox has not encountered any problems while using Kodi. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="minitube">Minitube</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://flavio.tordini.org/minitube"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://flavio.tordini.org/minitube</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#minitube"><img src="icons/Content/websiteTutorial.png" alt="Minitube Privux Tutorial" /> http://privoox.com/minitube</a>
          </div> -->
        </div>
        <p>
          "Watch YouTube videos in a new way: you type a keyword, Minitube gives you an endless video stream. Minitube is not about cloning the YouTube website, it aims to create a new TV-like experience"
        </p>
        <h2 id="installingMinitube">Installing Minitube</h2>
        <p>
          1. Click<a href="http://flavio.tordini.org/minitube"> here </a>to Download Minitube.
        </p>
        <p>
          2. Double click the downloaded “deb” file and click “install”.
        </p>

        <h2 id="minitubeTips">To-Do After Installing Minitube</h2>
        <p>
          Share your Minitube tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>

        <h2 id="troubleshootingMinitube">Troubleshooting Minitube</h2>
        <p>
          Privoox has not encountered any problems while using Minitube. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
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
