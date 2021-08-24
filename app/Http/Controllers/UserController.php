<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderProduct;
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
    if($request->session()->has('cart_items')){
      $data=$request->session()->get('cart_items');
      if(sizeof($data)>0){
        $ware=$request->session()->get('ware_house')["warehouse"];
        $product=[];
        foreach ($data as $key => $value) {
           $product[]=Product::where('id','=',$key)->get();  
        }
       // dd($product);
        return view('Userview.cart',compact('product','data','ware'));
      }
      else{
        return view('Userview.emptycart');
      }
    }
    else{
      return view('Userview.emptycart');
    }
   
    
   
  }

  public function get_promo(){
    $user=User::find(Auth::user()->id);
    return view('Userview.promo',compact('user'));
  }

  public function submitpromo(Request $request){
    $user=User::find(Auth::user()->id);
    $user->full_name=$request->fullname;
    $user->addressline1=$request->address1;
    $user->addressline2=$request->address2;
    $user->city=$request->city;
    $user->state=$request->state;
    $user->zipcode=$request->zipcode;
    $user->country=$request->country;
    if($user->save()){
        return redirect()->route('ordercomment');
    }
  }

  public function ordercomment(){
    return view('Userview.ordercomment');
  }

  public function submitorder(Request $request){
        // dd($request->all());
        $total_price=0;
        $product_total=0;
        $data=$request->session()->get('cart_items');
    
        $ware=$request->session()->get('ware_house')["warehouse"];
        $product=[];
        foreach ($data as $key => $value) {
            $nproduct=Product::where('id','=',$key)->first();  
            $product[]=[
              "title"=>$nproduct->title,
              "quantity"=>$value,
              "price"=>$nproduct->stock[$ware-1]->price*$value,
            ];
            $product_total=$product_total+$nproduct->stock[$ware-1]->price*$value;
            
        }
        $order=[
          "order_number"=>"E6C2EGMX",
          "status"=>"waiting for payment",
          "user_id"=>Auth::user()->id,
          "walletaddress"=>"1EpCtvY7gnV7e9NmeJ3XYZAuvQcU7LqnNE",
          "comment"=>$request->comment,
          "producttotal"=>$product_total,
          "discount"=>5.00,
          "delivery"=>43.00,
          "currentbalance"=>0.00,
          "ordertotal"=>$product_total+43.00,
          "bitcoin"=>0.005103830,
          "amountleft"=>$product_total+43.00,
          "currency"=>"USD",
        ];
        $order=Order::create($order);
        // dd($order->id);
        if($order){
          foreach ($product as $key => $value) {
            $orderproduct=new OrderProduct();
            $orderproduct->order_id=$order->id;
            $orderproduct->title=$value["title"];
            $orderproduct->quantity=$value["quantity"];
            $orderproduct->price=$value["price"];
            $orderproduct->save();
            
          }
        }
        $request->session()->forget('cart_items');
        $request->session()->forget('ware_house');
        return redirect()->route('cart');
        // return view('Userview.cart',compact('product','data','ware'));
  

     
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
