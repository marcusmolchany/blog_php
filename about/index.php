<?php
  include $_SERVER['DOC_ROOT'] . "../lib/NavBar.php";
?>

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
    <?php
      $navbar = new NavBar('about');

      $navbar->displayNavBar();
    ?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <img src="<?php echo $_SERVER['DOC_ROOT']; ?>/images/profile.jpg" class="img-circle img-responsive" id="profile">
            <h1>About</h1>
            <p>Marcus Molchany</p>
            <a href="https://twitter.com/molchanimal" target="_blank">@molchanimal</a>
            <p></p>
            <a href="https://github.com/marcusmolchany" target="_blank">github</a>
            <p></p>
            <a href="https://linkedin.com/in/marcusmolchany" target="_blank">linkedin</a>
            <p></p>
            <a href="<?php echo $_SERVER['DOC_ROOT']; ?>/images/Resume_2013.pdf" target="_blank">resume</a>
            <p></p>
            <p></p>
            <p>
              This page is <a href="https://github.com/marcusmolchany/first_twitter_bootstrap_page" target="_blank">100% open source</a>!
              Feel free to view, review or even fork this repository.
            </p>
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
