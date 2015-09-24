<h3 class="section-title"><?= $titleLayout; ?></h3>
<ul class="list-listings blog-list">
    <?php
    $action = 'newsIndex';
    $model = 'News';
    $field = 'name_'.$fieldLanguage;
    if(isset($cooperation)){
        if ($cooperation!=null) {
            $model = 'Inquiries';
            $action = 'inquiryIndex';
            $field = 'title_'.$fieldLanguage;
        }
    }else{
        $cooperation=null;
    }
    if (isset($activities)){
        if ($activities){
            $model = 'activities';
            $action = 'activityIndex';
            $field = 'name_'.$fieldLanguage;
        }
    }
    foreach ($data as $item):
        $status = '';
        if($cooperation != null && $item['status'] == INQUIRY_PARTNER) $status = __('[Đã có đối tác]');
        $name = $item[$field];
        $url = Core::generateUrl($action, [
            'name' => $name,
            'id' => $item['id']
        ]);
    ?>
    <li class="">
        <div class="listing-image ">
            <a title="<?= $name ?>" href="<?= $url ?>">
                <?= $this->Core->image($model.'/'.$item['image'], 400, 300, ['class' => 'img-responsive', 'alt' => $name, 'base' => true]) ?>
            </a>
        </div>
        <div class="listing-body">
            <h3>
                <a class="link" title="<?= $name ?>" href="<?= $url ?>"><?= $name ?><span style="color:#ff0000"><?= $status?></span></a>
            </h3>
            <?php
            if ($model == 'News') {
                $timeCreated = null;
                if (is_object($item['created'])) {
                    $timeCreated = $item['created']->i18nFormat('dd/MM/YYYY');
                }
                echo '<span class="list-item-info">'.$timeCreated.__(' Có ').(int)$item['total_view'].__(' lượt người xem').'</span>';
            }
            ?>

            <p>
                <?php
                $descriptionField = 'content_'.$fieldLanguage;
                if ($model == 'News') {
                    $descriptionField = 'description_'.$fieldLanguage;
                }

                echo $this->Text->truncate(strip_tags($item[$descriptionField]), 150)
                ?>
            </p>
            <p>
                <a class="btn btn-xs btn-two pull-right" title="<?= $name ?>" href="<?= $url ?>"><?= __('đọc thêm') ?></a>
            </p>
        </div>
    </li>
    <?php endforeach; ?>
</ul>
<ul class="pagination">
    <?php
    if ($cooperation) {
        $this->Paginator->options([
            'url' => [
                'controller' => 'Pages',
                'action' => 'cooperations',
                'sort' => false,
                'direction' => false,
                'page' => $this->Paginator->current()
            ]
        ]);
    } elseif($this->request->action == 'activities'){
        $this->Paginator->options([
            'url' => [
                'controller' => 'Pages',
                'action' => 'activities',
                'sort' => false,
                'direction' => false,
                'page' => $this->Paginator->current()
            ]
        ]);
    }else{
            $this->Paginator->options([
                'url' => [
                    'controller' => 'Pages',
                    'action' => 'newsCategory',
                    'slug' => Core::generateSlug($newsCategory['name_'.$fieldLanguage]),
                    'id' => $newsCategory['id'],
                    'sort' => false,
                    'direction' => false,
                    'page' => $this->Paginator->current()
                ]
            ]);
    }
    ?>
    <ul class="pagination" id="pagelink">
        <?= $this->Paginator->first(__('First')); ?>
        <?= $this->Paginator->prev(' « '); ?>
        <?= $this->Paginator->numbers(); ?>
        <?= $this->Paginator->next(' » '); ?>
        <?= $this->Paginator->last(__('Last')); ?>
    </ul>
</ul>