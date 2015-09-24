<?= $this->Html->css('../frontend/assets/boomerang_theme/css/update.css') ?>

<section class="slice bg-3 animate-hover-slide">
    <div class="w-section">
        <div class="container">
            <div class="row">
                <?= $this->element('frontend/sidebar') ?>
                <!-- Begin Container cennter -->
                <div class="col-md-6">
                    <h3 class="section-title"><?= __('List Supporter') ?></h3>
                    <table class="table table-bordered table-hover table-responsive">
                        <tbody>
                        <tr>
                            <th><?= __('Industry')?></th>
                            <th><?= __('Supporter Name')?></th>
                            <th><?= __('City')?></th>
                            <th></th>
                        </tr>
                        <?php foreach($supporters as $supporter):?>
                            <?php
                            $city = null;
                            $listCity = array();
                            foreach($supporter->supporter_cities as $item) {
                                $listCity[] = $cities[$item->city_code];
                            }
                            if($listCity) {
                                $city = implode(', ', $listCity);
                            }


                            $industry = null;
                            if(isset($industries[$supporter->industry_code])) $industry = $industries[$supporter->industry_code];
                            ?>
                            <tr>
                                <td><?= $industry?></td>
                                <td><?= $supporter->first_name.' '.$supporter->last_name?></td>
                                <td><?= $city?></td>
                                <td>
                                    <?= $this->Html->link(__('Chi tiết'), ['controller' => 'Pages', 'action' => 'detailSupporter', $supporter->id],['class' => 'btn btn-xs btn-two pull-right','title' => __('Thông tin chi tiết')]) ?>
                                </td>
                            </tr>
                        <?php endforeach?>
                        </tbody>
                    </table>
                    <ul class="pagination">
                        <ul class="pagination" id="pagelink">
                            <?= $this->Paginator->first(__('First')); ?>
                            <?= $this->Paginator->prev(' « '); ?>
                            <?= $this->Paginator->numbers(); ?>
                            <?= $this->Paginator->next(' » '); ?>
                            <?= $this->Paginator->last(__('Last')); ?>
                        </ul>
                    </ul>
                </div>
                <!-- End Container cennter -->
                <div class="col-md-3">
                    <?= $this->element('frontend/box-member') ?>
                    <?= $this->element('frontend/sidebar-right') ?>

                </div>
                <!-- End Container cennter -->
            </div>
        </div>
    </div>
</section>
