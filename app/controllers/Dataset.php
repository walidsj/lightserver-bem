<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataset extends CI_Controller
{
	public function index()
	{
		# Counter Init
		$data['count_dataset'] = $this->db->get('dataset')
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

	public function detail($slugDataset = null)
	{
		# Check if slug empty or not
		if ($slugDataset == null) {
			show_404();
		}

		# Get dataset item
		$data['itemDataset'] = $this->db->join('sub_elkam', 'dataset.pengelola_dataset = sub_elkam.id_sub_elkam')
			->join('elkam', 'dataset.sumber_dataset = elkam.id_elkam')
			->join('label_dataset', 'dataset.label_dataset = label_dataset.id_label_dataset')
			->get_where('dataset', ['slug_dataset' => $slugDataset])
			->row();

		# If slug empty
		if (empty($data['itemDataset'])) {
			show_404();
		}

		# Get berkas data
		$data['berkasDatasetList'] = $this->db->order_by('file_berkas_dataset', 'ASC')
			->get_where('berkas_dataset', ['dataset_berkas_dataset' => $data['itemDataset']->id_dataset, 'status_berkas_dataset' => 1])
			->result();

		# Load View
		$data['title'] = $data['itemDataset']->judul_dataset;
		$this->load->view('pages/dataset/detailPage', $data);
	}
}
