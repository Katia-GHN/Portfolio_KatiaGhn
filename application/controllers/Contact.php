<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	public function index()
	{
		$this->load->view('template/header');
        $this->load->view('contact');
		$this->load->view('template/footer');
	}

    public function create_contact()
	{
		// régles de validation du form
		$this->form_validation->set_rules('nom', 'nom', 'trim|required|min_length[1]|max_length[30]');
		$this->form_validation->set_rules('prenom', 'prenom', 'trim|required|min_length[1]|max_length[20]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[50]');
		$this->form_validation->set_rules('telephone', 'telephone', 'trim|required');

		//si le form ne répond pas aux régles
		if(!$this->form_validation->run() )
		{
			//utilisation du validation form qui appartient à codeigniter
			$this->session->set_flashdata('error','une erreur lors de la saisie');
                redirect('contact/index');exit;
		}
		else //sinon le form est conforme aux règles
		{
			// lorsque je submit, ça recupère les données du formulaire submit via input
			$nom = $this->input->post('nom');
			$prenom = $this->input->post('prenom');
			$email = $this->input->post('email');
			$telephone = $this->input->post('telephone');
			$checkbox = $this->input->post('checkbox');
			//  tableau avec les valeurs 
			$montableau = array(
				'nom' => $nom,
				'prenom' => $prenom,
				'email' => $email,
				'telephone' => $telephone,
				'checkbox' => $checkbox
			);

			if ($id = $this->m_contact->insert_new_contact($montableau)) 
			{
				//une creer une var result pr obtenir la valeur de l'id recupéré dans la methode dans m_contact
				$result = $this->m_contact->get_new_contact($id);

				//ligne de test pour savoir ce que renvoie $result cad la valeur du get_new_contact creer en m_contact
				log_message('debug','Contact| create_contact() ->$result : '.print_r($result, true));
				//die()     // pour que le test s'arret ici ou peut mettre le di() ailleur tel que dans le model
			
				$this->load->view('template/header');
				$this->session->set_flashdata('success', 'le formulaire est valide et inséré en bdd');
				$this->load->view('contact',  $result[0]); //tableau associatif 
			}
			else 
			{
				$this->session->set_flashdata('error','insertion en bdd non ok');
                redirect('contact/index');exit;
			}
		}
	}

	public function user_list()
	{
		$contacts = $this->m_contact->get_all_contact();
    
		if(empty($contacts))
		{
			$this->session->set_flashdata('error', 'Il n\'y a pas de contact existant');
			redirect('contact/index');
			exit;
		}
		else
		{
			$data = array(
				'list' => $contacts
			);
			
			$this->load->view('template/header');
			$this->load->view('contact/user_list', $data);
		}
		
	}
    
	public function modifier_contact($id)
    {
		log_message('debug','Contact| modifier_contact() ->$id : '.print_r($id, true));
		
		$contact_updated = $this->m_contact->get_new_contact($id);

		log_message('debug','Contact| modifier_contact() ->$contact_updated : '.print_r($contact_updated, true));

		$data = array(
			'contact' => $this->m_contact->get_new_contact($id)
		);
		
		$this->load->view('template/header');
		$this->load->view('contact/modifier_contact', $data);

		// régles de validation du form
		$this->form_validation->set_rules('nom', 'nom', 'trim|required|max_length[30]');
		$this->form_validation->set_rules('prenom', 'prenom', 'trim|required|max_length[20]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('telephone', 'telephone', 'trim|required');

		if($this->form_validation->run() )
		{
			$nom = $this->input->post('nom');
			$prenom = $this->input->post('prenom');
			$email = $this->input->post('email');
			$telephone = $this->input->post('telephone');
			$checkbox = $this->input->post('checkbox');
			//  tableau avec les valeurs 
			$newdata = array(
				
				'nom' => $nom,
				'prenom' => $prenom,
				'email' => $email,
				'telephone' => $telephone,
				'checkbox' => $checkbox
			);

			log_message('debug','Contact| modifier_contact() valeur de ->$newdata : '.print_r($newdata, true));
			
			
			if ($this->m_contact->update_contact($id, $newdata)) 
			{
				$this->load->view('template/header');
				$this->session->set_flashdata('success', 'le contact est modifié avec succès');
				redirect('contact/index');exit;	
			}
			else 
			{
				$this->session->set_flashdata('error','modification du contact n\'a pas été effectué');
			}
		}
		else
		{
			$this->session->set_flashdata('error','le formulaire n\'est pas conforme');
		}
    }

	public function delete_contact($id)
	{
		if($this->m_contact->delete_contact($id))
        {
            $this->session->set_flashdata('success', 'le contact a bien été supprimé');
			redirect('contact/index');exit;
        }
        else
        {
            $this->session->set_flashdata('error', 'une erreur s\'est produise, le contact n\'a pas été supprimé');
			redirect('contact/index');exit;
        } 
	}
}
