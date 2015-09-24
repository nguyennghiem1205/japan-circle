<!-- End : REgister Text -->
<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?= __('Đăng nhập')?></h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?=$this->Url->build('/')?>"><?= __('Trang chủ')?></a></li>
                    <li class="active"><?= __('Đăng nhập')?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="slice bg-3">
    <div class="w-section inverse">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <?= $this->Flash->render() ?>
                    <div class="w-section inverse">
                        <div class="w-box sign-in-wr bg-5">
                            <div class="form-header">
                                <h2><?= __('Đăng nhập tài khoản')?></h2>
                            </div>
                            <div class="form-body">
                                <?=$this->Form->create(null,['id'=>'login-form','url'=>['controller'=>'Pages','action'=>'memberLogin']])?>
                                    <form role="form" class="form-light padding-15">
                                        <div class="form-group">
                                            <input size="50" maxlength="250" class="form-control" placeholder="<?= __('Email')?>" name="email" id="LoginForm_username" type="text" /> <div class="errorMessage" id="LoginForm_username_em_" style="display:none"></div>                     </div>
                                        <div class="form-group">
                                            <input size="50" maxlength="250" class="form-control" placeholder="<?= __('Mật khẩu')?>" name="password" id="LoginForm_password" type="password" /> <div class="errorMessage" id="LoginForm_password_em_" style="display:none"></div>                    </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="checkbox">
                                                    <input type="checkbox">
                                                    <?= __('Ghi nhớ đăng nhập lần sau')?>
                                                </label>
                                                <p style="color: red"><?=$err?></p>

                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-two pull-right" type="submit"><?= __('Đăng nhập')?></button>
                                            </div>
                                        </div>
                                    </form>
                                <?=$this->Form->end()?>
                            </div>
                            <div class="form-footer">
                                <p><?= __('Đăng ký mới')?> <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'memberRegister']); ?>" style="color: #00bfff"><?= __('nhấp chuột tại đây')?></a> <?= __('Quên mật khẩu ')?> <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'memberForgotPassword']); ?>"><?= __('nhấp chuột tại đây ')?></a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>