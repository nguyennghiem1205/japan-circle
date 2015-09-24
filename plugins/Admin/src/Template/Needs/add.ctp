<?php $this->Html->addCrumb(__('Needs'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Needs');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Need'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="needs row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Add Need') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($need, ['id' => 'smart-form-register', 'class' => 'smart-form', ]) ?>
                    <header><?= __('Add Need') ?></header>
                    <fieldset>
                        <span><?= __('Name')?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('name', ['placeholder' => __('name')]) ?>
                        </section>
                        <span><?= __('Status')?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('status', ['empty' => '---'.__('Select Status').'---','options' => \Cake\Core\Configure::read('Core.System.active'),'type' => 'select','placeholder' => __('status')]) ?>
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
