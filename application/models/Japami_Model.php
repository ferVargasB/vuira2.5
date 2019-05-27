<?php

class Japami_Model extends CI_Model
{
    public function get_all()
    {
        $result = $this->db->get('contratacion_y_servicios_de_agua_y_drenaje_domestico');
        $registros = $result->result_array();
        return $registros;
    }
}

?>