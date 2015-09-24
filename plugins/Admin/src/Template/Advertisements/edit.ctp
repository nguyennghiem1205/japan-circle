<?php $this->Html->addCrumb(__('Advertisements'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Advertisements');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Advertisement'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="advertisements row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Edit Advertisement') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($advertisement, ['id' => 'smart-form-register', 'class' => 'smart-form', 'type' => 'file']) ?>
                    <header><?= __('Edit Advertisement') ?></header>
                    <fieldset>
                        <span><?= __('Name').' (VIE)'?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('name_vie', ['placeholder' => __('content'), 'required' => false]) ?>
                        </section>
                        <span><?= __('Name').' (ENG)'?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('name_eng', ['placeholder' => __('content'), 'required' => false]) ?>
                        </section>
                        <span><?= __('Name').' (JPN)'?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('name_jpn', ['placeholder' => __('content'), 'required' => false]) ?>
                        </section>
                        <span><?= __('Position')?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('position', ['required' => false,'empty' => '---'.__('Select Position').'---','placeholder' => __('position'),'type' => 'select', 'options' => \Cake\Core\Configure::read('Adv.position')]) ?>
                        </section>
                        <span><?= __('Order')?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('order', ['required' => false,'placeholder' => __('Order'),'type' => 'number']) ?>
                        </section>
                        <div>
                            <span><?= __('Content')?></span> <span class="required">(*)</span>
                            <section>
                                <?= $this->Form->input('content', ['class' => 'hw-mce-advance','required' => false,'placeholder' => __('url')]) ?>
                            </section>
                        </div>

                        <span><?= __('Status')?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->checkbox('status', ['default' => true,'required' => false,'placeholder' => __('status')]) ?>
                        </section>

                    </fieldset>

                    <footer>
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
                    </footer>
                    <?= $this->Form->end() ?>

                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>
        <!-- end widget -->
    </article>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.adv_type').change(function() {
            if($(this).val() == 1) {
                $('.adv_url').addClass('hidden');
                $('.adv_image').removeClass('hidden');
            } else {
                $('.adv_url').removeClass('hidden');
                $('.adv_image').addClass('hidden');
            }
        })
    })
</script>
<style>
    .hidden {
        display: none;
    }
</style>
