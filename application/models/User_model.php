<?php 
class User_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
    }
	 public function google_register(){
    $insert_data = array(
     'oauth_provider'=>$this->input->post('oauth_provider'), 
     'oauth_uid'=>$this->input->post('oauth_uid'),   
     'picture_url'=>$this->input->post('picture_url'),   
     'first_name'=>$this->input->post('first_name'),
    'last_name'=>$this->input->post('last_name'),
    'email'=>$this->input->post('email')
    ); 
     if($this->db->insert('users', $insert_data)){
         return $this->db->insert_id();
     }else{
         return false;
     }
    }
       public function get_userdata($id){
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row();
    }
}