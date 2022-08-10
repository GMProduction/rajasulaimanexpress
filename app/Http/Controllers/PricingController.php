<?php


namespace App\Http\Controllers;


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
        $cities = City::with('province')->get();
        $platform = Platform::all();
        return view('pricing')->with(['cities' => $cities, 'platform' => $platform]);
    }

    public function data()
    {
        try {
            $origin = $this->postField('origin');
            $destination = $this->postField('destination');
            $platform = $this->postField('platform');
            $weight = $this->postField('weight');
            $pricing = Pricing::with(['platform', 'origin', 'destination'])
                ->where('origin_id', '=', $origin)
                ->where('destination_id', '=', $destination)
                ->where('platform_id', '=', $platform)
                ->first();
            if (!$pricing) {
                return $this->jsonResponse('pengiriman tidak tersedia', 202, [
                    'type' => 'empty',
                    'data' => $weight . $platform
                ]);
            }
            $min_weight = $pricing->min_weight;
            if ($weight < $min_weight) {
                return $this->jsonResponse('berat minimal kurang', 202, [
                    'type' => 'weight',
                    'data' => $min_weight
                ]);
            }
            $total = $pricing->price * $weight;
            return $this->jsonResponse('success', 200, [
                'total' => $total,
                'weight' => $weight,
                'data' => $pricing
            ]);
        } catch (\Exception $e) {
            return $this->jsonResponse('terjadi kesalahan ' . $e->getMessage());
        }
    }
}
