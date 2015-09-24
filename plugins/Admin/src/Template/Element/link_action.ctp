<?php
if (!isset($view) || $view) {
    echo $this->Html->link('<i class="fa fa-eye"></i> ', array('action' => 'view', $item->id), array('title' => __('View'),'escape' => false, 'class' => 'btn btn-sm btn-default') );
}
if (!isset($edit) || $edit) {
    echo '&nbsp;'.$this->Html->link('<i class="fa fa-edit"></i> ', array('action' => 'add', $item->id), array('title' => __('Edit'),'escape' => false, 'class' => 'btn btn-sm btn-default') );
}
$coreUser = $this->request->session()->read('Core.Users');
if($coreUser['id'] != $item->id && $this->CurUser->group != GROUP_MODERATOR) {
    echo '&nbsp;'.$this->Form->postLink('<i class="fa fa-trash-o"></i> ', ['action' => 'delete', $item->id], ['data-action' => 'deleteLin', 'data-delete-msg' => __('Are you sure you want to delete # {0}?', $item->id), 'class' => 'btn btn-sm btn-default deleteLin', 'escape' => false]);
}
