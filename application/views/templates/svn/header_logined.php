<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?=$title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=980">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <meta name=“robots” content=“none”>
    <?=link_tag('assets/css/bootstrap.min.css');?>
    <?=link_tag('assets/css/animate.css');?>
    <?=link_tag('assets/css/application.css');?>
    <link rel="icon" href="<?=base_url()?>/assets/images/favicon.ico">
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery-2.2.0.min.js"></script>
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
              <li class="main-nav__item main-nav__item--mining"><a href="<?=site_url('home');?>" class="main-nav__link"><?=lang('menu_mining');?></a></li>
              <li class="main-nav__item main-nav__item--replenish"><a href="<?=site_url('replenish');?>" class="main-nav__link"><?=lang('menu_replenish');?></a></li>
              <li class="main-nav__item main-nav__item--replenish"><a href="<?=site_url('exchange');?>" class="main-nav__link"><?=lang('menu_exchange');?></a></li>
            </ul>
          </nav>
          <div class="header__logo"><a href="<?=site_url();?>" class="logo"><img src="<?=base_url();?>assets/images/logo.png" alt="" class="logo__img"></a></div>
          <nav class="header__nav">
            <ul class="main-nav">
              <li class="main-nav__item main-nav__item--output"><a href="<?=site_url('withdrawal');?>" class="main-nav__link"><?=lang('menu_withdrawal');?></a></li>
              <li class="main-nav__item main-nav__item--partner"><a href="<?=site_url('partner');?>" class="main-nav__link"><?=lang('menu_partners');?></a></li>
              <li class="main-nav__item main-nav__item--calc-left"><a href="<?=site_url('calculation');?>" class="main-nav__link"><?=lang('menu_calculation');?></a></li>
            </ul>
          </nav>
        </div>
      </header>
