<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dialog extends CI_Controller {

	public function index()
	{
		
	}


	public function dialog_tanggap($sessionID){
		
		$this->session->set_userdata('sessionID', $sessionID);

		$param = array(
			"NIK" => $this->session->userdata('NIP'),
			"sessionID" => $sessionID
		);

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "http://simdes-bintan.id/simdesprima/api/aduan.php",
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
			$data_array = array(
				'percakapan' => $data['result']['percakapan']
			);

			$this->load->view('pengaduan/dialog_tanggap', $data_array);
		}
	}

	public function dialog_percakapan($sessionID){
		$this->session->set_userdata('sessionID', $sessionID);

		$param = array(
			"NIK" => $this->session->userdata('NIP'),
			"sessionID" => $sessionID
		);

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "http://simdes-bintan.id/simdesprima/api/aduan.php",
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
			$data_array = array(
				'percakapan' => $data['result']['percakapan']
			);
			$this->load->view('pengaduan/dialog_percakapan', $data_array);
		}
	}

}

/* End of file c_dialog.php */
/* Location: ./application/controllers/c_dialog.php */