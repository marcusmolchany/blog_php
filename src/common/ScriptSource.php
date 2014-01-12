<?php
class ScriptSource {

	public function __construct() {}

	public function displayScriptSource() {
	  echo "
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src='" . $_SERVER['DOC_ROOT'] . "/js/externals/jquery.js'></script>
	    <script src='" . $_SERVER['DOC_ROOT'] . "/js/externals/bootstrap.min.js'></script>
	    <script src='" . $_SERVER['DOC_ROOT'] . "/js/externals/offcanvas.js'></script>

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	    <script src='" . $_SERVER['DOC_ROOT'] . "/js/html5shiv.js'></script>
	    <script src='" . $_SERVER['DOC_ROOT'] . "/js/externals/respond.min.js'></script>
	    <![endif]-->
	  ";
	}
}
?>