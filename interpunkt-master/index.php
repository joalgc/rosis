<?php defined('_JEXEC') or die('Restricted access'); 

$document = JFactory::getDocument();
$app = JFactory::getApplication();

// Slide variables
$slideimage  = $this->params->get('slide_1_image');
$slidetitle  = $this->params->get('slide_1_titel');
$slidetext  = $this->params->get('slide_1_text');

$slide_2_image  = $this->params->get('slide_2_image');
$slide_2_title  = $this->params->get('slide_2_titel');
$slide_2_text  = $this->params->get('slide_2_text');

$slide_3_image  = $this->params->get('slide_3_image');
$slide_3_title  = $this->params->get('slide_3_titel');
$slide_3_text  = $this->params->get('slide_3_text');

// Column widths
$leftcolgrid  = $this->params->get('columnWidth', 4);
$rightcolgrid = $this->params->get('columnWidth', 4);

// detecting active variables
$option = JRequest::getCmd('option', '');
$view = JRequest::getCmd('view', '');
$layout = JRequest::getCmd('layout', '');
$task = JRequest::getCmd('task', '');
$itemid = JRequest::getCmd('Itemid', '');

// detecting page title
$mydoc =& JFactory::getDocument();
$page_title = $mydoc->getTitle();

if ($this->countModules('left') == 0):?>
<?php $leftcolgrid  = "0";?>
<?php endif; ?>
<?php
if ($this->countModules('right') == 0):?>
<?php $rightcolgrid  = "0";?>
<?php endif; ?>
<?php if ($this->params->get('template-width') == 1):?>
<?php $template_width = "-fluid" ;?>
<?php else :?>
<?php $template_width = "" ;?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/css/template.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,300,800,700,600' rel='stylesheet' type='text/css'>
    <?php
    $app = JFactory::getApplication();
    $menu = $app->getMenu();
    if ($menu->getActive() == $menu->getDefault()) : ?>
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }

    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>
  <?php endif; ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

<body class="<?php echo $option . " " . $view . " " . $layout . " " . $task . " item-" . $itemid;?> <?php if($site_home){ echo "home";}?>" data-spy="scroll" data-target=".subnav" data-offset="50" data-redering="true">



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container<?php echo $template_width; ?>">

        <div class="navbar navbar">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo $this->baseurl ?>" title="Interpunkt"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/assets/images/logo.png"  width="149" height="43" alt="logo" title="logo" /></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <jdoc:include type="modules" name="top-menu" style="none" />
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->


    <?php
    $app = JFactory::getApplication();
    $menu = $app->getMenu();
    if ($menu->getActive() == $menu->getDefault()) : ?>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo $this->baseurl ?>/images/slides/<?php echo $slideimage; ?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $slidetitle; ?></h1>
              <p class="lead"><?php echo $slidetext; ?></p>
              <a class="btn btn-large btn-primary" href="#">Download Now</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo $this->baseurl ?>/images/slides/<?php echo $slide_2_image; ?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $slide_2_title; ?></h1>
              <p class="lead"><?php echo $slide_2_text; ?></p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo $this->baseurl ?>/images/slides/<?php echo $slide_3_image; ?>" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $slide_3_title; ?></h1>
              <p class="lead"><?php echo $slide_3_text; ?></p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
  <?php endif; ?>



<!-- Content Container
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container<?php echo $template_width; ?>">

      <!-- Content
      ================================================== -->
      <div id="content">
        <jdoc:include type="message" />
        
        <?php if($this->countModules('breadcrumbs')) : ?>
        <div id="breadcrumbs" class="row<?php echo $template_width; ?>">
          <jdoc:include type="modules" name="breadcrumbs" style="xhtml" />
        </div>
        <?php endif; ?>
        <?php if($this->countModules('top')) : ?>
        <!-- Top Module Position -->  
        <div id="top" class="row<?php echo $template_width; ?>">
          <jdoc:include type="modules" name="top" style="standard" />  
        </div>
        <hr />
        <?php endif; ?>
        <div id="main" class="row<?php echo $template_width; ?>">
          <!-- Left -->
          <?php if($this->countModules('left')) : ?>
          <div id="sidebar" class="span<?php echo $leftcolgrid;?>">
            <jdoc:include type="modules" name="left" style="standard" />
          </div>
          <?php endif; ?>
          <!-- Component -->
          <div id="content" class="span<?php echo (12-$leftcolgrid-$rightcolgrid);?>">
            <?php if($this->countModules('above-content')) : ?>
            <!-- Above Content Module Position -->  
            <div id="above-content">
              <jdoc:include type="modules" name="above-content" style="standard" />  
            </div>
            <hr />
            <?php endif; ?>
            <jdoc:include type="component" />
            <?php if($this->countModules('below-content')) : ?>
            <!-- Below Content Module Position -->  
            <hr />
            <div id="below-content">
              <jdoc:include type="modules" name="below-content" style="standard" />  
            </div>
            <?php endif; ?>
          </div>
          <!-- Right -->
          <?php if($this->countModules('right')) : ?>
          <div id="sidebar-2" class="span<?php echo $rightcolgrid;?>">
            <jdoc:include type="modules" name="right" style="standard" />
          </div>
          <?php endif; ?>
        </div>
        <?php if($this->countModules('bottom')) : ?>
        <!-- Bottom Module Position --> 
        <hr />
        <div id="bottom" class="row<?php echo $template_width; ?>">
          <jdoc:include type="modules" name="bottom" style="standard" /> 
        </div>
        <?php endif; ?>
      </div>
      <?php if($this->countModules('below')) : ?>
      <!-- Below Module Position
      ================================================== -->  
      <hr />
      <div id="below" class="row<?php echo $template_width; ?>">
        <jdoc:include type="modules" name="below" style="standard" />  
      </div>
      <?php endif; ?>
      <!-- Footer
      ================================================== -->
      <footer class="footer">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <jdoc:include type="modules" name="footer" style="none" />  
      </footer>
      <jdoc:include type="modules" name="debug" />

</div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
    <?php
    $app = JFactory::getApplication();
    $menu = $app->getMenu();
    if ($menu->getActive() == $menu->getDefault()) : ?>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  <?php endif; ?>
  </body>
</html>
