<!DOCTYPE html>
<html lang="en">

<head>
  <!-- These three lines must be included when using bootstrap -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Privoox | Best Linux Distributions</title>
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

  <!-- Table of content -->
  <div class="container-fluid">
    <fieldset class="content">
      <div class="text">
        <h1>Contents</h1>
        <ol>
          <li><a href="#distributionChoice">Choose a Distribution</a>
            <br>
            <ul start="number">
              <li><a href="#bootableUSB">Making a bootable USB flash disk</a></li>
              <li><a href="#installingElementaryOS">Installing Elementary OS</a></li>
            </ul>
          </li>
          <li><a href="#elementaryosTips">To-do after installing Elementary OS</a></li>
          <li><a href="#troubleshootingElementaryOS">Troubleshooting</a></li>
        </ol>
      </div>
    </fieldset>
  </div>

  <!-- Content -->
  <div class="container-fluid">
    <fieldset class="content-table">
      <div class="text">
        <h1 id="#distributionChoice">Choose a Distribution </h1>
        <div class="appWebsiteAddress">
          <a href="http://elementary.io"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> http://elementary.io</a>
        </div>
        <p>
          My favorite Linux distribution in which I believe has a big bright future is Elementary OS. It's simply great. I'm saying this from a home user's perspective. It's built upon the latest version of Ubuntu LTS and it runs on its own light-weight Pantheon
          desktop. The simplicity, design, great support and stability makes it a top-notch operating system for a home user. You can build a great productive stable Linux distribution with the tutorials here. You can use them on any Debian-based distribution.
          My distribution of choice is Elementary OS and you will find out why if you follow everything on Privoox.
        </p>

        <h2 id="bootableUSB">Making a bootable USB flash disk</h2>
        <div class="row appWebsiteAddress">
          <div class="col-xs-12 col-sm-12 col-md-6">
            <a href="https://unetbootin.github.io"><img src="multimedia/icons/Content/website.png" alt="Official Website" /> https://unetbootin.github.io</a>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-pull-2">
            <a href="#UNetbootin"><img src="multimedia/icons/Content/websiteTutorial.png" alt="UNetbootin Privoox Tutorial" /> http://Privoox.com/unetbootin</a>
          </div>
        </div>
        <p>
          The tutorial below is for Debian-based Linux distributions. If you want to make a bootable USB flash disk on Windows, Mac OS, or you would like to follow official tutorials, please visit Elementary OS’s
          <a href="https://elementary.io/docs/installation">Installation Tutorial page</a>.
        </p>
        <p>
          1. As it is recommended on Elementary OS’ website, you should use UNetbootin to do this. So, run the following commands to add the repository and install the latest version:
        </p>
        <p class="codeContainer">
          <code>#sudo add-apt-repository ppa:gezakovacs/ppa
            <br>
            #sudo apt-get update
            <br>
            #sudo apt-get install unetbootin
          </code>
        </p>
        <p>
          2. Run UNetbootin as root using the following commands:
        </p>
        <p class="codeContainer">
          <code>
            sudo /usr/bin/unetbootin
          </code>
        </p>
        <p>
          3. Choose “Diskimage” from the radio options. Choose Elementary OS’ ISO file. Assign 1048 MB or more for space to preserve files across reboots. This space is specially needed if you are intending to setup manual LVM encryption. Next choose “USB Drive”
          and the partition you would like to make bootable. Here I chose /dev/sdb1:
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="UNetbootin Help" />If your USB flash disk partition is not listed, check the <a href="#Troubleshooting">Troubleshooting</a> section of UNetbootin.
          <br>
          <img class="tutorialImages" src="multimedia/images/Installing Elemntary OS-Image 1.1.png" />
        </p>
        <p>
          4. Wait for the process to finish successfully. Now, boot in to your USB and choose to “Try Elementary OS”. One simple way to check if your persistence space is recognized and working is to install something or login to WiFi etc. then reboot and everything
          should still be there.
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="UNetbootin Help" />In case you are planning to boot in UEFI mode, then there is a high chance your persistence space will not be recognized. <a href="#Troubleshooting">Troubleshoot!</a>.
        </p>

        <h2 id="installingElemntaryOS">Installing Elemntary OS</h2>
        <p>
          1. Click on the installation icon:
          <br>
          <img style="background-size: cover;" class="tutorialImages" src="multimedia/images/Installing Elemntary OS-Image 1.2.png" alt="How to install Elementary OS" />
        </p>
        <p>
          2. Choose your preferred language and press continue:
          <br>
          <img class="tutorialImages" src="multimedia/images/Installing Elemntary OS-Image 1.3.png" alt="How to install Elementary OS" />
        </p>
        <p>
          3. If you have an Internet connection choose “Download updates while installing”. If you would like to install tools like “Ubuntu Restricted Extras” which includes Adobe Flash player, then choose “Install this third-party software.
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="How to install Elementary OS" />If you just want to install open-source tools. You may skip “Install this third-party software” option. You can survive with GStreamer plugins and html5. This may be a little
          uncomfortable when surfing the net as there is some websites that need plugins such as Adobe Flash Player. However, most websites support HTML5 and you’ll mostly be fine. If you are a Google fan, then Google Chrome will be just fine for you
          also as it naturally has Pepper Flash.
          <br>
          <img class="tutorialImages" src="multimedia/images/Installing Elemntary OS-Image 1.5.png" alt="How to install Elementary OS" />
        </p>
        <p>
          4. This is the partitioning section. So, please be careful and make sure you have a backup of your data just in case. I have chosen to encrypt my hard drive here. So, click the options as below and click on “Install Now”.
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="How to install Elementary OS" />Each partitioning method is described in each paragraph below. Go with the one you prefer the most.
        </p>
        <p>
          if you are not concerned about security and privacy and you do not have any sensitive data on your main hard disk. Then just simply go with the default options and only select “”Erase disk and install elementary”.
        </p>
        <p>
          If you are concerned about your information security and privacy. Then choose to “Erase disk and install elementary” + “Encrypt the new elementary installation for security” + Use LVM with the new elementary installation. You will be asked to enter a
          passphrase on each boot to decrypt your hard disk with this method.
        </p>
        <p>
          If you do not want to remove the data on your hard disk, then choose “Something else”. Here you can have full control on your partitions. If you need a reference, this section is described <a href="#encryptedInstallation">here</a>.
          <br>
          <img class="tutorialImages" src="multimedia/images/Installing Elemntary OS-Image 1.6.png" alt="How to install Elementary OS" />
        </p>
        <p>
          5. Enter a good long passphrase to encrypt your hard disk and click on “Install Now”. <strong>If you lose this key, then your data is lost as well. So, make 100% sure you can remember it.</strong>
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="How to install Elementary OS" />This is a security key which will be used later on each boot to decrypt your hard drive. There is an extra option to overwrite empty disk space for maximum security. However,
          if chosen, the process takes a long time. So, you better keep this unchecked unless you really need it.
          <br>
          <img class="tutorialImages" src="multimedia/images/Installing Elemntary OS-Image 1.7.png" alt="How to install Elementary OS" />
        </p>
        <p>
          6. You are asked to confirm writing the changes to the disk. Read it and make sure it is what you want. Click “Continue”.
          <br>
          <img class="tutorialImages" src="multimedia/images/Installing Elemntary OS-Image 1.8.png" alt="How to install Elementary OS" />
        </p>
        <p>
          7. The installation begins now. Set your correct location to get the right time-zone and other language settings. Click “Continue”.
          <br>
          <img class="tutorialImages" src="multimedia/images/Installing Elemntary OS-Image 1.9.png" alt="How to install Elementary OS" />
        </p>
        <p>
          8. Choose your keyboard layout. Click “Continue”.
          <br>
          <img class="tutorialImages" src="multimedia/images/Installing Elemntary OS-Image 1.10.png" alt="How to install Elementary OS" />
        </p>
        <p>
          9. Fill in the text fields as required. Choose a login password. For your security choose “Require my password to log in” and check “Encrypt my home folder”. Then click “Continue”.
        </p>
        <p>
          <img src="multimedia/icons/Content/info.png" alt="How to install Elementary OS" />There is an option called “Encrypt my home folder”. The home folder is where each user’s private files such as documents, configuration files etc are stored. In this case,
          as I picked “Privoox” as my username, then Privoox private data will be saved in a folder in the home directory. This encryption is totally different than the hard disk encryption. This is another option in case you do not wish to fully encrypt
          your hard disk. Also, this can be used as an additional layer of security. With this method, your home folder files are decrypted normally only when you log in with the same username and password. However, there is a way to decrypt them if you
          are logged in with a different user. At last, if you choose this option, system recovery will be a little difficult in cases when your system does not boot normally.
          <br>
          <img class="tutorialImages" src="multimedia/images/Installing Elemntary OS-Image 1.11.png" alt="How to install Elementary OS" />
        </p>
        <p>
          10. Congratulations! You just installed Elementary OS successfully. Remember to check the other tutorials which show you how to install the top open-source needed software on Elementary OS and have a perfect productive experience.
          <br>
          <!-- <img class="tutorialImages" src="multimedia/images/Installing Elemntary OS-Image 1.12.png" alt="How to install Elementary OS" /> -->
        </p>

        <h2 id="elementaryosTips">To-Do After Installing Elementary OS</h2>
        <p>
          Share your Elementary OS tips with the world in the<a href="wiki.html"> wiki</a>.
        </p>

        <h2 id="troubleshootingElementaryOS">Troubleshooting Elementary OS</h2>
        <p>
          Privoox has not encountered any problems while using Elementary OS. Please report your problems or solutions in the<a href="wiki.html"> wiki</a>. Let's work together to make Linux easy for everybody.
        </p>

      </div>
    </fieldset>
  </div>

  <!-- Alternatives -->
  <div class="appsSpacer"></div>
  <fieldset class="apps">
    <legend>Considerable Alternatives</legend>
    <!-- Alternative1 -->
    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="row">
        <a class="alternative1" href="http://www.ubuntu.com/">
          <div class="col-xs-12 col-sm-2">
            <img alt="Ubuntu" src="multimedia/icons/alternatives/ubuntu.png" />
          </div>
          <div class="col-xs-12 col-sm-6">
            <span class="apps-text">Ubuntu<br>Desktop</span>
          </div>
        </a>
      </div>
    </div>

    <!-- Alternative2 -->
    <div class="col-xs-4  col-sm-4 col-md-3 col-md-offset-1">
      <div class="row">
        <a class="alternative2" href="https://linuxmint.com/">
          <div class="col-xs-12 col-sm-2">
            <img alt="Linux Mint" src="multimedia/icons/alternatives/linuxmint.png" />
          </div>
          <div class="col-xs-12 col-sm-6">
            <span class="apps-text">Linux Mint<br>Desktop</span>
          </div>
        </a>
      </div>
    </div>

    <!-- Alternative3 -->
    <div class="col-xs-4 col-sm-4 col-md-3 col-md-offset-1">
      <div class="row">
        <a class="alternative3" href="https://www.debian.org/">
          <div class="col-xs-12 col-sm-2">
            <img alt="Debian" src="multimedia/icons/alternatives/debian.png" />
          </div>
          <div class="col-xs-12 col-sm-6">
            <span class="apps-text">Debian<br>Desktop</span>
          </div>
        </a>
      </div>
    </div>
  </fieldset>

  <!-- footer -->
  <?php include("includes/footer.html"); ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
