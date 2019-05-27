<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tramite extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		if (!$this->session->logged_in) {
			//echo "No has iniciado sesión. Puedes hacerlo desde aquí <a href='http://localhost/CodeIgniter/'>Aquí</a>";
			$this->load->view("test/test");
		} 
		if ($this->session->tipo_usuario == 4) {
			$this->realizar_tramite();
		} else {
		//Si es funcionario mandarlo a su panel
			$this->dashboard();		
		}
		//mejorar el codigo de arriba
	}
	
	public function realizar_tramite()
	{
		if (!$this->session->logged_in) {
			//echo "No has iniciado sesión. Puedes hacerlo desde aquí <a href='http://localhost/CodeIgniter/'>Aquí</a>";
			$this->load->view("test/test");
		} else{
			$data = array(
				'titulo_pagina' => 'Captura de Trámite',
				'seccion' => 'Demostración del Trámite Prueba',
				"js" => base_url().'app_tramite_assets/js/form_captura_tramite.js'
			);
			$this->load->view('view_components/header',$data);
			$this->load->view('view_components/status_bar',$data);
			$this->load->view('view_components/nav');
			$this->load->view("ciudadano/form_captura_tramite",$data);
		}
	}

	public function guardar()
	{
		if (!$this->session->logged_in) {
			//echo "No has iniciado sesión. Puedes hacerlo desde aquí <a href='http://localhost/CodeIgniter/'>Aquí</a>";
			$this->load->view("test/test");
		} 

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
				throw new Exception("Uno o más archivos se deben cargar o llenar con los requisitos solicitados");
			} else {
				//Codigo para verificar y guardar los archivos subidos
                $nombre_propietario = $this->input->post("nombre_propietario");
                $respuesta = $this->guardar_archivos($nombre_propietario);
				if ( $respuesta['respuesta'] == 'exito') {

					//Codigo para verificar si se guardaron de forma correcta en la bd
					$this->load->model('Tramite_model');
					$respuesta = $this->Tramite_model->insertar_datos($respuesta);
					if ($respuesta['respuesta'] == 'exito') {
						$respuesta['pantalla_siguiente'] = base_url()."app_tramite.php/Tramite/mostrar_tramites/";
						echo json_encode($respuesta);
					} else {
						echo json_encode($respuesta);
					}
					
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

	public function guardar_archivos($nombre_propietario)
	{
		if (!$this->session->logged_in) {
			//echo "No has iniciado sesión. Puedes hacerlo desde aquí <a href='http://localhost/CodeIgniter/'>Aquí</a>";
			$this->load->view("test/test");
		} 
		$respuesta = array(
			'respuesta' => 'exito',
			'mensaje' => 'todo bien',
			'url_Doc_Identificacion_' => '',
			'url_Doc_Oficio_Traza_' => '',
			'url_Doc_Resibo_Predial_' => '',
			'url_Doc_Plano_Digital_' => '',
			'url_Doc_Acta_' => '',
			'url_Doc_Escritura_Publica_' => ''
		);
        try {
            $nombre_propietario = str_replace(' ','_',$nombre_propietario);
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
			$respuesta['url_Doc_Identificacion_'] = base_url().'uploads/'.$this->upload->data('file_name');

            $nombre_archivo = 'Doc_Oficio_Traza_'.$nombre_propietario.'_'.date('d_m_y_G_i_s');
            $config['file_name'] = $nombre_archivo;
            $this->upload->initialize($config);
            if (! $this->upload->do_upload('Doc_Oficio_Traza')) {
                throw new Exception("Falló al cargar el archivo Doc_Oficio_Traza_");
			}
			$respuesta['url_Doc_Oficio_Traza_'] = base_url().'uploads/'.$this->upload->data('file_name');

            $nombre_archivo = 'Doc_Resibo_Predial_'.$nombre_propietario.'_'.date('d_m_y_G_i_s');
            $config['file_name'] = $nombre_archivo;
            $this->upload->initialize($config);
            if (! $this->upload->do_upload('Doc_Resibo_Predial')) {
                throw new Exception("Falló al cargar el archivo Doc_Resibo_Predial_");
			}
			$respuesta['url_Doc_Resibo_Predial_'] = base_url().'uploads/'.$this->upload->data('file_name');

            $nombre_archivo = 'Doc_Plano_Digital_'.$nombre_propietario.'_'.date('d_m_y_G_i_s');
            $config['file_name'] = $nombre_archivo;
            $this->upload->initialize($config);
            if (! $this->upload->do_upload('Doc_Plano_Digital')) {
                throw new Exception("Falló al cargar el archivo Doc_Plano_Digital_");
			}
			$respuesta['url_Doc_Plano_Digital_'] = base_url().'uploads/'.$this->upload->data('file_name');

            $nombre_archivo = 'Doc_Acta_'.$nombre_propietario.'_'.date('d_m_y_G_i_s');
            $config['file_name'] = $nombre_archivo;
            $this->upload->initialize($config);
            if (! $this->upload->do_upload('Doc_Acta')) {
                throw new Exception("Falló al cargar el archivo Doc_Acta_");
			}
			$respuesta['url_Doc_Acta_'] = base_url().'uploads/'.$this->upload->data('file_name');

            $nombre_archivo = 'Doc_Escritura_Publica_'.$nombre_propietario.'_'.date('d_m_y_G_i_s');
            $config['file_name'] = $nombre_archivo;
            $this->upload->initialize($config);
            if (! $this->upload->do_upload('Doc_Escritura_Publica')) {
                throw new Exception("Falló al cargar el archivo Doc_Escritura_Publica_");
            }
			$respuesta['url_Doc_Escritura_Publica_'] = base_url().'uploads/'.$this->upload->data('file_name');
			
			return $respuesta;
        } catch (Exception $e) {
            $respuesta['respuesta'] = 'error';
            $respuesta['mensaje'] = $e->getMessage();
            return $respuesta;
        }
	}

	public function mostrar_tramites()
	{
		if (!$this->session->logged_in) {
			//echo "No has iniciado sesión. Puedes hacerlo desde aquí <a href='http://localhost/CodeIgniter/'>Aquí</a>";
			$this->load->view("test/test");
		}
		
		if ($this->session->tipo_usuario == 4) {
			$data = array(
				'titulo_pagina' => 'Mis Trámites',
				'seccion' => 'Demostración del listado de trámites para el ciudadano',
				"data_table_css" => '//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css',
				'data_table_js' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
				'data_table_export_css' => 'https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css',
				'data_table_buttons' => 'https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js',
				'data_table_buttons_flas' => 'https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js',
				'data_table_gzip' => 'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
				'data_table_pdfmaker' => 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js',
				'data_table_vfs' => 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js',
				'data_table_html' => 'https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js',
				'data_table_print' => 'https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js',
				'registros' => ''
			);
			$this->load->model('Tramite_model');
			$registros = $this->Tramite_model->get_all_tramites();
			if ($registros != 1) {
				$data['registros'] = $registros;
				$this->load->view('view_components/header',$data);
				$this->load->view('view_components/status_bar',$data);
				$this->load->view('view_components/nav');
				$this->load->view("ciudadano/listado_tramites",$data);
			} else {
				# code...
			}
			
		} else {
			//Para el funcionario
		}
	}

	public function dashboard()
	{
		if (!$this->session->logged_in) {
			//echo "No has iniciado sesión. Puedes hacerlo desde aquí <a href='http://localhost/CodeIgniter/'>Aquí</a>";
			$this->load->view("test/test");
		} else{
			$this->load->model("Tramite_model");
			$tramites = $this->Tramite_model->get_all_tramites();
			$data = array(
				'tramites' => $tramites
			);
			$this->load->view("view_dashboard_funcionario",$data);
		} 
	}

	public function revisar_tramite($id_tramite)
	{
		if (!$this->session->logged_in) {
			//echo "No has iniciado sesión. Puedes hacerlo desde aquí <a href='http://localhost/CodeIgniter/'>Aquí</a>";
			$this->load->view("test/test");
		} else{
			$this->load->model("Tramite_model");
			$registro = $this->Tramite_model->get_by_id($id_tramite);
			$data = array(
				'registro' => $registro,
				'id_tramite' => $id_tramite
			);
			$this->load->view("funcionario/view_revisar_tramite.php",$data);
		} 
	}

	public function validar_tramite()
	{
		if ($this->input->is_ajax_request()) {
			$id_tramite = $this->input->post("id_tramite");
			$this->load->model("Tramite_model");
			$respuesta['respuesta'] = $this->Tramite_model->insertar_validacion($id_tramite);
			if ($respuesta['respuesta'] == "exito") {
				$respuesta['pantalla_siguiente'] = base_url().'app_tramite.php/Tramite/Dashboard/';
				echo json_encode($respuesta);
			} else {
				$respuesta['respuesta'] = "error";
				$respuesta['mensaje'] = "Ocurrió un Error al generar la Observación";
			}
		} else {
			echo "no es vato";
		}
		
	}

	public function generar_observacion()
	{
		$datos = array(
			'id_tramite' => '',
			'observaciones' => '',
			'respuesta' => '',
			'mensaje' => ''
		);
		if ($this->input->is_ajax_request()) {
			$datos['id_tramite'] = $this->input->post('id_tramite',TRUE);
			$datos['observaciones'] = $this->input->post('observaciones',TRUE);
			$this->load->model("Tramite_model");
			$respuesta =  $this->Tramite_model->insertar_observacion($datos);
			if ($respuesta == "exito") {
				$datos['respuesta'] = "exito";
				echo json_encode($datos);
			} else {
				$datos['respuesta'] = "error";
				$datos['mensaje'] = "Ocurrió un Error al generar la Observación";
			}
			
		} else {
			echo "no es vato";
		}
	}


}
