<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Login Akun';

		$validation = $this->form_validation;
		$validation->set_rules('email_sub_elkam', 'Alamat Email', 'required|valid_email|trim|max_length[128]');
		$validation->set_rules('password_sub_elkam', 'Kata Sandi', 'required|trim');
		if ($validation->run()) {
			$emailSub = $this->input->post('email_sub_elkam', true);
			$passSub = $this->input->post('password_sub_elkam', true);
			$UserLogin = $this->db->get_where('sub_elkam', ['email_sub_elkam' => $emailSub])
				->row();
			if ($UserLogin) {
				if (password_verify($passSub, $UserLogin->password_sub_elkam) == true) {
					redirect('dashboard');
				} else {
					$alert = [
						'title' => 'Password Salah',
						'text' => 'Periksa kata sandi dan coba lagi',
						'type' => 'error'
					];
					$this->session->set_flashdata('email', $emailSub);
					$this->session->set_flashdata('alert', $alert);
					redirect(current_url());
				}
			} else {
				$alert = [
					'title' => 'Email Belum Terdaftar!',
					'text' => 'Silakan daftar akun terlebih dahulu',
					'type' => 'error'
				];
				$this->session->set_flashdata('alert', $alert);
				redirect(current_url());
			}
		} else {
			# Load View
			$this->load->view('pages/account/loginPage', $data);
		}
	}

	public function register()
	{
		$data['title'] = 'Daftar Akun Instansi';

		$data['elkamList'] = $this->db->get_where('elkam', ['status_elkam' => 1])->result();

		$validation = $this->form_validation;
		$validation->set_rules('elkam_sub_elkam', 'Elemen Kampus', 'required|trim|max_length[16]');
		$validation->set_rules('email_sub_elkam', 'Alamat Email', 'required|is_unique[sub_elkam.email_sub_elkam]|valid_email|trim|max_length[128]', ['is_unique' => 'Alamat email telah terdaftar.']);
		$validation->set_rules('nama_sub_elkam', 'Nama Instansi', 'required|trim|max_length[128]');
		$validation->set_rules('password_sub_elkam', 'Kata Sandi', 'required|trim');
		$validation->set_rules('pj_sub_elkam', 'Nama Penanggungjawab', 'required|trim|max_length[128]');
		if ($validation->run()) {
			$emaildata = [
				'to' => $this->input->post('email_sub_elkam', true),
				'subject' => 'Pendaftaran Sedang Diproses',
				'message' => 'Halo, Pendaftaran Kamu sedang diproses. Terima kasih telah mendaftar di Portal Satu Data Staners! Kamu akan mendapat notifikasi jika pendaftaran telah diterima.'
			];

			# sending email
			$this->load->helper('sendmail_helper');
			$sendMail = sendmail($emaildata);

			if ($sendMail) {
				$this->db->insert('sub_elkam', $this->input->post(null, true));
				if ($this->db->affected_rows() > 0) {
					$alert = [
						'title' => 'Email Belum Terdaftar!',
						'text' => 'Silakan daftar akun terlebih dahulu',
						'type' => 'success'
					];
					$this->session->set_flashdata('alert', $alert);
					redirect('/');
				}
			} else {
				$alert = [
					'title' => 'Pendaftaran Gagal',
					'text' => 'Silakan coba lagi atau hubungi administrator',
					'type' => 'error'
				];
				$this->session->set_flashdata('alert', $alert);
				redirect(current_url());
			}
		} else {
			# Load View
			$this->load->view('pages/account/registerPage', $data);
		}
	}
}
