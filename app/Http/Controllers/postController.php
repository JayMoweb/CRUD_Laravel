<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\users;
use DB;


class postController extends Controller
{
    //

    public function store(users $user, Request $request) {
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->save();
        return redirect('admin/user');
    }

    public function user() {
    	$user = DB::table('users')->orderBy('id','DESC')->paginate(20);
    	return view('user',['users' => $user]);
    }

    public function edit($id,users $user) {
    	$find = users::find($id);
    	return view('edit',['user' => $find]);
    }

    public function update($id,users $user, Request $request) {
    	$user = users::find($id);
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->save();
    	return redirect('admin/user');
    }

    public function delete($id,users $user) {
    	$delete = users::find($id);
    	$delete->delete();
    	return redirect('admin/user');
    }

    public function search(users $user, Request $request) {

        $keyword = $request->search;
        if ($keyword) {  
            $users  = DB::table('users')
                        ->where('name','LIKE','%'.$keyword.'%')
                        ->orwhere('email','LIKE','%'.$keyword.'%')
                        ->orderBy('id','DESC')
                        ->paginate(20);

            return view('user',['users' => $users,'keyword' => $keyword]);
        }

    }
}
