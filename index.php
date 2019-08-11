<?php
/**
 * 何为简？本主题的体积与界面说明了一切；开袋即食，无需进行任何多余的操作，推荐海外低配主机和追求速度的朋友使用。#小白作品，含有很多bug和套用其它主题的功能，将在后续更新中逐渐去除。
 * 
 * @package 简和
 * @author 安和
 * @version 1.0.3
 * @link http://lolicorn.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');?>
<html>
<body>
<div class="main">
<div class="article-list">
<div class="content">
<?php  $this->need('side.php'); ?>
<?php while($this->next()): ?>
<time datetime="<?php $this->date('c'); ?>"><?php $this->date('M j, Y'); ?></time>
<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
<hr>
<?php endwhile; ?>
<center>
<?php $this->pageNav('&laquo;', '&raquo;', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'page-change', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
</center>
