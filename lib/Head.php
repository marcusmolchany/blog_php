<?php
class Head {

	public function __construct() {}

	public function displayHead() {
	  echo "
	  <head>
	    <meta charset='utf-8'>
	    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	    <meta name='description' content=''>
	    <meta name='author; content=''>
	    <link rel='shortcut icon' href='" . $_SERVER['DOC_ROOT'] . "/images/favicon.png'>

	    <title>Marcus Molchany's Blog (Build on Bootstrap)</title>

	    <!-- Bootstrap core CSS -->
	    <link rel='stylesheet' type ='text/css' href='" . $_SERVER['DOC_ROOT'] . "/dist/css/bootstrap.min.css'/>

	    <!-- Custom styles for this template -->
	    <link href='" . $_SERVER['DOC_ROOT'] . "/css/offcanvas.css' rel='stylesheet'>
	    <link href='" . $_SERVER['DOC_ROOT'] . "/css/custom.css'    rel='stylesheet'>
	  </head>
	  ";
	}
}
?>