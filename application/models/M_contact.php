<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contact extends CI_Model {


    function __construct()
    {
        parent::__construct();

    }

    public function insert_new_contact($montableau)
    {
        log_message('debug', 'Contact| create_contact() -> Valeur du new_contact:'.print_r($montableau ,true));
        
        // insert db
        $this->db->insert('new_contact', $montableau);
        
        $contact_id = $this->db->insert_id();

        log_message('debug', 'Contact| insert_new_contact -> Valeur du insert_new_contact:'.print_r($contact_id ,true));

        return $contact_id;

    }
   
    public function get_new_contact($contact_id)
    {
        $q = $this->db->select('*')->from('new_contact')
            ->where('new_contact.id', $contact_id)
            ->get('');
        if($q->num_rows()>0)
        {
            $result = $q->result_array();

            return $result;
        } 
    }

    public function get_all_contact()
    {
        $q = $this->db->select('*')->from('new_contact')
            ->get('');
        if($q->num_rows()>0)
        {
            $result = $q->result_array();

            log_message('debug', 'Contact| get_all_contact() -> Valeur du $result :'.print_r($result ,true));
            
            return $result;
        }
       
    }

    public function update_contact($contact_id, $data_contact)
    {
        $this->db->where('id', $contact_id);
        $this->db->update('new_contact', $data_contact);

        //log_message('debug', 'Contact| create_contact() -> Valeur du update_contact :'.print_r($contact_id, $data_contact ,true));

        return true;
    }
 
    public function delete_contact($contact_id)
    {
        $this->db->where('id', $contact_id);
        $this->db->delete('new_contact');
       
        return true;
    }
    
}