<?php
/*
Copyright (c) 2012 Cranderveldt
Use under terms of MIT license
*/
global $post;
$redirect = get_post_meta($post->ID, 'redirect', true);
if ($redirect)
  wp_redirect($redirect);
?>
<!DOCTYPE HTML>
<!--[if lt IE 7 ]>
<html lang="en" class="no-js oldie ie6">
<![endif]-->
<!--[if IE 7 ]>
<html lang="en" class="no-js oldie ie7">
<![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="no-js oldie ie8">
<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title(); ?> | <?php bloginfo('description'); ?>" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/bootstrap-responsive.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/symbolset.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Neuton:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/script.js"></script>
  <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/symbolset.js"></script>
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
    
<body class="body-<?php the_ID(); ?>">
  <section id="container" class="container-fluid">
    <header class="row-fluid">
      <div class="span7 logo">
        <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">Devtapes</a></h1>
        <small><?php bloginfo('description'); ?></small>
      </div>
      <div class="span5 tape">
        <a href="itpc://feeds.feedburner.com/devtapes"><img src="/wp-content/uploads/devtapes-tape.png" alt="Subscribe on iTunes to the Devtapes Podcast"></a>
      </div>
    </header>
    <section id="content">