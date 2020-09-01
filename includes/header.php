<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- it tells the browser it's a responsove site and it makes the viewport, which is the screen size, to look for the device's width -->

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title>Unexpected Friends</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--all the above tells IE9 or lower to upload those scripts because you are not very smart and it'll help you-->
  </head>
  <body data-spy="scroll" data-target="#navbar">
     <nav class="navbar fixed-top navbar-expand-md navbar-dark" id="navbar">
       <a class="navbar-brand" href="index.php" id="navbarBrand">
          <span class="navbar-brand" id="unexpected">Unexpected</span><span class="navbar-brand" id="friends">Friends</span>
      </a>
       <!--navbar toggler is the hamburger icon that appears when in smaller screens-->
       <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div id="navbarNav" class="collapse navbar-collapse">
         <!--ml-auto moves the links to the right-->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#ourStory">Our Story<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-light waysToHelp" href="#waysToHelp">Ways To Help</a>
            </li>
          </ul>
       </div><!--navbarNav-->

     </nav>