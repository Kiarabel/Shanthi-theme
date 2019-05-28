<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <meta charset="<?php bloginfo('charset'); ?>">


	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
</title>
    
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
 
    <link href="https://fonts.googleapis.com/css?family=Lora:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js%22%3E</script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js%22%3E</script>
    <![endif]-->
    <?php wp_head(); ?> <!—very important that this is added-->
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="http://localhost:8080/shanthi-wordpress/wp-content/themes/shanthi-theme/images/logo.png" alt="logo" width="108px"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <?php
wp_nav_menu( array(
'menu' => 'Primary',
'depth' => 2,
'container' => false,
'menu_class' => 'nav navbar-nav navbar-right',
'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
//Process nav menu using our custom nav walker
'walker'=> new WP_Bootstrap_Navwalker())
);
?>

                </div>
            </div>
        </div>
    </nav>


