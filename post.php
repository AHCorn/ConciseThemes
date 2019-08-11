<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<html>

<body>
<link rel="stylesheet" href="<?php $this->options->themeUrl('/css/post.css'); ?>"> 
  <div class="main">
  <div class="article-list">
 
       <div class="content">
         <?php  $this->need('side.php'); ?>
      <?php while($this->next()): ?>
    
     
	
	  <article itemscope="" itemtype="http://schema.org/BlogPosting">

      <h2 style="
    margin-bottom: 0px;
"><?php $this->title() ?></h2>
           <p itemprop="keywords" style="padding-top:10px;margin-top: 0px;""><?php _e('标签: '); ?><?php $this->tags(', ', true, '无标签'); ?></p>
	 <?php $this->content('Continue Reading...'); ?>


	    


<?php endwhile; ?>
 
  </article><!-- /.blog-post -->
