<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Faq;
use App\Models\LabReport;
use App\Models\Product;
use App\Models\WareHouse;
class FrontendController extends Controller
{
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
        $products=Product::with('stock','classification')->where("type","=","oralsteroids")->get();
        $warehouse=WareHouse::all();
        return view('frontend.oralline',compact('products','warehouse'));
    }

    public function injectableline(){
        $products=Product::with('stock','classification')->where("type","=","injectableline")->get();
        $warehouse=WareHouse::all();
        return view('frontend.injectableline',compact('products','warehouse'));
    }

    public function hgh(){
        $products=Product::with('stock','classification')->where("type","=","hgh")->get();
        $warehouse=WareHouse::all();
        return view('frontend.hghandpeptides',compact('products','warehouse'));
    }
    public function purchase(){
        $products=Product::with('stock','classification')->get();
        $warehouse=WareHouse::all();
        return view('frontend.hghandpeptides',compact('products','warehouse'));
    }
   
}

