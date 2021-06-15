<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $views=DB::table("car")->get();
        return view('home',compact("views"));
    
    }
    public function adminHome()
    {
        return view('admin');
    }
    //public function addcar()
    //{
        //return view('admin');
    //}
    public function savedata(Request $request)

 {
       // DB::table('car')->insert([
            // 'brand'=>$request->brand,
            // 'price'=>$request->price,
             //'description'=>$request->description,
             //'mileage'=>$request->mileage,
             //'seats'=>$request->seats,
             //'image'=>$request->image,

           $data= new UserModel();
           $data->brand=$request->input('brand');
           $data->price=$request->input('price');
           $data->description=$request->input('description');
           $data->mileage=$request->input('mileage');
           $data->seats=$request->input('seats');

           if ($request->hasFile('image')) 
           {
               $file=$request->file('image');
               $extension=$file->getClientOriginalExtension();
               $filename=time().'.'.$extension;
               $file->move('uploads/images',$filename);
               $data->image=$filename;

           }
           else
           {
            return $request;
            $data->image='';
           }
           $data->save();
  
        return back()->with('show',"successfully Submitted");
    }
    public function showlist()
    {
        $posts=DB::table("car")->get();
        return view('show-list',compact("posts"));
    
    }
    public function deleteList($id)
    {
        DB::table('car')->where('id',$id)->delete();
              return redirect()->back();

    }
    public function bigImage($id)
    {
        //return view('home');
        $big=DB::table("car")->where('id',$id)->first();
        return view('big-image',compact('big'));

    
    }


  public function rating (Request $request) {
                return view('rating');

      }


}
