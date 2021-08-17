<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Faq;
class AdminController extends Controller
{
   public function admin_form(){
      return view('backend.login');
   }
   public function dashboard(){
       return view('backend.dashboard');
   }
   public function adminLogin(UserLoginRequest $request){
      $credentials = $request->only('email','password');

      if (auth()->attempt($credentials))
      {
          return redirect()->route('adminDashboard');
      }else
      {
          return redirect()->back()->with('login-error','Invalid Email or Password! Try Again');
      }
  }
   // discount function 
   
    public function alldiscount(){
        $discounts=Discount::all();
        return view('backend.discount.list-view',compact('discounts'));
    }
    public function creatediscount(){
        return view('backend.discount.add-view');
    }

    public function storediscount(Request $request){
        $discount=new Discount();
        $discount->title=$request->n_title;
        $discount->content=$request->n_description;
        if($discount->save()){
            return redirect()->route('alldiscount');
        }
    }
    public function editdiscount(Request $request,$id){
        $news=Discount::find($id);
        return view('backend.discount.edit-view',compact('news'));
    }
    public function updatediscount(Request $request,$id){
        // dd($id);
        $discount=Discount::find($id);
        $discount->title=$request->n_title;
        $discount->content=$request->n_description;
        if($discount->save()){
            return redirect()->route('alldiscount');
        }
    }
    public function deletediscount(Request $request,$id){
        if(Discount::find($id)->delete()){
            return redirect()->route('alldiscount');
        }
    }

    // faq

   public function allfaq(){
      $faq=Faq::all();
      return view('backend.faq.list-view',compact('faq'));
   }
   public function createfaq(){
         return view('backend.faq.add-view');
   }

   public function storefaq(Request $request){
         $faq=new Faq();
         $faq->question=$request->n_title;
         $faq->answer=$request->n_description;
         if($faq->save()){
            return redirect()->route('allfaq');
         }
   }
   public function editfaq(Request $request,$id){
         $faq=Faq::find($id);
         return view('backend.faq.edit-view',compact('faq'));
   }
   public function updatefaq(Request $request,$id){
         // dd($id);
         $faq=Faq::find($id);
         $faq->question=$request->n_title;
         $faq->answer=$request->n_description;
         if($faq->save()){
            return redirect()->route('allfaq');
         }
   }
   public function deletefaq(Request $request,$id){
         if(Faq::find($id)->delete()){
            return redirect()->route('allfaq');
         }
   }
}
