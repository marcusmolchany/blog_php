<?php
  include $_SERVER['DOC_ROOT'] . "../src/common/Head.php";
  include $_SERVER['DOC_ROOT'] . "../src/common/NavBar.php";
  include $_SERVER['DOC_ROOT'] . "../src/common/Footer.php";
  include $_SERVER['DOC_ROOT'] . "../src/common/ScriptSource.php";
  include $_SERVER['DOC_ROOT'] . "../src/common/PostSqlConnector.php";
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

    <?php
      $postSqlConnector = new PostSqlConnector('localhost', 'root', "");

      $postSqlConnector->buildSqlString();
      $postSqlConnector->executeSqlQuery();
      $postSqlConnector->copyToAssociativeArray();
      //$postSqlConnector->printArray();
      $associativityArray = $postSqlConnector->getAssociativityArray();
      //echo "<pre>";
      //print_r($associativityArray);
      //echo "</pre>";
    ?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-12">
          <div class="jumbotron">
            <img src="<?php echo $_SERVER['DOC_ROOT']; ?>/images/profile.jpg" class="img-circle img-responsive" id="profile"/>
            <h1>Blog</h1>
            <h2>Thanks for stopping by my blog!</h2>
            <p>
              It's about a lot of things, mostly tech. The past few months of my life have been dedicated to learning web
              development, working on side projects and making this website so please enjoy, and if you have any questions,
              comments or suggestions you can reach out to me on any of the accounts listed on my <a href='/about'>about</a> page.
            </p>
          </div>

          <?php
            foreach ($associativityArray as $blogPost) {
              /*
               * extract() will pull out the variables in the associativity array as
               * $id, $title and $content
               */
              extract($blogPost);

              echo '<a name="' . $id . '"></a>';
              echo '</br>';
              echo '</br>';
              echo '<div class="well well-sm">';
              echo '  <article>';
              echo '    <h2>' . $title . '</h2>';
              $formatted_date = new DateTime($timestamp);
              echo $formatted_date->format('M j Y g:i A');
              echo '</br>';
              echo '</br>';
              echo      $content;
              echo '  </article>';
              echo '</div>';
            }
          ?>

<!--
          <div class="well well-sm">
            <article>
              <div class="post-meta">
                <time datetime="YYYY-MM-DD">11 Mar <span class="year">2012</span></time>
                <span class="comments-link"><a href="http://f6design.com/journal/2012/03/11/configuring-virtualhosts-in-xampp-on-mac/#comments" title="Comment on Configuring VirtualHosts in XAMPP on Mac">38</a></span>
              </div>
              <h2>Third Post Title</h2>
              <p>Text</p>
            </article>
          </div>
        </div>
-->
          <div class="" id="blogpager" role="navigation">
            <ul class="pager">
              <li class="previous"><a href="#">&larr; Older</a></li>
              <li class="next"><a href="#">Newer &rarr;</a></li>
            </ul>
          <div>
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
