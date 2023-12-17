<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function homepage(){
        $articles = Article::orderBy('release_date','desc')->limit(8)->get();
        return view('home', compact('articles'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'article-url' => 'mimes:jpg,png|required|file',
                'article-title' => 'required',
                'article-content' => 'required',
                'article-creator' => 'required'
            ],
            ['article-url.mimes:jpg,png' => 'Format gambar yang diterima hanya .jpg dan .png.'],
            ['article-url.required' => 'Upload gambar artikel.'],
            ['article-title.required' => 'Judul artikel tidak boleh kosong.'],
            ['article-content.required' => 'Masukkan isi artikel.'],
            ['article-creator.required' => 'Nama pengarang tidak boleh kosong.'],
        );

        //upload gambar
        $file = $request->file('article-url');
        $imgFolder = 'assets/article-images';
        $imgName = $request->get('article-title') . '.' . $file->getClientOriginalExtension();
        $file->move($imgFolder, $imgName);

        $data = new Article();
        $data->title = $request->get('article-title');
        $data->content = $request->get('article-content');
        $data->release_date = date("Y-m-d H:i:s");
        $data->creator = $request->get('article-creator');
        $data->user_id = Auth::user()->id;

        $data->url_img = 'assets/article-images/' . $imgName;

        $data->save();

        return redirect()->route('article.index')->with('status', 'Berhasil menambahkan data artikel baru.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('admin.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate(
            [
                'article-url' => 'mimes:jpg,png|required|file',
                'article-title' => 'required',
                'article-content' => 'required',
                'article-creator' => 'required'
            ],
            ['article-url.mimes:jpg,png' => 'Format gambar yang diterima hanya .jpg dan .png.'],
            ['article-url.required' => 'Upload gambar artikel.'],
            ['article-title.required' => 'Judul artikel tidak boleh kosong.'],
            ['article-content.required' => 'Masukkan isi artikel.'],
            ['article-creator.required' => 'Nama pengarang tidak boleh kosong.'],
        );

        if ($request->file('article-url')) {
            $file = $request->file('article-url');
            $imgFolder = 'assets/article-images';
            $imgName = $request->get('article-title') . '.' . $file->getClientOriginalExtension();
            $file->move($imgFolder, $imgName);

            $article->url_img = 'assets/article-images/' . $imgName;
        }

        $article->title = $request->get('article-title');
        $article->content = $request->get('article-content');
        $article->creator = $request->get('article-creator');

        $article->save();

        return redirect()->route('article.index')->with('status', 'Data artikel berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        try {
            $article->delete();
            return redirect()->route('article.index')->with('status', 'Data berhasil dihapus.');
            // dd($objCategory);
        } catch (\PDOException $ex) {
            $message = "Gagal untuk menghapus data, pastikan data yang dihapus tidak berelasi dengan data dari kolom lain.";
            return redirect()->route('article.index')->with('status', $message);
        }
    }

    public function showDetail(Article $article)
    {
        return view('articledetail', compact('article'));
    }
}
