
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

		<title><?php bloginfo(); ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="copyright" content="" />

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="" />

<?php wp_head(); ?>
<!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->

<!--[if IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie9.css">
<![endif]-->


</head>

<body>

	<!-- Header
		============================= -->
	<div id="header">
        <div class="inner">
        
            <!-- Logo -->
            <h1 class="logo left"><a href="<?php bloginfo('template_url');?>home.html">Singolo</a></h1><!-- .logo-->
            
            <!-- Nav Menu -->
            <ul class="nav-menu right">
                <li class="current"><a href="<?php bloginfo('template_url');?>#home">home</a></li>
                <li><a href="<?php bloginfo('template_url');?>#services">services</a></li>
                <li><a href="<?php bloginfo('template_url');?>#portfolio">portfolio</a></li>
                <li><a href="<?php bloginfo('template_url');?>#about">about</a></li>
                <li><a href="<?php bloginfo('template_url');?>#contact">contact</a></li>
            </ul><!-- .nav-menu-->