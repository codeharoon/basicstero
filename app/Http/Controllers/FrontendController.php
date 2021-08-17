<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Faq;
class FrontendController extends Controller
{
    public function showalldiscount(){
        $discount=Discount::all();
        return view('frontend.discount',compact('discount'));
    }
    public function showallfaq(){
        $faqs=Faq::all();
        return view('frontend.FAQ',compact('faqs'));
    }
}
