<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
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
		if(is_null($this->session->logged_in))
		{
			$this->session->sess_destroy();
		}
		$data = array(
			'js' => $this->config->item('login_js')
		);
		$this->load->view('view_login',$data);
	}
	
	public function validar_login()
	{
		$respuesta = array(
			'respuesta' => 'exito',
			'usuario' => '',
			'pantalla' => ''
		);
		$usuario = $this->input->post('login');
		$password = $this->input->post('password');
		$this->load->model("Usuario_model");
		$resultado = $this->Usuario_model->existe_usuario($usuario);
		if ($resultado != 1) {
			if ($resultado[0]->contrasena == $password) {
				$respuesta['respuesta'] = 'exito';
				$respuesta['usuario'] = $resultado[0]->nombres;
				//Se verifica si el usuario es ciudadano, funcionario o jefe
				if ($resultado[0]->tipo_usu == 4) {
					$respuesta['pantalla'] = base_url()."index.php/Login/dashboard/";
				} else {
				//Si no es usuario (ciudadano), es funcionario
					$respuesta['pantalla'] = base_url()."app_tramite.php/Tramite/dashboard/";
				}
				
				$user_data = array(
					'username'  => $resultado[0]->nombres,
					'tipo_usuario'     => $resultado[0]->tipo_usu,
					'logged_in' => TRUE
				);
			
				$this->session->set_userdata($user_data);
				echo json_encode($respuesta);
			} else {
				$respues['respuesta'] = 'fallo';
				echo json_encode($respues);
			}
		} else {
			$respues['respuesta'] = 'fallo';
			echo json_encode($respues);
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function dashboard()
	{
		$this->load->view('view_components/header');
		$this->load->view('view_components/status_bar');
		$this->load->view('view_components/nav');
		$this->load->view('dashboard');
	}

	public function ir_tramite()
	{
		redirect(base_url().'app_tramite.php/Tramite/');
	}
}
