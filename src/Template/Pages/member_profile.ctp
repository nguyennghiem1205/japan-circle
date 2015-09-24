

<div class="pg-opt pin">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?= __('Thông tin thành viên')?></h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?=$this->Url->build('/')?>"><?= __('Trang chủ')?></a></li>
                    <li class="active"><?= __('Trang thành viên')?></li>
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
                        <div class="row">
                            <div class=" col-sm-7">
                                <h3 class="section-title"><?= __('Thông tin doanh nghiệp ')?></h3>
                                <table class="table-totals">
                                    <tbody>
                                    <tr>
                                        <td><strong><?= __('Tên doanh nghiệp')?></strong>:</td>
                                        <td><?=$dataMemberApi['Member']['company']?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Tên giao dịch ')?></strong>:</td>
                                        <td><?=$dataMember['com_trading_name_'.$fieldLanguage]?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Tên viết tắt')?></strong>:</td>
                                        <td><?=$dataMember['com_short_name_'.$fieldLanguage]?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Mã số thuế')?></strong>:</td>
                                        <td><?=$dataMember['com_tax_code']?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Địa chỉ')?></strong>:</td>
                                        <td><?=$dataMember['address_'.$fieldLanguage]?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Quận / TP')?></strong>:</td>
                                        <td><?=$dataMemberApi['Prefecture']['name_'.$fieldLanguage]?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Điện thoại')?></strong>:</td>
                                        <td><?=$dataMemberApi['Member']['tel']?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Fax')?></strong>:</td>
                                        <td><?=$dataMemberApi['Member']['fax']?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Email:')?></strong></td>
                                        <td><?=$dataMemberApi['Member']['email']?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Website')?></strong>:</td>
                                        <td><?=$dataMemberApi['Member']['site_url']?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Người liên hệ')?></strong>:</td>
                                        <td><?=$dataMemberApi['Member']['first_name'].' '.$dataMemberApi['Member']['last_name']?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Năm thành lập')?></strong>:</td>
                                        <td><?=strtotime($dataMember['com_established'])?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Vốn điều lệ')?></strong>:</td>
                                        <td><?=$dataMember['com_capital']?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Số lượng nhân viên')?></strong>:</td>
                                        <td><?=$dataMember['com_staff']?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Loại thành viên')?></strong>:</td>
                                        <td><?= \Cake\Core\Configure::read('Member.type.'.$dataMember['com_level'])?></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a class="btn btn-two" href="<?=$this->Url->build('/')?>member/updateProfile"><i class="fa fa-edit"></i> <?= __('Chỉnh sửa')?></a> </div>
                            <div class="col-sm-5">
                                <h3 class="section-title"><?= __('Thông tin ngành')?></h3>
                                <table class="table-totals">
                                    <tbody>
                                    <tr>
                                        <td><strong><?= __('Phân loại ngành')?></strong>:</td>
                                        <td><?= $categoryIndustry['parent']['name_'.$fieldLanguage]?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?= __('Ngành')?></strong>:</td>
                                        <td><?=$categoryIndustry['name_'.$fieldLanguage];?></td>
                                    </tr>
                                    <?php
                                        $business = '';
                                        if($typeBusiness) {
                                            $business = $typeBusiness['type_name_'.$fieldLanguage];
                                            if(!$business) {
                                                $business = $typeBusiness['type_name_vie'];
                                            }

                                            if(!$business) {
                                                $business = $typeBusiness['type_name_eng'];
                                            }
                                        }
                                    ?>
                                    <tr>
                                        <td><strong><?= __('Loại hình')?></strong>:</td>
                                        <td><?= $business?></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p></p>
                                <h3 class="section-title"><?= __('Hình thức hợp tác')?></h3>
                                <ul class="list-check">
                                    <?php  if(isset($dataMemberApi['Business']) && $dataMemberApi['Business']):?>
                                    <?php foreach($dataMemberApi['Business'] as $bs): ?>
                                        <li><i class="fa fa-check"></i><?=$bs?></li>
                                    <?php endforeach; ?>
                                    <?php endif?>
                                </ul>
                                <h3 class="section-title"><?= __('Các dịch vụ cần nhất:')?></h3>
                                <ul class="list-check">
                                    <?php if(isset($dataMemberApi['WantToGet']) && $dataMemberApi['WantToGet']):?>
                                    <?php
                                    foreach($dataMemberApi['WantToGet'] as $wt):
                                        ?>
                                        <li><i class="fa fa-check"></i><?=$wt?></li>
                                    <?php endforeach; ?>
                                    <?php endif?>
                                </ul>
                                <a class="btn btn-two" href="<?=$this->Url->build('/')?>member/updateProfile"><i class="fa fa-edit"></i> <?= __('Chỉnh sửa')?></a> </div>
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