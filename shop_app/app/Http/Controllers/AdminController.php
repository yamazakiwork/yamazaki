<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.index',compact('users'));
    }
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'admin_level' => $request['admin_level'],
        ]);
        return redirect(route('admin.index'))->with('flash_message', 'ユーザーを追加しました');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($request['password'] == ""){
            //パスワードが空の時パスワード以外をにDBに保存
            $user->update([
                'name' => $request['name'],
                'email' => $request['email'],
                'admin_level' => $request['admin_level'],
            ]);
        }else{
            //パスワードが入力されているとき入力された四項目全ての情報を保存
            $user->update([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
                'admin_level' => $request['admin_level'],
            ]);
        }

        return redirect(route('admin.index'))->with('flash_message', 'ユーザーを編集しました');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect(route('admin.index'))->with('flash_message', 'ユーザーを削除しました');
    }
}
