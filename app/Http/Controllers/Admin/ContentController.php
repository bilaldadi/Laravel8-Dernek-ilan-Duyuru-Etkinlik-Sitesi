<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contentlist = DB::select('select * from contents');

        return view('admin.content', ['contentlist' => $contentlist]);
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        DB::table('contents')->insert([
            'title' => $request->input('title'),
            'parent_id' => $request->input('parent_id'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'Menu_id'=> $request->input('Menu_id'),
            'user_id' => $request->input('user_id'),
            'type' => $request->input('type'),
            'image' => $request->input('image')

        ]);

        return redirect()->route('admin_content');

    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $contentlist = DB::select('select * from contents');

        return view('admin.Content_add', ['contentlist' =>$contentlist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Content;

        $data->parent_id= $request->input('parent_id');
        $data->title= $request->input('title');
        $data->keywords= $request->input('keywords');
        $data->description= $request->input('description');
        $data->image= Storage::putFile('images',$request->file('image'));
        $data->status= $request->input('status');
        $data->Menu_id= $request->input('Menu_id');
        $data->Menu_id= $request->input('user_id');
        $data->type= $request->input('type');
        $data->user_id= Auth::id();

        $data->save();
        return redirect()->route('admin_content');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Content::find($id);
        $contentlist = DB::table('contents')->where('parent_id',0)->get();

        return view('admin.content_edit',['data'=>$data ,'contentlist'=>$contentlist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content ,$id)
    {
        $data= Content::find($id);

            $data->parent_id= $request->input('parent_id');
            $data->title = $request->input('title');
            $data->keywords = $request->input('keywords');
            $data->description = $request->input('description');
            $data->status = $request->input('status');
            $data->type = $request->input('type');
            $data->image= Storage::putFile('images',$request->file('image'));
            $data->menu_id = $request->input('Menu_id');
            $data->menu_id = $request->input('user_id');
            $data->save();
            return redirect()->route('admin_content');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('contents')->where('id','=', $id)->delete();
        return redirect()->route('admin_content');
    }
}
