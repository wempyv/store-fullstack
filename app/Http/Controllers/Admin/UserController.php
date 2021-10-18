<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\UserRequest;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = User::query();
            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                type="button" id="action' .  $item->id . '"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    Aksi
                            </button>
                            <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                <a class="dropdown-item" href="' . route('user.edit', $item->id) . '">
                                    Sunting
                                </a>
                                <form action="' . route('user.destroy', $item->id) . '" method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="dropdown-item text-danger">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.admin.user.index');
    }


    public function create()
    {
        return view('pages.admin.user.create');
    }


    public function store(UserRequest $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($request->password);

        User::create($data);

        return redirect()->route('user.index');
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        $item = User::findOrFail($id);

        return view('pages.admin.user.edit', [
            'item' => $item
        ]);
    }


    public function update(UserRequest $request, $id)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/user', 'public');

        $item = User::findOrFail($id);

        $item->update($data);

        return redirect()->route('user.index');
    }


    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete();
        return redirect()->route('user.index');
    }
}
