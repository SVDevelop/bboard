<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html style="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?=$title;?></title>
    <?php
    $server_url= current_url();
      $links = array('bootstrap.min','animate', 'languages.min', 'font-awesome.min', 'responsive_nav','responsive','jquery.fancybox', 'style');
      foreach ($links as $link) {
        echo link_tag('assets/admin/css/'.$link.'.css');
      }
    ?>
    <link href = "http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic" rel = "stylesheet" type = "text/css">
    <link rel=”alternate” hreflang=”en” href=”http://bullmine.com/” />
    <link rel=”alternate” hreflang=”zh” href=”http://bullmine.com/zh/” />
    <link rel=”alternate” hreflang=”ru” href=”http://bullmine.com/ru/” />
    <link rel=”alternate” hreflang=”de” href=”http://bullmine.com/de/” />
    <link rel=”alternate” hreflang=”es” href=”http://bullmine.com/es/” />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="side-panel pull-center-2">
            <ul class="navbar-nav">
              <li <?=(preg_match("/admin$/",$server_url))?' class="active"':''?>><a style="" href="<?=site_url('admin');?>">Майнинг</a></li>
              <li <?=(preg_match("/notes/",$server_url))?' class="active"':''?>><a style="" href="<?=site_url('admin_notes');?>">примечания</a></li>
              <li <?=(preg_match("/news/",$server_url))?' class="active"':''?>><a style="" href="<?=site_url('admin_item');?>/news">новости</a></li>
              <li <?=(preg_match("/partners/",$server_url))?' class="active"':''?>><a style="" href="<?=site_url('admin_item');?>/partners">партнерам</a></li>
              <li <?=(preg_match("/faq/",$server_url))?' class="active"':''?>><a style="" href="<?=site_url('admin_item');?>/faq">faq</a></li>
              <li <?=(preg_match("/statistic/",$server_url))?' class="active"':''?>><a style="" href="<?=site_url('admin_statistic');?>">статистика гости</a></li>
              <li <?=(preg_match("/order/",$server_url))?' class="active"':''?>><a style="" href="<?=site_url('admin_order');?>">ввод/вывод</a></li>
            </ul>
            <ul class="navbar-nav">
              <li class="" style="border: none;"><h3 class="m-0 "><a href="<?=site_url('admin');?>">Привет, <?=$username;?></a></h3></li>
              <li class=""><?=anchor('admin_logout', 'Выйти', 'class="dropdown-toggle"');?></li>
            </ul>
          </div>
        </div><!-- /.container-fluid -->
      </nav>
      <h1 class="text-center"><?=$title; ?></h1>
    </header>
    <div class="animated hiding" data-animation="fadeIn" data-delay="200">
