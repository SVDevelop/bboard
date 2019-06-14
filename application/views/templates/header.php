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
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <?=link_tag('assets/css/custom.css');?>
        <title>Bboard</title>
    </head>

    <body class="blackBack">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="customNavbar">
            <a class="navbar-brand" href="<?=base_url($lang_prefix.'/');?>"><i class="far fa-sticky-note"></i>&nbsp;BBoard</a>
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
                    <!--<li class="nav-item">
                        <a href="#" class="nav-link column">Кол-во колонок(только на пк)&nbsp;<i class="fas fa-columns"></i></a>
                    </li>-->
                    <li class="nav-item align-items-center">
                        <div class="dropdown lang-select show">
                            <a class="btn btn-link dropdown-toggle" href="#" role="button" id="dropdownLanguageSelector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="en d-none"><img src="<?=base_url('assets/img/gb.png');?>" alt=""></span>
                                <span class="ru d-none"><img src="<?=base_url('assets/img/ru.png');?>" alt=""></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownLanguageSelector">
                                <a class="dropdown-item" onclick="languageChange('russian')" ><img src="<?=base_url('assets/img/ru.png');?>" alt=""></a>
                                <a class="dropdown-item" onclick="languageChange('english')" ><img src="<?=base_url('assets/img/gb.png');?>" alt=""></a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown login-dropdown" id="navbarLogin">
                        <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=lang('menu_form');?></a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarLogin">
                            <form id="formLogin" method="post" action="login">
                                <div class="form-message"></div>
                                <div class="form-group">
                                    <label for="inputEmail" class="text-light"><?=lang('menu_label_email');?></label>
                                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="" name="identity">
                                </div>
                                <div class="form-group">
                                    <label for="inputLoginPassword" class="text-light"><?=lang('menu_label_password');?></label>
                                    <input type="password" class="form-control" id="inputLoginPassword" placeholder="" name="password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
                                    <label class="form-check-label text-light" for="rememberCheck"><?=lang('menu_checkbox');?></label>
                                    <a href="<?=base_url($lang_prefix.'/forgot_password');?>" class="ml-2 gosite"><?=lang('menu_recovery_link');?></a>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="loginSubmit" class="btn btn-primary align-self-end gosite"><?=lang('menu_form');?></button>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#registrationModal" class="btn btn-warning align-self-end gosite"><?=lang('menu_register');?></a>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h5 class="modal-title ml-auto text-light"><?=lang('create_user_heading');?></h5>
                        <button type="button" class="close bg-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="formRegistration" method="post" action="register">
                        <div class="form-message text-center"></div>
                        <div class="modal-body text-center">
                            <div class="form-group">
                                <label for="inputRegisterUsername" class="text-light"><?=lang('create_user_username');?></label>
                                <input type="text" class="form-control" id="inputRegistrationUsername" placeholder="" name="username">
                            </div>
                            <div class="form-group">
                                <label for="inputRegistrationEmail" class="text-light"><?=lang('create_user_email_label');?></label>
                                <input type="email" class="form-control" id="inputRegistrationEmail" aria-describedby="emailHelp" placeholder="" name="email">
                            </div>
                            <div class="form-group">
                                <label for="inputRegistrationPassword" class="text-light"><?=lang('create_user_password_label');?></label>
                                <input type="password" class="form-control" id="inputRegistrationPassword" placeholder="" name="password">
                            </div>
                            <div class="form-group">
                                <label for="inputRegistrationConfirmPassword" class="text-light"><?=lang('create_user_password_confirm_label');?></label>
                                <input type="password" class="form-control" id="inputRegistrationConfirmPassword" placeholder="" name="password_confirm">
                            </div>
                            <div class="form-group">
                                <label for="inputRegistrationFirstName" class="text-light"><?=lang('create_user_fname_label');?></label>
                                <input type="text" class="form-control" id="inputRegistrationFirstName" placeholder="" name="first_name">
                            </div>
                            <div class="form-group">
                                <label for="inputRegistrationLastName" class="text-light"><?=lang('create_user_lname_label');?></label>
                                <input type="text" class="form-control" id="inputRegistrationLastName" placeholder="" name="last_name">
                            </div>
                        </div>
                        <div class="modal-footer"> 
                            <button type="button" id="registrationSubmit" class="btn btn-success mx-auto"><?=lang('create_user_submit_btn');?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid">