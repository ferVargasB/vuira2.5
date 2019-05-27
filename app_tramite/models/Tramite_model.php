<?php
class Tramite_model extends CI_Model
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

    public function guardar_tramite()
    {
        $respuesta = array(
			'respuesta' => 'exito',
			'mensaje' => ''
		);
		try {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nombre_propietario', 'Nombre_de_Propietario', 'required');

			if (empty($_FILES['Doc_Identificacion']['name']))
			{
				$this->form_validation->set_rules('Doc_Identificacion', 'Identificacion_Oficial', 'required');
			}

			if (empty($_FILES['Doc_Oficio_Traza']['name']))
			{
				$this->form_validation->set_rules('Doc_Oficio_Traza', 'Documento_Oficio_Traza', 'required');
			}

			if (empty($_FILES['Doc_Resibo_Predial']['name']))
			{
				$this->form_validation->set_rules('Doc_Resibo_Predial', 'Recibo_Predial', 'required');
			}

			if (empty($_FILES['Doc_Plano_Digital']['name']))
			{
				$this->form_validation->set_rules('Doc_Plano_Digital', 'Documento_Plano_Digital', 'required');
			}

			if (empty($_FILES['Doc_Acta']['name']))
			{
				$this->form_validation->set_rules('Doc_Acta', 'Documento_Acta', 'required');
			}

			if (empty($_FILES['Doc_Escritura_Publica']['name']))
			{
				$this->form_validation->set_rules('Doc_Escritura_Publica', 'Documentos_Escritura_Publica', 'required');
			}

			if ($this->form_validation->run() == FALSE) {
				throw new Exception("Uno o más archivos se deben cargar con los requisitos solicitados");
			} else {
				//Codigo para verificar y guardar los archivos subidos
                $nombre_propietario = $this->input->post("nombre_propietario");
                $respuesta = $this->guardar_archivos($_FILES,$nombre_propietario);
				if ( $respuesta['respuesta'] == 'exito') {
					echo json_encode($respuesta);
				} else {
					$respuesta['respuesta'] = 'error';
					echo json_encode($respuesta);
				}
				
			}
		} catch (Exception $e) {
			$respuesta['respuesta'] = 'error';
			$respuesta['mensaje'] = $e->getMessage();
			echo json_encode($respuesta);
		}
    }

    private function guardar_archivos($archivos,$nombre_propietario)
    {
        $respuesta = array(
			'respuesta' => 'exito',
			'mensaje' => 'todo bien'
		);
        try {
            $nombre_propietario = trim($nombre_propietario);
            $nombre_propietario = strtolower($nombre_propietario);
            $nombre_archivo = 'Doc_Identificacion_'.$nombre_propietario.'_'.date('d_m_y_G_i_s');
            $config['file_name'] = $nombre_archivo;
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|pdf|rar';
            $config['max_size'] = 0;

            $this->load->library('upload', $config);
            if (! $this->upload->do_upload('Doc_Identificacion')) {
                throw new Exception("Falló al cargar el archivo Doc_Identificacion");
            }

            $nombre_archivo = 'Doc_Oficio_Traza_'.$nombre_propietario.'_'.date('d_m_y_G_i_s');
            $config['file_name'] = $nombre_archivo;
            $this->upload->initialize($config);
            if (! $this->upload->do_upload('Doc_Oficio_Traza')) {
                throw new Exception("Falló al cargar el archivo Doc_Oficio_Traza_");
            }

            $nombre_archivo = 'Doc_Resibo_Predial_'.$nombre_propietario.'_'.date('d_m_y_G_i_s');
            $config['file_name'] = $nombre_archivo;
            $this->upload->initialize($config);
            if (! $this->upload->do_upload('Doc_Resibo_Predial')) {
                throw new Exception("Falló al cargar el archivo Doc_Resibo_Predial_");
            }

            $nombre_archivo = 'Doc_Plano_Digital_'.$nombre_propietario.'_'.date('d_m_y_G_i_s');
            $config['file_name'] = $nombre_archivo;
            $this->upload->initialize($config);
            if (! $this->upload->do_upload('Doc_Plano_Digital')) {
                throw new Exception("Falló al cargar el archivo Doc_Plano_Digital_");
            }

            $nombre_archivo = 'Doc_Acta_'.$nombre_propietario.'_'.date('d_m_y_G_i_s');
            $config['file_name'] = $nombre_archivo;
            $this->upload->initialize($config);
            if (! $this->upload->do_upload('Doc_Acta')) {
                throw new Exception("Falló al cargar el archivo Doc_Acta_");
            }

            $nombre_archivo = 'Doc_Escritura_Publica_'.$nombre_propietario.'_'.date('d_m_y_G_i_s');
            $config['file_name'] = $nombre_archivo;
            $this->upload->initialize($config);
            if (! $this->upload->do_upload('Doc_Escritura_Publica')) {
                throw new Exception("Falló al cargar el archivo Doc_Escritura_Publica_");
            }
            return $respuesta;
        } catch (Exception $e) {
            $respuesta['respuesta'] = 'error';
            $respuesta['mensaje'] = $e->getMessage();
            return $respuesta;
        }
    }


    public function insertar_datos($urls_archivos)
    {
        $respuesta = array(
            'respuesta' => 'exito',
            'mensaje' => 'datos insertados correctamente'
        );
        $data = array(
            'Status' => 1,
            'Propietario' => $this->input->post('nombre_propietario'),
            'Correo_Electronico' => $this->input->post('correo'),
            'Telefono' => $this->input->post('telefono'),
            'Tipo_Tramite' => $this->input->post('tipo_tramite'),
            'Doc_Identificacion' => $urls_archivos['url_Doc_Identificacion_'],
            'Doc_Plano_Digital' => $urls_archivos['url_Doc_Oficio_Traza_'],
            'Doc_Acta' => $urls_archivos['url_Doc_Resibo_Predial_'],
            'Doc_Oficio_Traza' => $urls_archivos['url_Doc_Plano_Digital_'],
            'Doc_Escritura_Publica' => $urls_archivos['url_Doc_Acta_'],
            'Doc_Resibo_Predial' => $urls_archivos['url_Doc_Escritura_Publica_'],
            'fecha_inicial' => date('y-m-d'),
            'Fecha_Ultima_Modificacion' => date('y-m-d'),
            'Mensaje' => $this->input->post('informacion_adicional')
        );
        
        $this->db->insert('claves_catastrales_fraccionamientos',$data);
        return $respuesta;
    }

    public function get_all_tramites()
    {
        $this->db->select('Id,Status,Propietario,Correo_Electronico,Telefono,Tipo_Tramite,Doc_Identificacion,Doc_Plano_Digital,Doc_Acta,
        Doc_Oficio_Traza,Doc_Escritura_Publica,Doc_Resibo_Predial,fecha_inicial,Fecha_Ultima_Modificacion,Mensaje');
        $this->db->from('claves_catastrales_fraccionamientos');
        $this->db->where('Borrado !=',1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 1;
        }

    }

    public function get_by_id($id)
    {
        $this->db->select('Id,Status,Propietario,Correo_Electronico,Telefono,Tipo_Tramite,Doc_Identificacion,Doc_Plano_Digital,Doc_Acta,
        Doc_Oficio_Traza,Doc_Escritura_Publica,Doc_Resibo_Predial,fecha_inicial,Fecha_Ultima_Modificacion,Mensaje');
        $this->db->from('claves_catastrales_fraccionamientos');
        $this->db->where('Id',$id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 1;
        }
    }

    public function insertar_observacion($datos)
    {
        $data = array(
            'Mensaje' => $datos['observaciones'],
            'Status' => 1,
            'Fecha_Ultima_Modificacion' => date('y-m-d')
        );

        $this->db->where("Id",$datos['id_tramite']);
        if (! $this->db->update("claves_catastrales_fraccionamientos",$data) ) {
            return 1;
        } else {
            return "exito";
        }
    }


    public function insertar_validacion($id_tramite)
    {
        $data = array(
            'Status' => 2
        );
        $this->db->where("Id",$id_tramite);
        if (! $this->db->update("claves_catastrales_fraccionamientos",$data) ) {
            return 1;
        } else {
            return "exito";
        }
    }
}
?>