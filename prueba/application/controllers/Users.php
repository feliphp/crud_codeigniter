<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('users_model');
      $this->load->helper(array('form', 'url'));
      $this->load->library(array('session', 'form_validation'));
  }
  public function index()
  {
      $this->login();
  }

  public function search()
  {
      $search = $this->input->post('buscar');

      $pages=5;
      $this->load->library('pagination');
      $config['base_url'] = base_url().'users/login/';
      $config['total_rows'] = $this->users_model->filas_search($search);
      $config['per_page'] = $pages;
      $config['num_links'] = 20;
      $config['first_link'] = 'Primera';
      $config['last_link'] = 'Última';
      $config["uri_segment"] = 3;
      $config['next_link'] = 'Siguiente';
      $config['prev_link'] = 'Anterior';
      $this->pagination->initialize($config);

      $data['users'] = $this->users_model->get_users_by_search($search,$config['per_page'],$this->uri->segment(3));

      $this->load->view('header',$data);
      $this->load->view('users',$data);
  }

	public function login()
	{
    if (!$this->session->userdata('is_logged_in')) {
      $correo = $this->input->post('correo');
      $password = $this->input->post('password');

      $this->form_validation->set_rules('correo', 'Correo', 'trim|required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() === FALSE)
        {
            $this->session->set_flashdata('msg_error','No hay Datos');
           redirect('welcome');
        }
        if ($user = $this->users_model->get_user_login($correo, $password))
            {
              $this->session->set_userdata('correo', $correo);
              $this->session->set_userdata('user_id', $user['id']);
              $this->session->set_userdata('is_logged_in', true);

              $this->session->set_flashdata('msg_success','Login Exito');
            } else {
              $this->session->set_flashdata('msg_error','Los datos de Acceso no son correctos !');

              $currentClass = $this->router->fetch_class();
              $currentAction = $this->router->fetch_method();

              redirect('welcome');
            }
    } else {
    }
              $pages=5;
              $this->load->library('pagination');
              $config['base_url'] = base_url().'users/login/';
              $config['total_rows'] = $this->users_model->filas();
              $config['per_page'] = $pages;
              $config['num_links'] = 20;
              $config['first_link'] = 'Primera';
              $config['last_link'] = 'Última';
              $config["uri_segment"] = 3;
              $config['next_link'] = 'Siguiente';
              $config['prev_link'] = 'Anterior';
              $this->pagination->initialize($config);

            $data['users'] =$this->users_model->get_users_paginados($config['per_page'],$this->uri->segment(3));
            $this->load->view('header',$data);
            $this->load->view('users',$data);
	}

  public function register()
 {
   if (!$this->session->userdata('is_logged_in')) {
      redirect('welcome');
   } else {
     $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|min_length[3]|max_length[50]');
     $this->form_validation->set_rules('correo', 'Correo', 'trim|required|valid_email');
     $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
     $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');

     if ($this->form_validation->run() === FALSE)
     {
         $this->load->view('header');
         $this->load->view('users_register');
     }
     else
     {
         if ($this->users_model->set_user())
         {
             $this->session->set_flashdata('msg_success','Registro Guardado!');
             $password = $this->input->post('password');
             $correo = $this->input->post('correo');
             $this->sendemail($password, $correo);
             redirect('users/register');
         }
         else
         {
             $this->session->set_flashdata('msg_error','Error! Por favor intente de nuevo.');
             redirect('users/register');
         }
     }
   }
 }

 public function edit()
   {
       if (!$this->session->userdata('is_logged_in')) {
           redirect('welcome');
       } else {
           //$data['id'] = $this->session->userdata('id');
       }

       $id = $this->uri->segment(3);

       if (empty($id)) {
           show_404();
       }

       $this->load->helper('form');
       $this->load->library('form_validation');

       $data['user_item'] = $this->users_model->get_user_by_id($id);

       $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha|min_length[3]|max_length[50]');
       $this->form_validation->set_rules('correo', 'Correo', 'trim|required|valid_email');

       if ($this->form_validation->run() === FALSE) {
          $this->load->view('header', $data);
           $this->load->view('users_edit', $data);
       } else {
           $this->users_model->set_user($id);
           $this->load->view('header', $data);
           $this->load->view('users_edit', $data);
       }
   }

public function sendemail($password, $correo){
  //Load email library
  $this->load->library('email');

  //SMTP & mail configuration
  $config = array(
      'protocol'  => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'fhilidol3@gmail.com',
      'smtp_pass' => 'Fhilip18@',
      'mailtype'  => 'html',
      'charset'   => 'utf-8'
  );
  $this->email->initialize($config);
  $this->email->set_mailtype("html");
  $this->email->set_newline("\r\n");

  //Email content
  $htmlContent = '<h1>La contraseña de tu cuenta es:</h1>'.$password;
  $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

  $this->email->to($correo);
  $this->email->from('fhilidol3@gmail.com','prueba codeigniter de Felipe Herrera');
  $this->email->subject('How to send email via SMTP server in CodeIgniter');
  $this->email->message($htmlContent);

  //Send email
  $this->email->send();
}


  public function logout()
    {
        if ($this->session->userdata('is_logged_in')) {

            //$this->session->unset_userdata(array('email' => '', 'is_logged_in' => ''));
            $this->session->unset_userdata('correo');
            $this->session->unset_userdata('is_logged_in');
            $this->session->unset_userdata('user_id');
        }
        redirect('welcome');
    }

    public function delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('usuarios');
       $pages=5;
       $this->load->library('pagination');
       $config['base_url'] = base_url().'users/login/';
       $config['total_rows'] = $this->users_model->filas();
       $config['per_page'] = $pages;
       $config['num_links'] = 20;
       $config['first_link'] = 'Primera';
       $config['last_link'] = 'Última';
       $config["uri_segment"] = 3;
       $config['next_link'] = 'Siguiente';
       $config['prev_link'] = 'Anterior';
       $this->pagination->initialize($config);

       $data['users'] =$this->users_model->get_users_paginados($config['per_page'],$this->uri->segment(3));
       $this->load->view('header', $data);
       $this->load->view('users',$data);

   }
}
