<?php


namespace App\Http\Controllers\Admin;


use App\Helper\CustomController;
use App\Models\Platform;

class PlatformController extends CustomController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = Platform::all();
        return view('admin.platform.index')->with(['data' => $data]);
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
                Platform::create($data);
                return redirect()->back()->with(['success' => 'Berhasil Menambahkan Data...']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['failed' => 'Terjadi Kesalahan ' . $e->getMessage()]);
            }
        }
        return view('admin.platform.add');
    }

    public function patch($id)
    {
        $data = Platform::findOrFail($id);
        if ($this->request->method() === 'POST') {
            try {
                $data_request = [
                    'name' => $this->postField('name')
                ];
                $data->update($data_request);
                return redirect('/platform')->with(['success' => 'Berhasil Merubah Data...']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['failed' => 'Terjadi Kesalahan ' . $e->getMessage()]);
            }
        }
        return view('admin.platform.edit')->with(['data' => $data]);
    }

    public function destroy()
    {
        try {
            $id = $this->postField('id');
            Platform::destroy($id);
            return $this->jsonResponse('success', 200);
        }catch (\Exception $e) {
            return $this->jsonResponse('failed', 500);
        }
    }
}
