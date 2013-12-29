<?php
  include $_SERVER['DOC_ROOT'] . "../lib/Head.php";
  include $_SERVER['DOC_ROOT'] . "../lib/NavBar.php";
  include $_SERVER['DOC_ROOT'] . "../lib/Footer.php";
  include $_SERVER['DOC_ROOT'] . "../lib/ScriptSource.php";

  //Database Connection
  $sqlConn =  new mysqli('localhost', 'root', '', 'marcusdb');

  //Build SQL String
  $sqlString = "SELECT * FROM marcusdb.post";

  //Execute the query and put data into a result
  $result = $sqlConn->query($sqlString);

  //Copy result into a associative array
  $resultArray = $result->fetch_all(MYSQLI_ASSOC);
  printr($resultArray);

  //Copy result into a numeric array
  $resultArray = $result->fetch_all(MYSQLI_NUM);
  printr($resultArray);

  //Copy result into both a associative and numeric array
  $resultArray = $result->fetch_all(MYSQLI_BOTH);
  printr($resultArray);

  function printr($s){echo "<pre>";print_r($s);echo "</pre>";};
?>

<!DOCTYPE html>
<html lang="en">
  <?php
    $head = new Head();

    $head->displayHead();
  ?>

  <body>
    <?php
      $navbar = new NavBar('blog');

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

      <div class="" id="blogpager" role="navigation">
        <ul class="pager">
          <li class="previous"><a href="#">&larr; Older</a></li>
          <li class="next"><a href="#">Newer &rarr;</a></li>
        </ul>
      <div>

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
