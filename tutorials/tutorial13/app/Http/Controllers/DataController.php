<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\gd_events;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //
        //  $gd_event=gd_events::all();
        $gd_event=DB::table('gd_events')->get();
         return view('tutorial13.index',compact('gd_event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tutorial13.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // gd_events::create($request->all());
        DB::table('gd_events')->insert([
            'title'=>$request->input('title'),
            'small_desc'=>$request->input('small_desc'),
            'detail_desc'=>$request->input('detail_desc'),
            'galleryid'=>$request->input('gid'),
            'photo_url'=>$request->input('photo'),
        ]);
        // $data=DB::table('gd_events')->get();
        // return view('tutorial13.index')->with('users',$data);
        return redirect('/tutorial13');
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


    public function edit($gd)
    {
        //

        $data=DB::table('gd_events')->get()->where('id', '=',$gd);
//
        // return "{{$data}}";


        return view('tutorial13.edit',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id=$request->input('id');
        // return "{{$request}}";
        DB::table('gd_events')->where('id','=',$id)->update([
            'title'=>$request->input('title'),
            'small_desc'=>$request->input('small_desc'),
            'detail_desc'=>$request->input('detail_desc'),
            'galleryid'=>$request->input('gid'),
            'photo_url'=>$request->input('photo'),
        ]);
        return redirect('/tutorial13');



    }


    public function destroy($gd)
    {
        //


        $deleted = DB::table('gd_events')->where('id', '=', $gd)->delete();

        return redirect('/tutorial13');

    }


}
