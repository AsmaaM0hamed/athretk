<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{

    public function index()
    {
        //
        $posts=post::all();
        return view('backend.post.posts',compact('posts'));
    }


    public function create()
    {
        //
        return view('backend.post.addpost');
    }

    public function store(Request $request)
    {
        //


        post::create
        ([
            'title'=>['ar'=>$request->nameAr,'en'=>$request->nameEn],
            'bady'=>['ar'=>$request->desAr,'en'=>$request->desEn],
        ]);
        return redirect()->back()->with("msg","تم اضافة المقال بنجاح");
    }


    public function edit($id)
    {
        //
        $post=post::findorfail($id);
        return view("backend.post.editpost",compact('post'));
    }

    public function update(Request $request, $id)
    {
        //
        $post=post::findorfail($id);
        $post->title=['ar'=>$request->nameAr,'en'=>$request->nameEn];
        $post->bady=['ar'=>$request->desAr,'en'=>$request->desEn];
        $post->save();
        return redirect()->route('post.index')->with('msge',"تم التعديل بنجاح");
    }


    public function destroy($id)
    {
        //
        post::destroy($id);
        return redirect()->back()->with("msg","تم الحذف بنجاح");
    }
}
