<?php $this->Html->addCrumb(__('Activity Categories'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Activity Categories');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Activity Category'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="activityCategories row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Edit Activity Category') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($activityCategory, ['id' => 'smart-form-register', 'class' => 'smart-form', ]) ?>
                    <header><?= __('Edit Activity Category') ?></header>
                    <fieldset>
                        <span><?= __('Name').' (VIE)'?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('name_vie', ['required' => false,'placeholder' => __('name_vie')]) ?>
                        </section>
                        <span><?= __('Name').' (ENG)'?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('name_eng', ['required' => false,'placeholder' => __('name_eng')]) ?>
                        </section>
                        <span><?= __('Name'). ' (JPN)'?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('name_jpn', ['required' => false,'placeholder' => __('name_jpn')]) ?>
                        </section>
                        <span><?= __('Status')?></span>
                        <section>
                            <?= $this->Form->checkbox('status', ['required' => false,'placeholder' => __('status')]) ?>
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
