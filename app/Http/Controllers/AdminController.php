<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index()
    {
        $admins=DB::table('users')->get();
        return view('backend.admins',compact('admins'));
    }
    public function Admindestroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with("msg","تم الحذف بنجاح");
    }
    public function dashboard()
    {
        $project=DB::table('projects')->get()->count();
        $serv=DB::table('services')->get()->count();
        $post=DB::table('posts')->get()->count();
        return view("backend.home",compact('project','post','serv'));
    }
}
