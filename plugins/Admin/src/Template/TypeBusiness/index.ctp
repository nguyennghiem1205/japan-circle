<?php $this->Html->addCrumb(__('Type Business')); ?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Type Busines');?>
            <span>&gt;
                <?= __('List of Type Busines')?>
            </span>
        </h1>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
        <ul id="sparks" class="">
            <li class="sparks-info">
                <?= $this->Html->link(__('New Type Busines'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
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
                <h2><?= __('List of Type Busines')?></h2>
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
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter id')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter type_name_vie')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter type_name_eng')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter type_name_jpn')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter order')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter created')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Filter modified')?>" /></th>
                                            <th class="hasinput" ></th>
                        </tr>
                        <tr>
                                            <th><?= __('id') ?></th>
                                            <th><?= __('type_name_vie') ?></th>
                                            <th><?= __('type_name_eng') ?></th>
                                            <th><?= __('type_name_jpn') ?></th>
                                            <th><?= __('order') ?></th>
                                            <th><?= __('created') ?></th>
                                            <th><?= __('modified') ?></th>
                                            <th width="13%"><?php echo __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($typeBusiness as $typeBusines): ?>
                            <tr>
                                <td><?= $this->Number->format($typeBusines->id) ?></td>
                                <td><?= h($typeBusines->type_name_vie) ?></td>
                                <td><?= h($typeBusines->type_name_eng) ?></td>
                                <td><?= h($typeBusines->type_name_jpn) ?></td>
                                <td><?= $this->Number->format($typeBusines->order) ?></td>
                                <td><?= h($typeBusines->created) ?></td>
                                <td><?= h($typeBusines->modified) ?></td>
                                <td>
                                    <?= $this->Html->link('<i class="fa fa-eye"></i> ', array('action' => 'view', $typeBusines->id), array('title' => __('View'),'escape' => false, 'class' => 'btn btn-sm btn-default') );?>
                                    <?= $this->Html->link('<i class="fa fa-edit"></i> ', array('action' => 'edit', $typeBusines->id), array('title' => __('Edit'),'escape' => false, 'class' => 'btn btn-sm btn-default') ); ?>
                                    <?php if($this->CurUser->group != GROUP_MODERATOR):?>
                                    <?= $this->Form->postLink('<i class="fa fa-trash-o"></i> ', ['action' => 'delete', $typeBusines->id], ['data-action' => 'deleteLin', 'data-delete-msg' => __('Are you sure you want to delete # {0}?', $typeBusines->id), 'class' => 'btn btn-sm btn-default deleteLin', 'escape' => false]) ?>
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
