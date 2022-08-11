<?php


namespace App\Http\Controllers;


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
        $data = Article::all();
        return view('berita')->with(['data' => $data]);
    }

    public function detail($id)
    {
        $data = Article::find($id);
        return view('detailberita')->with(['data' => $data]);
    }
}
