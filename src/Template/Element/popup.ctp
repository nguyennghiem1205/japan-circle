<a href="" onclick="Core.FloatBox.show('boxSignup');return false;"><?= __('Sign-up') ?></a>
|
<a href="" onclick="Core.FloatBox.show('boxLogin');return false;">Login</a>

<div id="boxLogin" class="hw-floatbox">
    <div class="custom_css">
        <h1><?= __('Login') ?></h1>
        
        <?= $this->Form->create('',['url'=>['controller'=>'users','action'=>'ajax_login'],'class'=>'hw-ajax']); ?>
            <table>
                <tr>
                    <td><?= $this->Form->input('email',['type'=>'text','label'=>false,'div'=>false,'required'=>false,'placeholder'=>__('Email')]); ?></td>
                </tr>
                <tr>
                    <td>
                        <?= $this->Form->input('password',['type'=>'password','label'=>false,'div'=>false,'required'=>false,'placeholder'=>__('Password')]); ?>
                        <div class="height10"></div>
                        <a href="" style="color: #666" onclick="Core.FloatBox.hide('boxLogin');Core.FloatBox.show('boxForgot');return false;"><?= __('Forgot your password?') ?></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit"><?= __('Login') ?></button>
                        <p></p>
                        <div><span>OR</span></div>
                    </td>
                </tr>
                <tr>
                    <td><button type="button" class="hw-fb-login" href="<?= $this->Url->build(['plugin'=>'social','controller'=>'users','action'=>'facebook_login']); ?>"><span><?= __('Login with Facebook') ?></span></button></td>
                </tr>
            </table>
        <?= $this->Form->end(); ?>
        <div class="textBotoom"><?= __("Don't have an account?") ?> <a href="" onclick="Core.FloatBox.hide('boxLogin');Core.FloatBox.show('boxSignup');return false;"><?= __('Create a free account') ?></a></div>
    </div>
</div>

<div id="boxSignup" class="hw-floatbox">
    <div class="custom_css">
        <h1><?= __('Sign Up') ?></h1>
        <?= $this->Form->create(null,['url'=>['controller'=>'Users','action'=>'ajax_signup'],'class'=>'hw-ajax']); ?>
            <table>
                <tr><td><?= $this->Form->input('first_name',['div'=>false,'label'=>false,'required'=>false,'placeholder'=>__('First Name')]); ?></td></tr>
                <tr><td><?= $this->Form->input('last_name',['div'=>false,'label'=>false,'required'=>false,'placeholder'=>__('Last Name')]); ?></td></tr>
                <tr><td><?= $this->Form->input('email',['type'=>'text','div'=>false,'label'=>false,'required'=>false,'placeholder'=>__('Email')]); ?></td></tr>
                <tr><td><?= $this->Form->input('password',['type'=>'password','div'=>false,'label'=>false,'required'=>false,'placeholder'=>__('Password')]); ?></td></tr>
                <tr>
                    <td>
                        <button type="submit"><?= __('CREATE NEW ACCOUNT') ?></button>
                        <p>By signing up you agree to our <?= $this->Html->link(__('Teams of Use'),'/page/'.PAGE_TERMS_OF_USE,['target'=>'_blank']) ?><br>and <?= $this->Html->link(__('Privacy Policy'),'/page/'.PAGE_PRIVACY_POLICY,['target'=>'_blank']) ?></p>
                        <div><span>OR</span></div>
                    </td>
                </tr>
                <tr>
                    <td><button type="button" class="hw-fb-login" href="<?= $this->Url->build(['plugin'=>'social','controller'=>'users','action'=>'facebook_login']); ?>"><span><?= __('Login with Facebook') ?></span></button></td>
                </tr>
            </table>
        <?= $this->Form->end(); ?>

        <div class="textBotoom"><?= __('Already have an account?') ?> <a href="" onclick="Core.FloatBox.hide('boxSignup');Core.FloatBox.show('boxLogin');return false;"><?= __('Sign in') ?></a></div>
    </div>
</div>

<div id="boxForgot" class="hw-floatbox">
    <div class="custom_css">
        <h1><?= __('Send a link to reset your password?') ?></h1>
        <?= $this->Form->create(null,['url'=>['controller'=>'Users','action'=>'ajax_forgot'],'class'=>'hw-ajax']); ?>
            <table>
                <tr>
                    <td><?= $this->Form->input('email',array('type'=>'text','label'=>false,'div'=>false,'required'=>false,'placeholder'=>__('Email'))); ?></td>
                </tr>
                <tr>
                    <td><button type="submit" name="btnSubmit"><?= __('Send Password') ?></button></td>
                </tr>
            </table>
        <?= $this->Form->end(); ?>
        <div class="textBotoom">
            <?= __('Try to ') ?> <a href="#" onclick="Core.FloatBox.hide('boxForgot');Core.FloatBox.show('boxLogin');"><?= __('Sign in') ?></a>?
            <div class="height10"></div>
            <?= __("Don't have an account?") ?> <a href="#" onclick="Core.FloatBox.hide('boxForgot');Core.FloatBox.show('boxSignup');"><?= __('Create a free account') ?></a>
        </div>
    </div>
</div>