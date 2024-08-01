<?php

namespace App\Http\Controllers\dashboard\admin\news;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news_list()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        $news_list = view('dashboard.admin.news.components.news_card', compact('news'));

        return $news_list;
    }

    public function index()
    {
        $news_list = $this->news_list();

        return view('dashboard.admin.news.index', compact('news_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (request()->ajax()) {
            return response([
                'html' => view('dashboard.admin.news.modals.create')->render(),
            ]);
        } else {
            abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new News();
        $new->title = $request->title;
        $new->description = $request->description;
        $new->date = $request->date;
        $new->save();
        if ($request->file) {
            $new->uploadFile($request->file, 'news');
        }
        $new->slug = Str::slug($request->title).'-'.cryptID($new->id);
        $new->save();

        return response([
            'html' => $this->news_list()->render(),
            'message' => 'News ajouté avec succès',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (request()->ajax()) {
            $new = News::where('id', dcryptID($id))->first();
            if (! $new) {
                return response(['message' => 'News introuvable'], 422);
            }

            return response([
                'html' => view('dashboard.admin.news.modals.edit', compact('new'))->render(),
            ]);
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = News::where('id', dcryptID($id))->first();
        if (! $new) {
            return response(['message' => 'News introuvable'], 422);
        }
        $new->title = $request->title;
        $new->description = $request->description;
        $new->date = $request->date;
        $new->save();
        if ($request->file) {
            $new->editFile($request->file, 'news');
        }
        $new->slug = Str::slug($request->title).'-'.cryptID($new->id);
        $new->save();

        return response([
            'html' => $this->news_list()->render(),
            'message' => 'News ajouté avec succès',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::where('id', dcryptID($id))->first();
        if (! $news) {
            return response(['message' => 'News introuvable'], 422);
        }
        $news->delete();

        return response([
            'html' => $this->news_list()->render(),
            'message' => 'News supprimé avec succès',
        ]);
    }
}
