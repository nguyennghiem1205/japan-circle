<h3 class="section-title"><?= __('Tìm kiếm')?></h3>
<div class="widget">
    <form id="gsearch" action="<?= $this->Url->build('/') ?>" method="get">
        <div class="input-group">
            <input size="25" maxlength="185" class="form-control" placeholder="<?= __('Tìm kiếm') ?>" name="q" id="q" type="text">
            <span class="input-group-btn"> <input class="btn btn-two" type="submit" name="yt0" value="<?= __('Tìm') ?>"></span>
        </div>
    </form>
</div>
<h3 class="section-title">
    <?= $this->Html->link(__('Event'),['controller' => 'pages', 'action' => 'activities'])?>
</h3>
<div class="widget">
    <div class="row">
        <?php foreach($listEvents as $item):?>
            <?php
                $url = Core::generateUrl('activityIndex', [
                    'name' => $item['name_'.$fieldLanguage],
                    'id' => $item['id']
                ]);
            ?>
            <div class="col-md-12 margin-b-10">
                <a href="<?=  $url?>" title="<?= $item['name_'.$fieldLanguage]?>">
                    <?= $this->Core->Image('activities/'.$item['image'],263, 186)?>
                </a>
            </div>
        <?php endforeach?>
    </div>
</div>

<h3 class="section-title">
    <?= $this->Html->link(__('Magazine'),['controller' => 'pages', 'action' => 'events'])?>
</h3>
<div class="widget">
    <div class="row">
        <?php foreach ($listMagazines as $magazine):?>
            <div class="col-md-12 margin-b-10">
                <a href="<?= $this->Url->build('/upload/Events/'.$magazine['file']) ?>">
                    <?= $this->Core->Image('Events/'.$magazine['image'],263, 186)?>
                </a>
            </div>
        <?php endforeach?>
    </div>
</div>

<?php
foreach ($advertisements as $ad):
    if ($ad['position'] != ADV_POSITION_RIGHT) {
        continue;
    }
    ?>

    <h3 class="section-title"><?= $ad['name_'.$fieldLanguage] ?></h3>
    <div class="widget">
        <div class="row">
            <div class="col-md-12 margin-b-10">
                <?= $ad['content'] ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php if ($this->request->action == 'index' && isset($comments) && $comments): ?>
<h3 class="section-title"><?= __('Ý kiến thành viên') ?></h3>
<div class="row">
    <div class="col-md-12 col-sm-12 " >
        <ul class="popular scrollbar-inner" >
            <?php
            foreach ($comments as $comment) {
                echo '<li>';
                echo '<a href="#"><strong>'.$comment['title'].'</strong></a>';
                echo '<i>'.$comment['author_info'].'</i>';
                echo $comment['content'];
                echo '</li>';
            }
            ?>
        </ul>
    </div>
</div>
<?php endif; ?>