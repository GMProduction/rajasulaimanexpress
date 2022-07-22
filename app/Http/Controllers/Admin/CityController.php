<?php


namespace App\Http\Controllers\Admin;


use App\Helper\CustomController;
use App\Models\City;

class CityController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('admin.city.index');
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

    public function create()
    {
        try {
            City::create([
                'name' => $this->postField('name'),
                'province_id' => $this->postField('province')
            ]);
            return $this->jsonResponse('success', 200);
        } catch (\Exception $e) {
            return $this->jsonResponse('failed ' . $e->getMessage(), 500);
        }
    }

    public function patch()
    {
        try {
            $id = $this->postField('id');
            $name = $this->postField('name');
            $city = City::find($id);
            if (!$city) {
                return $this->jsonResponse('kota tidak di temukan', 202);
            }
        } catch (\Exception $e) {

        }
    }

}
