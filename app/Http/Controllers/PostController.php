<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {

    public function index() 
    {
        $news = Post::paginate(6);
        $view = ($this->isAdminRequest()) ? 'admin.news.index' : 'public.news.index';
        
        $data['title'] = 'Блог';
        return view($view, compact('news'))->with($data);
    }
    
    public function show($slug) 
    {
        $news = Post::where('slug', $slug)->first();
        $title = $news->title;
        return view('public.news.show', compact('news', 'title'));
    }
    
    public function create() 
    {
        return view('admin.news.create');
    }
    
    public function store(Request $request) 
    {
        $post = $request->all();
        
        $post['user_id'] = 1; //todo
        
        $news = new Post($post);
        
        $news->save();
        
        return redirect('/admin/news/'.$news->id.'/edit');
    }
    
    public function edit($id)
    {
        $news = Post::find($id);
        return view('admin.news.edit', compact('news'));
    }
    public function update($id)
    {
        $news = Post::find($id);
        $post = request()->all();
        $news->update($post);
        
        return redirect('/admin/news/');
    }
}