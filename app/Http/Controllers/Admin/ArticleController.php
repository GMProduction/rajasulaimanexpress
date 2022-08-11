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
            try {
                $data = [
                    'title' => $this->postField('title'),
                    'content' => $this->postField('editor'),
                    'short_description' => $this->postField('short_description'),
                ];
                $thumbnail_name = $this->generateImageName('thumbnail');
                if ($thumbnail_name !== '') {
                    $data['image'] = '/assets/article/' . $thumbnail_name;
                    $this->uploadImage('thumbnail', $thumbnail_name, 'article');
                }
                Article::create($data);
                return redirect()->back()->with(['success' => 'Berhasil Menambahkan Data...']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['failed' => 'Terjadi Kesalahan ' . $e->getMessage()]);
            }
        }
        return view('admin.article.add');
    }

    public function patch($id)
    {
        $data = Article::findOrFail($id);
        if ($this->request->method() === 'POST') {
            try {
                $data_request = [
                    'title' => $this->postField('title'),
                    'content' => $this->postField('editor'),
                    'short_description' => $this->postField('short_description'),
                ];
                $thumbnail_name = $this->generateImageName('thumbnail');
                if ($thumbnail_name !== '') {
                    $data_request['image'] = '/assets/article/' . $thumbnail_name;
                    $this->uploadImage('thumbnail', $thumbnail_name, 'article');
                }
                $data->update($data_request);
                return redirect('/article')->with(['success' => 'Berhasil Merubah Data...']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['failed' => 'Terjadi Kesalahan ' . $e->getMessage()]);
            }
        }
        return view('admin.article.edit')->with(['data' => $data]);
    }

    public function list()
    {
        try {
            $limit = $this->field('limit');
            $query = Article::orderBy('updated_at', 'DESC');
            if ($limit !== '' || $limit !== null) {
                $query->limit($limit);
            }
            $data = $query->get();
            return $this->jsonResponse('success', 200, $data);
        } catch (\Exception $e) {
            return $this->jsonResponse($e->getMessage(), 500);
        }
    }

    public function destroy()
    {
        try {
            $id = $this->postField('id');
            Article::destroy($id);
            return $this->jsonResponse('success', 200);
        } catch (\Exception $e) {
            return $this->jsonResponse('failed', 500);
        }
    }
}
