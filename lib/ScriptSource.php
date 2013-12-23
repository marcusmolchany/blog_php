<?php
class ScriptSource {

	public function __construct() {}

	public function displayScriptSource() {
	  echo "
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src='" . $_SERVER['DOC_ROOT'] . "/assets/js/jquery.js'></script>
	    <script src='" . $_SERVER['DOC_ROOT'] . "/dist/js/bootstrap.min.js'></script>
	    <script src='" . $_SERVER['DOC_ROOT'] . "/js/offcanvas.js'></script>

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	    <script src='" . $_SERVER['DOC_ROOT'] . "/assets/js/html5shiv.js'></script>
	    <script src='" . $_SERVER['DOC_ROOT'] . "/assets/js/respond.min.js'></script>
	    <![endif]-->
	  ";
	}
}
?>