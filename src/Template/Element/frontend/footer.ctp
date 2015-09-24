<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="col">
                    <h4><?= __('Liên hệ')?></h4>
                    <?= $settings['footer_left_'.$fieldLanguage] ?>
                </div>
            </div>
            <div class="col-md-6 right">
                <h4>&nbsp</h4>
                <div class="col">
                    <?= $settings['footer_right_'.$fieldLanguage] ?>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-9 copyright"> <?= $settings['copy_right'] ?> </div>
        </div>
    </div>
</footer>