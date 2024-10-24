<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Snippet;

class SnippetDashboardController extends Controller
{
    //
    public function index(Request $request){
        $user = auth()->user();
        $filter = $request->query('filter', 'all');
    

        $snippetsQuery = $user->snippets();

        if ($filter == 'favorite') {
            
            $snippetsQuery->where($filter, 1);
        }

        $snippets = $snippetsQuery->get();

        return view('dashboard', compact('snippets', 'filter'));
    }

    public function snippetStore(Request $request){
       $snippetdata = $request->all();
         $snippet=new Snippet();
            $snippet->title=$snippetdata['title'];
            $snippet->description=$snippetdata['description'];
            $snippet->language=$snippetdata['language'];
            $snippet->code=$snippetdata['code'];
            $snippet->user_id=auth()->user()->id;
            $snippet->save();
            return redirect()->route('account.snippet-dashboard');
        
    }

    public function snippetDelete($id){
        $snippet=Snippet::find($id);
        $snippet->delete();
        return redirect()->route('account.snippet-dashboard');
    }

    public function snippetFavorite($id){
        $snippet=Snippet::find($id);
        $snippet->favorite=!$snippet->favorite;
        $snippet->save();
        return redirect()->route('account.snippet-dashboard');
    }
}
