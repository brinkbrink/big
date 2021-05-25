<!DOCTYPE html>
<html lang="en">
 <head>
  <title>e brink: Contact Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/8a12320bd7.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8a12320bd7.js" crossorigin="anonymous"></script>

</head>
<body>
 
 <main>
 <header>
     <h1><a href="index.html">Web Developer Examples and Resources <br>by e brink</a></h1>
        <nav id="cssmenu">
            <ul>
                <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
                <li><a href="index.html"><i class="fas fa-bahai"></i> BIG</a></li>
                <!--drop down for research-->
                <li><a href="#"></i> <i class="fas fa-book"></i> Research</a>
                    <ul>
                        <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
                        <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
                        <li><a href="forms.html"><i class="fas fa-th"></i> HTML Forms</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fas fa-tools"></i> Google Tools</a>
                    <ul>
                    <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
                    <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                    <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
                    <li><a href="webcam.html"><i class="fas fa-cloud-sun-rain"></i> Weather</a></li>    
                </ul>
                </li>
                <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Gallery</a></li>
                <li><a href="contact.php"><i class="fas fa-envelope-open-text"></i> Contact e</a></li>
            </ul>
        </nav>
     </header>
     
   <div class="wrapper">
   
       <h2 class="subheader">Contact e!</h2>
        
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "brinkbrink@gmail.com";  //place your/your client's email address here
        $toName = "e brink"; //place your client's name here
        $website = "IT120 Website";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
      
     <footer>
      <p><small>&copy; 2021 by <a href="contact.php">e brink</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site48/it161/index.html" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
      
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>