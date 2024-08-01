<?php

namespace App\Http\Controllers\dashboard\admin\archives;

use App\Http\Controllers\Controller;
use App\Models\Archive;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArchivesController extends Controller
{
    public function archives_list()
    {
        $archives = Archive::orderBy('created_at', 'desc')->paginate(10);
        $archives_list = view('dashboard.admin.archives.components.archives_card', compact('archives'));

        return $archives_list;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archive = Archive::where('slug', Archive::ARCHIVE)->first();
        if (! $archive) {
            return response(['message' => 'Archive introuvable'], 422);
        }

        return view('dashboard.admin.archives.upload', compact('archive'));
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
                'html' => view('dashboard.admin.archives.modals.create')->render(),
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
        $archive = new Archive();
        $archive->name = $request->name;
        $archive->description = $request->description;
        $archive->slug = Str::slug($request->name);
        $archive->save();

        return response([
            'html' => $this->archives_list()->render(),
            'message' => 'Archive ajoutée avec succès',
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
            $archive = Archive::where('id', dcryptID($id))->first();
            if (! $archive) {
                return response(['message' => 'Archive introuvable'], 422);
            }

            return response([
                'html' => view('dashboard.admin.archives.modals.edit', compact('archive'))->render(),
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
        $archive = Archive::where('id', dcryptID($id))->first();
        if (! $archive) {
            return response(['message' => 'Archive introuvable'], 422);
        }
        $archive->name = $request->name;
        $archive->description = $request->description;
        $archive->slug = Str::slug($request->name);
        $archive->save();

        return response([
            'html' => $this->archives_list()->render(),
            'message' => 'Archive modifiée avec succès',
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
        $archive = Archive::where('id', dcryptID($id))->first();
        if (! $archive) {
            return response(['message' => 'Archive introuvable'], 422);
        }
        $archive->delete();

        return response([
            'html' => $this->archives_list()->render(),
            'message' => 'Archive supprimée avec succès',
        ]);
    }

    public function upload($id)
    {
        $archive = Archive::where('id', dcryptID($id))->first();
        if (! $archive) {
            return response(['message' => 'Archive introuvable'], 422);
        }

        return view('dashboard.admin.archives.upload', compact('archive'));
    }

    public function uploadPost($tranche, Request $request)
    {
        $archive = Archive::where('id', dcryptID($tranche))->first();
        if (! $archive) {
            return response(['message' => 'Archive introuvable'], 422);
        }
        if ($request->file) {
            $archive->uploadFile($request->file, 'archives');
        }
        $archive->save();

        return json_encode(['file' => $archive->getFile('archives')]);
    }
}
