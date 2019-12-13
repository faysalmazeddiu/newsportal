<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*  Following 4 lines ebable browser cache  */
if (CACHE_ON) {
//    $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
//    $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
//    $this->output->set_header("Pragma: no-cache");
//    $this->output->cache(CACHE_TIMEOUT);
}

$data['dt'] = $this->get_dt();
$data['head'] = $this->load->view('front/head_view', '', TRUE);
$data['registration'] = $this->load->view('front/reg_view', '', TRUE);
$data['logo'] = $this->load->view('front/logo_view', '', TRUE);
$data['search'] = $this->load->view('front/search_view', '', TRUE);
$data['navigation'] = $this->load->view('front/nav_view', '', TRUE); // Main Menu                
$data['breaking_news'] = $this->_get_view('breaking_news', 'breaking_news');
$data['shironam'] = $this->_get_view('shironam', 'shironam');
$data['TABS1'] = $this->_get_view_tab(array('shorbo_shesh', 'shorbo_pothito', 'ajker_ukti'), 'TABS1');

$data['footer'] = $this->load->view('front/footer_view', '', TRUE);

