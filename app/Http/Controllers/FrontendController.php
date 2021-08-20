<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Faq;
use App\Models\LabReport;
use App\Models\Product;
class FrontendController extends Controller
{
    public function index(){
        $products=Product::with('stock','classification')->offset(0)->limit(3)->get();
        return view('welcome',compact('products'));
    }
    public function singleproduct($id){
        $product=Product::with('stock','classification')->where('id','=',$id)->first();
        // dd($product);
        return view('frontend.singleproduct',compact('product'));
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

   
}

