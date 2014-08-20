<!DOCTYPE html>
<html lang="en">
<head>
  <?php Loader::element('header_required'); ?>
  <!--Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="description" content="Join the Warwickshire Enlightened Ingress Community">
  <meta name="keywords" content="Ingress, Enlightened, Warwickshire, Coventry, Leamington Spa, Warwick, Stratford, Nuneaton, Bedworth, Rugby ">
  <meta name="author" content="mjpwebsites.co.uk">
  <!--CSS-->
  <link href="<?php echo $this->getThemePath()?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $this->getThemePath()?>/css/theme.css" rel="stylesheet">
  <link href="<?php echo $this->getThemePath()?>/css/custom.css" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <!-- icons -->
    <link rel="shortcut icon" href="<?php echo $this->getThemePath()?>/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->getThemePath()?>/ico/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->getThemePath()?>/ico/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->getThemePath()?>/ico/72.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $this->getThemePath()?>/ico/57.png">
</head>

<body>
  <!--Navigation-->
  <nav id="main-menu" class="navbar navbar-inverse navbar-fixed-top shadow" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-links">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>-->
        <a class="navbar-brand" href="#"><img src="<?php echo $this->getThemePath()?>/img/enlwarkslogo50.png">Warwickshire Enlightened</a>
      </div>
      <div class="collapse navbar-collapse" id="main-menu-links">
        <ul class="nav navbar-nav">
          <li><a href="#community">Join the G+ community</a></li>
          <li><a href="#what">What's Ingress?</a></li>
        </ul>
      </div>
    </div>
  </nav>




<div class="container">
<?php
   $a = new Area('Main Content');
   $a->display($c);
?>


  <!--Carousel-->
  <div id="carousel-home" class="carousel slide shadow" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-home" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/slide1.png" alt="...">
        <div class="carousel-caption">
          <h1 class="hidden-xs">Warwickshire Enlightened</h1>
          <p class="hidden-xs">Join the <a href="https://plus.google.com/u/0/communities/105090760811166865519">Warwickshire Enlightened Google+ community.</a></p>
        </div>
      </div>

      <div class="item">
        <img src="img/slide2.png" alt="...">
        <div class="carousel-caption">
          <h1 class="hidden-xs">Get Ingress</h1> 
          <p class="hidden-xs">Download Ingress from the <a href="https://play.google.com/store/apps/details?id=com.nianticproject.ingress&hl=en_GB">Google Play Store.</a></p>
        </div>
      </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-home" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-home" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div><!--Carousell end-->

<!--Main content-->
<div id="community" class="row front-page">
    <div class="col-md-6 col-sm-6">
      <img src="img/enlightened_glow.png" class="img-responsive hidden-xs" alt="Enlightened logo">
    </div>
    <div class="col-md-6 col-sm-6">
      <h1>Warwickshire Enlightened</h1>
        <p>If you play Ingress and are local to Warwickshire UK, you can join the the community on Google+. Request an invite and then message <strong class="text-success">l3mon</strong>, <strong class="text-success">RPG123</strong>, <strong class="text-success">Bregalad</strong> or <strong class="text-success">Jrose</strong> in the in-game comm with your initials.</p>
        <p>We're welcoming players from Nuneaton, Bedworth, Rugby, Coventry, Warwick, Leamington Spa, Stratford-upon-Avon, Southam and everywhere surrounding and in-between.</p>
        <a href="https://plus.google.com/u/0/communities/105090760811166865519" type="button" class="btn btn-lg btn-success">Join the community</a>
    </div>
  </div>
<hr>
  <div id="what" class="row front-page">
    <div class="col-md-6 col-sm-6">
      <img src="img/ingresslogo.png" class="img-responsive hidden-xs" alt="Enlightened logo">
    </div>
    <div class="col-md-6 col-sm-6">
      <h1>What's Ingress?</h1>
        <p>Ingress transforms the real world into the landscape for a global game of mystery, intrigue, and competition.</p>
        <p>Ingress is a near-real time augmented reality massively multiplayer online pervasive game for Android (expected to be available for Apple's iOS in 2014). <a href="http://en.wikipedia.org/wiki/Ingress_(game)">Read more...</a></p>

        <ul>
          <li><a href="https://play.google.com/store/apps/details?id=com.nianticproject.ingress&hl=en_GB">Get Ingress</a></li>
          <li><a href="https://support.google.com/ingress/#topic=3261401">Ingress help and support</a></li>
          <li><a href="https://plus.google.com/+Ingress/posts">Offical Ingress G+ page</a></li>
          <li><a href="https://plus.google.com/communities/103803967875500436831">Official Ingress G+ Community</a></li>
          <li><a href="http://www.youtube.com/ingress">Ingress video reports</a></li>
        </ul>
        <a href="https://play.google.com/store/apps/details?id=com.nianticproject.ingress&hl=en_GB" type="button" class="btn btn-lg btn-success">Get Ingress</a>
    </div>
  </div>



<?php 
    Loader::element('footer_required'); 
 ?>
</div><!--/container-->

<!--Scripts-->
  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12441744-9', 'warwickshire-enlightened.co.uk');
    ga('send', 'pageview');
    </script>
</body>

</html>