<!DOCTYPE html>
<html>
<head>
    <!-- START GOOGLE ANALYTICS -->
    <script type="text/javascript" src="/js/google.js" language="javascript"></script>
    <!-- END GOOGLE ANALYTICS -->
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Meta Keyword -->
    <meta name="keywords" content="majestic, oak, treehouse, majestic oak, majestic oak treehouse, bare creek hollow, bare creek hollow treehouse, weddings, chapel, pavilion, events, gypsy, grotto, bed and breakfast, treehouse, lavender, hotel, country, beautiful, unique, lodging, treehouses in celeste tx, treehouses in north texas, treehouses celeste tx, treehouses location close to Dallas, treehouses celeste, treehouses in DFW, treehouses in celeste texas, treehouses in dallas tx, treehouse locations near dallas, treehouses celeste texas, treehouses in Dallas Ft Worth, treehouses Dallas Ft Worth location, treehouses in dfw, treehouses in dfw location, treehouses close to Dallas, treehouses close to Dallas location, savannahs meadow texas bed and breakfast, savannahs meadow tx vacation rental, treehouse treehouses location, treehouse rentals, treehouse treehouses, outdoor treehouses, outdoor treehouse location, outdoor treehouse chapel, outdoor treehouse chapel pavilion, treehouse glamping treehouses, glamping, treehouse house rentals, treehouses location, treehouse lodging, treehouse celeste treehouses, treehouse rental treehouses">
    <!-- Description -->
    <meta name="description" content="Savannah's Meadow is a Bed & Breakfast with a unique twist - your lodging in treehouses in the trees.  We also offer a wedding chapel and pavilion for those who want to say their vows out and in nature, an events field for concerts, family reunions, festivals and other things, and a gypsy grotto for your inner gypsy. All set in the trees on 18+ acres in Celeste, Texas.  Just 45 minutes outside of Dallas.">
    <!-- meta character set -->
    <meta charset="utf-8">
    <!-- Site Title -->
    <title>Savannah's Meadow - Come stay and play</title>
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <!--Modernizer-->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!--Boostrap-->
    <link rel="stylesheet nofollow" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet nofollow" href="style.css">
    <link rel="stylesheet nofollow" type="text/css" href="<?php bloginfo('template_directory');?>/css/flexslider.css">
    <link rel="stylesheet nofollow" href="<?php bloginfo('template_directory');?>/css/responsive.css">
    <!-- Lightbox CSS -->
    <link href="<?php bloginfo('template_directory');?>/css/lightbox.css" rel="stylesheet nofollow">
    <!--Font-->
    <link href="http://fonts.googleapis.com/css?family=Lora" rel="stylesheet nofollow" type="text/css">
    <script src="https://use.fontawesome.com/a9e7dca764.js"></script>
    <?php wp_head();?>
</head>
<body id="body">

<!--Fixed Navigation
==================================== -->
<nav id="nav" class="navbar color navbar-fixed-top">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
<a class="navbar-brand" href="#"><img id="logo" class="img-responsive animated-logo center-block" src="<?php bloginfo('template_directory');?>/img/SMLogo.png"></a>
      <?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav navbar-nav',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
    </div>
</nav>


<!--End Fixed Navigation
==================================== -->


<!--Slider
==================================== -->
<div id="flexsliderTop" class="flexsliderTop">
  <ul class="slides">
    <li>
      <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/header-background.png" />
      <div class="flex-caption">
            <h3>Live Music</h3>
            <p>Music among the trees</p>
            <a id="slideContent" href="majestic.html" type="button" class="btn btn-default btn-responsive btn-lg ext_link">Click Here to See More </a>
        </div>
    </li>
    <li>
      <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/header-background.png" />
      <div id="slideContent" class="flex-caption">
            <h3>Live Music</h3>
            <p>Music among the trees</p>
            <a id="captionButton" href="majestic.html" type="button" class="btn btn-default btn-responsive btn-lg ext_link">Click Here to See More </a>
        </div>
    </li>
    <li>
      <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/header-background.png" />
      <div  class="flex-caption">
            <h3>Live Music</h3>
            <p>Music among the trees</p>
            <a href="majestic.html" type="button" id="btn" class="btn btn-default btn-responsive btn-lg ext_link">Click Here to See More </a>
        </div>
    </li>
    <li>
      <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/header-background.png" />
      <div id="slideContent" class="flex-caption">
            <h3>Live Music</h3>
            <p>Music among the trees</p>
            <a href="majestic.html" type="button" class="btn btn-default btn-responsive btn-lg ext_link">Click Here to See More </a>
        </div>
    </li>
  </ul>
</div>
<!--End Slider
==================================== -->