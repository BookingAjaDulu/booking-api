<?php

namespace App\Controllers;

use App\Models\MBooking;

class BookingController extends RestfulController
{
    public function create()
{
        $data = [
            'nama_lapang' => $this->request->getVar('nama_lapang'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'total_jam_main' => $this->request->getVar('total_jam_main'),
            'nominal' => $this->request->getVar('nominal')
        ];

        $model = new MBooking();
        $model->insert($data);
        $booking = $model->find($model->getInsertID());
        return $this->responseHasil(200, true, $booking);
}

    public function list()
{
     $model = new MBooking();
     $booking = $model->findAll();
     return $this->responseHasil(200, true, $booking);
}

    public function detail($id)
{
     $model = new MBooking();
     $booking = $model->find($id);
     return $this->responseHasil(200, true, $booking);
}

    public function ubah($id)
{
    $data = [
            'nama_lapang' => $this->request->getVar('nama_lapang'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'total_jam_main' => $this->request->getVar('total_jam_main'),
            'nominal' => $this->request->getVar('nominal')
    ];

    $model = new MBooking();
    $model->update($id, $data);
    $booking = $model->find($id);

    return $this->responseHasil(200, true, $booking);
}

    public function hapus($id)
{
    $model = new MBooking();
    $booking = $model->delete($id);

    return $this->responseHasil(200, true, $booking);
}



}