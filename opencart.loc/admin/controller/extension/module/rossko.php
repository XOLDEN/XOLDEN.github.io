<?php

class ControllerExtensionModuleRossko extends Controller {

    public function index() {
        $this->load->model('setting/setting');
        $this->load->model('catalog/category');
        
        $data['heading_title'] = 'Rossko';
        $data['action'] = $this->url->link('module/rossko', 'token=' . $this->session->data['token'], 'SSL');

        $data['conf'] = $this->getConfig(array(
            'key1', 'key2', 'region', 'overprice', 'delivery_from', 'delivery_to', 'category'
        ));

        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
            $this->data['conf'] = $this->request->post;
            $this->setConfig($this->request->post);
            $this->cache->delete('rossko');
        }

        $categories = $this->model_catalog_category->getCategories(array());
        $data['categories'] = array();

        foreach ($categories as $category) {
            $data['categories'][] = $category;
        }

        
        $data['template'] = $this->load->controller('module/rossko.tpl');
        $data['header'] = $this->load->controller('common/header.tpl');
        $data['column_left'] = $this->load->controller('common/column_left.tpl');
        $data['footer'] = $this->load->controller('common/footer.tpl');
        


        $this->document->setTitle($this->data['heading_title']);
        $data = array();
           $data['title'] = $this->language->get('title');
 
           if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/extension/module/rossko.tpl')) {
        $template = $this->config->get('config_template') . '/extension/module/rossko.tpl';
    } else {
    $template = 'extension/module/rossko.tpl';
    }
        $this->response->setOutput($this->load->view($template, $data));
    }

    public function install() {

    }


    public function uninstall() {

    }

    private function getConfig($keys) {
        $result = [];

        foreach ($keys as $key) {
            $result[$key] = $this->config->get('rossko_' . $key);
        }

        return $result;
    }

    private function setConfig($data) {
        $config = array();

        foreach ($data as $key => $value) {
            $config['rossko_' . $key] = $value;
        }

        $this->model_setting_setting->editSetting('rossko', $config);
    }

}
