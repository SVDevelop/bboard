<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col" id="pagesDiv">
            <div class="ui top attached tab segment active container-fluid" data-tab="Первая доска">
                <div class="boardHeader text-light row">
                    <div class="col-8">
                        <div class="boardName">Первая доска</div>
                        <div class="boardChangeName hidden">
                            <input class="form-control form-control-sm" type="text" placeholder="Первая доска" value="Первая доска">
                        </div>
                        <div class="boardDescription">Здесь не будет никакого описания</div>
                        <div class="boardChangeDescription hidden">
                            <input class="form-control form-control-sm" type="text" placeholder="Здесь не будет никакого описания" value="Здесь не будет никакого описания">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="boardControl">
                            <div class="ui  icon buttons">
                                <button class="ui icon button " id="column-handler"><i class="fas fa-table"></i></button>
                                <button class="ui icon button addLink"><i class="plus icon"></i></button>
                                <button class="ui icon button editBoard"><i class="cogs icon"></i></button>
                                <button class="ui icon button deleteBoard"><i class="trash icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boardItems row">
                    <div class="boardItem col-md-4 col-max-2">
                        <div class="ui dropdown button" tabindex="0">
                            <img src="<?=base_url('assets/img/icon3.png');?>" class="icon">
                            <span class="text">Первый сайт</span>
                            <i class="caret down icon dropdown"></i>
                            <div class="menu" tabindex="-1">
                                <div class="header">
                                    <i class="external alternate icon"></i>
                                    Первый сайт
                                </div>
                                <div class="scrolling menu">
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui red empty circular label"></div>
                                        Первая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui blue empty circular label"></div>
                                        Вторая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui black empty circular label"></div>
                                        Третья ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui orange empty circular label"></div>
                                        Четвертая ссылка
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boardItem col-md-4 col-max-2">
                        <div class="ui dropdown button compact" tabindex="0">
                            <img src="<?=base_url('assets/img/icon3.png');?>" class="icon">
                            <span class="text">Второй сайт</span>
                            <i class="caret down icon dropdown"></i>
                            <div class="menu" tabindex="-1">
                                <div class="header">
                                    <i class="external alternate icon"></i>
                                    Второй сайт
                                </div>
                                <div class="scrolling menu">
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui red empty circular label"></div>
                                        Первая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui blue empty circular label"></div>
                                        Вторая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui black empty circular label"></div>
                                        Третья ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui orange empty circular label"></div>
                                        Четвертая ссылка
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boardItem col-md-4 col-max-2">
                        <div class="ui button compact">
                            <img src="<?=base_url('assets/img/icon3.png');?>" class="icon">
                            <a href="http://blahblahblah.zzz.com.ua/" target="_blank">Третий сайт</a>
                        </div>
                    </div>
                    <div class="boardItem col-md-4 col-max-2">
                        <div class="ui dropdown button compact" tabindex="0">
                            <img src="<?=base_url('assets/img/icon3.png');?>" class="icon">
                            <span class="text">Четвертый сайт</span>
                            <i class="caret down icon dropdown"></i>
                            <div class="menu" tabindex="-1">
                                <div class="header">
                                    <i class="external alternate icon"></i>
                                    Четвертый сайт
                                </div>
                                <div class="scrolling menu">
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui red empty circular label"></div>
                                        Первая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui blue empty circular label"></div>
                                        Вторая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui black empty circular label"></div>
                                        Третья ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui orange empty circular label"></div>
                                        Четвертая ссылка
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boardItem col-md-4 col-max-2">
                        <div class="ui dropdown button compact" tabindex="0">
                            <img src="<?=base_url('assets/img/icon3.png');?>" class="icon">
                            <span class="text">Пятый сайт</span>
                            <i class="caret down icon dropdown"></i>
                            <div class="menu" tabindex="-1">
                                <div class="header">
                                    <i class="external alternate icon"></i>
                                    Пятый сайт
                                </div>
                                <div class="scrolling menu">
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui red empty circular label"></div>
                                        Первая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui blue empty circular label"></div>
                                        Вторая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui black empty circular label"></div>
                                        Третья ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui orange empty circular label"></div>
                                        Четвертая ссылка
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boardItem col-md-4 col-max-2">
                        <div class="ui dropdown button compact" tabindex="0">
                            <img src="<?=base_url('assets/img/icon3.png');?>" class="icon">
                            <span class="text">n-сайт</span>
                            <i class="caret down icon dropdown"></i>
                            <div class="menu" tabindex="-1">
                                <div class="header">
                                    <i class="external alternate icon"></i>
                                    n-сайт
                                </div>
                                <div class="scrolling menu">
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui red empty circular label"></div>
                                        Первая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui blue empty circular label"></div>
                                        Вторая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui black empty circular label"></div>
                                        Третья ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item" a="">
                                        <div class="ui orange empty circular label"></div>
                                        Четвертая ссылка
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boardItem col-md-4 col-max-2">
                        <div class="ui dropdown button compact" tabindex="0">
                            <img src="<?=base_url('assets/img/icon3.png');?>" class="icon">
                            <span class="text">n-сайт</span>
                            <i class="caret down icon dropdown"></i>
                            <div class="menu" tabindex="-1">
                                <div class="header">
                                    <i class="external alternate icon"></i>
                                    n-сайт
                                </div>
                                <div class="scrolling menu">
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui red empty circular label"></div>
                                        Первая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui blue empty circular label"></div>
                                        Вторая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui black empty circular label"></div>
                                        Третья ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item" a="">
                                        <div class="ui orange empty circular label"></div>
                                        Четвертая ссылка
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boardItem col-md-4 col-max-2">
                        <div class="ui dropdown button compact" tabindex="0">
                            <img src="<?=base_url('assets/img/icon3.png');?>" class="icon">
                            <span class="text">n-сайт</span>
                            <i class="caret down icon dropdown"></i>
                            <div class="menu" tabindex="-1">
                                <div class="header">
                                    <i class="external alternate icon"></i>
                                    n-сайт
                                </div>
                                <div class="scrolling menu">
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui red empty circular label"></div>
                                        Первая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui blue empty circular label"></div>
                                        Вторая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui black empty circular label"></div>
                                        Третья ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item" a="">
                                        <div class="ui orange empty circular label"></div>
                                        Четвертая ссылка
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boardItem col-md-4 col-max-2">
                        <div class="ui dropdown button compact" tabindex="0">
                            <img src="<?=base_url('assets/img/icon3.png');?>" class="icon">
                            <span class="text">n-сайт</span>
                            <i class="caret down icon dropdown"></i>
                            <div class="menu" tabindex="-1">
                                <div class="header">
                                    <i class="external alternate icon"></i>
                                    n-сайт
                                </div>
                                <div class="scrolling menu">
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui red empty circular label"></div>
                                        Первая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui blue empty circular label"></div>
                                        Вторая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui black empty circular label"></div>
                                        Третья ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item" a="">
                                        <div class="ui orange empty circular label"></div>
                                        Четвертая ссылка
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boardItem col-md-4 col-max-2">
                        <div class="ui dropdown button compact" tabindex="0">
                            <img src="<?=base_url('assets/img/icon3.png');?>" class="icon">
                            <span class="text">n-сайт</span>
                            <i class="caret down icon dropdown"></i>
                            <div class="menu" tabindex="-1">
                                <div class="header">
                                    <i class="external alternate icon"></i>
                                    n-сайт
                                </div>
                                <div class="scrolling menu">
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui red empty circular label"></div>
                                        Первая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui blue empty circular label"></div>
                                        Вторая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui black empty circular label"></div>
                                        Третья ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item" a="">
                                        <div class="ui orange empty circular label"></div>
                                        Четвертая ссылка
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boardItem col-md-4 col-max-2">
                        <div class="ui dropdown button compact" tabindex="0">
                            <img src="<?=base_url('assets/img/icon3.png');?>" class="icon">
                            <span class="text">n-сайт</span>
                            <i class="caret down icon dropdown"></i>
                            <div class="menu" tabindex="-1">
                                <div class="header">
                                    <i class="external alternate icon"></i>
                                    n-сайт
                                </div>
                                <div class="scrolling menu">
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui red empty circular label"></div>
                                        Первая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui blue empty circular label"></div>
                                        Вторая ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item">
                                        <div class="ui black empty circular label"></div>
                                        Третья ссылка
                                    </a>
                                    <a href="http://blahblahblah.zzz.com.ua/" target="_blank" class="item" a="">
                                        <div class="ui orange empty circular label"></div>
                                        Четвертая ссылка
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui bottom attached tabular menu">
                <a href="#" class="item active" data-tab="Первая доска">Первая доска</a>
                <a href="#" class="item" data-tab="Вторая доска">Вторая доска</a>
                <div class="right menu">
                    <a href="#" class="item addTab" data-toggle="modal" data-target="#addTabModal">
                        <i class="add icon"></i>Новая доска
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="addTabModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Добавить доску</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="boardName" class="col-form-label">Название доски:</label>
                    <input type="text" class="form-control" id="boardName">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="boardDescription" class="col-form-label">Описание доски:</label>
                    <input type="text" class="form-control" id="boardDescription">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-primary" onclick="addBoard()">Создать</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="addLinkModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Добавить сайт или ссылку</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Когда нибудь наверное тут будет возможность добавить сайт или ссылку</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </div>
</div>
