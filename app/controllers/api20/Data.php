<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class Data extends REST_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model', 'Data');
    }

    public function prodi_get()
    {
        $get = $this->get();

        if ($get === null) {
            $prodi = $this->Data->getProdi();
        } else {
            $prodi = $this->Data->getProdi($get);
        }

        if ($prodi) {
            $this->response([
                'status' => true,
                'message' => 'Data program studi ditemukan.',
                'rows' => count($prodi),
                'data' => $prodi
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data program studi tidak ditemukan.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function jurusan_get()
    {
        $get = $this->get();

        if ($get === null) {
            $jurusan = $this->Data->getJurusan();
        } else {
            $jurusan = $this->Data->getJurusan($get);
        }

        if ($jurusan) {
            $this->response([
                'status' => true,
                'message' => 'Data jurusan ditemukan.',
                'rows' => count($jurusan),
                'data' => $jurusan
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data jurusan tidak ditemukan.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
