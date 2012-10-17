<?php
/*
 * index.php: homepage file. using php to separate slides into different files.
 */
?>

<!doctype html>
<html>
<head>
  <title> S. Alexander Zaman - A Cursory Synopsis</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href='styles.css' rel='stylesheet' />
</head>

<body>

  <noscript>
    <div id='noscript'>
      <h1>This site requires Javascript.</h1>
      If you cannot enable it, please visit the <a href="noscript.html">no-javascript</a> version.
    </div>
  </noscript> 

  <div id='impress'>
    <div class='step' data-x='0' data-y='0' data-scale='.75'>
	  <?php require "home.php"; ?>
	</div>
	<div class='step' data-rotate-x='-50' data-rotate-z='30' data-x='30' data-y='600' data-z='-200' data-rotate-y='35'>
	  <?php require "projects.php"; ?>
	</div>
	<div class='step' data-x='500' data-y='0' data-rotate-z='-90' data-scale='0.3' data-rotate-y='35'>
	  <?php require "resume.php"; ?>
	</div>
    <div class='step' data-x='75' data-y='-570' data-z='50' data-rotate='-45' data-rotate-x='-30'>
	  <?php require "contact.php"; ?>
	</div>		
  </div>
  <script type='text/javascript' src='impress.js'></script>

</body>
</html>
