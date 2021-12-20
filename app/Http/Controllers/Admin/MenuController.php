<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    protected $appends=[
        'getParentsTree'
    ];

public static function getParentsTree($menu,$title){

    if ($menu->parent_id==0){
        return $title;
    }
    $parent= Menu::find($menu->parent_id);
    $title= $parent->title.'>'.$title;

    return MenuController::getParentsTree($parent,$title);

}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $menulist = Menu::with('children')->get();
        return view('admin.menu', ['menulist' => $menulist]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('menus')->insert([
            'title' => $request->input('title'),
            'parent_id' => $request->input('parent_id'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'image' => $request->input('image')

        ]);

        return redirect()->route('admin_menu');
    }





    public function add()
    {
        $menulist = Menu::with('children')->get();

        return view('admin.menu_add', ['menulist' =>$menulist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Menu;

        $data->parent_id= $request->input('parent_id');
        $data->title= $request->input('title');
        $data->keywords= $request->input('keywords');
        $data->description= $request->input('description');
        $data->image= Storage::putFile('images',$request->file('image'));
        $data->status= $request->input('status');

        $data->save();
        return redirect()->route('admin_menu');
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
        $data = Menu::find($id);
        $menulist = Menu::with('children')->get();

        return view('admin.menu_edit',['data'=>$data ,'menulist'=>$menulist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Menu $menu )
    {
        $data= Menu::find($id);

        $data->parent_id= $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        if ($request->file('image')!=null){
            $data->image= Storage::putFile('images',$request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('menus')->where('id','=', $id)->delete();
        return redirect()->route('admin_menu');
    }
}
