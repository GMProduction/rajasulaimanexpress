<?php


namespace App\Http\Controllers\Admin;


use App\Helper\CustomController;
use App\Models\City;
use App\Models\Platform;
use App\Models\Pricing;

class PricingController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('admin.pricing.index');
    }

    public function data()
    {
        try {
            $data = Pricing::with(['origin', 'destination', 'platform'])
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
                $origin = $this->postField('origin');
                $destination = $this->postField('destination');
                $platform = $this->postField('platform');
                $min_weight = $this->postField('min_weight');
                $price = $this->postField('price');
                $estimate = $this->postField('estimate');
                $data = [
                    'platform_id' => $platform,
                    'origin_id' => $origin,
                    'destination_id' => $destination,
                    'min_weight' => $min_weight,
                    'price' => $price,
                    'estimate' => $estimate,
                ];
                Pricing::create($data);
                return redirect()->back()->with(['success' => 'Berhasil Menambahkan Data...']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['failed' => 'Terjadi Kesalahan ' . $e->getMessage()]);
            }
        }
        $cities = City::all();
        $platform = Platform::all();
        return view('admin.pricing.add')->with(['cities' => $cities, 'platform' => $platform]);
    }

    public function patch($id)
    {
        $data = Pricing::findOrFail($id);
        if ($this->request->method() === 'POST') {
            try {
                $platform = $this->postField('platform');
                $origin = $this->postField('origin');
                $destination = $this->postField('destination');
                $min_weight = $this->postField('min_weight');
                $price = $this->postField('price');
                $estimate = $this->postField('estimate');
                $data_request = [
                    'origin_id' => $origin,
                    'destination_id' => $destination,
                    'platform_id' => $platform,
                    'min_weight' => $min_weight,
                    'price' => $price,
                    'estimate' => $estimate,
                ];
                $data->update($data_request);
                return redirect('/pricing')->with(['success' => 'Berhasil Merubah Data...']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['failed' => 'Terjadi Kesalahan ' . $e->getMessage()]);
            }
        }
        $cities = City::all();
        $platform = Platform::all();
        return view('admin.pricing.edit')->with(['cities' => $cities, 'data' => $data, 'platform' => $platform]);
    }

    public function destroy()
    {
        try {
            $id = $this->postField('id');
            Pricing::destroy($id);
            return $this->jsonResponse('success', 200);
        }catch (\Exception $e) {
            return $this->jsonResponse('failed', 500);
        }
    }
}
