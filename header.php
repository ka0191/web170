<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">


<!--Remy Sharp Shim -->
<!--[if lte IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" >
</script>
<![endif]-->

    <!-- <link href="css/styles.css" type="text/css" rel="stylesheet" > -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="<?php bloginfo('template_directory'); ?>/js/script.js" type="text/javascript"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});
		});
        $(document).ready(function(){
           $(".project").click(function(){
               $(".project>div>div.txt").toggleSlide();
           });

        });
        $(document).ready(function(){
            $("#bg").hover(function(){
                $("#header>a").show();
            });
        });
		</script>

<title><?php bloginfo('description'); ?> <?php bloginfo('name'); ?>227world</title>
    </head>

<body id="home" <?php body_class(); ?>>
  <!-- Begin WordPress Menu-->
  <?php wp_nav_menu(array ('theme_location' =>'main-menu' ,'container' => 'nav', 'container_id' =>'nav', 'container_class' =>'fix', 'menu_class' => 'navigation'));?>
  <!-- End WordPress Menu -->
 <!-- <nav>
    <ul>
        <li><a href="index.php">227WORLD</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="project.php">Projects</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>
  <div id="mobile">
    <button class="nav-button">Toggle Navigation</button>

		<ul class="primary-nav">
			<li><a href="index.php">227WORLD</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="project.php">Projects</a></li>
        <li><a href="contact.php">Contact</a></li>
		</ul>
    </div> -->


    <div id="bg">
    <div id="header">
        <h1>227WORLD</h1>
        <a href="products.php">SEE PRODUCTS</a>
    </div>
