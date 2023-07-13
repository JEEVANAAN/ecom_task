<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\Cash;
use App\Models\Category;
use App\Models\Color;
use App\Models\CustomerRegistration;
use App\Models\Money;
use App\Models\ProductDetails;
use App\Models\SightDetail;
use App\Models\Size;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Colors;

class login extends Controller
{
    public function insert_data(Request $request){
     //  dd($request);
        $obj=new User();
        $obj->name =$request->input('name');
        $obj->email =$request->input('email');
        $obj->password =$request->input('password');
        $obj->save();
        return redirect('/')->with('message','your record insert sucessfully login');
    }
    public function customer_registration(Request $request){
       //   dd($request);
           $obj=new CustomerRegistration();
           
        //    $obj->name =$request->input('name');
        //    $obj->email =$request->input('email');
        //    $obj->password =$request->input('password');
           $obj->name =$request->input('name');
           $obj->email =$request->input('email');
           $obj->password =$request->input('password');
           $obj->save();
        return redirect('/');
       }

       public function colors(){
        //  dd($request);
           $color=new Color();

           $color->color_name ="red";
           $color->save();
           return "your record insert sucessfully";
       }

       public function size(){
        //  dd($request);
           $color=new Size();
           $color->size_number =42;
           $color->save();
           return "your record insert sucessfully";
       }

       public function money(){
        //  dd($request);
           $color=new Money();

           $color->Money =2500;
           $color->save();
           return "your record insert sucessfully";
       }

       public function sight(){
        //  dd($request);
           $color=new SightDetail();
           $color->logo ="jeeva.png";
           $color->title ="First project";
           $color->save();
           return "your record insert sucessfully";
       }

       public function category(){
        //  dd($request);
           $color=new Category();
           $color->product_category ="child";
           $color->save();
           return "your record insert sucessfully";
       }
       public function card(){
        //  dd($request);
           $color=new card();
           $color->customer_registrations_id = 1;
           $color->product_details_id = 1;
           $color->save();
           return "your record insert sucessfully";
       }
       public function product(){
        //  dd($request);
           $color=new ProductDetails();
           $color->image ="T-shirt.png";
           $color->colors_id = 1;
           $color->sizes_id = 1;
           $color->money_id = 1;
           $color->categories_id = 1;
           $color->save();
           return "your record insert sucessfully";
       }
       public function lux(){
        
        //  dd($request);
        $datas = ProductDetails::with('product_sizes','product_colors','product_money','product_categories')->get();
        return $datas;
        // $users = ProductDetails::select('id', 'image')->get();
        // echo $users;
       }  
       public function cash($product,$size,$color){
         $cash =Cash::
         where('categories_id','=',$product)->
         where('colors_id','=',$color)->
         where('sizes_id','=',$size)->get();
         return response()->json($cash);
       }

      //  public function list($id){
      //    $cashes = DB::table('types')
      //       ->where('id', $id)
      //       ->get();
      //       return response()->json($cashes);
      // }
      public function list($id){
         // dd($id);
         return view('alpin',compact('id'));
      }
      
}

