<?php


namespace App\Http\Controllers\Admin;


use App\Helper\CustomController;
use App\Models\Province;

class ProvinceController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = Province::all();
        return view('admin.province.index')->with(['data' => $data]);
    }

    public function store()
    {
        if ($this->request->method() === 'POST') {
            try {
                $name = $this->postField('name');
                $data = [
                    'name' => $name
                ];
                if ($name === '') {
                    return redirect()->back()->with(['failed' => 'Harap Mengisi Semua Form']);
                }
                Province::create($data);
                return redirect()->back()->with(['success' => 'Berhasil Menambahkan Data...']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['failed' => 'Terjadi Kesalahan ' . $e->getMessage()]);
            }
        }
        return view('admin.province.add');
    }

    public function patch($id)
    {
        $data = Province::findOrFail($id);
        if ($this->request->method() === 'POST') {
            try {
                $data_request = [
                    'name' => $this->postField('name')
                ];
                $data->update($data_request);
                return redirect('/province')->with(['success' => 'Berhasil Merubah Data...']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['failed' => 'Terjadi Kesalahan ' . $e->getMessage()]);
            }
        }
        return view('admin.province.edit')->with(['data' => $data]);
    }
}
