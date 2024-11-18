<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
		$this->load->model('M_admin','admin');
		if ($this->session->userdata('role') != 'admin') {
			$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissable" style=""><button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button><center>Waktu Sesi Habis, Silakan Login Kembali</center></div>');
			redirect('login');
		}
	}

	function index()
	{
		$data['title'] = 'Dashboard';
		$data['count_iup'] = $this->admin->cek('tbv_tambang','IdType = 1')->num_rows();
		$data['count_non'] = $this->admin->cek('tbv_tambang','IdType = 2')->num_rows();
		$data['count_knt'] = $this->admin->cek('tbv_tambang','IdType = 3')->num_rows();
		$data['count_perusahaan'] = $this->admin->cek('tbl_mas_perusahaan','IdPerusahaan != 0')->num_rows();
		dashPage('admin/home',$data);
	}

	function master_daerah()
	{
		$data['title'] = 'Data Daerah';
		$data['daerah'] = $this->admin->getAllDaerah();
		dashPage('admin/master_daerah',$data);
	}

	function view_edit_daerah($iddaerah = false)
	{
		if ($iddaerah != false AND $this->input->server('REQUEST_METHOD') == 'POST')
		{
			$iddaerah = decrypt_url($iddaerah);
			$daerah = $this->admin->cek('tbl_mas_daerah','IdDaerah = "'.$iddaerah.'"');
			if ($daerah->num_rows() > 0)
			{
				http_response_code(200);

				$daerah = $daerah->row();
				$value = '';
				$value .='<div class="row">';
				$value .='<div class="form-group col-md-12">';
				$value .='<label>Daerah</label>';
				$value .='<input type="text" autofocus required name="daerah" value="'.$daerah->Daerah.'" class="form-control"><input type="hidden" name="iddaerah" value="'.encrypt_url($daerah->IdDaerah).'">';
				$value .='</div>';
				$value .='</div>';
				
				echo json_encode($value);
			}
			else
			{
				http_response_code(201);
				echo json_encode('/'.$this->input->server('REQUEST_METHOD').' : No Data');
			}
			
		}
		else
		{
			http_response_code(500);
			echo json_encode('/'.$this->input->server('REQUEST_METHOD').' Not Allowed');
		}
	}

	function edit_daerah()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$iddaerah = decrypt_url($this->input->post('iddaerah'));
			$daerah = $this->input->post('daerah');

			$dataUpdate = array(
				'IdDaerah' => $iddaerah, 
				'Daerah' => $daerah, 
			);

			$cek = $this->admin->cek('tbl_mas_daerah','Daerah = "'.$daerah.'" AND IdDaerah != "'.$iddaerah.'"')->num_rows();
			if ($cek > 0)
			{
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Duplicate",text: "Data Sudah Ada 🙌",position: "top-right",loaderBg: "#ff6849",icon: "warning",hideAfter: 3000,stack: 6});</script>');
				redirect('daerah');
			}
			else
			{
				$this->db->update('tbl_mas_daerah', $dataUpdate,array('IdDaerah' => $iddaerah,));
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Success",text: "Data Berhasil Di Edit 😘🙌👍",position: "top-right",loaderBg: "#ff6849",icon: "success",hideAfter: 3000,stack: 6});</script>');
				redirect('daerah');	
			}
		}
		else
		{
			http_response_code(500);
			echo '/'.$this->input->server('REQUEST_METHOD').' Not Allowed';
		}
	}

	function save_daerah()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$daerah = $this->input->post('daerah');

			$dataInsert = array(
				'Daerah' => $daerah, 
			);

			$cek = $this->admin->cek('tbl_mas_daerah','Daerah = "'.$daerah.'"')->num_rows();
			if ($cek > 0)
			{
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Duplicate",text: "Data Sudah Ada 🙌",position: "top-right",loaderBg: "#ff6849",icon: "warning",hideAfter: 3000,stack: 6});</script>');
				redirect('daerah');
			}
			else
			{
				$this->db->insert('tbl_mas_daerah', $dataInsert);
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Success",text: "Data Berhasil Di Simpan 😘🙌👍",position: "top-right",loaderBg: "#ff6849",icon: "success",hideAfter: 3000,stack: 6});</script>');
				redirect('daerah');	
			}
		}
		else
		{
			http_response_code(500);
			echo '/'.$this->input->server('REQUEST_METHOD').' Not Allowed';
		}
	}

	function del_daerah($id = false)
	{
		if ($id != false)
		{
			$id = decrypt_url($id);
			$delete = $this->db->delete('tbl_mas_daerah',array('IdDaerah' => $id,));
			if ($delete)
			{
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Success",text: "Data Berhasil Di Hapus 😘🙌👍",position: "top-right",loaderBg: "#ff6849",icon: "success",hideAfter: 3000,stack: 6});</script>');
				redirect('daerah');
			}
			else
			{
				http_response_code(500);
				echo 'Data Tidak Di Temukan 😭💩';
			}
		}
	}

	function master_perusahaan()
	{
		$data['title'] = 'Data Perusahaan';
		$data['perusahaan'] = $this->admin->getAllPerusahaan();
		dashPage('admin/master_perusahaan',$data);
	}

	function add_perusahaan()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$perusahaan = $this->input->post('perusahaan');
			$alamat = $this->input->post('alamat');

			$dataInsert = array(
				'Perusahaan' => $perusahaan,
				'AlamatPerusahaan' => $alamat 
			);

			$cek = $this->admin->cek('tbl_mas_perusahaan','Perusahaan = "'.$perusahaan.'"')->num_rows();
			if ($cek > 0)
			{
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Duplicate",text: "Data Sudah Ada 🙌",position: "top-right",loaderBg: "#ff6849",icon: "warning",hideAfter: 3000,stack: 6});</script>');
				redirect('perusahaan');
			}
			else
			{
				$this->db->insert('tbl_mas_perusahaan', $dataInsert);
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Success",text: "Data Berhasil Di Simpan 😘🙌👍",position: "top-right",loaderBg: "#ff6849",icon: "success",hideAfter: 3000,stack: 6});</script>');
				redirect('perusahaan');	
			}
		}
		else
		{
			http_response_code(500);
			echo '/'.$this->input->server('REQUEST_METHOD').' Not Allowed';
		}
	}

	function view_edit_perusahaan($idperusahaan=false)
	{
		if ($idperusahaan != false AND $this->input->server('REQUEST_METHOD') == 'POST')
		{
			$idperusahaan = decrypt_url($idperusahaan);
			$perusahaan = $this->admin->cek('tbl_mas_perusahaan','IdPerusahaan = "'.$idperusahaan.'"');
			if ($perusahaan->num_rows() > 0)
			{
				http_response_code(200);

				$perusahaan = $perusahaan->row();
				$value = '';
				$value .='<div class="row">';
				$value .='<div class="form-group col-md-12">';
				$value .='<label>Nama Perusahaan</label>';
				$value .='<input type="text" name="perusahaan" class="form-control" value="'.$perusahaan->Perusahaan.'" required>';
				$value .='<input type="hidden" name="idperusahaan" class="form-control" value="'.encrypt_url($perusahaan->IdPerusahaan).'" required>';
				$value .='</div>';
				$value .='<div class="form-group col-md-12">';
				$value .='<label>Alamat</label>';
				$value .='<textarea name="alamat" class="form-control" required>'.$perusahaan->AlamatPerusahaan.'</textarea>';
				$value .='</div>';
				$value .='</div>';
				echo json_encode($value);
			}
			else
			{
				http_response_code(201);
				echo json_encode('/'.$this->input->server('REQUEST_METHOD').' : No Data');
			}
			
		}
		else
		{
			http_response_code(500);
			echo json_encode('/'.$this->input->server('REQUEST_METHOD').' Not Allowed');
		}
	}

	function edit_perusahaan()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$idper = decrypt_url($this->input->post('idperusahaan'));
			$perusahaan = $this->input->post('perusahaan');
			$alamat = $this->input->post('alamat');

			$dataUpdate = array(
				'Perusahaan' => $perusahaan, 
				'AlamatPerusahaan' => $alamat, 
			);

			$cek = $this->admin->cek('tbl_mas_perusahaan','Perusahaan = "'.$perusahaan.'" AND AlamatPerusahaan = "'.$alamat.'" AND IdPerusahaan != "'.$idper.'"')->num_rows();
			if ($cek > 0)
			{
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Duplicate",text: "Data Sudah Ada 🙌",position: "top-right",loaderBg: "#ff6849",icon: "warning",hideAfter: 3000,stack: 6});</script>');
				redirect('perusahaan');
			}
			else
			{
				$this->db->update('tbl_mas_perusahaan', $dataUpdate,array('IdPerusahaan' => $idper,));
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Success",text: "Data Berhasil Di Edit 😘🙌👍",position: "top-right",loaderBg: "#ff6849",icon: "success",hideAfter: 3000,stack: 6});</script>');
				redirect('perusahaan');	
			}
		}
		else
		{
			http_response_code(500);
			echo '/'.$this->input->server('REQUEST_METHOD').' Not Allowed';
		}
	}

	function del_perusahaan($id = false)
	{
		if ($id != false)
		{
			$id = decrypt_url($id);
			$delete = $this->db->delete('tbl_mas_perusahaan',array('IdPerusahaan' => $id,));
			if ($delete)
			{
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Success",text: "Data Berhasil Di Hapus 😘🙌👍",position: "top-right",loaderBg: "#ff6849",icon: "success",hideAfter: 3000,stack: 6});</script>');
				redirect('perusahaan');
			}
			else
			{
				http_response_code(500);
				echo 'Data Tidak Di Temukan 😭💩';
			}
		}
	}

	function master_tambang($type=false)
	{
		if ($type == false)
		{
			$data['title'] = 'Data Semua Tambang';
			$data['type'] = false;
			$data['idtype'] = '';
			$data['tambang'] = $this->admin->cek('tbv_tambang','IdTambang != 0')->result();
			dashPage('admin/master_tambang',$data);
		}
		else
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
				dashPage('admin/master_tambang',$data);
 			}
			else
			{
				http_response_code(500);
				echo 'Data Tidak Di Temukan 😭💩';
			}
		}

	}

	function save_tambang()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$type = $this->input->post('type');
			$perusahaan = $this->input->post('perusahaan');
			$daerah = $this->input->post('daerah');
			$lat = $this->input->post('lat');
			$longi = $this->input->post('longi');
			$luas = $this->input->post('luas');
			$lokasi = $this->input->post('lokasi');
			$tahapan = $this->input->post('tahapan');
			$sk = $this->input->post('sk');
			$nosk = $this->input->post('nosk');
			$tawal = $this->input->post('tawal');
			$takhir = $this->input->post('takhir');
			$komoditas = $this->input->post('komoditas');
			$status = $this->input->post('status');
			$keterangan = $this->input->post('keterangan');
			$gambar = $_FILES['gambar']['name'];

			if (empty($gambar))
			{

				$gambar = 'default.jpg';

			}
			else
			{
				$config = array(
					'upload_path' => './assets/img/tambang/', 
					'allowed_types' => 'jpg|jpeg|JPEG|JPG|png|PNG',
					'file_name' => 'tambang-'.$perusahaan.'-'.round(microtime(true)),
					'quality' => '50%',
				);

				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar'))
				{
					$this->session->set_flashdata('notif','<script>$.toast({heading: "Not Supported",text: "File tidak di dukung",position: "top-right",loaderBg: "#ff6849",icon: "warning",hideAfter: 3000,stack: 6});</script>');
					redirect('tambang/'.encrypt_url($type));
				}
				else
				{
					$gambar = $this->upload->data('file_name'); 
				}

			}
			$data_add = array(
				'IdPerusahaan' => $perusahaan, 
				'IdType' => $type, 
				'IdDaerah' => $daerah, 
				'Lat' => $lat, 
				'Long' => $longi, 
				'Lokasi' => $lokasi, 
				'Luas' => $luas, 
				'Tahapan' => $tahapan, 
				'SK' => $sk, 
				'NoSK' => $nosk, 
				'TAwal' => $tawal, 
				'TSelesai' => $takhir, 
				'Komoditas' => $komoditas, 
				'Status' => $status, 
				'Ket' => $keterangan, 
				'Foto' => $gambar, 
			);

			$insert = $this->db->insert('tbl_mas_tambang', $data_add);
			if ($insert)
			{
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Success",text: "Data Berhasil Di Simpan 😘🙌👍",position: "top-right",loaderBg: "#ff6849",icon: "success",hideAfter: 3000,stack: 6});</script>');
				redirect('tambang/'.encrypt_url($type));
			}
			else
			{
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Duplicate",text: "Data Gagal Di Simpan",position: "top-right",loaderBg: "#ff6849",icon: "warning",hideAfter: 3000,stack: 6});</script>');
				redirect('tambang/'.encrypt_url($type));
			}
		}
		else
		{
			$this->session->set_flashdata('notif','<script>$.toast({heading: "Duplicate",text: "Data Gagal Di Simpan",position: "top-right",loaderBg: "#ff6849",icon: "warning",hideAfter: 3000,stack: 6});</script>');
			redirect('tambang/'.encrypt_url($type));
		}
	}

	function hapus_tambang($id=false,$type=false)
	{
		if ($id != false AND $type != false)
		{
			$id = decrypt_url($id);
			$this->db->delete('tbl_mas_tambang',array('IdTambang' => $id, ));
			$this->session->set_flashdata('notif','<script>$.toast({heading: "Success",text: "Data Berhasil Di Hapus 😘🙌👍",position: "top-right",loaderBg: "#ff6849",icon: "success",hideAfter: 3000,stack: 6});</script>');
			redirect('tambang/'.$type);
		}
		else
		{
			http_response_code(404);
		}
	}

	function create_blog()
	{
		$data['title'] = 'Post New Blog';
		$data['blog'] = $this->admin->getAllBlog();
		$data['kategori'] = $this->admin->getAllKategori();
		dashPage('admin/master_blog',$data);
	}

	function save_blog()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$judul = $this->input->post('judul');
			$kategori = $this->input->post('kategori');
			$isi = $this->input->post('isi');
			$slug = $this->input->post('slug');

			$dataInsert = array(
				'Judul' => $judul, 
				'Kategori' => $kategori, 
				'Isi' => $isi, 
				'Slug' => $slug, 
			);

			$insert = $this->db->insert('tbl_mas_blog', $dataInsert);
			if ($insert)
			{
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Success",text: "Data Berhasil Di Simpan 😘🙌👍",position: "top-right",loaderBg: "#ff6849",icon: "success",hideAfter: 3000,stack: 6});</script>');
				redirect('createpost');
			}
		}
		else
		{
			http_response_code(404);
		}
	}

	function edit_blog($id = false)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST' AND $id != false)
		{
			$id = decrypt_url($id);
			$data['blog'] = $this->admin->cek('tbv_blog','IdBlog = '.$id)->row();
			$data['kategori'] = $this->admin->getAllKategori();
			echo json_encode($this->load->view('admin/ajax_edit_blog', $data));
		}
		else
		{
			http_response_code(404);
			echo json_encode(false);
		}
	}

	function save_edit_blog()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$judul = $this->input->post('judul');
			$kategori = $this->input->post('kategori');
			$isi = $this->input->post('isi');
			$slug = $this->input->post('slug');
			$id = $this->input->post('idblog');
			$dataUpdate = array(
				'Judul' => $judul, 
				'Kategori' => $kategori, 
				'Isi' => $isi, 
				'Slug' => $slug, 
			);

			$update = $this->db->update('tbl_mas_blog', $dataUpdate,array('IdBlog' => $id,));
			if ($update)
			{
				$this->session->set_flashdata('notif','<script>$.toast({heading: "Success",text: "Data Berhasil Di Simpan 😘🙌👍",position: "top-right",loaderBg: "#ff6849",icon: "success",hideAfter: 3000,stack: 6});</script>');
				redirect('createpost');
			}
		}
		else
		{
			http_response_code(404);
		}
	}

	function del_blog($id)
	{
		if ($id != false)
		{
			$id = decrypt_url($id);
			$this->db->delete('tbl_mas_blog',array('IdBlog' => $id, ));
			$this->session->set_flashdata('notif','<script>$.toast({heading: "Success",text: "Data Berhasil Di Hapus 😘🙌👍",position: "top-right",loaderBg: "#ff6849",icon: "success",hideAfter: 3000,stack: 6});</script>');
			redirect('createpost');
		}
		else
		{
			http_response_code(404);
		}
	}

	function peti()
	{
		$data['title'] = 'PETI';
		$data['peti'] = $this->admin->getAllPeti();
		dashPage('admin/data_peti',$data);
	}

	function detail_peti($id = false)
	{
		if ($id != false AND $this->input->server('REQUEST_METHOD') == 'POST')
		{
			header('Content-Type: application/json');
			$data = $this->admin->cek('tbv_peti','IdLaporan = '.$id)->row();
			echo json_encode($data);
		}
	}

	function upload_gis()
	{
		$this->load->view('admin/uploader_json');
	}

	function uploader_gis()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$tipe = $this->input->post('tipe');
			$data = $this->input->post('data');
			
			switch ($tipe) {
				case '1':
					$myfile = fopen("assets/gis/data/KONTRAKKARYA_6.js", "w") or die("Unable to open file!");
					$txt = 'var json_KONTRAKKARYA_6 = '.$data;
					fwrite($myfile, $txt);
					fclose($myfile);
					echo json_encode('berhasil');
					break;
				case '2':
					$myfile = fopen("assets/gis/data/IUPLOGAM_4.js", "w") or die("Unable to open file!");
					$txt = 'var json_IUPLOGAM_4 = '.$data;
					fwrite($myfile, $txt);
					fclose($myfile);
					echo json_encode('berhasil');
					break;
				case '3':
					$myfile = fopen("assets/gis/data/NONLOGAMBATUAN_5.js", "w") or die("Unable to open file!");
					$txt = 'var json_NONLOGAMBATUAN_5 = '.$data;
					fwrite($myfile, $txt);
					fclose($myfile);
					echo json_encode('berhasil');
					break;
				
				default:
					echo json_encode('gagal');
					break;
			}
		}
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */