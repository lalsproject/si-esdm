<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
		$this->load->model('M_data','data');
		$this->load->model('M_admin','admin');
	}


	private function send_mail($penerima,$subject,$isi_email)
	{
		// Konfigurasi email
		//Create an instance; passing `true` enables exceptions
		$mail = new PHPMailer(true);
		//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'mail.lalsproduction.my.id';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'esdm@lalsproduction.my.id';                     //SMTP username
		$mail->Password   = 'Google@12345';                               //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom($mail->Username, 'Dinas ESDM Pemprov');
		$mail->addAddress($penerima);     //Add a recipient
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $isi_email;
		if ($mail->send())
		{
			return 'Message has been sent';
		}
		else
		{
			return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['count_kab_kota'] = $this->data->cek('tbl_mas_daerah','IdDaerah != 0')->num_rows();
		$data['count_perusahaan'] = $this->data->cek('tbl_mas_perusahaan','IdPerusahaan != 0')->num_rows();
		$data['count_tambang'] = $this->data->cek('tbl_mas_tambang','IdTambang != 0')->num_rows();
		$data['new_blog'] = $this->data->getNewBlog();
		// $data['iup_logam'] = $this->api_iup_logam();
		frontPage('front/home',$data);
	}

	function login_page()
	{
		if ($this->session->userdata('is_login') == true AND $this->session->userdata('role') == 'admin')
		{
			redirect('dashboard');
		}
		else
		{
			$this->load->view('login');
		}
	}

	function login_proses()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$this->load->model('M_login','login');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$where = array(
				'username' => $username,
				'password' => md5($password)
			);

			$cek = $this->login->cek_login('tbl_login', $where);
			if ($cek->num_rows() > 0)
			{
				$user = $cek->row();
				if ($user->StatusLogin == 'ON')
				{
					$this->session->set_flashdata('notif', '<div class="alert alert-warning alert-dismissable" style=""><button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button> <center>User Sedang Aktif <a href="' . site_url('reset/'.encrypt_url($user->IdLogin)).'" title="" >Klik Disini Untuk Reset</a></center></div>');
					redirect('login');
				}
				else if($user->Role == 'admin' AND $user->StatusLogin == 'OFF')
				{
					$status = array(
						'StatusLogin' => 'ON',
						'LastLogin' =>  date('Y-m-d H:i:s'),
					);
					$where = array('IdLogin' => $user->IdLogin,);
					$this->db->update('tbl_login', $status, $where);

					$data_session = array(
						'iduser' => $user->IdLogin,
						'username' => $user->username,
						'status' => $user->StatusLogin,
						'role' => $user->Role,
						'LastLogin' => $user->LastLogin,
						'is_login' => true,
					);
					$welcome = '<script>$.toast({heading: "Welcome to dashboard '.$user->username.'",text: "Keep Smile 😘🙌👍",position: "top-right",loaderBg: "#ff6849",icon: "success",hideAfter: 3000,stack: 6});</script>';
					$this->session->set_userdata($data_session);
					$this->session->set_flashdata('notif', $welcome);
					redirect('dashboard');
				}
				else
				{
					$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissable" style=""><button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button><center>Akun Anda Bermasalah</center></div>');
					redirect('login');
				}
			}
			else
			{
				$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissable" style=""><button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button><center>Username & Password Salah 😭😭</center></div>');
				redirect('login');
			}
		}
		else
		{
			$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissable" style=""><button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button><center>Request Method '.$this->input->server('REQUEST_METHOD').' Tidak Di Dukung 💩</center></div>');
			redirect('login');
		}
	}

	function reset($id)
	{
		$status = array('StatusLogin' => 'OFF');
		$where = array('IdLogin' => decrypt_url($id),);
		$this->db->update('tbl_login', $status, $where);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissable" style="width:100%;"> <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button> <center>Status Login Berhasil Di Reset 🙌</center></div>');
		redirect('login');
	}

	function logout()
	{
		$status = array('StatusLogin' => 'OFF');
		$where = array('username' => $this->session->userdata('username'),);
		$this->db->update('tbl_login', $status, $where);
		$this->session->sess_destroy();
		redirect('home');
	}

	function view_blog($slug = false)
	{
		if ($slug != false)
		{
			$data['bd'] = $this->admin->cek('tbv_blog','Slug = "'.$slug.'"')->row();
			$data['title'] = $data['bd']->Judul;
			$data['new_blog'] = $this->data->getNewBlog();
			frontPage('front/blog_detail',$data);
		}
	}

	function list_blog()
	{
		$data['title'] = 'Semua Blog';
		$data['new_blog'] = $this->db->get('tbv_blog')->result();
		frontPage('front/blog_list',$data);
	}

	function lapor_peti()
	{
		$data['daerah'] = $this->admin->getAllDaerah();
		$this->load->view('front/fancy_lapor',$data);
	}

	function send_lapor()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$idlapor = rand(1,9999);
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$daerah = $this->input->post('daerah');
			$kecamatan = $this->input->post('kecamatan');
			$kelurahan = $this->input->post('kelurahan');
			$lokasi = $this->input->post('lokasi');
			$detail = $this->input->post('detail');

			$dataInsert = array(
				'IdLaporan' => $idlapor, 
				'Nama' => $nama, 
				'Email' => $email, 
				'Daerah' => $daerah, 
				'Kecamatan' => $kecamatan, 
				'Kelurahan' => $kelurahan, 
				'Lokasi' => $lokasi, 
				'Detail' => $detail
			);

			$insert = $this->db->insert('tbl_laporan', $dataInsert);
			if ($insert)
			{
				$this->send_mail($email,'Verifikasi Laporan Tambang Ilegal','<h3>Silakan Verifikasi Laporan Anda : <a href="'.site_url('verifikasilaporan/'.encrypt_url($idlapor)).'" title="">Klik Disini</a></h3>');
				echo "Laporan Anda Terkirim, Silakan Verifikasi";
			}
			else
			{
				redirect('home');
			}
		}
	}

	function verify_laporan($id = false)
	{
		header('Content-Type: application/json');
		if ($id != false)
		{
			$id = decrypt_url($id);
			$cek = $this->admin->cek('tbl_laporan','IdLaporan = "'.$id.'"');
			if ($cek->num_rows() > 0)
			{
				$cek = $cek->row();
				if ($cek->Verify == 'Y')
				{
					//expired
					http_response_code(201);
					$msg = array(
						'Status' => FALSE, 
						'msg' => 'Laporan Anda Sudah Terverifikasi', 
					);
					echo json_encode($msg);
				}
				else
				{
					$update = $this->db->update('tbl_laporan', array('Verify' => 'Y', ),array('IdLaporan' => $id,));
					http_response_code(200);
					$msg = array(
						'Status' => $update, 
						'msg' => 'Laporan Berhasil Terverifikasi', 
					);
					echo json_encode($msg);
				}
			}
			else
			{
				//tidak di temukan
				$msg = array(
					'Status' => FALSE, 
					'msg' => 'Bad Request', 
				);
				echo json_encode($msg);
				http_response_code(404);
			}
		}
		else
		{
			$msg = array(
				'Status' => FALSE, 
				'msg' => 'Bad Request', 
			);
			echo json_encode($msg);
			http_response_code(404);
		}
	}

	function view_tambang($type = false)
	{
		if ($type != false)
		{
			
			$type = decrypt_url($type);
			$getType = $this->admin->cek('tbl_mas_type_mineral','IdType = "'.$type.'"');
			if ($getType->num_rows() > 0)
			{
				$getType = $getType->row();
				$data['title'] = 'Data '.$getType->Type;
				$data['type'] = $getType->Type;
				$data['idtype'] = $getType->IdType;
				$data['perusahaan'] = $this->admin->getAllPerusahaan();
				$data['daerah'] = $this->admin->getAllDaerah();
				$data['tambang'] = $this->admin->cek('tbv_tambang','IdType = "'.$getType->IdType.'"')->result();
				$this->load->view('front/master_tambang',$data);
 			}
			else
			{
				http_response_code(500);
				echo 'Data Tidak Di Temukan 😭💩';
			}
		}
		else
		{
			http_response_code(404);
		}
	}

	function api_iup_logam()
	{
		header('Content-Type: application/json;');
		$data = $this->db->get_where('tbv_tambang','Type = "IUP Logam"')->result();
		$res = array();
		foreach ($data as $d)
		{
			$tglsk = date('d/m/Y',strtotime($d->TAwal)).' - '.date('d/m/Y',strtotime($d->TSelesai));
			$lat = (float)$d->Lat;
			$long = (float)$d->Long;
			$result['type'] = "Feature";
			$result['properties'] = array(
				'Lokasi' => $d->Lokasi, 
				'Luas' => $d->Luas, 
				'Tahapan' => $d->Tahapan, 
				'SK' => $d->SK, 
				'Nomor_SK' => $d->NoSK, 
				'Tgl_SK' => $tglsk, 
				'Komoditas' => $d->Komoditas, 
				'Mineral' => $d->Type, 
				'nama_perusahaan' => $d->Perusahaan, 
				'alamat' => $d->AlamatPerusahaan, 
				'Gambar' => '<center><img style="width:100px" src="'.base_url().'assets/img/tambang/'.$d->Foto.'" alt=""></center>', 
			);
			$result['geometry'] = array(
				'type' => 'Point', 
				'coordinates' => [$lat,$long], 
			);
			$res[]= $result;
		}
		echo json_encode($res);
	}

	function api_non_logam()
	{
		header('Content-Type: application/json;');
		$data = $this->db->get_where('tbv_tambang','Type = "IUP Non Logam & Batuan"')->result();
		$res = array();
		foreach ($data as $d)
		{
			$tglsk = date('d/m/Y',strtotime($d->TAwal)).' - '.date('d/m/Y',strtotime($d->TSelesai));
			$lat = (float)$d->Lat;
			$long = (float)$d->Long;
			$result['type'] = "Feature";
			$result['properties'] = array(
				'Lokasi' => $d->Lokasi, 
				'Luas' => $d->Luas, 
				'Tahapan' => $d->Tahapan, 
				'SK' => $d->SK, 
				'Nomor_SK' => $d->NoSK, 
				'Tgl_SK' => $tglsk, 
				'Komoditas' => $d->Komoditas, 
				'Mineral' => $d->Type, 
				'nama_perusahaan' => $d->Perusahaan, 
				'alamat' => $d->AlamatPerusahaan, 
				'Gambar' => '<center><img style="width:100px" src="'.base_url().'assets/img/tambang/'.$d->Foto.'" alt=""></center>',
			);
			$result['geometry'] = array(
				'type' => 'Point', 
				'coordinates' => [$lat,$long], 
			);
			$res[]= $result;
		}
		echo json_encode($res);
	}

	function api_kontrak()
	{
		header('Content-Type: application/json;');
		$data = $this->db->get_where('tbv_tambang','Type = "Kontrak Karya"')->result();
		$res = array();
		foreach ($data as $d)
		{
			$tglsk = date('d/m/Y',strtotime($d->TAwal)).' - '.date('d/m/Y',strtotime($d->TSelesai));
			$lat = (float)$d->Lat;
			$long = (float)$d->Long;
			$result['type'] = "Feature";
			$result['properties'] = array(
				'Lokasi' => $d->Lokasi, 
				'Luas' => $d->Luas, 
				'Tahapan' => $d->Tahapan, 
				'SK' => $d->SK, 
				'Nomor_SK' => $d->NoSK, 
				'Tgl_SK' => $tglsk, 
				'Komoditas' => $d->Komoditas, 
				'Mineral' => $d->Type, 
				'nama_perusahaan' => $d->Perusahaan, 
				'alamat' => $d->AlamatPerusahaan, 
				'Gambar' => '<center><img style="width:100px" src="'.base_url().'assets/img/tambang/'.$d->Foto.'" alt=""></center>', 
			);
			$result['geometry'] = array(
				'type' => 'Point', 
				'coordinates' => [$lat,$long], 
			);
			$res[]= $result;
		}
		echo json_encode($res);
	}
}
