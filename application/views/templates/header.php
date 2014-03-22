<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HD Window Cleaning is a professional window cleaning service for Calgary and area. We do residential (home) and commercial (high rise) window cleaning.">
    <title><?=$title ?></title>

    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="<?=base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/css/styles.css" rel="stylesheet">

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
	    	<!-- End of header -->