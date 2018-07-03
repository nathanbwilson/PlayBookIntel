<?php if(!isset($page_title)) { $page_title = 'Home'; }?>
<!doctype html>
<html lang="en">
  <head>
    <meta name="Description" content="PlayBook Intelligence is a handicapping intelligence network made up of the smartest minds in the business.">
    <meta name="Keywords" content="handicapping, handicap, sports betting"/>
    <meta name="author" content="Developed by Nathan Wilson and founded by John Ryan Sports.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content=""/>
    <meta property="fb:admins" content=""/>
    <title>PlayBookIntel - <?php echo h($page_title); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <!--
    <link rel="stylesheet" href="<?php echo url_for('../public/stylesheets/BootStrap/css/bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('../public/stylesheets/BootStrap/js/bootstrap.js');?>">
    <link rel="stylesheet" href="<?php echo url_for('../public/stylesheets/BootStrap/css/bootstrap.min.css');?>">
    -->

    <link href="https://maxcdn.bootstrapcdn.com/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo url_for('../public/stylesheets/styles.css');?>">
    <link href="jumbotron.css" rel="stylesheet">
    <link rel="icon" href="../../favicon.ico">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>
<header>
    <div id="mainHeader">
      <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container">
           <div class="navbar-header">

             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>

             <a class="navbar-brand" href="<?php echo url_for('/index.php'); ?>">PlayBook Intelligence</a>
           </div>

           <div id="navbar" class="navbar-collapse collapse">

             <form class="navbar-form navbar-right">
               <div class="form-group">
                 <input type="text" placeholder="Email" class="form-control">
               </div>

               <div class="form-group">
                 <input type="password" placeholder="Password" class="form-control">
               </div>

               <button type="submit" class="btn btn-success">Sign in</button>
             </form>

        </div><!--/.navbar-collapse -->
      </div><!--Container-->
    </nav><!--Navbar-->
  </div><!--mainHeader-->

</header>

<br></br>