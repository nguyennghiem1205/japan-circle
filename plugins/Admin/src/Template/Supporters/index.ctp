<?php $this->Html->addCrumb(__('Supporters')); ?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Supporter');?>
            <span>&gt;
                <?= __('List of Supporter')?>
            </span>
        </h1>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
        <ul id="sparks" class="">
            <li class="sparks-info">
                <?= $this->Html->link(__('New Supporter'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
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
                <h2><?= __('List of Supporter')?></h2>
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
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?=__('Filter email')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?=__('Filter first_name')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?=__('Filter last_name')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?=__('Filter birthdate')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?=__('Filter status')?>" /></th>
                                            <th class="hasinput" ></th>
                        </tr>
                        <tr>
                                            <th><?= __('id') ?></th>
                                            <th><?= __('email') ?></th>
                                            <th><?= __('first_name') ?></th>
                                            <th><?= __('last_name') ?></th>
                                            <th><?= __('birthdate') ?></th>
                                            <th><?= __('status') ?></th>
                                            <th width="13%"><?php echo __('Actions ') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($supporters as $supporter): ?>
                            <tr>
                                <td><?= $this->Number->format($supporter->id) ?></td>
                                <td><?= h($supporter->email) ?></td>
                                <td><?= h($supporter->first_name) ?></td>
                                <td><?= h($supporter->last_name) ?></td>
                                <td><?= h($supporter->birthdate) ?></td>
                                <td><?=  $this->Core->active($supporter, 'status') ?></td>
                                <td>
                                    <?= $this->Html->link('<i class="fa fa-eye"></i> ', array('action' => 'view', $supporter->id), array('title' => __('View'),'escape' => false, 'class' => 'btn btn-sm btn-default') );?>
                                    <?= $this->Html->link('<i class="fa fa-edit"></i> ', array('action' => 'edit', $supporter->id), array('title' => __('Edit'),'escape' => false, 'class' => 'btn btn-sm btn-default') ); ?>
                                    <?= $this->Form->postLink('<i class="fa fa-trash-o"></i> ', ['action' => 'delete', $supporter->id], ['data-action' => 'deleteLin', 'data-delete-msg' => __('Are you sure you want to delete # {0}?', $supporter->id), 'class' => 'btn btn-sm btn-default deleteLin', 'escape' => false]) ?>
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
