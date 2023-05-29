<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Article;
use Illuminate\View\View;
class ArticleController extends Controller
{
    function index(){
        $articles = Article::all(); 
        // $articles = Article::with('commantaire')->get();
        // $Commantaires = $articles->commantaires;
        return view ('articles.index',compact('articles'));
    }
    function create(){
        return view('articles.create');
    }
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Article::create($input);

        return redirect('article')->with('flash_message', 'article Addedd!');
    }
    public function show(string $id): View
    {
        $articles = Article::find($id);
        $comments = $articles->comments;
    
        return view('articles.show', compact('articles', 'comments'));
  
    }
    public function edit(string $id): View
    {
        $articles = Article::find($id);
        return view('articles.edit')->with('articles', $articles);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $articles = Article::find($id);
        $input = $request->all();
        $articles->update($input);
        return redirect('article')->with('flash_message', 'article Updated!');  
    }
    public function destroy(string $id): RedirectResponse
    {
        Article::destroy($id);
        return redirect('article')->with('flash_message', 'article deleted!');
    }
};
