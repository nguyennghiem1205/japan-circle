<?php use Cake\Core\Configure; ?>
<?php $this->Html->addCrumb(__('System'));?>
<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-cog fa-fw "></i>
            <?= __('System');?>
            <span>&gt;
                <?= $this->Html->link(__('List of user'), ['action' => 'index'])?>
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
                    <i class="fa fa-edit"></i>
                </span>
                <?php
                $titleBox = __('User Edit');
                if($user->isNew()){
                    $titleBox = __('User Add');
                }?>
                <h2><?= $titleBox?></h2>
            </header>

            <!-- widget div-->
            <div role="content">
                <!-- widget content -->
                <div class="widget-body no-padding">
                    <?= $this->Form->create($user, ['id' => 'smart-form-register', 'class' => 'smart-form', 'type' => 'file']) ?>
                    <header><?= __('Registration form')?></header>
                    <fieldset>
                        <section>
                            <label class="input <?= !$user->isNew() ? 'state-disabled' : ''?>">
                                <?= $this->Form->input('email', ['disabled' => !$user->isNew() ? true : false, 'required' => false, 'placeholder' => __('Email address')]); ?>
                                <i class="icon-append fa fa-envelope-o"></i>
                            </label>
                        </section>
                        <section>
                            <label class="input">
                                <?= $this->Form->input('avatar', ['label' => false, 'placeholder' => 'Avatar', 'type' => 'file']); ?>
                                <i class="icon-append fa fa-envelope-o"></i>
                            </label>
                        </section>
                        <section>
                            <label class="input">
                                <?= $this->Form->input('test_field_image', ['label' => false, 'placeholder' => 'Avatar', 'type' => 'file']); ?>
                                <i class="icon-append fa fa-envelope-o"></i>
                            </label>
                        </section>
                        <?php if($user->isNew()):?> <!-- disabled password fields for edit form -->
                        <section>
                            <label class="input">
                                <?= $this->Form->input('password', ['required' => false, 'placeholder' => __('Password')]); ?>
                                <i class="icon-append fa fa-lock"></i>
                            </label>
                        </section>
                        <section>
                            <label class="input">
                                <?= $this->Form->input('password_confirm', ['type' => 'password', 'required' => false, 'placeholder' => __('Confirm Password')]); ?>
                                <i class="icon-append fa fa-lock"></i>
                            </label>
                        </section>
                        <?php endif;?>
                    </fieldset>

                    <fieldset>
                        <div class="row">
                            <section class="col col-6">
                                <label class="input">
                                    <?= $this->Form->input('first_name', ['required' => false, 'placeholder' => __('First name')]); ?>
                                </label>
                            </section>
                            <section class="col col-6">
                                <label class="input">
                                    <?= $this->Form->input('last_name', ['required' => false, 'placeholder' => __('Last Name')]); ?>
                                </label>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-6">
                                <label class="select">
                                    <?= $this->Form->input('group', ['empty' => __('Group'), 'type' => 'select', 'options' => Configure::read('Core.Users.group') , 'required' => false, 'placeholder' => __('Group')]); ?>
                                    <i></i>
                                </label>
                            </section>
                            <section class="col col-2">
                                <label class="toggle">
                                    <?= $this->Form->checkbox('status', ['required' => false, 'placeholder' => __('Status')]); ?>
                                    <i data-swchon-text="ON" data-swchoff-text="OFF"></i><?= __('Status')?>
                                </label>
                            </section>
                        </div>
                    </fieldset>
                    
                    <h1><?= __('List of menus')?></h1>
                    <div id="hasmany-container">
                        <fieldset>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="input">
                                        <a href="" class="btn_delete"><?= __('Delete')?></a>
                                        <?= $this->Form->input('id', ['required' => false, 'placeholder' => 'id']); ?>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input">
                                        <?= $this->Form->input('plugin', ['required' => false, 'placeholder' => __('plugin')]); ?>
                                    </label>
                                    <label class="toggle">
                                        <?= $this->Form->checkbox('display', ['required' => false]); ?>
                                        <i data-swchon-text="ON" data-swchoff-text="OFF"></i>
                                    </label>
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="input">
                                        <?= $this->Form->input('controller', ['type' => 'text' , 'required' => false, 'placeholder' => __('controller')]); ?>
                                        <i></i>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="input">
                                        <?= $this->Form->input('action', ['type' => 'text' , 'required' => false, 'placeholder' => __('action')]); ?>
                                    </label>
                                </section>
                            </div>
                        </fieldset>
                    </div>
                    
                    <a href="" class = "btn_add"><?= __('Add more row')?></a>
                    
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