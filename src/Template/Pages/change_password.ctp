<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?= __('Thông tin thành viên')?></h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?=$this->Url->build('/')?>"><?= __('Trang chủ')?></a></li>
                    <li><a href="<?=$this->Url->build('/')?>member/profile"><?= __('Trang thành viên')?></a></li>
                    <li class="active"><?= __('Đổi mật khẩu')?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="slice bg-3">
    <div class="w-section inverse shop">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="w-section inverse">
                        <div class="w-section inverse">

                            <div class="w-box sign-in-wr bg-5">
                                <div class="form-header">
                                    <h2><?= __('Đổi mật khẩu')?></h2>
                                </div>
                                <div class="form-body">
                                    <form class="form-light padding-15" enctype="multipart/form-data" id="User-form" action="<?=$this->Url->build('/')?>member/changepassword" method="post">                  <div class="alert alert-danger" id="User-form_es_" style="display:none">
                                            <ul><li>dummy</li></ul></div>                 <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><?= __('Xác nhận mật khẩu hiện tại')?><span class="must" >*</span></label>
                                                    <input size="32" maxlength="32" class="form-control" name="current_password" id="User_current_password" type="password" /><div class="errorMessage" id="User_current_password_em_" style="display:none"></div> </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><?= __('Mật khẩu mới ')?><span class="must" >*</span></label>
                                                    <input size="32" maxlength="32" class="form-control" name="new_password" id="User_new_password" type="password" /><div class="errorMessage" id="User_new_password_em_" style="display:none"></div> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><?= __('Nhập lại mật khẩu mới')?> <span class="must" >*</span></label>
                                                    <input size="32" maxlength="32" class="form-control" name="renew_password" id="User_renew_password" type="password" /><div class="errorMessage" id="User_renew_password_em_" style="display:none"></div> </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <p style="padding: 0 15px; color:red;"><?=$err?></p>
                                            <p style="padding: 0 15px; color:green;"><?=$tb?></p>
                                            <div class="col-md-12"> <button class="btn btn-three pull-right" type="submit"><?= __('Thay đổi')?></button> </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="form-footer">
                                    <p><?= __('Bạn vui lòng sử dụng mật khẩu mới vào lần đăng nhập kế tiếp.')?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <?php
                    echo $this->element('frontend/box-member');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>