<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    public function index()
    {
        //
        $services=service::all();
        return view('backend.services.services',compact('services'));
    }


    public function create()
    {
        //
        return view("backend.services.addSrvices");
    }


    public function store(Request $request)
    {
        //
        $img=$request->img;
        $imgName=time().".".$img->getClientOriginalExtension();
        $request->img->move("services",$imgName);

        service::create
        (
            [
                'name'=>
                ['ar'=>$request->nameAr,
                'en'=>$request->nameEn,
                ],
                'descrption'=>
                [
                    'ar'=>$request->desAr,
                    'en'=>$request->desEn,
                ],
                'imgName'=>$imgName,

            ]
        );




        return redirect()->back()->with("msg","تم اضافة الخدمة بنجاح");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $service=service::findorfail($id);
          return view("backend.services.editServices",compact("service"));
    }


    public function update(Request $request, $id)
    {
        //

        $service=service::findorfail($id);

        $img=$request->img;
        $imgName=time().".".$img->getClientOriginalExtension();
        $request->img->move("services",$imgName);


             $service->name =['ar'=>$request->nameAr ,'en'=>$request->nameEn];
            $service->descrption=['ar'=>$request->desAr,'en'=>$request->desEn];
            $request->imgName=$request->$imgName;
            $service->save();
            return redirect()->route("AdminServices.index")->with("msge","تم التعديل بنجاح");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        //
        service::destroy($id);

        return redirect()->back()->with("msg","تم الحذف بنجاح");
    }
}
