
<?php $this->Html->addCrumb(__('Supporters'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('Supporters');?>
            <span>&gt;
                <?= $this->Html->link(__('List of Supporter'), ['action' => 'index'])?>
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
                <h2><?= h($supporter->id) ?></h2>
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
                                <td style="width:65%"><?= h($supporter->id) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('First Name') ?></td>
                                <td style="width:65%"><?= h($supporter->first_name) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Last Name') ?></td>
                                <td style="width:65%"><?= h($supporter->last_name) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Birthdate') ?></td>
                                <td style="width:65%"><?= $this->Time->format($supporter->birthdate, 'dd/MM/Y') ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Identity Card') ?></td>
                                <td style="width:65%"><?= h($supporter->identity_card) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Email') ?></td>
                                <td style="width:65%"><?= h($supporter->email) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Image') ?></td>
                                <td style="width:65%"><?= $this->Core->image('Supporters/'.$supporter->image, 100,100,array(),true) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Phone') ?></td>
                                <td style="width:65%"><?= h($supporter->phone) ?></td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('Category Supporter') ?></td>
                                <?php
                                    $categorySupporter = 'name_'.$fieldLanguage;
                                ?>
                                <td style="width:65%"><?= h($supporter->category_supporter->$categorySupporter) ?></td>
                            </tr>
                            <tr>
                                <td style="width:35%;"><?= __('City') ?></td>
                                <td style="width:65%"><?= h($supporter->city) ?></td>
                            </tr>

                            <tr>
                                <td style="width:35%;"><?= __('Url Facebook') ?></td>
                                <td style="width:65%"><?= h($supporter->url_facebook) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Website/Blog') ?></td>
                                <td style="width:65%"><?= h($supporter->site_url) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Company Name') ?></td>
                                <td style="width:65%"><?= h($supporter->company_name) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Company Address') ?></td>
                                <td style="width:65%"><?= h($supporter->company_address) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Company Site Url') ?></td>
                                <td style="width:65%"><?= h($supporter->company_site_url) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Industry') ?></td>
                                <td style="width:65%"><?= h($supporter->industry_code) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Staff') ?></td>
                                <td style="width:65%"><?= h($supporter->com_staff) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Com Lang Chosen') ?></td>
                                <td style="width:65%">
                                    <?php
                                    $languages = [];
                                    foreach($supporter->com_lang_chosen as $lang) {
                                        $languages[] = Cake\Core\Configure::read('Member.language.'.$lang);
                                    }
                                    echo implode(' - ', $languages);
                                    ?>
                                </td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Member Organize') ?></td>
                                <td style="width:65%"><?= h($supporter->member_organize) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Experience') ?></td>
                                <td style="width:65%"><?= h($supporter->experience) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Experience File') ?></td>
                                <td style="width:65%"><a href="<?= $this->Url->build('/upload/Supporters/'.$supporter->experience_file) ?>" target="_blank"><?= $supporter->experience_file ?></a></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Support Info') ?></td>
                                <td style="width:65%"><?= h($supporter->support_info) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Created') ?></td>
                                <td style="width:65%"><?= h($supporter->created) ?></td>
                            </tr>
                                                    <tr>
                                <td style="width:35%;"><?= __('Modified') ?></td>
                                <td style="width:65%"><?= h($supporter->modified) ?></td>
                            </tr>
                                                    </tbody>
                        </table>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supporter->id], ['class' => 'btn btn-primary']) ?>
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
