<?php $this->Html->addCrumb(__('News'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('News');?>
            <span>&gt;
                <?= $this->Html->link(__('List of News'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="news row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">

            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <h2><?= __('Add News') ?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($news, ['id' => 'smart-form-register', 'class' => 'smart-form', 'type' => 'file']) ?>
                    <header><?= __('Add News') ?></header>
                    <fieldset>
                        <span><?= __('Name'). (' (VIE)') ?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('name_vie', ['placeholder' => __('name (vie)'),'required' => false]) ?>
                        </section>
                        <span><?= __('Name'). (' (ENG)') ?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('name_eng', ['placeholder' => __('name (eng)'),'required' => false]) ?>
                        </section>
                        <span><?= __('Name'). (' (JPN)') ?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('name_jpn', ['placeholder' => __('name (jpn)'),'required' => false]) ?>
                        </section>
                        <span><?= __('Description'). (' (VIE)') ?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('description_vie', ['placeholder' => __('description (vie)'),'required' => false]) ?>
                        </section>
                        <span><?= __('Description'). (' (ENG)') ?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('description_eng', ['placeholder' => __('description (eng)'),'required' => false]) ?>
                        </section>
                        <span><?= __('Description'). (' (JPN)') ?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('description_jpn', ['placeholder' => __('description (jpn)'),'required' => false]) ?>
                        </section>
                        <span><?= __('Content'). (' (VIE)') ?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('content_vie', ['class' => 'hw-mce-advance','placeholder' => __('content (vie)'),'required' => false]) ?>
                        </section>
                        <span><?= __('Content'). (' (ENG)') ?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('content_eng', ['class' => 'hw-mce-advance','placeholder' => __('content (eng)'),'required' => false]) ?>
                        </section>
                        <span><?= __('Content'). (' (JPN)') ?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('content_jpn', ['class' => 'hw-mce-advance','placeholder' => __('content (jpn)'),'required' => false]) ?>
                        </section>
                        <span><?= __('Category')?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('news_category_id', ['empty' => '---'.__('Select Category').'---' ,'options' => $newsCategories]) ?>
                        </section>
                        <span><?= __('Company ID')?></span>
                        <section>
                            <?= $this->Form->input('company_id', ['placeholder' => __('company id'),'type'=>'text','required' => false]) ?>
                        </section>
                        <span><?= __('Image')?></span> <span class="required">(*)</span>
                        <section>
                            <?= $this->Form->input('image',['type' => 'file','required' => false]) ?>
                        </section>
                        <span><?= __('Active')?></span>
                        <section>
                            <?= $this->Form->checkbox('status',['default' => true]) ?>
                        </section>
                        <span><?= __('Home Page')?></span>
                        <section>
                            <?= $this->Form->checkbox('home_page',['default' => false]) ?>
                        </section>
                        <span><?= __('News Meta DESC')?></span>
                        <section>
                            <?= $this->Form->input('news_meta_desc', ['placeholder' => __('news meta desc'),'required' => false]) ?>
                        </section>
                        <span><?= __('News Meta Keyword')?></span>
                        <section>
                            <?= $this->Form->input('news_meta_keyword', ['placeholder' => __('news meta keyword')]) ?>
                        </section>
                        <span><?= __('New')?></span>
                        <section>
                            <?= $this->Form->checkbox('new',['required' => false]) ?>
                        </section>
                        <span><?= __('Total View')?></span>
                        <section>
                            <?= $this->Form->input('total_view', ['placeholder' => __('total view'),'required' => false]) ?>
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
