<?php $this->Html->addCrumb(__('Productions')); ?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Production');?>
            <span>&gt;
                <?= __('List of Production')?>
            </span>
        </h1>
    </div>
</div>

<div class="row">
    <!-- NEW WIDGET START -->
    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-editbutton="true">
            <header>
                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                <h2><?= __('List of Production')?></h2>
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
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter image')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter create')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter Company')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter code')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter name')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter price')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter unit')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter status')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter modified')?>" /></th>
                                            <th class="hasinput" ></th>
                        </tr>
                        <tr>
                                            <th><?= __('Image') ?></th>
                                            <th><?= __('Create') ?></th>
                                            <th><?= __('Company') ?></th>
                                            <th><?= __('Code') ?></th>
                                            <th><?= __('Name') ?></th>
                                            <th><?= __('Price') ?></th>
                                            <th><?= __('Unit') ?></th>
                                            <th><?= __('Status') ?></th>
                                            <th><?= __('Modified') ?></th>
                                            <th width="13%"><?php echo __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productions as $production): ?>
                            <tr>
                                <td><?= $this->Core->image('Productions/'.$production->image,50,50, array(),true) ?></td>
                                <td><?= h($production->created)?></td>
                                <td><?= h($production->member_id) ?></td>
                                <td><?= h($production->code) ?></td>
                                <td><?= h($production->name) ?></td>
                                <td><?= h($production->price) ?></td>
                                <td><?= h($production->unit) ?></td>
                                <td><?= \Cake\Core\Configure::read('Production.status.'.$production->status) ?></td>
                                <td><?= h($production->modified) ?></td>

                                <td>
                                    <?= $this->Html->link('<i class="fa fa-eye"></i> ', array('action' => 'view', $production->id), array('title' => __('View'),'escape' => false, 'class' => 'btn btn-sm btn-default') );?>
                                    <?= $this->Html->link('<i class="fa fa-edit"></i> ', array('action' => 'edit', $production->id), array('title' => __('Edit'),'escape' => false, 'class' => 'btn btn-sm btn-default') ); ?>
                                    <?php if($this->CurUser->group != GROUP_MODERATOR):?>
                                    <?= $this->Form->postLink('<i class="fa fa-trash-o"></i> ', ['action' => 'delete', $production->id], ['data-action' => 'deleteLin', 'data-delete-msg' => __('Are you sure you want to delete # {0}?', $production->id), 'class' => 'btn btn-sm btn-default deleteLin', 'escape' => false]) ?>
                                    <?php endif ?>
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
