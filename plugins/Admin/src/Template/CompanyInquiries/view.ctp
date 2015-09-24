
<?php $this->Html->addCrumb(__('Company Inquiries'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Company Inquiries');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Company Inquiry'), ['action' => 'index'])?>
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
                <h2><?= h($companyInquiry->title) ?></h2>
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
                                <td style="width:65%"><?= h($companyInquiry->id) ?></td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Compay') ?></td>
                                <td style="width:65%"><?= $member['Member']['company'] ?></td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Image') ?></td>
                                <td style="width:65%"><?= $this->Core->image('CompanyInquiries/'.$companyInquiry->image,60,60) ?></td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Type') ?></td>
                                <td style="width:65%"><?= Cake\Core\Configure::read('CompanyInquiry.type.'.$companyInquiry->type) ?></td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Industry') ?></td>
                                <td style="width:65%"><?= $industries[$companyInquiry->industry_code] ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Title') ?></td>
                                <td style="width:65%"><?= h($companyInquiry->title) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Description') ?></td>
                                <td style="width:65%"><?= h($companyInquiry->description) ?></td>
                            </tr>


                                                    <tr>
                                <td style="width:35%;"><?= __('Status') ?></td>
                                <td style="width:65%"><?= \Cake\Core\Configure::read('CompanyInquiry.status.'.$companyInquiry->status) ?></td>
                            </tr>

                                                    <tr>
                                <td style="width:35%;"><?= __('Order') ?></td>
                                <td style="width:65%"><?= h($companyInquiry->order) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Created') ?></td>
                                <td style="width:65%"><?= h($companyInquiry->created) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Modified') ?></td>
                                <td style="width:65%"><?= h($companyInquiry->modified) ?></td>
                            </tr>
                                                    </tbody>
                        </table>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $companyInquiry->id], ['class' => 'btn btn-primary']) ?>
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
