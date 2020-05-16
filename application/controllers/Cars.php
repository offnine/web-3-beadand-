<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cars
 *
 * @author Máté
 */
class Cars extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $languages = array("EN","HU");
        if(in_array($this->uri->segment(1), $languages)){
            $this->load->languages($this->uri->segment(1), $this->uri->segment(1));
        }
        $this->load->model('cars_model');
        $this->load->helper('url_helper');
        $this->lang->load('cars');
        
    }
    public function index() {
        $items = $this->cars_model->get_CarList();
        $data['title'] = 'Autók listája';
        $data['items'] = $items;
        $this->load->view('cars/index_cars', $data);
        
    }
    public function show($slug = null) {
        if($slug == null){
            show_404();
        }
        $item = $this->cars_model->get_CarRecord($slug);
        if(empty($item)){
            show_404();
        }
        else{
            $data['title'] = $item['title'];
            $data['item'] = $item;
            
            $this->load->view('cars/show', $data);
        }
    }
    public function add() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('title','Cím','required');
        $this->form_validation->set_rules('text','Leírás','required');
        
        if($this->form_validation->run() == false){
            $data['title'] = "Hírdetés feladása";
            $this->load->view('cars/add',$data);
        }
        else{
            if($this->cars_model->add() == TRUE){
                redirect('/cars');
            }
        }
    }
    public function delete($slug = null){
        if($slug == null){
            show_404();
        }
        $record = $this->cars_model->get_CarRecord($slug);
        
        if(empty($record)){
            show_404();
        }
        
        $this->cars_model->delete($record['id']);
        redirect('/cars');
    }
}
