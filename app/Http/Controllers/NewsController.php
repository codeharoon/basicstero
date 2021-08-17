<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
class NewsController extends Controller
{
    public function showallnews(){
        $news=News::all();
        return view('frontend.news',compact('news'));
    }
    public function index(){
        $news=News::all();
        return view('backend.news.News-list',compact('news'));
        // dd($news);
    }
    public function create(){
        return view('backend.news.add-news');
    }

    public function storenews(Request $request){
        $news=new News();
        $news->title=$request->n_title;
        $news->date=$request->n_date;
        $news->user_id=Auth::user()->id;
        $news->content=$request->n_description;
        if($news->save()){
            return redirect()->route('allnews');
        }
    }
    public function editnews(Request $request,$id){
        $news=News::find($id);
        return view('backend.news.edit-news',compact('news'));
    }
    public function updatenews(Request $request,$id){
        // dd($id);
        $news=News::find($id);
        $news->title=$request->n_title;
        $news->date=$request->n_date;
        $news->content=$request->n_description;
        if($news->save()){
            return redirect()->route('allnews');
        }
    }
    public function deletenews(Request $request,$id){
        if(News::find($id)->delete()){
            return redirect()->route('allnews');
        }
    }
}
