<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?= __('Khôi phục mật khẩu') ?></h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="/"><?= __('Trang chủ') ?></a></li>
                    <li class=""><?= __('Khôi phục mật khẩu') ?></li>
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
                    <div class="w-section inverse">
                        <div class="w-box sign-in-wr bg-5">
                            <div class="form-header">
                                <h2><?= __('Khôi phục mật khẩu') ?></h2>
                            </div>
                            <div class="form-body">
                                <p> <?= __('Vui lòng điền thông tin đăng nhập bên dưới') ?> </p>
                                <?php
                                echo $this->Form->create('Member', [
                                    'class' => 'form-light padding-15'
                                ]);
                                ?>
                                <div class="form-group">
                                    <label><?= __('New password') ?></label>
                                    <span class="color-red">*</span>
                                    <?= $this->Form->input('password', [
                                        'class' => 'form-control',
                                        'placeholder' => __('New password'),
                                        'div' => false,
                                        'label' => false
                                    ]) ?>

                                </div>
                                <div class="row">
                                    <div class="col-md-6"> <button class="btn btn-two " type="submit"><?= __('Khôi phục mật khẩu') ?></button> </div>
                                </div>
                                <?php echo $this->Form->end(); ?>
                            </div>
                            <div class="form-footer">
                                <p><?= __('Bạn đã có tài khoản') ?> <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'memberLogin']); ?>"><?= __('đăng nhập tại đây') ?></a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>