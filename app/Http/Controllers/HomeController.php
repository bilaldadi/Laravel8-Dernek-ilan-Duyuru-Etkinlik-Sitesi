<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public static function menulist(){
        return Menu::where('parent_id','=',0)->with('children')->get();
    }


    public function index(){

       $setting= Setting::first();
       $daily = Content::select('id','type','title','description','keywords','image')->limit(5)->get();




       return view('home.index',['setting'=>$setting,'daily'=>$daily]);

    }



    public function faq(){

        $datalist= Faq::all();
        return view('home.faq',['datalist'=>$datalist]);
    }



    public function aboutus(){

        $setting= Setting::first();
        return view('home.about',['setting'=>$setting]);

    }



    public function contact(){

        $setting= Setting::first();
        return view('home.contact',['setting'=>$setting]);

    }

    public function menucontents($id,$description){

       $datalist=Content::where('menu_id',$id)->get();
       $data= Menu::find($id);
        return view('home.menu_contents',['data'=>$data,'datalist'=>$datalist]);

    }

    public function content($id,$title){


        $data= Content::find($id);
        $datalist=Image::where('content_id',$id)->get();
        return view('home.content_detail',['data'=>$data,'datalist'=>$datalist]);

    }

    public function sendmessage(Request $request){

        $data= new Message();

        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');

        $data->save();
       return redirect()->route('contact')->with('Success','Thank you for contacting us');

    }

 public function login(){

       return view('admin.login');

    }


     public function logincheck(Request $request)
    {
        if($request->isMethod('post')){
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    else{
        return view('admin.login');
    }
  }


  public function logout(Request $request){

       Auth::logout();

       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return redirect('/');


  }

}
