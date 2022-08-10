<?php


namespace App\Http\Controllers\Admin;


use App\Helper\CustomController;
use App\Models\City;
use App\Models\Province;

class CityController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = City::with('province')->get();
        return view('admin.city.index')->with(['data' => $data]);
    }

    public function data()
    {
        try {
            $data = City::with('province')
                ->get();
            return $this->basicDataTables($data);
        } catch (\Exception $e) {
            return $this->basicDataTables([]);
        }
    }

    public function store()
    {
        if ($this->request->method() === 'POST') {
            try {
                $name = $this->postField('name');
                $data = [
                    'name' => $name,
                    'province_id' => $this->postField('province')
                ];
                if ($name === '') {
                    return redirect()->back()->with(['failed' => 'Harap Mengisi Semua Form']);
                }
                City::create($data);
                return redirect()->back()->with(['success' => 'Berhasil Menambahkan Data...']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['failed' => 'Terjadi Kesalahan ' . $e->getMessage()]);
            }
        }
        $provinces = Province::all();
        return view('admin.city.add')->with(['provinces' => $provinces]);
    }

    public function patch($id)
    {
        $data = City::findOrFail($id);
        if ($this->request->method() === 'POST') {
            try {
                $data_request = [
                    'name' => $this->postField('name'),
                    'province_id' => $this->postField('province')
                ];
                $data->update($data_request);
                return redirect('/city')->with(['success' => 'Berhasil Merubah Data...']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['failed' => 'Terjadi Kesalahan ' . $e->getMessage()]);
            }
        }
        $provinces = Province::all();
        return view('admin.city.edit')->with(['data' => $data, 'provinces' => $provinces]);
    }

    public function destroy()
    {
        try {
            $id = $this->postField('id');
            City::destroy($id);
            return $this->jsonResponse('success', 200);
        }catch (\Exception $e) {
            return $this->jsonResponse('failed', 500);
        }
    }
}
