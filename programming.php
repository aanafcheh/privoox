<!DOCTYPE html>
<html lang="en">

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox | The Best Linux Programming Tools</title>
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
        <a class="atom" href="#atom">
          <div class="col-xs-12 col-sm-3">
            <img alt="Atom" src="multimedia/apps/atom.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Atom<br>Text Editor</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="geany" href="#geany">
          <div class="col-xs-12 col-sm-3">
            <img alt="Geany" src="multimedia/apps/geany.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Geany<br>Text Editor/IDE</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="pencil" href="#pencil">
          <div class="col-xs-12 col-sm-3">
            <img alt="Pencil" src="multimedia/apps/pencil.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Pencil<br>Prototyping Application</span>
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
          <li><a href="#atom">Atom</a>
            <br>
            <ul start="number">
              <li><a href="#installingAtom">Installing Atom</a></li>
              <li><a href="#atomTips">To-Do After Installing Atom</a>
                <ul>
                  <li><a href="#atomT1">Change Atom’s Look</a></li>
                  <li><a href="#atomT2">Useful Atom Extensions</a></li>
                </ul>
              </li>
              <li><a href="#troubleshootingAtom">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#geany">Geany</a>
            <br>
            <ul start="number">
              <li><a href="#installingGeany">Installing Geany</a></li>
              <li><a href="#geanyTips">To-Do After Installing Geany</a>
                <ul>
                <li><a href="#geanyT1">Enable Geany Plugins</a></li>
                <li><a href="#geanyT2">Install New Geany Plugins</a></li>
                </ul>
              </li>
              <li><a href="#troubleshootingGeany">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#pencil">Pencil</a>
            <br>
            <ul start="number">
              <li><a href="#installingPencil">Installing Pencil</a></li>
              <li><a href="#pencilTips">To-Do After Installing Pencil</a></li>
              <li><a href="#troubleshootingPencil">Troubleshooting</a></li>
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
        <h1 id="atom">Atom</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://atom.io"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://atom.io</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#atom"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Atom Privux Tutorial" /> http://privoox.com/atom</a>
          </div> -->
        </div>
        <p>
          "Atom is a text editor that's modern, approachable, yet hackable to the core—a tool you can customize to do anything but also use productively without ever touching a config file."
        </p>
        <h2 id="installingAtom">Installing Atom</h2>
        <p>
          1. Click<a href="https://atom.io/download/deb"> here </a>to Download Atom.
        </p>
        <p>
          2. Double click the downloaded “deb” file and click “install”.
        </p>

        <h2 id="atomTips">To-Do After Installing Atom</h2>
        <p>
          Share more Atom tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h4 id="atomT1">Change Atom’s Look</h4>
        <p>
          1. Go to “Edit &#62; Preferences &#62; Install” or press “ctrl + ,” search and install your favorite themes and extentions . A list of popular extensions is down below.
        </p>
        <p>
          2. Change your themes by going to “Edit &#62; Preferences &#62; Themes".
        </p>
        <h4 id="atomT2">Useful Atom Extensions</h4>
        <p>
          <ol>
            <li><a href="https://atom.io/packages/emmet"> Emmet</a>
              <br>“the essential tool for web developers.”</li>
            <li><a href="https://atom.io/packages/atom-html-preview"> Atom-HTML-Preview</a>
              <br>“A live preview tool for Atom Editor.”</li>
            <li><a href="https://atom.io/packages/atom-beautify"> Atom-Beautify</a>
              <br>“Beautify HTML, CSS, JavaScript, PHP, Python, Ruby, Java, C, C++, C#, Objective-C, CoffeeScript, TypeScript, Coldfusion, and SQL”</li>
            <li><a href="https://atom.io/packages/atom-typescript"> Atom-Typescript</a>
              <br>“The only TypeScript plugin you will ever need.”</li>
            <li><a href="https://atom.io/packages/color-picker"> Color-Picker</a>
              <br>“Right click or press CMD-SHIFT-C/CTRL-ALT-C to open it.”</li>
            <li><a href="https://atom.io/packages/autocomplete-paths"> Autocomplete-Paths</a>
              <br>“Adds path autocompletion to autocomplete+”</li>
            <li><a href="https://atom.io/packages/file-icons"> File-Icons</a>
              <br>“Assign file extension icons and colours for improved visual grepping”</li>
            <li><a href="https://atom.io/packages/highlight-selected"> Highlight-Selected</a>
              <br>“Highlights the current word selected when double clicking”</li>
            <li><a href="https://atom.io/packages/javascript-snippets"> Javascript-Snippets</a>
              <br>“JavaScript &amp; NodeJS Snippets for Atom”</li>
            <li><a href="https://atom.io/packages/linter"> Linter</a>
              <br>“A Base Linter with Cow Powers”</li>
            <li><a href="https://atom.io/packages/linter-jshint"> Linter-JShint</a>
              <br>“Linter plugin for JavaScript, using jshint”</li>
            <li><a href="https://atom.io/packages/linter-csslint"> Linter-CSSlint </a>
              <br>“Lint CSS on the fly, using csslint”</li>
            <li><a href="https://atom.io/packages/linter-htmlhint"> Linter-HTMLhint</a>
              <br>“A plugin for Atom Linter providing an interface to HTMLHint.”</li>
            <li><a href="https://atom.io/packages/pigments"> Pigments</a>
              <br>“A package to display colors in project and files”</li>
            <li><a href="https://atom.io/packages/todo-show"> Todo-Show</a>
              <br>“Finds all the TODOs, FIXMEs, CHANGEDs, etc. in your project.”</li>
          </ol>
        </p>

        <h2 id="troubleshootingAtom">Troubleshooting Atom</h2>
        <p>
          Privoox has not encountered any problems while using atom. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="geany">Geany</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://www.geany.org"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://www.geany.org</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#geany"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Geany Privux Tutorial" /> http://privoox.com/geany</a>
          </div> -->
        </div>
        <p>
          "Geany is a text editor using the GTK+ toolkit with basic features of an integrated development environment."
        </p>
        <h2 id="installingGeany">Installing Geany</h2>
        <p>
          Run the following commands to add the repository and install Geany:
        </p>
        <p class="codeContainer">
          <code>
            # sudo add-apt-repository ppa:geany-dev/ppa
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install geany
          </code>
        </p>

        <h2 id="geanyTips">To-Do After Installing Geany</h2>
        <p>
          Share more Geany tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h4 id="geanyT1">Enable Geany Plugins</h4>
        <p>
          Go to “Tools &gt; Plugin Manager” to see a list of available plugins. Click on the checkbox to enable any.
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="Moo:" />You need to enable, then select a plugin to be able to edit each plugin’s preferences or keybindings.
          <br>
          <img class="tutorialImages" src="multimedia/images/Geany/Geany_1.png" alt="Enable Geany Plugins" />
        </p>
        <h4 id="geanyT2">Install New Geany Plugins</h4>
        <div class="row appWebsiteAddress">
          <!-- <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://plugins.geany.org"><img src="multimedia/multimedia/icons/Content/website.png" alt="Official Website" /> http://plugins.geany.org</a>
          </div> -->
        </div>
        <p>
          1. You may install all geany plugins by running:
        </p>
        <p class="codeContainer">
          <code>
            sudo apt-get install geany-plugins
            </code>
        </p>
        <p>
          2. You can be selective as well:
        </p>
        <p class="codeContainer">
          <code>
            sudo apt-get install geany-plugin-<strong>pluginname</strong>
          </code>
        </p>

        <h2 id="troubleshootingGeany">Troubleshooting Geany</h2>
        <p>
          Privoox has not encountered any problems while using Geany. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="pencil">Pencil</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://pencil.evolus.vn"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://pencil.evolus.vn</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#pencil"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Pencil Privux Tutorial" /> http://privoox.com/pencil</a>
          </div> -->
        </div>
        <p>
          "Pencil is built for the purpose of providing a free and open-source GUI prototyping tool that people can easily install and use to create mockups in popular desktop platforms."
        </p>
        <h2 id="installingPencil">Installing Pencil</h2>
        <p>
          1. Click<a href="http://pencil.evolus.vn/Downloads.html"> here </a>to Download Pencil.
        </p>
        <p>
          2. Double click the downloaded “deb” file and click “install”.
        </p>

        <h2 id="pencilTips">To-Do After Installing Pencil</h2>
        <p>
          Share your Pencil tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>

        <h2 id="troubleshootingPencil">Troubleshooting Pencil</h2>
        <p>
          Privoox has not encountered any problems while using Pencil. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
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
