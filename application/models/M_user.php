<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {


    function __construct()
    {
        parent::__construct();

    }

    // new user
    public function insert_user($data_user)
    {
        log_message('debug', 'User| insert_user() -> Valeur du insert_user:'.print_r($data_user ,true));

        // envoie en bdd + id
        $this->db->insert('user', $data_user);
        $user_id = $this->db->insert_id();

        return $user_id;
    }

    public function get_user($user_id)
    {
        $q = $this->db->select('*')->from('user')
            ->where('user.user_id', $user_id)
            ->get('');

            //log_message('debug', 'User| get_user() -> Valeur du get_user:'.print_r($user_id ,true));

        if($q->num_rows()>0)
        {
            $result = $q->result_array();

            return $result;
        } 
    }

    public function get_all_users()
    {
        $q = $this->db->select('*')->from('user')
            ->get('');

        if($q->num_rows()>0)
        {
            $result = $q->result_array();

            log_message('debug', 'User| get_all_users() -> Valeur du $result :'.print_r($result ,true));
            

            return $result;
        } 
    }

    public function update_user($user_id, $user_data)
	{
        $this->db->where('user_id', $user_id);
        $this->db->update('user', $user_data);

        return true;
	}

    public function delete_user($user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->delete('user');
       
        return true;
    }

}