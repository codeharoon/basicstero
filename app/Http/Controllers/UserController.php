<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
        dd("profile update");
    }
  }
}
