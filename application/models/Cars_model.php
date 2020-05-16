<?php
class Cars_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function get_CarList(){
        $query = $this->db->get('cars'); //tábla lekérése szűrés nélkül
        $result_array = $query->result_array();
        return $result_array;
    }
    public function get_CarRecord($slug) {
        $query = $this->db->get_where('cars',
                    array(
                        'slug' => $slug,
                    )
                );
        $result_row = $query->row_array();
        return $result_row;
        
    }
    public function add(){
        $this->load->helper('url');
        $slug = url_title
                (
                    $this->input->post('title'),
                    'dash',
                    true
                );
        $data = array(
            'title'     => $this->input->post('title'),
            'slug'      => $slug,
            'text'      => $this->input->post('text'),
            'company'   => $this->input->post('company'),
            'car_engine'    => $this->input->post('car_engine'),
            
        );
        
        $succes = $this->db->insert('cars',$data);
        return $succes;
    }
    
    public function delete($id) {
        $success = $this->db->delete('cars', array('id' => $id));
        return $success;
    }
}
