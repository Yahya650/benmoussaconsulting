<?php

namespace App\Http\Controllers\dashboard\admin\tranches;

use App\Http\Controllers\Controller;
use App\Models\Tranche;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tranches_list()
    {
        $tranches = Tranche::orderBy('created_at', 'desc')->paginate(10);
        $tranches_list = view('dashboard.admin.tranches.components.tranches_card', compact('tranches'));

        return $tranches_list;
    }

    public function index()
    {
        $tranches_card = $this->tranches_list();

        return view('dashboard.admin.tranches.index', compact('tranches_card'));
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
                'html' => view('dashboard.admin.tranches.modals.create')->render(),
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
        $tranche = new Tranche();
        $tranche->name = $request->name;
        $tranche->step = $request->order;
        $tranche->description = $request->description;
        $tranche->slug = Str::slug($request->name);
        $tranche->save();

        return response([
            'html' => $this->tranches_list()->render(),
            'message' => 'Tranche ajoutée avec succès',
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
            $tranche = Tranche::where('id', dcryptID($id))->first();
            if (! $tranche) {
                return response(['message' => 'Tranche introuvable'], 422);
            }

            return response([
                'html' => view('dashboard.admin.tranches.modals.edit', compact('tranche'))->render(),
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
        $tranche = Tranche::where('id', dcryptID($id))->first();
        if (! $tranche) {
            return response(['message' => 'Tranche introuvable'], 422);
        }
        $tranche->name = $request->name;
        $tranche->step = $request->order;
        $tranche->description = $request->description;
        $tranche->slug = Str::slug($request->name);
        $tranche->save();

        return response([
            'html' => $this->tranches_list()->render(),
            'message' => 'Tranche modifiée avec succès',
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
        $tranche = Tranche::where('id', dcryptID($id))->first();
        if (! $tranche) {
            return response(['message' => 'Tranche introuvable'], 422);
        }
        $tranche->delete();

        return response([
            'html' => $this->tranches_list()->render(),
            'message' => 'Tranche supprimée avec succès',
        ]);
    }

    public function upload($id)
    {
        $tranche = Tranche::where('id', dcryptID($id))->first();
        if (! $tranche) {
            return response(['message' => 'Tranche introuvable'], 422);
        }

        return view('dashboard.admin.tranches.upload', compact('tranche'));
    }

    public function uploadPost($tranche, Request $request)
    {
        $tranche = Tranche::where('id', dcryptID($tranche))->first();
        if (! $tranche) {
            return response(['message' => 'Tranche introuvable'], 422);
        }
        if ($request->file) {
            $tranche->uploadFile($request->file, 'tranches');
        }
        $tranche->save();

        return json_encode(['file' => $tranche->getFile('tranches')]);
    }
}
