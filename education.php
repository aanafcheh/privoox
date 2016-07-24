<!DOCTYPE html>
<html lang="en">

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox | The Best Linux Education Tools</title>
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

  <fieldset class="apps">
    <legend>App List</legend>
    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="anki" href="#anki">
          <div class="col-xs-12 col-sm-3">
            <img alt="Anki" src="multimedia/apps/anki.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Anki<br>Flashcard Application</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="goldendict" href="#goldendict">
          <div class="col-xs-12 col-sm-3">
            <img alt="GoldenDict" src="multimedia/apps/goldendict.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>GoldenDict<br>Dictionary</span>
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
          <li><a href="#anki">Anki</a>
            <br>
            <ul start="number">
              <li><a href="#installingAnki">Installing Anki</a></li>
              <li><a href="#ankiTips">To-Do After Installing Anki</a>
                <ul>
                  <li><a href="#ankiT1">Useful Anki Addons</a></li>
                  <li><a href="#ankiT2">Installing Anki Add-ons</a></li>
                </ul>
              </li>
              <li><a href="#troubleshootingAnki">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#goldendict">GoldenDict</a>
            <br>
            <ul start="number">
              <li><a href="#installingGoldenDict">Installing GoldenDict</a></li>
              <li><a href="#goldendictTips">To-Do After Installing GoldenDict</a>
                <ul>
                  <li><a href="#goldendictT1">Installing Third-Party Dictionaries</a></li>
                </ul>
              </li>
              <li><a href="#troubleshootingGoldenDict">Troubleshooting</a></li>
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
        <h1 id="anki">Anki</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://ankisrs.net"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://ankisrs.net</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#anki"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Anki Privux Tutorial" /> http://privoox.com/anki</a>
          </div> -->
        </div>
        <p>
          "Anki is a program which makes remembering things easy. Because it's a lot more efficient than traditional study methods, you can either greatly decrease your time spent studying, or greatly increase the amount you learn. Anyone who needs to remember
          things in their daily life can benefit from Anki. Since it is content-agnostic and supports images, audio, videos and scientific markup (via LaTeX), the possibilities are endless."
        </p>
        <h2 id="installingAnki">Installing Anki</h2>
        <p>
          1. Click<a href="http://ankisrs.net/#download"> here </a>to Download Anki.
        </p>
        <p>
          2. Double click the downloaded “deb” file and click “install”.
        </p>

        <h2 id="ankiTips">To-Do After Installing Anki</h2>
        <p>
          Share more Anki tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h4 id="ankiT1">Useful Anki Add-ons</h4>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://ankiweb.net/shared/addons"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://ankiweb.net/shared/addons</a>
          </div>
        </div>
        <p>
          <ol>
            <li><a href="https://ankiweb.net/shared/info/2250637899"> Download From Quizlet Image Import Supported</a></li>
            <li><a href="https://ankiweb.net/shared/info/1959202519"> Memrise Course Importer</a></li>
          </ol>
        </p>
        <h4 id="ankiT2">Installing Anki Add-ons</h4>
        <p>
          1. Go to the add-on’s webpage and copy the add-on code:
          <br>
          <img class="tutorialImages" src="multimedia/images/Anki/Anki_1.png" alt="Installing Anki Add-ons" />
        </p>
        <p>
          2. Run Anki, go to “Tools &gt; Add-ons &gt; Browse and Install...” . Paste the code in the “code” textbox and click on “OK”:
          <br>
          <img class="tutorialImages" src="multimedia/images/Anki/Anki_2.png" alt="Installing Anki Add-ons" />
        </p>
        <p>
          3. Anki will download the addon and ask you to restart it. So, close and run Anki. You will find your addon in the “Tools” menu:
          <br>
          <img class="tutorialImages" src="multimedia/images/Anki/Anki_3.png" alt="Installing Anki Add-ons" />
        </p>
        <p>
          4. If you would like to remove any addon, you can navigate to “Tools &gt; Add-ons &gt; addon-name &gt; delete”
        </p>

        <h2 id="troubleshootingAnki">Troubleshooting Anki</h2>
        <p>
          Privoox has not encountered any problems while using Anki. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="goldendict">GoldenDict</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://goldendict.org"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://goldendict.org</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#goldendict"><img src="multimedia/icons/Content/websiteTutorial.png" alt="GoldenDict Privux Tutorial" /> http://privoox.com/goldendict</a>
          </div> -->
        </div>
        <p>
          "A feature-rich dictionary lookup program, supporting multiple dictionary formats (StarDict/Babylon/Lingvo/Dictd) and online dictionaries, featuring perfect article rendering with the complete markup, illustrations and other content retained, and allowing
          you to type in words without any accents or correct case."
        </p>
        <h2 id="installingGoldenDict">Installing GoldenDict</h2>
        <p>
          Run the following commands to install GoldenDict:
        </p>
        <p class="codeContainer">
          <code>
            # sudo apt-get update
            <br>
            # sudo apt-get install goldendict
          </code>
        </p>

        <h2 id="goldendictTips">To-Do After Installing GoldenDict</h2>
        <p>
          Share your GoldenDict tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h4 id="goldendictT1">Installing Third-Party Dictionaries</h4>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://goldendict.org/dictionaries.php"><img src="multimedia/multimedia/icons/Content/website.png" alt="Official Website" /> http://goldendict.org/dictionaries.php</a>
          </div>
        </div>
        <p>
        1. Many types of dictionaries are supported by GoldenDict. For example, there is a huge list of free Babylon “bgl” dictionaries<a href="http://www.babylon-software.com/free-dictionaries"> here</a>.
        </p>
        <p>
        2. Download a dictionary file and put them in a specific folder:
        <br>
        <img class="tutorialImages" src="multimedia/images/GoldenDict/GoldenDict_1.png" alt="Installing GoldenDict Dictionaries" />
        </p>
        <p>
        3. Run GoldenDict, go to “Edit &gt; Dictionaries...”, add the directory where you saved your dictionary files then click on “OK”:
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="Moo:" />When you add more dictionaries in the same directory, just come back to the same settings again and click on “Rescan now” then click on “OK”.
          <br>
          <img class="tutorialImages" src="multimedia/images/GoldenDict/GoldenDict_2.png" alt="Installing GoldenDict Dictionaries" />
        </p>
        <p>
        4. You can use your dictionary now. You may disable or enable it as it is indicated by the red arrow below:
        <br>
        <img class="tutorialImages" src="multimedia/images/GoldenDict/GoldenDict_3.png" alt="Installing GoldenDict Dictionaries" />
        </p>

        <h2 id="troubleshootingGoldenDict">Troubleshooting GoldenDict</h2>
        <p>
          Privoox has not encountered any problems while using GoldenDict. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
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
