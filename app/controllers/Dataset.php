<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataset extends CI_Controller
{
	public function index()
	{
		// $testing = [
		// 	[
		// 		'judul_berkas' => 'Data Absensi',
		// 		'filename_berkas' => 'data-absensi.xlsx',
		// 		'tipe_berkas' => 'XLSX'
		// 	],
		// 	[
		// 		'judul_berkas' => 'Format Laporan Absensi',
		// 		'filename_berkas' => 'format_laporan_absensi.docx',
		// 		'tipe_berkas' => 'DOCX'
		// 	],
		// ];
		// echo json_encode($testing);
		// die;

		# Counter Init
		$data['count_dataset'] = $this->db->get('dataset')
			->num_rows();
		$data['count_mahasiswa'] = $this->db->get('mahasiswa')
			->num_rows();
		$data['count_elkam'] = $this->db->get('elkam')
			->num_rows();
		$data['count_sso'] = $this->db->get('user')
			->num_rows();

		# Init List Data
		$data['datasetList'] = $this->db->join('sub_elkam', 'dataset.pengelola_dataset = sub_elkam.id_sub_elkam')
			->join('elkam', 'dataset.sumber_dataset = elkam.id_elkam')
			->order_by('updated_dataset', 'DESC')
			->get_where('dataset', ['status_dataset' => 1])
			->result();
		$data['elkamList'] = $this->db->order_by('nama_elkam', 'ASC')
			->get_where('elkam', ['status_elkam' => 1])
			->result();
		$data['labelList'] = $this->db->get_where('label_dataset', ['status_label_dataset' => 1])
			->result();

		# Load View
		$data['title'] = 'Kumpulan Dataset Keluarga Mahasiswa';
		$this->load->view('pages/dataset/dataList', $data);
	}
}
