<?php

namespace App\Http\Controllers\dashboard\admin\assemblies;

use App\Http\Controllers\Controller;
use App\Models\Assembly;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AssembliesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function assemblies_list()
    {
        $assemblies = Assembly::orderBy('created_at', 'desc')->paginate(10);
        $assemblies_list = view('dashboard.admin.assemblies.components.assemblies_card', compact('assemblies'));

        return $assemblies_list;
    }

    public function index()
    {
        $assemblies_card = $this->assemblies_list();

        return view('dashboard.admin.assemblies.index', compact('assemblies_card'));
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
                'html' => view('dashboard.admin.assemblies.modals.create')->render(),
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
        $assembly = new Assembly();
        $assembly->name = $request->name;
        $assembly->description = $request->description;
        $assembly->slug = Str::slug($request->name);
        $assembly->save();

        return response([
            'html' => $this->assemblies_list()->render(),
            'message' => 'Assemblie ajoutée avec succès',
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
            $assembly = Assembly::where('id', dcryptID($id))->first();
            if (! $assembly) {
                return response(['message' => 'Assemblie introuvable'], 422);
            }

            return response([
                'html' => view('dashboard.admin.assemblies.modals.edit', compact('assembly'))->render(),
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
        $assembly = Assembly::where('id', dcryptID($id))->first();
        if (! $assembly) {
            return response(['message' => 'Assemblie introuvable'], 422);
        }
        $assembly->name = $request->name;
        $assembly->description = $request->description;
        $assembly->slug = Str::slug($request->name);
        $assembly->save();

        return response([
            'html' => $this->assemblies_list()->render(),
            'message' => 'Asseblie modifiée avec succès',
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
        $assembly = Assembly::where('id', dcryptID($id))->first();
        if (! $assembly) {
            return response(['message' => 'Assemblie introuvable'], 422);
        }
        $assembly->delete();

        return response([
            'html' => $this->assemblies_list()->render(),
            'message' => 'Assemblie supprimée avec succès',
        ]);
    }

    public function upload($id)
    {
        $assembly = Assembly::where('id', dcryptID($id))->first();
        if (! $assembly) {
            return response(['message' => 'Assemblie introuvable'], 422);
        }

        return view('dashboard.admin.assemblies.upload', compact('assembly'));
    }

    public function uploadPost($assembly, Request $request)
    {
        $assembly = Assembly::where('id', dcryptID($assembly))->first();
        if (! $assembly) {
            return response(['message' => 'Assembly introuvable'], 422);
        }
        if ($request->file) {
            $assembly->uploadFile($request->file, 'assemblies');
        }
        $assembly->save();

        return json_encode(['file' => $assembly->getFile('assemblies')]);
    }
}
