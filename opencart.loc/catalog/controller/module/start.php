<?php
public function install() {
   $this->load->model('setting/extension');
   $this->model_setting_extension->install('total', $this->request->get['extension']);
}