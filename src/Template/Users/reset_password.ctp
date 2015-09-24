được<?= $this->Form->create($user,['class'=>'hw-ajax1']); ?>
<table>
    <tr>
        <th><?= __('New Password') ?>:</th>
        <td><?= $this->Form->input('new_password',array('type'=>'password','label'=>false,'required'=>false)) ?></td>
    </tr>
    <tr>
        <th><?= __('Confirm Password') ?>:</th>
        <td><?= $this->Form->input('new_password_confirm',array('type'=>'password','label'=>false,'required'=>false)) ?></td>
    </tr>
    <tr>
        <th></th>
        <td><button type="submit"><?= __('Change Password') ?></button></td>
    </tr>
</table>
<?= $this->Form->end(); ?>