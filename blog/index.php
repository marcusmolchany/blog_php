<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo $_SERVER['DOC_ROOT']; ?>/images/favicon.png">

    <title>Marcus Molchany's Blog (Build on Bootstrap)</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type ="text/css" href="<?php echo $_SERVER['DOC_ROOT']; ?>/dist/css/bootstrap.min.css"/>

    <!-- Custom styles for this template -->
    <link href="<?php echo $_SERVER['DOC_ROOT']; ?>/css/offcanvas.css" rel="stylesheet">
    <link href="<?php echo $_SERVER['DOC_ROOT']; ?>/css/custom.css"    rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $_SERVER['DOC_ROOT']; ?>/">Marcus Molchany's Blog</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo $_SERVER['DOC_ROOT']; ?>/">Home</a></li>
            <li class="active"><a href="/blog">Blog</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $_SERVER['DOC_ROOT']; ?>/about">About</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <img src="<?php echo $_SERVER['DOC_ROOT']; ?>/images/profile.jpg" class="img-circle img-responsive" id="profile">
            <h1>Blog</h1>
            <h2>Description</h2>
            <p>Text</p>
          </div>
          <div class="well well-sm">
            <article>
<!--
              <div class="post-meta">
                <time datetime="YYYY-MM-DD">11 Mar <span class="year">2012</span></time>
                <span class="comments-link"><a href="http://f6design.com/journal/2012/03/11/configuring-virtualhosts-in-xampp-on-mac/#comments" title="Comment on Configuring VirtualHosts in XAMPP on Mac">38</a></span>
              </div>
-->
              <h2>Third Post Title</h2>
              <p>Text</p>
            </article>
          </div>
          <div class="well well-sm">
            <article>
              <h2>Third Post Title</h2>
              <p>Text</p>
            </article>
          </div>
          <div class="well well-sm">
            <article>
              <h2>Second Post Title</h2>
              <p>Text</p>
            </article>
          </div>
          <div class="well well-sm">
            <article>
              <h2>First Post Title</h2>
              <p>Text</p>
            </article>
          </div>
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="well sidebar-nav">
            <ul class="nav">
              <li>Sidebar</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Marcus Molchany 2013</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $_SERVER['DOC_ROOT']; ?>/assets/js/jquery.js"></script>
    <script src="<?php echo $_SERVER['DOC_ROOT']; ?>/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo $_SERVER['DOC_ROOT']; ?>/js/offcanvas.js"></script>
  </body>
</html>
