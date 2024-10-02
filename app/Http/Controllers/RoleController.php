<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class RoleController extends Controller
{
    public function index()
    {
        $permission = Role::get();
        return view(
            'role-permission.permission.index',
            [
                'permission' => $permission
            ]
        );
    }
    public function create()
    {
        return view('role-permission.permission.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name'
        ]);
        Role::create([
            'name' => $request->name
        ]);
        return redirect(url('permission/list'))->with('success', 'New Permission Add Successfully');
    }


    //Edit
    public function edit($id)
    {
        $data['permission'] = Role::find($id);
        return view('role-permission.permission.edit', $data);
    }


    public function update(Request $request, $id)
    {
        $permission = Role::find($id);
        $request->validate([
            'name' => 'required|unique:permissions,name,'.
            $permission->id
        ]);

        $permission->update(
            ['name' => $request->name]

        );
        return redirect(url('permission/list'))->with('success', 'current Permission update Successfully');    }
    public function destroy($id) {
        $permission = Role::find($id);
        $permission->delete();
        return redirect(url('permission/list'))->with('errors', 'current Permission deleted Successfully');
    }
}
