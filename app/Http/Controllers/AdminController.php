<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
use App\Models\Faq;
use App\Models\LabReport;
use App\Models\LabReportCategory;
use App\Models\Product;
use App\Models\ProductStock;
use App\Models\WareHouse;
use App\Models\Classification;
use App\Models\Role;
class AdminController extends Controller
{
   public function admin_form(){
      return view('backend.login');
   }
   public function dashboard(){
       return view('backend.dashboard');
   }
   public function adminLogin(Request $request){
      return redirect()->route('dashboard');
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

   // lab report


    public function allreport(){
        $labreports=LabReport::all();
        return view('backend.labreport.allreport',compact('labreports'));
    }
    public function createreport(){
        $reportcategories=LabReportCategory::all();
        return view('backend.labreport.createreport',compact('reportcategories'));
    }

    public function storelabreport(Request $request){
        // dd($request->all());
        $image_file = $request->file('images')[0];
        $report_image = strtotime(now()).rand(11111,99999).'.'.$image_file->getClientOriginalExtension();
        $image_file->move(public_path() . '/assets/backend/report/image', $report_image);

        $report_input_file = $request->file('lab_report');
        $report_file = strtotime(now()).rand(11111,99999).'.'.$report_input_file->getClientOriginalExtension();
        $report_input_file->move(public_path() . '/assets/backend/report/file', $report_file);
        // dd($request->all());
        $labreport=new LabReport();
        $labreport->title=$request->title;
        $labreport->type=$request->type;
        $labreport->labreportcategory_id=$request->category;
        $labreport->thumbnail=$report_image;
        $labreport->file=$report_file;
        if($labreport->save()){
            return redirect()->route('allreport');
        }
    }
    public function editreport(Request $request,$id){
        $labreport=LabReport::find($id);
        return view('backend.labreport.editreport',compact('faq'));
    }
    public function updatereport(Request $request,$id){
        // dd($id);
        $labreport=LabReport::find($id);
        $labreport->question=$request->n_title;
        $labreport->answer=$request->n_description;
        if($labreport->save()){
            return redirect()->route('allreport');
        }
    }
    public function deletereport(Request $request,$id){
        if(LabReport::find($id)->delete()){
            return redirect()->route('allreport');
        }
    }


//    product function
    public function allproducts(){
        $products=Product::with('stock')->get();
        return view('backend.products.list-view',compact('products'));
    }
    public function createproduct(){
        $warehouses=WareHouse::all();
        $classification=Classification::all();
        return view('backend.products.add-view',compact('warehouses','classification'));
    }

    public function storeproduct(Request $request){
        // dd($request->all());
        $image_file = $request->file('images')[0];
        $report_image = strtotime(now()).rand(11111,99999).'.'.$image_file->getClientOriginalExtension();
        $image_file->move(public_path() . '/assets/backend/product/image', $report_image);

        $product=[
            "title"=>$request->n_title,
            "weight"=>$request->n_weight,
            "type"=>$request->type,
            "type_classfication_id"=>$request->type_category,
            "activity"=>$request->n_activity,
            "delay_water"=>$request->delay_water,
            "classification_id"=>$request->classification,
            "hbr"=>$request->hbr,
            "Dosage"=>$request->dosage,
            "Hepatoxity"=>$request->hepoToxity,
            "acne"=>$request->acne,
            "short_description"=>$request->n_shortdescription,
            "aromatization"=>$request->aromatization,
            "description"=>$request->n_description,
            "image"=>$report_image,
        ];
        $product=Product::create($product);
        if($product){
            foreach ($request->stock as $key => $item) {
                $stock=new ProductStock();
                $stock->whouse="w1";
                $stock->product_id=$product->id;
                $stock->price=$request->price[$key];
                $stock->stock=$item;
                $stock->save();
            }
        }
        // dd($request->all());
        if($product->save()){
            return redirect()->route('allproducts');
        }
    }
    public function editproduct(Request $request,$id){
        $labreport=LabReport::find($id);
        return view('backend.labreport.editreport',compact('faq'));
    }
    public function updateproduct(Request $request,$id){
        // dd($id);
        $labreport=LabReport::find($id);
        $labreport->question=$request->n_title;
        $labreport->answer=$request->n_description;
        if($labreport->save()){
            return redirect()->route('allreport');
        }
    }
    public function deleteproduct(Request $request,$id){
        if(LabReport::find($id)->delete()){
            return redirect()->route('allreport');
        }
    }

    /// ware house function


    public function allwarehouse(){
        $warehouse=WareHouse::all();
        return view('backend.warehouse.list-view',compact('warehouse'));
    }
    public function createwarehouse(){

        return view('backend.warehouse.add-view');
    }

    public function storewarehouse(Request $request){
      $wareHouse=new WareHouse();
      $wareHouse->whouse=$request->n_title;
      $wareHouse->discription=$request->n_description;
      if($wareHouse->save()){
          return redirect()->route('allwarehouse');
      }
    }
    public function editwarehouse(Request $request,$id){
        $warehouse=WareHouse::find($id);
        return view('backend.warehouse.edit-view',compact('warehouse'));
    }
    public function updatewarehouse(Request $request,$id){
        // dd($id);
        $wareHouse=WareHouse::find($id);
        $wareHouse->whouse=$request->n_title;
        $wareHouse->discription=$request->n_description;
        if($wareHouse->save()){
            return redirect()->route('allwarehouse');
        }
    }
    public function deletewarehouse(Request $request,$id){
        if(WareHouse::find($id)->delete()){
            return redirect()->route('allwarehouse');
        }
    }

    // product classificatio


    public function allclassification(){
        $classification=Classification::all();
        return view('backend.classification.list-view',compact('classification'));
    }
    public function createclassification(){

        return view('backend.classification.add-view');
    }

    public function storeclassification(Request $request){
      $classification=new Classification();
      $classification->name=$request->n_title;
      if($classification->save()){
          return redirect()->route('allclassification');
      }
    }
    public function editclassification(Request $request,$id){
        $classification=Classification::find($id);
        return view('backend.classification.edit-view',compact('classification'));
    }
    public function updateclassification(Request $request,$id){
        // dd($id);
        $classification=Classification::find($id);
        $classification->name=$request->n_title;
        if($classification->save()){
            return redirect()->route('allclassification');
        }
    }
    public function deleteclassification(Request $request,$id){
        if(Classification::find($id)->delete()){
            return redirect()->route('allclassification');
        }
    }
    public function viewRole(){
       $role =  Role::all();
        return view('backend.Role.view-role',compact('role'));

    }
    public function addRole(){
        return view('backend.Role.add-role');

    }
    public function saveRole(Request $request){

        $role = new Role();
        $role->name = $request->n_title;
        $role->save();
        return redirect()->route('role');



    }
    public function editRole(Request $request,$id){
        $role = Role::find($id);
        return view('backend.role.edit-role',compact('role'));

    }
    public function updateRole(Request $request,$id){
       // dd($id);
        $role = Role::find($id);
        $role->name = $request->n_title;
        $role->save();
        return redirect()->route('role');

    }
    public function deleteRole($id){
        if(Role::find($id)->delete()){
            return redirect()->route('role');
        }
    }


}
