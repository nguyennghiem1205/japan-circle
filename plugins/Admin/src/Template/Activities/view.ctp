
<?php $this->Html->addCrumb(__('Activities'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Activities');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Activity'), ['action' => 'index'])?>
            </span>
        </h1>
    </div>
</div>

<div class="row">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="">
            <header role="heading">
                <span class="widget-icon">
                    <i class="fa fa-user"></i>
                </span>
                <h2><?= h($activity->id) ?></h2>
            </header>
            <!-- widget div-->
            <div role="content">
                <!-- widget edit box -->
                <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->
                </div>
                <!-- end widget edit box -->
                <!-- widget content -->
                <div class="widget-body">
                    <fieldset>
                        <table id="user" class="table table-bordered table-striped" style="clear: both">
                            <tbody>
                                                    <tr>
                                <td style="width:35%;"><?= __('Id') ?></td>
                                <td style="width:65%"><?= h($activity->id) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Name').' (VIE)' ?></td>
                                <td style="width:65%"><?= h($activity->name_vie) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Name').' (ENG)' ?></td>
                                <td style="width:65%"><?= h($activity->name_eng) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Name').' (JPN)'?></td>
                                <td style="width:65%"><?= h($activity->name_jpn) ?></td>
                            </tr>

                                                    <tr>
                                <td style="width:35%;"><?= __('Image') ?></td>
                                <td style="width:65%"><?= $this->Core->image('activities/'.$activity->image,50,50,array(),true) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Activity Category Id') ?></td>
                                <td style="width:65%"><?= h($activity->activity_category->name_vie) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Description').' (VIE)' ?></td>
                                <td style="width:65%"><?= h($activity->description_vie) ?></td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Description').' (ENG)' ?></td>
                                <td style="width:65%"><?= h($activity->description_eng) ?></td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Description').' (JPN)' ?></td>
                                <td style="width:65%"><?= h($activity->description_jpn) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Short Description').' ( VIE)' ?></td>
                                <td style="width:65%"><?= h($activity->short_description_vie) ?></td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Short Description').' ( ENG)' ?></td>
                                <td style="width:65%"><?= h($activity->short_description_eng) ?></td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Short Description').' ( JPN)' ?></td>
                                <td style="width:65%"><?= h($activity->short_description_jpn) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('New') ?></td>
                                <td style="width:65%"><?= ($activity->new)? __('Yes'): __('No') ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Status') ?></td>
                                <td style="width:65%"><?= ($activity->status)? __('Yes'): __('No') ?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Sidebar Right') ?></td>
                                <td style="width:65%"><?= ($activity->sidebar_right)? __('Yes'): __('No') ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Total View') ?></td>
                                <td style="width:65%"><?= h($activity->total_view) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Created') ?></td>
                                <td style="width:65%"><?= h($activity->created) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Modified') ?></td>
                                <td style="width:65%"><?= h($activity->modified) ?></td>
                            </tr>
                                                    </tbody>
                        </table>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activity->id], ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end widget content -->
            </div>
            <!-- end widget div -->
        </div>
        <!-- end widget -->
    </article>
</div>
