<?php
class Usuario_Model extends CI_Model
{
    public function existe_usuario($nombre)
    {
        $this->db->select('ID,nombres,contrasena,tipo_usu')->from('usuarios')->where('nombres',$nombre);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 1;
        }
    }
}
?>