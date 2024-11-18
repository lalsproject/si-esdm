<?php

function dd($data){
    var_dump($data); 
    die;
}

function frontPage($view, $data = []){
    $CI = &get_instance();
    $data['content'] = $view;
    $CI->load->view('base_layout/front_layout', $data);
}

function dashPage($view, $data = []){
    $CI = &get_instance();
    $data['content'] = $view;
    $CI->load->view('base_layout/dash_layout', $data);
}