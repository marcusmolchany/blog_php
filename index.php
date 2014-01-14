<?php
  include $_SERVER['DOC_ROOT'] . "src/common/Head.php";
  include $_SERVER['DOC_ROOT'] . "src/common/NavBar.php";
  include $_SERVER['DOC_ROOT'] . "src/common/Footer.php";
  include $_SERVER['DOC_ROOT'] . "src/common/ScriptSource.php";
?>

<!DOCTYPE html>
<html lang="en">
  <?php
    $head = new Head();

    $head->displayHead();
  ?>

  <body>
    <?php
      $navbar = new NavBar('home');

      $navbar->displayNavBar();
    ?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-12">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
	          <img src="<?php echo $_SERVER['DOC_ROOT']; ?>/images/profile.jpg" class="img-circle img-responsive" id="profile"/>
            <h1>Hello!</h1>
            <p>
              Welcome to my website and tech blog! A few months ago I read <a href="http://blog.jenniferdewalt.com/post/46892312080/day-1-the-beginning">an awesome blog post</a>
              about learning to make webpages and decided to make my own. This is the work-in-progress, take a look at my <a href='/blog'>blog</a> and
              <a href='/about'>about</a> pages to learn more about me!
            </p>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Twitter Bootstrap 3</h2>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Version Control: GIT instead of FTP</h2>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Benefits of Shell Access</h2>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Index File and FTP</h2>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Domain and Hosting</h2>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>Introduction</h2>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <?php
        $footer = new Footer();

        $footer->displayFooter();
      ?>

    </div><!--/.container-->

    <?php
      $scriptSource= new ScriptSource();

      $scriptSource->displayScriptSource();
    ?>
  </body>
</html>
