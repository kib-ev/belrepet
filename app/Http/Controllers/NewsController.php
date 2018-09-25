<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller {

    public function index() 
    {
        $news = News::paginate(6);
        $view = ($this->isAdminRequest()) ? 'admin.news.index' : 'public.news.index';
        
        $data['title'] = 'Новости';
        return view($view, compact('news'))->with($data);
    }
    
    public function show($slug) 
    {
        $post = News::where('slug', $slug)->first();
        $title = $post->title;
        $posts = \App\Post::orderBy('created_at')->limit(5)->get();
        
        return view('public.news.show', compact('post', 'title', 'posts'));
    }
    
    public function create() 
    {
        return view('admin.news.create');
    }
    
    public function store(Request $request) 
    {
        $post = $request->all();
        
        $post['user_id'] = 1; //todo
        
        $news = new News($post);
        
        $news->save();
        
        return redirect('/admin/news/'.$news->id.'/edit');
    }
    
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }
    public function update($id)
    {
        $news = News::find($id);
        $post = request()->all();
        $news->update($post);
        
        return redirect('/admin/news/');
    }
}
