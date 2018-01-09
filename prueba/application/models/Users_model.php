<?
class Users_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_users($slug = FALSE)
    {
      if ($slug === FALSE)
      {
          $query = $this->db->get('usuarios');
          return $query->result_array();
      }

      $query = $this->db->get_where('usuarios', array('slug' => $slug));
      return $query->row_array();
    }

    public function get_users_paginados($por_pagina,$segmento)
    {
      $query = $this->db->get('usuarios',$por_pagina,$segmento);
      return $query->result_array();
    }

    public function get_users_by_search($search,$por_pagina,$segmento)
    {
      $this->db->like('nombre' , $search);
      $query = $this->db->get('usuarios',$por_pagina,$segmento);

      return $query->result_array();
    }

    public function filas()
     {
       $consulta = $this->db->get('usuarios');
       return  $consulta->num_rows();
     }

     public function filas_search($search)
      {
        $this->db->like('nombre' , $search);
        $consulta = $this->db->get('usuarios');
        return  $consulta->num_rows();
      }

    public function get_user_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('usuarios');
            return $query->result_array();
        }

        $query = $this->db->get_where('usuarios', array('id' => $id));
        return $query->row_array();
    }

    public function get_user_login($correo, $password)
    {
        $query = $this->db->get_where('usuarios', array('correo' => $correo, 'password' => md5($password)));
        return $query->row_array();
    }

    public function set_user($id = 0)
    {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'correo' => $this->input->post('correo'),
            'password' => $this->input->post('password'),
            'rol' => $this->input->post('rol'),
            'status' => $this->input->post('status'),
        );

        if ($id == 0) {
            return $this->db->insert('usuarios', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('usuarios', $data);
        }
    }

}
