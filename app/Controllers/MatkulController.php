<?php

namespace App\Controllers;

use App\Models\MMatkul;

class MatkulController extends RestfulController
{
    public function create()
    {
        $data = [
            'kode_matkul' => $this->request->getVar('kode_matkul'),
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'sks' => $this->request->getVar('sks')
        ];

        $model = new MMatkul();
        $model->insert($data);
        $matkul = $model->find($model->getInsertID());
        return $this->responseHasil(200, true, $matkul);
    }

    public function list()
    {
        $model = new MMatkul();
        $matkul = $model->findAll();
        return $this->responseHasil(200, true, $matkul);
    }

    public function detail($id)
    {
        $model = new MMatkul();
        $matkul = $model->find($id);
        return $this->responseHasil(200, true, $matkul);
    }

    public function ubah($id)
    {
        $data = [
            'kode_matkul' => $this->request->getVar('kode_matkul'),
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'sks' => $this->request->getVar('sks')
        ];

        $model = new MMatkul();
        $model->update($id, $data);
        $matkul = $model->find($id);

        return $this->responseHasil(200, true, $matkul);
    }

    public function hapus($id)
    {
        $model = new MMatkul();
        $matkul = $model->delete($id);

        return $this->responseHasil(200, true, $matkul);
    }
}
