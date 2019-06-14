<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!DOCTYPE html>
<html lang="<?=$current_lang;?>">
  <head>
    <title><?=$title;?></title>
    <meta http-equiv="Content-Language" content="<?=$current_lang;?>">
    <meta name=viewport content="width=980">
    <meta property="og:title" content="Bull-mine - The most powerful cloud-mining!">
<meta property="og:type" content="website">
<meta property="og:url" content="http://bull-mine.com">
<meta property="og:image" content="http://bull-mine.com/assets/images/logo.png">
<meta property="og:image:type" content="image/png">
<meta property="og:locale" content="">
<meta property="og:description" content="Новый, облачный майнинг криптовалют с возможностью распределения мощностей. Зарабатывайте свои 400% годовых при любом вкладе! Получите бонусные 25 Gh/s бесплатно!">
       
    <?php if (preg_match('/bull-mine.com\/$/',current_url())) { ?>
      <meta name="robots" content="index, nofolow">
      <meta name="Description" content="<?=lang('menu_meta_description');?>">
      <meta name="keywords" content="<?=lang('menu_meta_keywords');?>">
    <?php }else{ ?>
      <meta name="robots" content="noindex,nofollow">
      <link rel=”canonical” href=”https://bull-mine.com″/>
    <?php } ?>
    <script src="<?=base_url();?>assets/js/jquery-2.2.0.min.js"></script>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <?=link_tag('assets/css/bootstrap.min.css');?>
    <?=link_tag('assets/css/animate.css');?>
    <?=link_tag('assets/css/application.css');?>
    <link rel="icon" href="<?=base_url()?>/assets/images/favicon.ico">
       
    <link rel=”alternate” hreflang=”en” href=”http://bullmine.com/” />
    <link rel=”alternate” hreflang=”zh” href=”http://bullmine.com/zh/” />
    <link rel=”alternate” hreflang=”ru” href=”http://bullmine.com/ru/” />
    <link rel=”alternate” hreflang=”de” href=”http://bullmine.com/de/” />
    <link rel=”alternate” hreflang=”es” href=”http://bullmine.com/es/” />    
  </head>
  <body>
    <div class="container">
      <div class="language">
        <div class="language__wrapper">
          <a href="<?=site_url('en');?>" class="language__item language__item--en <?=($current_lang == "en") ? 'language__item--active' : '' ?>"></a>
          <a href="<?=site_url('zh');?>" class="language__item language__item--chinese <?=($current_lang == "zh") ? 'language__item--active' : '' ?>"></a>
          <a href="<?=site_url('ru');?>" class="language__item language__item--ru <?=($current_lang == "ru") ? 'language__item--active' : '' ?>"></a>
          <a href="<?=site_url('es');?>" class="language__item language__item--spanish <?=($current_lang == "es") ? 'language__item--active' : '' ?>"></a>
          <a href="<?=site_url('de');?>" class="language__item language__item--german <?=($current_lang == "de") ? 'language__item--active' : '' ?>"></a>
        </div>
      </div>
      <header class="header">
        <div class="header__wrapper">
          <nav class="header__nav">
            <ul class="main-nav">
              <li class="main-nav__item main-nav__item--news"><a href="<?=site_url('news');?>" class="main-nav__link"><?=lang('menu_news');?></a></li>
              <li class="main-nav__item main-nav__item--stat"><a href="<?=site_url('statistic');?>" class="main-nav__link"><?=lang('menu_statistic');?></a></li>
              <li class="main-nav__item main-nav__item--calc"><a href="<?=site_url('calculations');?>" class="main-nav__link"><?=lang('menu_calculation');?></a></li>
            </ul>
          </nav>
          <div class="header__logo"><a href="<?=site_url();?>" class="logo"><img src="<?=base_url();?>assets/images/logo.png" alt="" class="logo__img"></a></div>
          <nav class="header__nav">
            <ul class="main-nav">
              <li class="main-nav__item main-nav__item--help"><a href="<?=site_url('support');?>" class="main-nav__link"><?=lang('menu_support');?></a></li>
              <li class="main-nav__item main-nav__item--partner"><a href="<?=site_url('partners');?>" class="main-nav__link"><?=lang('menu_partners');?></a></li>
              <li class="main-nav__item main-nav__item--faq"><a href="<?=site_url('faq');?>" class="main-nav__link"><?=lang('menu_faq');?></a></li>
            </ul>
          </nav>
        </div>
      </header>