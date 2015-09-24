
<?php $this->Html->addCrumb(__('Inquiries'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Inquiries');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Inquiry'), ['action' => 'index'])?>
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
                <h2><?= h($inquiry->id) ?></h2>
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
                                <td style="width:65%"><?= h($inquiry->id) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Title Vie') ?></td>
                                <td style="width:65%"><?= h($inquiry->title_vie) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Title Eng') ?></td>
                                <td style="width:65%"><?= h($inquiry->title_eng) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Title Jpn') ?></td>
                                <td style="width:65%"><?= h($inquiry->title_jpn) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Content Vie') ?></td>
                                <td style="width:65%"><?= h($inquiry->content_vie) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Content Eng') ?></td>
                                <td style="width:65%"><?= h($inquiry->content_eng) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Content Jpn') ?></td>
                                <td style="width:65%"><?= h($inquiry->content_jpn) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Image') ?></td>
                                <td style="width:65%"><?= h($inquiry->image) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Date Start') ?></td>
                                <td style="width:65%"><?= h($inquiry->date_start) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Date End') ?></td>
                                <td style="width:65%"><?= h($inquiry->date_end) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Description Vie') ?></td>
                                <td style="width:65%"><?= h($inquiry->description_vie) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Description Eng') ?></td>
                                <td style="width:65%"><?= h($inquiry->description_eng) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Description Jpn') ?></td>
                                <td style="width:65%"><?= h($inquiry->description_jpn) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Company') ?></td>
                                <td style="width:65%"><?= h($inquiry->company) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Type') ?></td>
                                <td style="width:65%"><?= h($inquiry->type) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Total View') ?></td>
                                <td style="width:65%"><?= h($inquiry->total_view) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Inquiry Meta Desc') ?></td>
                                <td style="width:65%"><?= h($inquiry->inquiry_meta_desc) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Inquiry Meta Keyword') ?></td>
                                <td style="width:65%"><?= h($inquiry->inquiry_meta_keyword) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Status') ?></td>
                                <td style="width:65%"><?= h($inquiry->status) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Order') ?></td>
                                <td style="width:65%"><?= h($inquiry->order) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Created') ?></td>
                                <td style="width:65%"><?= h($inquiry->created) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Modified') ?></td>
                                <td style="width:65%"><?= h($inquiry->modified) ?></td>
                            </tr>
                                                    </tbody>
                        </table>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inquiry->id], ['class' => 'btn btn-primary']) ?>
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
