<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HD Window Cleaning is a professional window cleaning service for Calgary and area. We do residential and commercial window cleaning. We're a local team of experienced, professional window cleaners ready to help!">
    <title><?=$title ?></title>

    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
    <link href="<?=base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/css/jquery.sidr.dark.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/css/styles.css" rel="stylesheet">
    <script>
      var config = {
           base: "<?php echo base_url(); ?>"
       };
     </script>

      <?php 
    if(isset($additionalstyles))
    {
      foreach($additionalstyles as $style):
        ?>

        <link href="<?=base_url() ?>assets/css/<?=$style ?>" rel="stylesheet">

        <?php

      endforeach;

    } ?>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>
  <body>

  <?php if(isset($subcontenttitle)): ?>
  <nav class="mobilemenu" id="auxmobilemenu">
    <div id="menuanchor"><a href="#sidr" id="openmobilemenu"><span>Menu <span class="glyphicon glyphicon-tasks"></span></span></a></div>
  </nav>
  <?php else: ?>
  <nav class="mobilemenu" id="mainmobilemenu">
    <div id="menuanchor"><a href="#sidr" id="openmobilemenu"><span>Menu <span class="glyphicon glyphicon-tasks"></span></span></a></div>
  </nav>
  <?php endif ?>


  <div id="sidr">

  <span id="menu-close" onclick="javascript:$.sidr('close')">x</span>
  <p class="mobilegreet">How can we help?</p>
    <ul id="mobilenavul">
      <li class="active"><a href="<?=base_url() ?>/#greeter">Meet and Greet</a></li>
      <li><a href="<?=base_url() ?>/#residentialservices">Residential Services</a></li>
      <li><a href="<?=base_url() ?>/#commercialservices">Commercial Services</a></li>
      <li><a href="<?=base_url() ?>/#whychooseus">Why Choose Us?</a></li>
      <li><a href="<?=base_url() ?>/#guarantee">Our Guarantee</a></li>
      <li><a href="<?=base_url() ?>/quote">Get a Online Quote</a></li>
      <li><a href="<?=base_url() ?>/booking">Book an Appointment</a></li>
      <li></li>
      <li><a href="<?=base_url() ?>/contactus">Contact Us</a></li>
    </ul>
  </div>

  <noscript>
    <div class="bigwarning">
      <p><i class="fa fa-umbrella"></i> Hi there, it looks like your not running with JavaScript enabled. We respect your decision and will try to accommodate you, however please be aware some parts of this site will not work (such as booking). If you didn't expect this message, <a href="http://enable-javascript.com/">please click here to learn how to turn JavaScript back on.</a> Thanks!</p>
    </div>
  </noscript>

  <!--[if lt IE 8]>
    <div class="bigwarning" id="badbrowser">
      <p><i class="fa fa-exclamation-triangle"></i> Hi there, looks like your browser is a little out of date. Your experience on this site (and most others) will be degraded. Please upgrade to the latest version of your browser, or try a new one! <a href="http://browsehappy.com/">Please click here to learn more.</a> Thanks!</p>
    </div>
  <![endif]-->

  <?php if(isset($subcontenttitle)): ?>
  <div class="container" id="maincontent">

  <header>
    <div class="row bigheader" id="quotebigheader">
      <div class="col-sm-4" id="logo">
        <a href="<?=base_url() ?>"><img src="<?=base_url() ?>assets/img/badlogo.png" alt="Bad Logo"></a>
      </div>
      <div class="col-sm-7" id="quoteheader">
        <h1 class="leadcentre" style=""><?=$subcontenttitle ?></h1>
      </div>
    </div>

    <div class="smallheader" id="quotesmallheader">
      <em><a href="<?=base_url() ?>">HDWindows</a></em> | <?=$subcontenttitle ?>
    </div>
  </header>

  <?php endif ?>