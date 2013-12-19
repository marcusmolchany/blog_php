<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Marcus Molchany's Blog (Build on Bootstrap)</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type ="text/css" href="/first_twitter_bootstrap_page/dist/css/bootstrap.min.css"/>

    <!-- Custom styles for this template -->
    <link href="/first_twitter_bootstrap_page/css/offcanvas.css" rel="stylesheet">
    <link href="/first_twitter_bootstrap_page/css/custom.css"    rel="stylesheet">

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
          <a class="navbar-brand" href="/first_twitter_bootstrap_page/">Marcus Molchany's Blog</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/first_twitter_bootstrap_page/">Home</a></li>
            <li><a href="/first_twitter_bootstrap_page/blog">Blog</a></li>
            <li><a href="/first_twitter_bootstrap_page/about">About</a></li>
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
            <img src="/first_twitter_bootstrap_page/images/profile.jpg" id="profile">
            <h1>Blog</h1>
            <h2>First Post</h2>
            <p>Text</p>
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
    <script src="/first_twitter_bootstrap_page/assets/js/jquery.js"></script>
    <script src="/first_twitter_bootstrap_page/dist/js/bootstrap.min.js"></script>
    <script src="/first_twitter_bootstrap_page/js/offcanvas.js"></script>
  </body>
</html>
