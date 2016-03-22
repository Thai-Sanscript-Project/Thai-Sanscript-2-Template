<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Theme extends CI_Controller {

    public function index() {
        $this->template->set_page_title("ตัวอย่าง 1");
        $this->template->set_active_menu(10);
        $this->template->append_page_section("demo/index");
        $this->template->render_main_template($this);
    }

}
