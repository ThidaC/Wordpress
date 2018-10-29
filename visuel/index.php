<?php

header( 'content-type: text/html; charset=utf-8' );

$mysql_db = 'thida';
$mysql_usr = 'root';
$mysql_pswd = 'test';
$mysql_host = 'dbold';

// Create connection
$conn = new mysqli($mysql_host, $mysql_usr, $mysql_pswd, $mysql_db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM reference";
$result = $conn->query($sql);

/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //var_dump($row);
		?>
		<img src="/<?php print $row['picture']; ?>" style="width: 400px; height: auto;" />
		<?php
    }
} else {
    echo "0 results";
}*/
$conn->close();

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Animated Frame Slideshow | Demo 3 | Codrops</title>
		<meta name="description" content="A slideshow that shows an animated SVG frame on the transitions between slides" />
		<meta name="keywords" content="slideshow, javascript, frame, animation, svg, shape, path, web design
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="pater/pater.css" />
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	</head>
	<body class="demo-3 loading">
		<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-github" viewBox="0 0 32.6 31.8">
				<title>github</title>
				<path d="M16.3,0C7.3,0,0,7.3,0,16.3c0,7.2,4.7,13.3,11.1,15.5c0.8,0.1,1.1-0.4,1.1-0.8c0-0.4,0-1.4,0-2.8c-4.5,1-5.5-2.2-5.5-2.2c-0.7-1.9-1.8-2.4-1.8-2.4c-1.5-1,0.1-1,0.1-1c1.6,0.1,2.5,1.7,2.5,1.7c1.5,2.5,3.8,1.8,4.7,1.4c0.1-1.1,0.6-1.8,1-2.2c-3.6-0.4-7.4-1.8-7.4-8.1c0-1.8,0.6-3.2,1.7-4.4C7.4,10.7,6.8,9,7.7,6.8c0,0,1.4-0.4,4.5,1.7c1.3-0.4,2.7-0.5,4.1-0.5c1.4,0,2.8,0.2,4.1,0.5c3.1-2.1,4.5-1.7,4.5-1.7c0.9,2.2,0.3,3.9,0.2,4.3c1,1.1,1.7,2.6,1.7,4.4c0,6.3-3.8,7.6-7.4,8c0.6,0.5,1.1,1.5,1.1,3c0,2.2,0,3.9,0,4.5c0,0.4,0.3,0.9,1.1,0.8c6.5-2.2,11.1-8.3,11.1-15.5C32.6,7.3,25.3,0,16.3,0z"/>
			</symbol>
		</svg>
		<main>
			<div class="content content--fixed">
				<header class="codrops-header">
					<div class="codrops-links">
						<a class="codrops-icon codrops-icon--prev" href="https://tympanus.net/Development/ExpandingGridItemAnimation/" title="Previous Demo"><svg class="icon icon--arrow"><use xlink:href="#icon-arrow"></use></svg></a>
						<a class="codrops-icon codrops-icon--drop" href="https://tympanus.net/codrops/?p=33037" title="Back to the article"><svg class="icon icon--drop"><use xlink:href="#icon-drop"></use></svg></a>
					</div>
					<h1 class="codrops-header__title">Animated Frame Slideshow</h1>
				</header>
				<a class="github" href="https://github.com/codrops/AnimatedFrameSlideshow/" title="Find this project on GitHub"><svg class="icon icon--github"><use xlink:href="#icon-github"></use></svg></a>
				<nav class="demos">
					<svg class="icon icon--keyboard"><use xlink:href="#icon-keyboard"></use></svg>
					<a class="demo" href="index.html"><span>Demo 1</span></a>
					<a class="demo" href="index2.html"><span>Demo 2</span></a>
					<a class="demo demo--current" href="index3.html"><span>Demo 3</span></a>
					<a class="demo" href="index4.html"><span>Demo 4</span></a>
					<a class="demo" href="index5.html"><span>Demo 5</span></a>
					<a class="demo" href="index6.html"><span>Demo 6</span></a>
				</nav>
				<a href="http://go.thoughtleaders.io/SenchaCodrops141117" rel="nofollow" class="pater" onClick="recordOutboundLink(this, 'Outbound Links', 'SenchaCodrops141117');return false;">
					<img class="pater__logo" src="pater/logo.svg" alt="Sencha Logo" />
					<h2 class="pater__title">Sencha Ext JS: Build an App, Not a Framework</h2>
					<div class="pater__img-wrap"><img class="pater__img" src="pater/sencha.png" alt="Sencha Creative" /></div>
				</a>
			</div>
			<div class="slideshow">
				<div class="slides">
					<?php
					if ($result->num_rows > 0) {
					    $i=0;
					    while($row = $result->fetch_assoc()) {
							?>
							<div class="slide <?php if ($i==0) {print "slide--current";}?>" >
								<div class="slide__img" style="background-image: url(/<?php print $row['picture']; ?>)"></div>
								<h2 class="slide__title"><?php print  utf8_encode($row['title']); ?></h2>
								<p class="slide__desc"><?php print utf8_encode($row['subtitle']); ?></p>
								<a class="slide__link" href="#">Discover more</a>
							</div>
							<?php
							$i++;
					    }
					} else {
					    echo "0 results";
					}
					?>
					<!--
					<div class="slide slide--current">
						<div class="slide__img" style="background-image: url(img/17.jpg)"></div>
						<h2 class="slide__title">Dazzling</h2>
						<p class="slide__desc">The main challenge is finding the right balance.</p>
						<a class="slide__link" href="#">Discover more</a>
					</div>
					<div class="slide">
						<div class="slide__img" style="background-image: url(img/18.jpg)"></div>
						<h2 class="slide__title">Brilliant</h2>
						<p class="slide__desc">Put the right minds together and imagine infinity.</p>
						<a class="slide__link" href="#">Find inspiration</a>
					</div>
					<div class="slide">
						<div class="slide__img" style="background-image: url(img/19.jpg)"></div>
						<h2 class="slide__title">Sensational</h2>
						<p class="slide__desc">Extremes are easy. Strive for balance.</p>
						<a class="slide__link" href="#">Find out more</a>
					</div>
					<div class="slide">
						<div class="slide__img" style="background-image: url(img/20.jpg)"></div>
						<h2 class="slide__title">Vibrant</h2>
						<p class="slide__desc">The purest minds are those which love color the most.</p>
						<a class="slide__link" href="#">Paint your future</a>
					</div>
				-->
				</div>
				<nav class="slidenav">
					<button class="slidenav__item slidenav__item--prev">Previous</button>
					<span>/</span>
					<button class="slidenav__item slidenav__item--next">Next</button>
				</nav>
			</div>
		</main>
		
	</body>
</html>

