<!DOCTYPE html>
<html lang="en">

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox | The Best Linux Internet Tools</title>
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
        <a class="firefox" href="#firefox">
          <div class="col-xs-12 col-sm-3">
            <img alt="Firefox" src="multimedia/apps/firefox.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Firefox<br>Web Browser</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="filezilla" href="#filezilla">
          <div class="col-xs-12 col-sm-3">
            <img alt="FileZilla" src="multimedia/apps/filezilla.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>FileZilla<br>FTP Application</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="geary" href="#geary">
          <div class="col-xs-12 col-sm-3">
            <img alt="Geary" src="multimedia/apps/geary.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span>Geary<br>Email Client</span>
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
          <li><a href="#firefox">Firefox</a>
            <br>
            <ul start="number">
              <li><a href="#installingFirefox">Installing Firefox</a></li>
              <li><a href="#firefoxTips">To-Do After Installing Firefox</a>
                <ul>
                  <li><a href="#firefoxT1">Firefox Privacy Settings</a></li>
                  <li><a href="#firefoxT2">Install the Best Privacy Firefox Extensions</a></li>
                </ul>
              </li>
              <li><a href="#troubleshootingFirefox">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#filezilla">FileZilla</a>
            <br>
            <ul start="number">
              <li><a href="#installingFileZilla">Installing FileZilla</a>
                <ul>
                  <li><a href="#filezillaDependencies">FileZilla Dependencies</a></li>
                  <li><a href="#installingLibfilezilla">Compiling and Installing libfilezilla</a></li>
                  <li><a href="#installingWxWidgets">Compiling and Installing wxWidgets</a></li>
                  <li><a href="#installingNettle">Compiling and Installing Nettle</a></li>
                  <li><a href="#installingFileZillaSource">Compiling and Installing FileZilla</a></li>
                </ul>
              </li>
              <li><a href="#filezillaTips">To-Do After Installing FileZilla</a></li>
              <li><a href="#troubleshootingFileZilla">Troubleshooting</a></li>
            </ul>
          </li>
          <li><a href="#geary">Geary</a>
            <br>
            <ul start="number">
              <li><a href="#installingGeary">Installing Geary</a></li>
              <li><a href="#gearyTips">To-Do After Installing Geary</a></li>
              <li><a href="#troubleshootingGeary">Troubleshooting</a></li>
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
        <h1 id="firefox">Firefox</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://www.mozilla.org/firefox"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://www.mozilla.org/firefox</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#firefox"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Firefox Privux Tutorial" /> http://privoox.com/firefox</a>
          </div> -->
        </div>
        <p>
          "Mozilla Firefox, a free and open-source Web browser. Firefox is created by a global non-profit dedicated to putting individuals in control online"
        </p>
        <h2 id="installingFirefox">Installing Firefox</h2>
        <p>
          Run the following commands to install Firefox:
        </p>
        <p class="codeContainer">
          <code>
            # sudo apt-get update
            <br>
            # sudo apt-get install firefox
          </code>
        </p>
        <h2 id="firefoxTips">To-Do After Installing Firefox</h2>
        <p>
          Share more Firefox tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h4 id="firefoxT1">Firefox Privacy Settings</h4>
        <p>
          1. Disable tools you do not use. Type “about:config” in the address bar and press “Enter”. Be very careful when editing things here. Search the preference names below. Double click them to change their value to “False”:
        </p>
        <p>
          - Disable Hello: "loop.enabled"
          <br> - Disable Pocket: "browser.pocket.enabled"
          <br> - Disable Reader+: "reader.parse-on-load.enabled"
        </p>
        <p>
          2. Go to Firefox “Preferences”. Make the changes below in each section. Remember to make the changes based on your own needs:
        </p>
        <p>
          <strong>General</strong>
          <br> Homepage: https://duckduckgo.com
          <br>
          <strong>Search</strong>
          <br> Default Search Engine: DuckDuckGo
          <br>
          <span style="color:red" class="glyphicon glyphicon-remove"></span> Provide search suggestions
          <br>
          <strong>Content</strong>
          <br>
          <span style="color:green" class="glyphicon glyphicon-ok"></span> Block pop-up windows
          <br>
          <strong>Privacy</strong>
          <br> Configure your settings as in the image below then click on settings as it is indicated:
          <br>
          <img class="tutorialImages" src="multimedia/images/Firefox/firefox_1.png" alt="Firefox Privacy Settings" />
          <br>
          <img class="tutorialImages" src="multimedia/images/Firefox/firefox_2.png" alt="Firefox Privacy Settings" />
          <br>
          <strong>Security</strong>
          <br>
          <span style="color:green" class="glyphicon glyphicon-ok"></span> Warn me when sites try to install add-ons
          <br>
          <span style="color:green" class="glyphicon glyphicon-ok"></span> Use a master password
          <br>
          <strong>Advanced</strong>
          <br> General: <span style="color:red" class="glyphicon glyphicon-remove"></span> Check my spelling as I type
          <br> Data Choices: <span style="color:red" class="glyphicon glyphicon-remove"></span> Enable Firefox Health Report <span style="color:red" class="glyphicon glyphicon-remove"></span> Enable Crash Reporter
        </p>
        <h4 id="firefoxT2">Install the Best Privacy Firefox Extensions</h4>
        <p>
          <ol>
            <li><a href="https://addons.mozilla.org/en-US/firefox/addon/betterprivacy"> BetterPrivacy</a></li>
            <li><a href="https://addons.mozilla.org/en-US/firefox/addon/https-everywhere"> HTTPS-Everywhere</a></li>
            <li><a href="https://addons.mozilla.org/en-US/firefox/addon/master-password"> Master Password+</a></li>
            <li><a href="https://addons.mozilla.org/en-US/firefox/addon/noscript"> NoScript</a></li>
            <li><a href="https://addons.mozilla.org/en-US/firefox/addon/ublock-origin"> uBlock Origin</a></li>
            <li><a href="https://addons.mozilla.org/en-US/firefox/addon/random-agent-spoofer"> Random Agent Spoofer</a></li>
            <li><a href="https://addons.mozilla.org/en-US/firefox/addon/bloody-vikings"> Bloody Vikings</a></li>
          </ol>
        </p>
        <h2 id="troubleshootingFirefox">Troubleshooting Firefox</h2>
        <p>
          Privoox has not encountered any problems while using Firefox. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="filezilla">FileZilla</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://filezilla-project.org"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://filezilla-project.org</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#fileZilla"><img src="multimedia/icons/Content/websiteTutorial.png" alt="FileZilla Privux Tutorial" /> http://privoox.com/filezilla</a>
          </div> -->
        </div>
        <p>
          "FileZilla Client is a free, open source FTP client. It supports FTP, SFTP, and FTPS (FTP over SSL/TLS). The client is available under many platforms, binaries for Windows, Linux and Mac OS X are provided. "
        </p>
        <h2 id="installingFileZilla">Installing FileZilla</h2>
        <p>
          FileZilla’s package in the official Ubuntu 14.04 repository is a little outdated. If you would like to use the latest versions, follow the steps below:
        </p>
        <h4 id="filezillaDependencies">FileZilla Dependencies</h4>
        <p>
          1. FileZilla and its other components such as libfilezilla need gcc-4.9 or newer to to compile. Run this command to check your gcc version.<strong> If your gcc version is at least 4.9 then skip to step 3:</strong>
        </p>
        <p class="codeContainer">
          <code>
            gcc -v
          </code>
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="Moo:" />In the last line of the output you would see a line like:"gcc version 4.8.5 (Ubuntu 4.8.5-2ubuntu1~14.04.1)". So, my gcc is old and I would need to update to a newer version.
        </p>
        <p>
          2. Run following commands to add the repository and install gcc5:
        </p>
        <p class="codeContainer">
          <code>
            # sudo add-apt-repository ppa:ubuntu-toolchain-r/test
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install gcc-5 g++-5
          </code>
        </p>
        <p>
          3. Install FileZilla’s dependencies:
        </p>
        <p class="codeContainer">
          <code>
            sudo apt-get install gettext libdbus-c++-dev libperl-dev libtool libsqlite3-dev libdbus-1-dev libgnutls28-dev libgtk2.0-dev checkinstall autoconf
          </code>
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="Moo:" />In addition to the dependencies above, FileZilla also requires “libfilezilla”, “wxWidgets” and “Nettle”. See the “INSTALL” file in FileZilla’s source code for more details.
        </p>
        <h4 id="installingLibfilezilla">Compiling and Installing  libfilezilla</h4>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://lib.filezilla-project.org"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://lib.filezilla-project.org</a>
          </div>
        </div>
        <p>
          “libfilezilla is a small and modern C++ library, offering some basic functionality to build high-performing, platform-independent programs”
        </p>
        <p>
          1. Click<a href="https://lib.filezilla-project.org/download.php"> here </a>to Download libfilezilla’s source code.
        </p>
        <p>
          2. Extract the tarball in your “Downloads” directory.
        </p>
        <p>
          3. Prepare the compiling environment:
        </p>
        <p class="codeContainer">
          <code>
            # cd ~/Downloads/libfilezilla-0.5.1/
            <br>
            # mkdir compile
            <br>
            # cd compile
          </code>
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="Moo:" />The above commands open libfilezilla’s directory, create and open a folder named “compile”.
        </p>
        <p>
          4. Start compiling:
        </p>
        <p class="codeContainer">
          <code>
            # ../configure CXX='g++-5'
            <br>
            # make
            <br>
            # sudo checkinstall
          </code>
        </p>
        <p>
          5. If libfilezilla was installed successfully, you can find a “deb” file in the “compile” directory that you created. Save it so you wouldn’t need to recompile libfilezilla all over again just in case.
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="Moo:" />Moo: when you run the “make” command, pay close attention and make sure the source compiles successfully with no errors. Then, continue with “checkinstall”. You are recommended to fill in the info
          such as a package description, version etc. However, you may proceed with the defaults by pressing “Enter”.
        </p>
        <p>
          Courtesy of <a href="http://stackoverflow.com/questions/35723718/configure-needs-c14-support-but-gcc-v-4-9-3"> Stack Overflow</a>
        </p>
        <h4 id="installingWxWidgets">Compiling and Installing  wxWidgets</h4>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://wxwidgets.org"><img src="multimedia/multimedia/icons/Content/website.png" alt="Official Website" /> http://wxwidgets.org</a>
          </div>
        </div>
        <p>
          “wxWidgets is a C++ library that lets developers create applications for Windows, Mac OS X, Linux and other platforms with a single code base. It has popular language bindings for Python, Perl, Ruby and many other languages, and unlike other cross-platform
          toolkits, wxWidgets gives applications a truly native look and feel because it uses the platform's native API rather than emulating the GUI.”
        </p>
        <p>
          1. Click<a href="http://wxwidgets.org/downloads"> here </a>to Download wxWidgets’s stable release source code.
        </p>
        <p>
          2. Extract the tarball in your “Downloads” directory.
        </p>
        <p>
          3. Prepare the compiling environment:
        </p>
        <p class="codeContainer">
          <code>
            # cd ~/Downloads/wxWidgets-3.0.2/
            <br>
            # mkdir compile
            <br>
            # cd compile
          </code>
        </p>
        <p>
          4. Start compiling:
        </p>
        <p class="codeContainer">
          <code>
            # ../configure --with-gtk=2
            <br>
            # make
            <br>
            # sudo checkinstall
            <br>
            # sudo ldconfig
          </code>
        </p>
        <p>
          5. If wxWidgets was installed successfully, you can find a “deb” file in the “compile” directory that you created. Save it so you wouldn’t need to recompile wxWidgets all over again just in case.
        </p>
        <h4 id="installingNettle">Compiling and Installing  Nettle</h4>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://www.lysator.liu.se/~nisse/nettle"><img src="multimedia/multimedia/icons/Content/website.png" alt="Official Website" /> http://www.lysator.liu.se/~nisse/nettle</a>
          </div>
        </div>
        <p>
          “wxWidgets is a C++ library that lets developers create applications for Windows, Mac OS X, Linux and other platforms with a single code base. It has popular language bindings for Python, Perl, Ruby and many other languages, and unlike other cross-platform
          toolkits, wxWidgets gives applications a truly native look and feel because it uses the platform's native API rather than emulating the GUI.”
        </p>
        <p>
          1. Click<a href="https://ftp.gnu.org/gnu/nettle"> here </a>to Download Nettle’s source code.
        </p>
        <p>
          2. Extract the tarball in your “Downloads” directory.
        </p>
        <p>
          3. Prepare the compiling environment:
        </p>
        <p class="codeContainer">
          <code>
            # cd ~/Downloads/nettle-3.2/
            <br>
            # mkdir compile
            <br>
            # cd compile
          </code>
        </p>
        <p>
          4. Start compiling:
        </p>
        <p class="codeContainer">
          <code>
            # ../configure
            <br>
            # make
            <br>
            # sudo checkinstall
          </code>
        </p>
        <p>
          5. If Nettle was installed successfully, you can find a “deb” file in the “compile” directory that you created. Save it so you wouldn’t need to recompile Nettle all over again just in case.
        </p>
        <h4 id="installingFileZillaSource">Compiling and Installing  FileZilla</h4>
        <p>
          Now, if you successfully installed the dependencies above, then you should be able to compile FileZilla successfully as well. Let’s do it:
        </p>
        <p>
          1. Click<a href="https://filezilla-project.org/download.php?show_all=1"> here </a>to Download Filezilla’s source code.
        </p>
        <p>
          2. Extract the tarball in your “Downloads” directory.
        </p>
        <p>
          3. Prepare the compiling environment:
        </p>
        <p class="codeContainer">
          <code>
            # cd ~/Downloads/filezilla-3.17.0.1/
            <br>
            # mkdir compile
            <br>
            # cd compile
          </code>
        </p>
        <p>
          4. Start compiling:
        </p>
        <p class="codeContainer">
          <code>
            # ../configure --with-pugixml=builtin
            <br>
            # make
            <br>
            # sudo checkinstall
          </code>
        </p>
        <p>
          5. If FileZilla was installed successfully, you can find a “deb” file in the “compile” directory that you created. Save it so you wouldn’t need to recompile FileZilla all over again just in case.
        </p>

        <h2 id="filezillaTips">To-Do After Installing FileZilla</h2>
        <p>
          Share your FileZilla tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>

        <h2 id="troubleshootingFileZilla">Troubleshooting FileZilla</h2>
        <p>
          Privoox has not encountered any problems while using FileZilla. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="geary">Geary</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://wiki.gnome.org/Apps/Geary"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://wiki.gnome.org/Apps/Geary</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#geary"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Okular Geary Tutorial" /> http://privoox.com/geary</a>
          </div> -->
        </div>
        <p>
          "Geary is a lightweight email program designed around conversations and built for the GNOME desktop. It's designed to let you read your email quickly and effortlessly. Its interface is based on conversations, so you can easily read an entire discussion
          without having to click from message to message."
        </p>
        <h2 id="installingGeary">Installing Geary</h2>
        <p>
          If you're not using Elementary OS, run the following commands to add the repository and install Geary:
        </p>
        <p class="codeContainer">
          <code>
            # sudo add-apt-repository ppa:yorba/ppa
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install geary
          </code>
        </p>

        <h2 id="gearyTips">To-Do After Installing Geary</h2>
        <p>
          Share your Geary tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>

        <h2 id="troubleshootingGeary">Troubleshooting Geary</h2>
        <p>
          Privoox has not encountered any problems while using Geary. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
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
