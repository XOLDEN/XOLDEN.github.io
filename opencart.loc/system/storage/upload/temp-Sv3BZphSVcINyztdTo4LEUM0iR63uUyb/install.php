<?php 
$this->load->model('user/user_group');
$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'tool/export_import');
$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'tool/export_import');