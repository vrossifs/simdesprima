<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_lamas extends CI_Controller {
	 
	public function __construct()	{
		parent::__construct();
		$this->load->library('session');

		// $data["notif"] = 1;
		// $data["notif_title"] = "SYADIAH";
		// $data["notif_message"] = "Minta tlg surat keterangan pindah";
		// $data["notif_date"] = "09 Februari 2020";
		// $this->load->view('pengaduan/header', $data);
		$this->load->view('pengaduan/header');
		$this->load->view('pengaduan/sidebar');
		$this->load->view('assets');
	}

	public function index()	{
		$param = array("NIK" => $this->session->userdata('NIK'));
		
		$curl = curl_init();

		curl_setopt_array($curl, 
			array(
				CURLOPT_URL => "http://simdes-bintan.id/simdesprima/api/history.php",
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
				'datalist' => $data['history']
			);

			$this->load->view('pengaduan/v_pengaduan',$data_array);
		}
	}

	public function kirim_tanggapan(){
		$param = array(
			"NIK" => $this->session->userdata('NIP'),
			"sessionID" => $this->input->post('kode_aduan'),
			"message" => $this->input->post('tanggapan')
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
				'datalist' => $data['result']['percakapan']
			);
			redirect('c_lamas');
		}
	}

	public function close_tanggapan($sessionID){
		$param = array(
			"NIP" => $this->session->userdata('NIP'),
			"sessionID" => $sessionID
		);

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "http://simdes-bintan.id/simdesprima/api/closing.php",
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
			redirect('c_lamas');
		}
	}
}

/* End of file c_lamas.php */
/* Location: ./application/controllers/c_lamas.php */