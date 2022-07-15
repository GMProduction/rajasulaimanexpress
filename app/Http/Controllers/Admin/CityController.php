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
            $data = City::all();
            return $this->basicDataTables($data);
        } catch (\Exception $e) {
            return $this->basicDataTables([]);
        }
    }

    public function create()
    {
        try {
            City::create([
                'name' => $this->postField('name')
            ]);
            return $this->jsonResponse('success', 200);
        } catch (\Exception $e) {
            return $this->jsonResponse('failed ' . $e->getMessage(), 500);
        }
    }

}
