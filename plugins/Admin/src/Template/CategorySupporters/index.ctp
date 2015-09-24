<?php $this->Html->addCrumb(__('Category Supporters')); ?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Category Supporter');?>
            <span>&gt;
                <?= __('List of Category Supporter')?>
            </span>
        </h1>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
        <ul id="sparks" class="">
            <li class="sparks-info">
                <?= $this->Html->link(__('New Category Supporter'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            </li>
        </ul>
    </div>
</div>

<div class="row">
    <!-- NEW WIDGET START -->
    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-editbutton="true">
            <header>
                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                <h2><?= __('List of Category Supporter')?></h2>
            </header>
            <!-- widget div-->
            <div>
                <!-- widget edit box -->
                <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->
                </div>
                <!-- end widget edit box -->
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?=__('Filter id')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?=__('Filter name_vie')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?=__('Filter name_eng')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?=__('Filter name_jpn')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?=__('Filter status')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?=__('Filter created')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?=__('Filter modified')?>" /></th>
                                            <th class="hasinput" ></th>
                        </tr>
                        <tr>
                                            <th><?= __('id') ?></th>
                                            <th><?= __('name_vie') ?></th>
                                            <th><?= __('name_eng') ?></th>
                                            <th><?= __('name_jpn') ?></th>
                                            <th><?= __('status') ?></th>
                                            <th><?= __('created') ?></th>
                                            <th><?= __('modified') ?></th>
                                            <th width="13%"><?php echo __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categorySupporters as $categorySupporter): ?>
                            <tr>
                                <td><?= $this->Number->format($categorySupporter->id) ?></td>
                                <td><?= h($categorySupporter->name_vie) ?></td>
                                <td><?= h($categorySupporter->name_eng) ?></td>
                                <td><?= h($categorySupporter->name_jpn) ?></td>
                                <td><?=  $this->Core->active($categorySupporter, 'status') ?></td>
                                <td><?= h($categorySupporter->created) ?></td>
                                <td><?= h($categorySupporter->modified) ?></td>
                                <td>
                                    <?= $this->Html->link('<i class="fa fa-eye"></i> ', array('action' => 'view', $categorySupporter->id), array('title' => __('View'),'escape' => false, 'class' => 'btn btn-sm btn-default') );?>
                                    <?= $this->Html->link('<i class="fa fa-edit"></i> ', array('action' => 'edit', $categorySupporter->id), array('title' => __('Edit'),'escape' => false, 'class' => 'btn btn-sm btn-default') ); ?>
                                    <?= $this->Form->postLink('<i class="fa fa-trash-o"></i> ', ['action' => 'delete', $categorySupporter->id], ['data-action' => 'deleteLin', 'data-delete-msg' => __('Are you sure you want to delete # {0}?', $categorySupporter->id), 'class' => 'btn btn-sm btn-default deleteLin', 'escape' => false]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
                <!-- end widget content -->
            </div>
            <!-- end widget div -->
        </div>
        <!-- end widget -->
    </article>
    <!-- WIDGET END -->
</div>
<script>
    $(document).ready(function(){
        $('.onoffswitch-checkbox').click(function(){
            $(this).parents('form').submit();
        })
    })
</script>
