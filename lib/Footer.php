<?php
class Footer {

	public function __construct() {}

	public function displayFooter() {
	  echo "
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src='" . $_SERVER['DOC_ROOT'] . "/assets/js/jquery.js'></script>
	    <script src='" . $_SERVER['DOC_ROOT'] . "/dist/js/bootstrap.min.js'></script>
	    <script src='" . $_SERVER['DOC_ROOT'] . "/js/offcanvas.js'></script>
	  ";
	}
}
?>