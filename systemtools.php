<!DOCTYPE html>
<html lang="en">

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox | The Best Linux System Tools</title>
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
        <a class="gparted" href="#gparted">
          <div class="col-xs-12 col-sm-3">
            <img alt="GParted" src="multimedia/apps/gparted.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span class="apps-text">GParted<br>Partition Editor</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="unetbootin" href="#unetbootin">
          <div class="col-xs-12 col-sm-3">
            <img alt="UNetbootin" src="multimedia/apps/unetbootin.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span class="apps-text">UNetbootin<br>Bootable Live USB Creator</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="app row">
        <a class="systemback" href="#systemback">
          <div class="col-xs-12 col-sm-3">
            <img alt="Systemback" src="multimedia/apps/systemback.png" />
          </div>
          <div class="col-xs-12 col-sm-9">
            <span class="apps-text">Systemback<br>System Restore</span>
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
          <li><a href="#gparted">GParted</a>
            <br>
            <ul start="number">
              <li><a href="#installingGParted">Installing GParted</a></li>
              <li><a href="#gpartedTips">To-Do After Installing GParted</a></li>
              <li><a href="#troubleshootingGParted">Troubleshooting GParted</a></li>
            </ul>
          </li>
          <li><a href="#unetbootin">UNetbootin</a>
            <br>
            <ul start="number">
              <li><a href="#installingUNetbootin">Installing UNetbootin</a></li>
              <li><a href="#unetbootinTips">To-Do After Installing UNetbootin</a></li>
              <li><a href="#troubleshootingUNetbootin">Troubleshooting UNetbootin</a>
                <ul>
                  <li><a href="#unetbootinTS1">UNetbootin Doesn't Recognize My USB Partition</a></li>
                  <li><a href="#unetbootinTS2">Persistence in UEFI Mode</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#systemback">Systemback</a>
            <br>
            <ul start="number">
              <li><a href="#installingSystemback">Installing Systemback</a></li>
              <li><a href="#systembackTips">To-Do After Installing Systemback</a>
                <ul>
                  <li><a href="#systembackT1">Creating a New Restore Point</a></li>
                </ul>
              </li>
              <li><a href="#troubleshootingSystemback">Troubleshooting Systemback</a></li>
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
        <h1 id="gparted">GParted</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="http://gparted.org"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://gparted.org</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#UNetbootin"><img src="multimedia/icons/Content/websiteTutorial.png" alt="GParted Privux Tutorial" /> http://privoox.com/gparted</a>
          </div> -->
        </div>
        <p>
          "GParted is a free partition editor for graphically managing your disk partitions."
        </p>
        <h2 id="installingGParted">Installing GParted</h2>
        <p>
          An old version of GParted is available through the official Ubuntu repository and you may simply install it through your distribution’s software center. However, you can install the latest version by adding Privoox PPA:
        </p>
        <p class="codeContainer">
          <code># sudo add-apt-repository ppa:privoox/privoox
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install gparted
          </code>
        </p>
        <h2 id="gpartedTips">To-Do After Installing GParted</h2>
        <p>
          Share your GParted tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h2 id="troubleshootingGParted">Troubleshooting GParted</h2>
        <p>
          Privoox has not encountered any problems while using GParted. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

        <h1 id="unetbootin">UNetbootin</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://unetbootin.github.io/"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://unetbootin.github.io</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#UNetbootin"><img src="multimedia/icons/Content/websiteTutorial.png" alt="UNetbootin Privux Tutorial" /> http://privoox.com/unetbootin</a>
          </div> -->
        </div>
        <p>
          "UNetbootin allows you to create bootable Live USB drives for Ubuntu and other Linux distributions without burning a CD."
        </p>
        <h2 id="installingUNetbootin">Installing UNetbootin</h2>
        <p>
          1. Run the following commands to add the repository and install UNetbootin:
        </p>
        <p class="codeContainer">
          <code># sudo add-apt-repository ppa:gezakovacs/ppa
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install unetbootin
          </code>
        </p>
        <p>
          2. Run UNetbootin. If it doesn’t ask for root access and you get an error instead, then run the following command to run it as root:
        </p>
        <p class="codeContainer">
          <code>
            sudo /usr/bin/unetbootin
          </code>
        </p>
        <h2 id="unetbootinTips">To-Do After Installing UNetbootin</h2>
        <p>
          Share your UNetbootin tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h2 id="troubleshootingUNetbootin">Troubleshooting UNetbootin</h2>
        <p>
          Privoox has encountered the following problems while using UNetbootin. Please help us complete this list in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>
        <h4 id="unetbootinTS1">UNetbootin Doesn't Recognize My USB Partition</h4>
        <p>
          If your USB flash disk partition is not listed, then use the command below to force UNetbootin to use it. Replace “X” with the appropriate partition value of your flash disk e.g. sdb1. You may check that using e.g.<a href="#gparted"> GParted</a>:
        </p>
        <p class="codeContainer">
          <code>
            unetbootin installtype=USB targetdrive=/dev/sdX
          </code>
        </p>
        <h4 id="unetbootinTS2">Persistence in UEFI Mode</h4>
        <p>
          Open /boot/grub/grub.cfg located in your flash disk. Add the word persistence as shown in the photo like:
        </p>
        <p class="codeContainer">
          <code>
            linux	/casper/vmlinuz <strong>persistent</strong> file=/cdrom/preseed/ubuntu.seed boot=casper
          </code>
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="Moo:" />When you create a bootable USB flash disk using UNetbootin, the persistence storage might not work when you boot in with your flash disk in UEFI mode. After applying the fix, your live system should be able to save changes across reboots. The yellow highlighted sections below are the grub options that you get when booting your flash disk. You can add “persistent” to all the options like below or only to the ones you want.
          <br>
          <img class="tutorialImages" src="multimedia/images/UNetbootin/unetbootin-1.png" alt="Fixing Persistence in UEFI Mode" />
        </p>
        <p>
          Courtesy of <a href="http://askubuntu.com/questions/609329/how-do-you-use-persistence-in-uefi-mode#612797"> Ask Ubuntu</a>
        </p>

        <h1 id="systemback">Systemback</h1>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://launchpad.net/systemback"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://launchpad.net/systemback</a>
          </div>
          <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#UNetbootin"><img src="multimedia/icons/Content/websiteTutorial.png" alt="Systemback Privux Tutorial" /> http://privoox.com/systemback</a>
          </div> -->
        </div>
        <p>
          "Systemback makes it easy to create backups of the system and the users configuration files."
        </p>
        <h2 id="installingSystemback">Installing Systemback</h2>
        <p>
          Run the following commands to add the repository and install Systemback:
        </p>
        <p class="codeContainer">
          <code>
            # sudo add-apt-repository ppa:gezakovacs/ppa
            <br>
            # sudo apt-get update
            <br>
            # sudo apt-get install unetbootin
          </code>
        </p>
        <h2 id="systembackTips">To-Do After Installing Systemback</h2>
        <p>
          Share more Systemback tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>
        <h4 id="systembackT1">Creating a New Restore Point</h4>
        <p>
          Choose your storage directory to save your restore points. Then click on “Create New”. That’s it. A full restore point will be created and added to the “Restore Points” section:
        </p>
        <p>
          <img src="icons/Content/info.png" alt="Moo:" />You can restore your system to a previous state by clicking on the check box next to a restore point then choosing “System Restore” from the “Function menu”.
          <br>
          There are many other very useful features such as “Live system create” which creates a love image of your system.
          <br>
          <img class="tutorialImages" src="multimedia/images/Systemback/systemback_1.png" alt="Creating a Restore Point With Systemback" />
        </p>

        <h2 id="troubleshootingSystemback">Troubleshooting Systemback</h2>
        <p>
          Privoox has not encountered any problems while using Systemback. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
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
