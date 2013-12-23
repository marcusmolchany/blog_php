<?php
class NavBar {

	private $pageType;

	public function __construct($pageType) {
		$this->pageType = $pageType;
	}

	public function displayNavBar() {
		echo "
		    <div class='navbar navbar-fixed-top navbar-inverse' role='navigation'>
		      <div class='container'>
		        <div class='navbar-header'>
		          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
		            <span class='icon-bar'></span>
		            <span class='icon-bar'></span>
		            <span class='icon-bar'></span>
		          </button>
		          <a class='navbar-brand' href='" . $_SERVER['DOC_ROOT'] . "/'>Marcus Molchany's Blog</a>
		        </div>
		        <div class='collapse navbar-collapse'>
		          <ul class='nav navbar-nav'>";

		          // determine which page is being display and set that tab on the navbar as active

		          // check if "home" page is active
		          if (strpos($this->pageType, 'home') === false) {
		          	echo "<li><a href='" . $_SERVER['DOC_ROOT'] . "/'>Home</a></li>";
		          } else {
		          	echo "<li class='active'><a href='" . $_SERVER['DOC_ROOT'] . "/'>Home</a></li>";
		          }

				  // check if "blog" page is active
		          if (strpos($this->pageType, 'blog') === false) {
		          	echo "<li><a href='" . $_SERVER['DOC_ROOT'] . "/blog'>Blog</a></li>";
		          } else {
		          	echo "<li class='active'><a href='" . $_SERVER['DOC_ROOT'] . "/blog'>Blog</a></li>";
		          }
	
		echo "
				  </ul>
		          <ul class='nav navbar-nav navbar-right'>";


				  // check if "about" page is active
		          if (strpos($this->pageType, 'about') === false) {
		          	echo "<li><a href='" . $_SERVER['DOC_ROOT'] . "/about'>About</a></li>";
		          } else {
		          	echo "<li class='active'><a href='" . $_SERVER['DOC_ROOT'] . "/about'>About</a></li>";
		          }

		echo "
		          </ul>
		        </div><!-- /.nav-collapse -->
		      </div><!-- /.container -->
		    </div><!-- /.navbar -->
		";
	}
}
?>