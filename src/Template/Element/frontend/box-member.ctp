<?php

?>

<?php
$dataMember=$this->request->session()->read('Member');
$rate = 2;
$lang = count(explode(',',$dataMember['com_lang_chosen']));
if($dataMember['image_product_1'] || $dataMember['image_product_2'] || $dataMember['image_product_3'] || $dataMember['image_product_4'] || $dataMember['image_product_5']) {
    $rate = 3;
    if($lang == 2) {
        $rate = 4;
    } elseif($lang > 2) {
        $rate = 5;
    }
}
if($dataMember==null){
?>
<div class="row w-section pricing-plans inverse">
    <div class="col-md-12">



            <div class="w-box popular">
                <div class="plan-header bg-2"> <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'memberLogin']) ?>">
                        <h2 class="plan-title"><i class="fa fa-sign-in"></i> <?= __('Đăng nhập')?> </h2>
                    </a> <small><?= __('Nếu bạn đã là thành viên Japan Circle')?></small>
                </div>
            </div>
            <div class="w-box popular">
                <div class="plan-header bg-2"> <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'memberRegister']) ?>">
                        <h2 class="plan-title"><i class="fa fa-pencil-square-o"></i> <?= __('Đăng ký')?> </h2>
                    </a> <small><?= __('Bạn chưa là thành viên Japan Circle')?></small> </div>
            </div>


    </div>
</div>

<?php } else{ ?>
    <?php if($dataMember->image): ?>
    <div class="widget">
        <?= $this->Core->image('Members/'.$dataMember->image, 0, 0, ['base' => true])?>
    </div>
    <?php endif; ?>
    <div class="rateStart" data-rate-start="<?= $rate?>"></div>
    <div class="widget">
        <h3 class="section-title"><?= __('Chức năng thành viên') ?></h3>
        <ul class="categories">
            <?php
                $ac= $this->request['action'];
                $active=array('','','','');
                switch($ac){
                    case 'memberProfile':
                        $active=array('','','','');
                        $active[0]='class="active"';
                        break;
                    case 'memberUpdateProfile':
                        $active=array('','','','');
                        $active[0]='class="active"';
                        break;
                    case 'memberProduct':
                        $active=array('','','','');
                        $active[1]='class="active"';
                        break;
                    case 'memberInquiries':
                        $active=array('','','','');
                        $active[2]='class="active"';
                        break;
                    case 'editInquiry':
                        $active=array('','','','');
                        $active[2]='class="active"';
                        break;
                    case 'addInquiry':
                        $active=array('','','','');
                        $active[2]='class="active"';
                        break;
                    case 'changePassword':
                        $active=array('','','','');
                        $active[3]='class="active"';
                        break;
                }
            ?>
            <li><a <?=$active[0]?> href="<?=$this->Url->build('/')?>member/profile"><i class="fa fa-edit"></i> <?= __('Thông tin công ty')?></a></li>
            <li><a <?=$active[1]?> href="<?=$this->Url->build('/')?>member/products"><i class="fa fa-list-ol"></i> <?= __('Sản phẩm và dịch vụ')?></a></li>
            <li><a <?=$active[2]?> href="<?=$this->Url->build('/')?>member/inquiries"><i class="fa  fa-compress"></i> <?= __('Nhu cầu hợp tác')?></a> </li>
            <li><a <?=$active[3]?> href="<?=$this->Url->build('/')?>member/changepassword"><i class="fa  fa-unlock-alt"></i> <?= __('Đổi mật khẩu')?></a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'memberLogout']) ?>"><i class="fa fa-sign-out"></i> <?= __('Thoát') ?></a></li>
        </ul>
    </div>
<?php } ?>

