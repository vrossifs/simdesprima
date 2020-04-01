<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()	{
		parent::__construct();
	}

	public function index()	{
		$this->load->view('login/v_login');
	}

	public function login()	{
		$param = array("NIP" => "2010010119800403001");
		
		$curl = curl_init();

		curl_setopt_array($curl, 
			array(
				CURLOPT_URL => "http://simdes-bintan.id/simdesprima/api/login.php",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => false,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => json_encode($param),
				CURLOPT_HTTPHEADER => array(
					"Content-Type: application/json"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$data = json_decode($response, true);

			$array = array(
				'nama' => $data["biodata"]["nama"],
				'NIP' => '2010010119800403001',
				'NIK' => '2010010119800403001',
				'authoritycode' => $data["biodata"]["authoritycode"],
				'kelurahandesa' => $data["biodata"]["kelurahandesa"],
				'kecamatan' => $data["biodata"]["kecamatan"],
				'kabupaten' => $data["biodata"]["kabupaten"],
				'provinsi' => $data["biodata"]["provinsi"],
				'foto' => $data["biodata"]["foto"]
			);
			
			$this->session->set_userdata( $array );

			redirect('c_lamas');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('c_login');
	}

}

/* End of file c_login.php */
/* Location: ./application/controllers/c_login.php */