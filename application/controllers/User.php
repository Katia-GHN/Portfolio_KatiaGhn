<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{
		$this->load->view('template/header');
        $this->load->view('user/user');
		$this->load->view('template/footer');
    }

	public function create_user()
	{
		//régle de validation
		$this->form_validation->set_rules('prenom', 'prenom', 'trim|required|min_length[1]|max_length[30]');
		$this->form_validation->set_rules('nom', 'nom', 'trim|required|min_length[1]|max_length[20]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[50]');
		$this->form_validation->set_rules('adresse', 'adresse', 'trim|required');
		$this->form_validation->set_rules('ville', 'ville', 'trim|required');
		$this->form_validation->set_rules('checkbox', 'checkbox', 'trim|required');

		if($this->form_validation->run())
		{
			//tableau des données du user à l'inscription
			$prenom = $this->input->post('prenom');
			$nom = $this->input->post('nom');
			$email = $this->input->post('email');
			$adresse = $this->input->post('adresse');
			$ville = $this->input->post('ville');
			$checkbox = $this->input->post('checkbox');
			$data_user = array(
				'user_prenom' => $prenom,
				'user_nom' => $nom,
				'user_email' => $email,
				'user_adresse' => $adresse,
				'user_ville' => $ville,
				'user_checkbox' => $checkbox
			);
			//inssertion en bdd
			if ($user_id = $this->m_user->insert_user($data_user)) 
			{
				$result = $this->m_user->get_user($user_id);

				log_message('debug', 'User| get_user -> Valeur du $result:'.print_r($result ,true));

				$this->load->view('template/header');
				$this->session->set_flashdata('success', 'l\'inscription est valide');
				$this->load->view('user/user',$result[0] ); //tableau associatif 
				$this->load->view('template/footer');
				
			}
			else
			{
				$this->session->set_flashdata('error','l\'inscription a échoué');
                redirect('user/index');exit;
			}
		}
		else
		{
			$this->session->set_flashdata('error','une erreur lors de la saisie');
                redirect('user/index');exit;
		}
    }

	public function users_list()
	{
		$users = $this->m_user->get_all_users();

		if(empty($users))
		{
			$this->session->set_flashdata('error', 'Il n\'y a pas de contact existant');
			redirect('user/index');
			exit;
		}
		else
		{
			$data = array(
				'list' => $users
			);

			log_message('debug', 'User| users_list -> Valeur du $data :'.print_r($data ,true));
			
			$this->load->view('template/header');
			$this->load->view('user/users_list', $data);
			$this->load->view('template/footer');
		}
	}

	public function update_user($user_id)
	{
		$user_update = $this->m_user->get_user($user_id);
		$data = array(
			'usermodif' => $this->m_user->get_user($user_id)
		);
	
		$this->load->view('template/header');
		$this->load->view('user/update_user', $data);
		$this->load->view('template/footer');
		
		//régle de validation
		$this->form_validation->set_rules('user_prenom', 'user_prenom', 'trim|required|min_length[1]|max_length[30]');
		$this->form_validation->set_rules('user_nom', 'user_nom', 'trim|required|min_length[1]|max_length[20]');
		$this->form_validation->set_rules('user_email', 'user_email', 'trim|required|min_length[1]|max_length[50]');
		$this->form_validation->set_rules('user_adresse', 'user_adresse', 'trim|required');
		$this->form_validation->set_rules('user_ville', 'user_ville', 'trim|required');
		$this->form_validation->set_rules('user_checkbox', 'user_checkbox', 'trim|required');

		if(!$this->form_validation->run())
		{
			$this->session->set_flashdata('error','une erreur lors de la saisie');
		}
		else
		{
			//tableau des données du user à l'inscription
			$prenom = $this->input->post('user_prenom');
			$nom = $this->input->post('user_nom');
			$email = $this->input->post('user_email');
			$adresse = $this->input->post('user_adresse');
			$ville = $this->input->post('user_ville');
			$checkbox = $this->input->post('user_checkbox');
			$user_data = array(
				'user_prenom' => $prenom,
				'user_nom' => $nom,
				'user_email' => $email,
				'user_adresse' => $adresse,
				'user_ville' => $ville,
				'user_checkbox' => $checkbox
			);

			//log_message('debug','User| update_user() ->$data_user: '.print_r($user_data, true));


			//inssertion en bdd
			if ($this->m_user->update_user($user_id, $user_data)) 
			{
				$this->load->view('template/header');
				$this->session->set_flashdata('success', 'les modifications ont été effectuées');
				redirect('user/index');exit;	
				$this->load->view('template/footer');
			}
			else
			{
				$this->session->set_flashdata('error','les modifications n\'ont pas été prises en compte');
                redirect('user/index');exit;
			}
			
		}	
	}

	public function delete_user($user_id)
	{
		if($this->m_user->delete_user($user_id))
        {
            $this->session->set_flashdata('success', 'le user a bien été supprimé');
			redirect('user/index');exit;
        }
        else
        {
            $this->session->set_flashdata('error', 'une erreur s\'est produise, le user n\'a pas été supprimé');
			redirect('user/index');exit;
        } 
	}

}