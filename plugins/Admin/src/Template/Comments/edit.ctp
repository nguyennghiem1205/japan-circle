<?php $this->Html->addCrumb(__('Comments'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Comments');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Comment'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="comments row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Edit Comment') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($comment, ['id' => 'smart-form-register', 'class' => 'smart-form', ]) ?>
                    <header><?= __('Edit Comment') ?></header>
                    <fieldset>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Title')?></span> <span class="required">(*)</span>
                                <?= $this->Form->input('title', ['required' => false,'placeholder' => __('Title')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Author')?></span>
                                <?= $this->Form->input('author', ['required' => false,'placeholder' => __('Author')]) ?>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Author Info')?></span>
                                <?= $this->Form->input('author_info', ['required' => false,'placeholder' => __('Author Info')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Date')?></span>
                                <?= $this->Form->input('date', ['class' => 'hw-date', 'type' => 'text','required' => false,'placeholder' => __('date')]) ?>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-md-6">
                                <span><?= __('Status')?></span>
                                <?= $this->Form->input('active', ['empty' => '---'.__('Select Status').'---','options' => \Cake\Core\Configure::read('Core.System.active'),'required' => false,'placeholder' => __('active')]) ?>
                            </section>
                            <section class="col col-md-6">
                                <span><?= __('Order')?></span>
                                <?= $this->Form->input('order', ['required' => false,'placeholder' => __('order')]) ?>
                            </section>
                        </div>
                        <section>
                            <span><?= __('Content')?></span> <span class="required">(*)</span>
                            <?= $this->Form->input('content', ['required' => false,'placeholder' => __('content')]) ?>
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
