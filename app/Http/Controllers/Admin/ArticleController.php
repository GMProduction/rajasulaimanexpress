<?php


namespace App\Http\Controllers\Admin;


use App\Helper\CustomController;
use App\Models\Article;

class ArticleController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('admin.article.index');
    }

    public function data()
    {
        try {
            $data = Article::all();
            return $this->basicDataTables($data);
        } catch (\Exception $e) {
            return $this->basicDataTables([]);
        }
    }

    public function store()
    {
        if ($this->request->method() === 'POST') {
//            try {
//                $origin = $this->postField('origin');
//                $destination = $this->postField('destination');
//                $min_weight = $this->postField('min_weight');
//                $price = $this->postField('price');
//                $estimate = $this->postField('estimate');
//                $data = [
//                    'origin_id' => $origin,
//                    'destination_id' => $destination,
//                    'min_weight' => $min_weight,
//                    'price' => $price,
//                    'estimate' => $estimate,
//                ];
//                Pricing::create($data);
//                return redirect()->back()->with(['success' => 'Berhasil Menambahkan Data...']);
//            } catch (\Exception $e) {
//                return redirect()->back()->with(['failed' => 'Terjadi Kesalahan ' . $e->getMessage()]);
//            }
        }
        return view('admin.article.add');
    }
}
