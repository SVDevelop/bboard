<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="<?=$lang_prefix;?>">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Bboard">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/components/tab.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/components/dropdown.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/components/transition.min.css">
        <?=link_tag('assets/css/custom.css');?>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <title>My boards</title>
    </head>

    <body class="blackBack">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="customNavbar">
            <a class="navbar-brand" href="<?=base_url($lang_prefix.'/myboards')?>"><i class="far fa-sticky-note"></i>&nbsp;BBoard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsed" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsed">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarBackground" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=lang('menu_background');?></a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarBackground">
                            <button class="dropdown-item text-light bg-dark" type="button" id="blackBack"><?=lang('menu_background_black');?></button>
                            <button class="dropdown-item text-light bg-dark" type="button" id="back1"><?=lang('menu_background_1');?></button>
                            <button class="dropdown-item text-light bg-dark" type="button" id="back2"><?=lang('menu_background_2');?></button>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item align-items-center">
                        <div class="dropdown lang-select show">
                            <a class="btn btn-link dropdown-toggle" href="#" role="button" id="dropdownLanguageSelector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="en d-none"><img src="<?=base_url('assets/img/gb.png');?>" alt=""></span>
                                <span class="ru d-none"><img src="<?=base_url('assets/img/ru.png');?>" alt=""></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownLanguageSelector">
                                <a class="dropdown-item" onclick="languageChange('russian')" href="javascript:void(0);"><img src="<?=base_url('assets/img/ru.png');?>" alt=""></a>
                                <a class="dropdown-item" onclick="languageChange('english')" href="javascript:void(0);"><img src="<?=base_url('assets/img/gb.png');?>" alt=""></a>
                            </div>
                        </div>
                    </li>
                    <!--<li class="nav-item">
                        <a href="#" class="nav-link column">Кол-во колонок(только на пк)&nbsp;<i class="fas fa-columns"></i></a>
                    </li>-->
                    <li class="nav-item">
                        <a id="usernameNavPlaceholder" href="javascript:void(0)" class="nav-link">user</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link" id="logoutSubmit"><i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- modals -->
        <div class="modal fade" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="mainModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mainModalLabel">Заголовок</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="mainModalMessage"></div>
                        <form id="mainModalForm" name="mainModalForm">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modals -->

        