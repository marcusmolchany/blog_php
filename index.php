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
            <div class="col-6 col-sm-6 col-lg-6">
              <h2>Amazon Web Services: EC2</h2>
              <span class="label label-info">Coming Soon!</span>
              </br>
              <p> Forget paying for hosting, Amazon gives it away for free!. A quick post about what AWS provides and how to get started. </p>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-6">
              <h2>Blogging: Jekyll, WordPress or Custom Design</h2>
              <span class="label label-info">Coming Soon!</span>
              </br>
              <p> Turns out there are a lot of resources out there for making blogs, this post talks about each and when to use them. </p>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-6">
              <h2>Twitter Bootstrap 3</h2>
              <p> A post about the wonders of Twitter's open source framework Bootstrap 3 </p>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-6">
              <h2>Version Control: GIT instead of FTP</h2>
              <p> Why using git for your project makes pushing new versions of your site so, so much easier than FTP </p>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-6">
              <h2>Benefits of Shell Access</h2>
              <p> Get root shell access to your web hosting for more control and flexibility with your website </p>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-6">
              <h2>Index File and FTP</h2>
              <p> How to make your first index file and send it up to your web hosting server </p>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-6">
              <h2>Domain and Hosting</h2>
              <p> The two essential parts for making your website accessible on the world wide web </p>
              <p><a class="btn btn-default" href=<?php echo "'" . $_SERVER['DOC_ROOT'] . "/blog'"?>>Read more &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-6">
              <h2>Introduction</h2>
              <p> A quick intro and comment on why I started this website and blog </p>
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
