<?php

namespace App\Http\Controllers\dashboard\admin\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users_list()
    {
        // ->orderBy('created_at', 'desc')->paginate(10)
        $users = User::where('id', '!=', Auth::user()->id);
        if (request()->name) {
            $users = $users->where('first_name', 'like', '%'.request()->name.'%')->orWhere('last_name', 'like', '%'.request()->name.'%');
        }
        if (request()->email) {
            $users = $users->where('email', 'like', '%'.request()->email.'%');
        }
        if (request()->phone) {
            $users = $users->where('phone', 'like', '%'.request()->phone.'%');
        }

        $users = $users->orderBy('created_at', 'desc')->paginate(10);
        $users_list = view('dashboard.admin.users.components.users_card', compact('users'));

        return $users_list;
    }

    public function index()
    {
        $users_list = $this->users_list();

        return view('dashboard.admin.users.index', compact('users_list'));
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
                'html' => view('dashboard.admin.users.modals.create')->render(),
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
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make('123456789');
        $user->address = $request->address;
        $user->save();

        return response([
            'html' => $this->users_list()->render(),
            'message' => 'Utilisateur ajouté avec succès',
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
        $user = User::where('id', dcryptID($id))->first();
        if (! $user) {
            return response(['message' => 'Utilisateur introuvable']);
        }

        return response([
            'html' => view('dashboard.admin.users.modals.edit', compact('user'))->render(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where('id', dcryptID($id))->first();
        if (! $user) {
            return response(['message' => 'Utilisateur introuvable']);
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->save();

        return response([
            'html' => $this->users_list()->render(),
            'message' => 'Utilisateur modifié avec succès',
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
        $user = User::where('id', dcryptID($id))->first();
        if (! $user) {
            return response(['message' => 'Utilisateur introuvable']);
        }
        $user->delete();

        return response([
            'html' => $this->users_list()->render(),
            'message' => 'Utilisateur supprimé avec succès',
        ]);
    }
}
