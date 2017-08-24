<?php

/**
 * Created by PhpStorm.
 * User: andreboard
 * Date: 1/24/2017
 * Time: 1:38 PM
 */
class MY_Controller extends CI_Controller
{
    public $ci_smarty;

    public function __construct() {
        parent::__construct();
        $this->lang->load('site_lang', 'english');
        $this->load->library('CI_Smarty');
    }

}