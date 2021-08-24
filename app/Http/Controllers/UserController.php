<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
class UserController extends Controller
{
   public function login(Request $request){
    $credentials = $request->only('email','password');
    // dd($credentials);
    if (auth()->attempt($credentials))
    {
        return redirect()->route('profile');
    }else
    {
        return redirect()->back()->with('login-error','Invalid Email or Password! Try Again');
    }
    // dd($request->all());
    //  $user=User::where('username','=',$request->username)->get()->first();
    //  dd($user);
    // if($user!= null){
        // $crediential=["email"=>$user->email,"password"=>$request->password];
        // if (auth()->attempt($crediential))
        // {
            // dd("login");
        // }
        // else{
        //     return redirect()->route('login');
        // }
    // }
    // else{
    //     return redirect()->route('login');
    // }
   }
   public function register(Request $request){
    //    dd($request->all());
        $user = new User([
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
        ]);
        
        $user->save();
        return redirect()->route('login');
   }

   public function logout(){
    auth()->logout();
    return redirect()->route('home');
  }

  public function storepassword(Request $request){
    // return dd($request->all());
      $user=User::find(Auth::user()->id);
      $user->password=Hash::make($request->input('password'));
      if($user->save()){
          return redirect()->route('cart');
      }
  }

  public function get_profile(){
    $user=User::find(Auth::user()->id);
    return view('Userview.profile',compact('user'));
  }

  public function updateprofile(Request $request){
    $user=User::find(Auth::user()->id);
    $user->full_name=$request->fullname;
    $user->addressline1=$request->address1;
    $user->addressline2=$request->address2;
    $user->city=$request->city;
    $user->state=$request->state;
    $user->zipcode=$request->zipcode;
    $user->country=$request->country;
    if($user->save()){
        return redirect()->route('profile');
    }
  }
  public function viewcart(Request $request){
    $data=$request->session()->get('cart_items');
    $ware=$request->session()->get('ware_house');
    $product=[];
    foreach ($data as $key => $value) {
       $product[]=Product::where('id','=',$key)->get();  
    }
   // dd($product);
    return view('Userview.cart',compact('product','data'));
  }

  public function get_promo(){
    $user=User::find(Auth::user()->id);
    return view('Userview.promo',compact('user'));
  }

  public function promo(){
    return redirect()->route('ordercomment');
    $user=User::find(Auth::user()->id);
    $user->full_name=$request->fullname;
    $user->addressline1=$request->address1;
    $user->addressline2=$request->address2;
    $user->city=$request->city;
    $user->state=$request->state;
    $user->zipcode=$request->zipcode;
    $user->country=$request->country;
    if($user->save()){
        return redirect()->route('profile');
    }
  }

  public function ordercomment(){
    return view('Userview.ordercomment');
  }

  public function displayallorder(){
    $orders=Order::with('user')->where('user_id','=',Auth::user()->id)->get();
    return view('Userview.orders',compact('orders'));
  }

  public function orderdetail($ordernumber){
    $order=Order::with('user','products')->where('order_number','=',$ordernumber)->where('user_id','=',Auth::user()->id)->first();
    return view('UserView.orderdetail',compact('order','ordernumber'));
  }


  public function deleteorder($ordernumber){
    $order=Order::with('user','products')->where('order_number','=',$ordernumber)->where('user_id','=',Auth::user()->id)->first(); 
    if($order->delete()){
      return redirect()->route('order');
    }
  }
}
