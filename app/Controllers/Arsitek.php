<?php

namespace App\Controllers;

use App\Models\ArsitekModel;

class Arsitek extends BaseController
{
    public function index()
    {
        $arsitek = new ArsitekModel();

        $data = [
            'title' => 'Daftar Arsitek',
            'arsitek'  => $arsitek->findAll(),
        ];
        return view('arsitek/index', $data);
    }

    public function create()
    {
        $arsitek = new ArsitekModel();

        $data = array(
            'title'     => 'Tambah Data Arsitek',
        );
        echo view('arsitek/create', $data);
    }


    public function edit($id = null)
    {
        $model = new ArsitekModel();
        $data = array(
            'title'     => 'Ubah Data arsitek',
            'edit'      => $model->where('id', $id)->first()
        );
        echo view('arsitek/edit', $data);
    }

    public function delete($id = null)
    {
        $model = new ArsitekModel();
        $status = $model->where('id', $id)->delete($id);

        if ($status) {
            session()->setFlashdata('message_success', 'Data berhasil dihapus!');
        } else {
            session()->setFlashdata('message_danger', 'Data gagal dihapus!');
        }

        return redirect()->to(base_url('arsitek'));
    }
}
