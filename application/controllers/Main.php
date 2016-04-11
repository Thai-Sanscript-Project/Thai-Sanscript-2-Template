<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index() {
        $this->template->set_page_title("ไทย-สันสคริปท์");
        $this->template->set_active_menu(10);
        $this->template->append_page_section("main/index/index");
        $this->template->render_main_template($this);
    }

    public function transliterate() {
        $this->template->set_page_title("ปริวรรตอักษร");
        $this->template->set_active_menu(20);
        $this->template->append_page_section("main/transliterate/index");
        $this->template->render_main_template($this);
    }

}
