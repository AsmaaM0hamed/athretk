<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        //
        $projects=project::all();
        return view('backend.projects.projects',compact('projects'));
    }

    public function create()
    {
        //
        return view("backend.projects.addprojects");
    }


    public function store(Request $request)
    {
        //
        $img=$request->img;
        $imgName=time().".".$img->getClientOriginalExtension();
        $img->move("projectsImg",$imgName);

        project::create
        ([
            'name'=>[
                'ar'=>$request->nameAr,
                'en'=>$request->nameEn,
            ],
            'imgName'=>$imgName,

        ]);


        return redirect()->back()->with("msg","تم اضافة المشروع بنجاح");
    }

    public function edit($id)
    {
        //
        $projects=project::findorfail($id);
        return view("backend.projects.editproject",compact('projects'));
    }


    public function update(Request $request, $id)
    {
        //
            if(isset($request->imgName))
            {
                $img=$request->imgName;
                $imgName=time().".".$img->getClientOriginalExtension();
                $img->move("projectsImg",$imgName);
            }
            else
            {
                $imgName=$request->img;
            }

            $project=project::findorfail($id);
            $project->name=['ar'=>$request->nameAr,'en'=>$request->nameEn];
            $project->imgName=$imgName;
            $project->save();
            return redirect()->route('projects.index')->with("msge","تم التعديل بنجاح");


    }


    public function destroy($id)
    {
        //
     project::destroy($id);
     return redirect()->back()->with("msg","تم الحذف بنجاح");
    }
}
