<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="main">
<div class="article-list">
<link rel="stylesheet" href="<?php $this->options->themeUrl('/css/post.css'); ?>"> 
  <?php $this->need('side.php'); ?>
<h1><?php $this->title() ?></h1>
<?php $this->content(); ?>
</div>



      
