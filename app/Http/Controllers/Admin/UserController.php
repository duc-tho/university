<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;

use App\Models\User;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserController extends Controller
{
    public function show()
    {
        $data['userlist'] = User::all();
        $data['facultylist'] = Faculty::all();
        return view('server.pages.user.index', $data);
    }

    public function create()
    {
        $data['facultylist'] = Faculty::all();
        return view('server.pages.user.add_user', $data);
    }

    public function store(AddUserRequest $request)
    {
        $user = new User();
        $user->faculty_id = $request->faculty_id;
        $user->nickname = $request->nickname;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status = $request->status;
        $user->save();
        return back();
    }

    public function edit($id)
    {

        $data['user'] = User::find($id);
        $data['list_faculty'] = Faculty::all();
        return view('server.pages.user.edit_user', $data);
    }

    public function update(EditUserRequest $request, $id)
    {
        $user = new User();
        $arr['nickname'] = $request->nickname;
        $arr['faculty_id'] = $request->faculty_id;
        $arr['first_name'] = $request->first_name;
        $arr['last_name'] = $request->last_name;
        $arr['birthday'] = $request->birthday;
        $arr['phone'] = $request->phone;
        $arr['status'] = $request->status;
        $arr['email'] = $request->email;
        $arr['password'] = bcrypt($request->password);
        $user::where('id', $id)->update($arr);
        return redirect('admin/user');
    }

    public function delete($id)
    {
        User::destroy($id);
        return back();
    }
}
