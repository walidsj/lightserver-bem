<?php

class Mahasiswa_model extends CI_Model
{
    private $table = 'mahasiswa';

    private $schema = [
        'mahasiswa.id',
        'mahasiswa.nama',
        'mahasiswa.npm',
        'mahasiswa.gender',
        'prodi.nama AS prodi',
        'jurusan.nama AS jurusan',
        'mahasiswa.angkatan',
        'mahasiswa.status',
        'mahasiswa.created',
        'mahasiswa.updated'
    ];

    public function getMahasiswa($get = null)
    {
        $where = array_filter([
            'mahasiswa.id' => !empty($get['id']) ? $get['id'] : null,
            'mahasiswa.npm' => !empty($get['npm']) ? $get['npm'] : null,
            'mahasiswa.gender' => !empty($get['gender']) ? $get['gender'] : null,
            'mahasiswa.angkatan' => !empty($get['angkatan']) ? $get['angkatan'] : null,
            'mahasiswa.status' => !empty($get['status']) ? $get['status'] : null,
            'prodi.id' => !empty($get['id_prodi']) ? $get['id_prodi'] : null,
            'jurusan.id' => !empty($get['id_jurusan']) ? $get['id_jurusan'] : null,
        ]);

        $like = array_filter([
            'mahasiswa.nama' => !empty($get['nama']) ? $get['nama'] : null,
            'prodi.nama' => !empty($get['prodi']) ? $get['prodi'] : null,
            'jurusan.nama' => !empty($get['jurusan']) ? $get['jurusan'] : null,
        ]);

        if (!empty($get['order_asc'])) {
            $this->db->order_by($get['order_asc'], 'ASC');
        }
        if (!empty($get['order_desc'])) {
            $this->db->order_by($get['order_desc'], 'DESC');
        }

        return $this->db->select($this->schema)
            ->join('prodi', 'mahasiswa.prodi = prodi.id', 'left')
            ->join('jurusan', 'prodi.jurusan = jurusan.id', 'left')
            ->where($where)
            ->like($like)
            ->get($this->table)->result();
    }

    public function postMahasiswa($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    public function deleteMahasiswa($id)
    {
        $this->db->delete($this->table, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function putMahasiswa($put)
    {
        $data = array_filter([
            'nama' => !empty($put['nama']) ? $put['nama'] : null,
            'npm' => !empty($put['npm']) ? $put['npm'] : null,
            'gender' => !empty($put['gender']) ? $put['gender'] : null,
            'prodi' => !empty($put['id_prodi']) ? $put['id_prodi'] : null,
            'angkatan' => !empty($put['angkatan']) ? $put['angkatan'] : null,
            'status' => !empty($put['status']) ? $put['status'] : null,
            'updated' => $put['updated'],
        ]);

        $this->db->update($this->table, $data, ['id' => $put['id']]);
        return $this->db->affected_rows();
    }
}
