<div class="col-md-3">
    <?= $this->fetch('sidebar'); ?>

    <h3 class="section-title"><?= __('Thành viên Việt nam')?></h3>
    <div class="widget">
        <ul class="categories highlight">
            <?php
            foreach ($leftIndustries as $industry):
                if ($industry['Industry']['parent_id']) continue;
            ?>
            <li><?= $this->Html->link($industry['Industry']['name_'.$fieldLanguage].' ('.$industry['Industry']['count_member'].')', ['controller' => 'Pages', 'action' => 'listMember', 'code' => $industry['Industry']['code']]) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php
    foreach ($advertisements as $ad):
        if ($ad['position'] != ADV_POSITION_LEFT) {
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

    <h3 class="section-title"><?= __('Facebook')?></h3>
    <div class="widget">
        <div class="w-box">
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=<?= urlencode(trim($settings['facebook_link'])) ?>&amp;width=263&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=false&amp;appId=589756991063437" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:263px; height:290px;" allowTransparency="true"></iframe>
        </div>
    </div>
</div>
<!-- Begin Container cennter -->