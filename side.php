<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<h1 style="margin-bottom: 0px;margin-top: 0px;"><a href="<?php $this->options->siteUrl(); ?>" class=" logo" ><?php $this->options->title() ?></a></h1>
 <?php
          echo '<form method="post">';
          echo '<input autocomplete="off" name="s" type="text" class="form-control input-sm" placeholder="搜索文章QAQ~" />';
          echo '</form>';
      echo '</small>';?>
  <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<a href="{permalink}">{name}</a> '); ?>
            <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<a class="right5" href="{permalink}">{title}</a>'); ?>
<hr>
