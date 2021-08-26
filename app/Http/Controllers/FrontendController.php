<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Faq;
use App\Models\LabReport;
use App\Models\Product;
use App\Models\WareHouse;
use App\Models\Category;
use Mail;
class FrontendController extends Controller
{
    public function sendmail(){
       $data=["name"=>"vishal","data"=>"This is data"];
       $user["to"]="harooniqbal585@gmail.com";
       Mail::send('mail',$data,function($message) use ($user){
           $message->to($user["to"]);
           $message->subject("Hello dev");

       });
    }  
    public function index(){
        $products=Product::with('stock','classification')->offset(0)->limit(3)->get();
        return view('welcome',compact('products'));
    }
    public function singleproduct($id){
        $product=Product::with('stock','classification')
                            ->where('id','=',$id)->first();
        $recommended_product=Product::with('stock','classification')
                                     ->where('classification_id','=',$product->classification_id)
                                     ->limit(7)->get();
        return view('frontend.singleproduct',compact('product','recommended_product'));
    }

    public function showalldiscount(){
        $discount=Discount::all();
        return view('frontend.discount',compact('discount'));
    }
    public function showallfaq(){
        $faqs=Faq::all();
        return view('frontend.FAQ',compact('faqs'));
    }
    public function showallreport(){
        $lab_report=LabReport::all();
        return view('frontend.labreports',compact('lab_report'));
    }
    public function searchreport(){
         
    }
    public function addcontact(Request $request){
            
    }

    public function Oralline(){
        $category=Category::where("type",'like',"%oralsteroids%")->get();
        $products=Product::with('stock','classification')->where("type","=","oralsteroids")->get();
        $warehouse=WareHouse::all();
        $id=0;
        return view('frontend.oralline',compact('products','warehouse','category','id'));
    }

    public function injectableline(){
        $category=Category::where("type",'like',"%injectableline%")->get();
        $products=Product::with('stock','classification')->where("type","=","injectableline")->get();
        $warehouse=WareHouse::all();
        $id=0;
        return view('frontend.injectableline',compact('products','warehouse','category','id'));
    }

    public function hgh(){
        $category=Category::where("type",'like',"%hgh%")->get();
        $products=Product::with('stock','classification')->where("type","=","hgh")->get();
        $warehouse=WareHouse::all();
        $id=0;
        return view('frontend.hghandpeptides',compact('products','warehouse','category','id'));
    }
    public function purchase(){
        $category=Category::all();
        $products=Product::with('stock','classification')->get();
        $warehouse=WareHouse::all();
        return view('frontend.purchase',compact('products','warehouse','category'));
    }

    public function quickcode(){
        return view('frontend.quickcode');
    }

    public function addtocart(Request $request){
        // $request->session()->forget('cart_items');
        if ($request->session()->has('cart_items')) {
            $warehouse=$request->session()->get('ware_house')["warehouse"];
            if($warehouse!=$request->warehouse){
                return response()->json(['error'=>'error','message'=>"You can not order products from Warehouse {$request->warehouse} because you already have products from Warehouse {$warehouse} in your cart"]);
            }
            $item=$request->session()->get('cart_items');
            if(array_key_exists($request->product_id,$item)){
                $item[$request->product_id]=$item[$request->product_id]+$request->quantity;
                $request->session()->put('cart_items', $item);
            }  
            else{
                $item[$request->product_id]=$request->quantity;
                // return response()->json(['success'=>'Ajax request submitted successfully','quantity'=>$item,'sessiondata'=>$request->session()->get('cart_items')]); 
                $request->session()->put('cart_items', $item);
            }
        }
        else{
            $request->session()->put('ware_house', ["warehouse"=>$request->warehouse]);
            $request->session()->put('cart_items', [$request->product_id=>$request->quantity]);
        }
        $quantity=0;
        foreach ($request->session()->get('cart_items') as $key => $item) {
            $quantity=$quantity+$item;
        }
        $data = $request->all();        
        return response()->json(['success'=>'Ajax request submitted successfully','quantity'=>$quantity,'sessiondata'=>$request->session()->get('cart_items')]); 
    }

    public function totalcart(){
        dd($request->session()->get('cart_items'));
        $quantity=0;
        foreach ($request->session()->get('cart_items') as $key => $item) {
            $quantity=$quantity+$item;
        }
        return response()->json(['success'=>'Ajax request submitted successfully','quantity'=>$quantity]); 
    }
 
    public function get_code_project(Request $request){
        // dd($request->all());
        $product=Product::with('stock','classification')
                          ->where('quick_code','=',$request->Product_code)->first();
        $recommended_product=Product::with('stock','classification')
                        ->where('classification_id','=',$product->classification_id)
                        ->limit(7)->get();
        return view('frontend.singleproduct',compact('product','recommended_product'));
    }

   public function hghSearch($categoryname){
    $search_category=Category::where("name",'like','%'.$categoryname."%")->first();
    $id=$search_category->id;
    $products=Product::where('type_classfication_id','=',$search_category->id)->get();
    $category=Category::where("type",'like',"%hgh%")->get();
    $warehouse=WareHouse::all();
    return view('frontend.hghandpeptides',compact('products','warehouse','category','id'));
   }

   public function oralsteroidsSearch($categoryname){
    $search_category=Category::where("name",'like','%'.$categoryname."%")->first();
    $id=$search_category->id;
    $products=Product::where('type_classfication_id','=',$search_category->id)->get();
    $category=Category::where("type",'like',"%oralsteroids%")->get();
    $warehouse=WareHouse::all();
    return view('frontend.oralline',compact('products','warehouse','category','id'));
   }

   public function injectablelineSearch($categoryname){
    $search_category=Category::where("name",'like','%'.$categoryname."%")->first();
    $id=$search_category->id;
    $products=Product::where('type_classfication_id','=',$search_category->id)->get();
    $category=Category::where("type",'like',"%injectableline%")->get();
    $warehouse=WareHouse::all();
    return view('frontend.injectableline',compact('products','warehouse','category','id'));
   }

   public function purchaseSearch($categoryname){
    $search_category=Category::where("name",'like','%'.$categoryname."%")->first();
    $id=$search_category->id;
    $products=Product::where('type_classfication_id','=',$search_category->id)->get();
    $category=Category::where("type",'like',"%hgh%")->get();
    $warehouse=WareHouse::all();
    return view('frontend.hghandpeptides',compact('products','warehouse','category','id'));
   }

}

