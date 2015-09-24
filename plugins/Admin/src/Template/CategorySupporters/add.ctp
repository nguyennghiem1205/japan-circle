<?php $this->Html->addCrumb(__('Category Supporters'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Category Supporters');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Category Supporter'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="categorySupporters row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Add Category Supporter') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($categorySupporter, ['id' => 'smart-form-register', 'class' => 'smart-form', ]) ?>
                    <header><?= __('Add Category Supporter') ?></header>
                    <fieldset>
                        <section>
                            <span><?= __('Name'). (' (VIE)') ?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('name_vie', ['placeholder' => __('name_vie')]) ?>
                        </section>
                        <section>
                            <span><?= __('Name'). (' (ENG)') ?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('name_eng', ['placeholder' => __('name_eng')]) ?>
                        </section>
                        <section>
                            <span><?= __('Name'). (' (JPN)') ?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('name_jpn', ['placeholder' => __('name_jpn')]) ?>
                        </section>
                        <section>
                            <span><?= __('Status') ?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('status', ['empty' => '---'.__('Select Status').'---','options' => \Cake\Core\Configure::read('Core.System.active')]) ?>
                        </section>
                    </fieldset>

                    <footer>
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                        <?= $this->Html->link('Cancel', ['action' => 'index'], ['class' => 'btn btn-default']) ?>
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
