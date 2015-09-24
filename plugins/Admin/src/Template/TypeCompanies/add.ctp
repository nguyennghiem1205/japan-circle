<?php $this->Html->addCrumb(__('Type Companies'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Type Companies');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Type Company'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="typeCompanies row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Add Type Company') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($typeCompany, ['id' => 'smart-form-register', 'class' => 'smart-form', ]) ?>
                    <header><?= __('Add Type Company') ?></header>
                    <fieldset>
                        <span><?= __('Classification of company').' (VIE)'?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('type_name_vie', ['placeholder' => __('type_name_vie')]) ?>
                        </section>
                        <span><?= __('Classification of company').' (ENG)'?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('type_name_eng', ['placeholder' => __('type_name_eng')]) ?>
                        </section>
                        <span><?=__('Classification of company').' (JPN)'?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('type_name_jpn', ['placeholder' => __('type_name_jpn')]) ?>
                        </section>
                        <span><?= __('Order')?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('order', ['placeholder' => __('order')]) ?>
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
