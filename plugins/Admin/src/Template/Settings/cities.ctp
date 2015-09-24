<?php $this->Html->addCrumb(__('Cities')); ?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Cities');?>
            <span>&gt;
                <?= __('List of Cities')?>
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
                <h2><?= __('List of Cities')?></h2>
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
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('Code')?>" /></th>
                                            <th class="hasinput"><input type="text" class="form-control" placeholder="<?= __('City Name')?>" /></th>
                        </tr>
                        <tr>
                                            <th><?= __('Code') ?></th>
                                            <th><?= __('City Name')?></th>
                        </tr>
                    </thead>
                        <tbody>
                        <?php foreach ($cities as $code => $city): ?>
                            <tr>
                                <td><?= h($code) ?></td>
                                <td><?= h($city) ?></td>
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
