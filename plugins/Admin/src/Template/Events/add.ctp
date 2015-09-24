<?php $this->Html->addCrumb(__('Magazines'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Magazines');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Magazine'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="events row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Add Magazine') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($event, ['id' => 'smart-form-register', 'class' => 'smart-form', 'type' => 'file' ]) ?>
                    <header><?= __('Add Magazine') ?></header>
                    <fieldset>
                        <div class="row">
                            <section class="col col-md-4">
                                <span><?= __('Title').' (VIE)'?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('title_vie', ['placeholder' => __('title_vie')]) ?>
                            </section>
                            <section class="col col-md-4">
                                <span><?= __('Title').' (ENG)'?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('title_eng', ['placeholder' => __('Anh')]) ?>
                            </section>
                            <section class="col col-md-4">
                                <span><?= __('Title').' (JPN)'?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('title_jpn', ['placeholder' => __('title_jpn')]) ?>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Image')?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('image', ['placeholder' => __('image'),'type' => 'file']) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('File')?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('file', ['placeholder' => __('file'), 'type' => 'file']) ?>
                            </section>
                        </div>

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
