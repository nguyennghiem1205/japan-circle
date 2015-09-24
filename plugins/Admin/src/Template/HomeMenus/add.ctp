<?php $this->Html->addCrumb(__('Home Menus'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Home Menus');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Home Menu'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="homeMenus row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Add Home Menu') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($homeMenu, ['id' => 'smart-form-register', 'class' => 'smart-form', ]) ?>
                    <header><?= __('Add Home Menu') ?></header>
                    <fieldset>
                        <section>
                            <span><?= __('Name').' (VIE)' ?></span>
                            <?= $this->Form->input('name_vie', ['placeholder' => __('name')]) ?>
                        </section>
                        <section>
                            <span><?= __('Name').' (ENG)' ?></span>
                            <?= $this->Form->input('name_eng', ['placeholder' => __('name')]) ?>
                        </section>
                        <section>
                            <span><?= __('Name').' (JPN)' ?></span>
                            <?= $this->Form->input('name_jpn', ['placeholder' => __('name')]) ?>
                        </section>
                        <section>
                            <span><?= __('Parent') ?></span>
                            <?= $this->Form->input('parent_id', ['empty' => '---'.__('Select Parent').'---','placeholder' => __('parent_id'), 'options' => $parentHomeMenus]) ?>
                        </section>
                        <section>
                            <span><?= __('Type') ?></span>
                            <?= $this->Form->input('type', ['data-url' => '/home_menus/getChild','data-child'=>'child_id','class' => 'select-parent','empty' => '---'.__('Select Type').'---','options' => \Cake\Core\Configure::read('HomeMenu.type'),'placeholder' => __('type')]) ?>
                        </section>
                        <section>
                            <span><?= __('Child') ?></span>
                            <?= $this->Form->input('child_id', ['class' => 'child_id','type' => 'select','empty' => '---'.__('Select Child').'---','placeholder' => __('child_id')]) ?>
                        </section>
                        <section>
                            <span><?= __('Order') ?></span>
                            <?= $this->Form->input('order', ['placeholder' => __('order')]) ?>
                        </section>
                        <section>
                            <span><?= __('Status') ?></span>
                            <?= $this->Form->input('status', ['empty' => '---'.__('Select status').'---','options' => \Cake\Core\Configure::read('Core.System.active'),'placeholder' => __('status')]) ?>
                        </section>
                        <section>
                        </section>
                        <section>
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
